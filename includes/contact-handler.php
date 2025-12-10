<?php
// Email configuration
$email_to = "admin@guzalic.com";
$sender_name = "GUZALIC Salon";

// Handle contact form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name'] ?? '');
    $email = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars($_POST['phone'] ?? '');
    $subject = htmlspecialchars($_POST['subject'] ?? 'General Inquiry');
    $message = htmlspecialchars($_POST['message'] ?? '');
    
    // Validation
    if (empty($name) || empty($email) || empty($phone) || empty($message)) {
        $_SESSION['error'] = "Please fill all required fields";
        header('Location: ../public/contact.php');
        exit;
    }
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = "Invalid email address";
        header('Location: ../public/contact.php');
        exit;
    }
    
    // Create query record
    $query = [
        'id' => uniqid('QUERY_'),
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'subject' => $subject,
        'message' => $message,
        'status' => 'new',
        'created_at' => date('Y-m-d H:i:s')
    ];
    
    // Save to JSON file
    $queriesFile = __DIR__ . '/queries.json';
    $queries = [];
    
    if (file_exists($queriesFile)) {
        $queries = json_decode(file_get_contents($queriesFile), true) ?: [];
    }
    
    $queries[] = $query;
    file_put_contents($queriesFile, json_encode($queries, JSON_PRETTY_PRINT));
    
    // Send email notification
    $to = $email_to;
    $subject_email = "New Query from " . $name . " - GUZALIC Salon";
    
    $message_body = "
    <html>
    <head>
        <style>
            body { font-family: Arial, sans-serif; color: #333; }
            .container { background: #f5f5f5; padding: 20px; border-radius: 5px; }
            .header { color: #d4af37; font-size: 24px; font-weight: bold; }
            .content { background: white; padding: 20px; margin-top: 10px; border-radius: 5px; }
            .field { margin: 10px 0; }
            .label { color: #d4af37; font-weight: bold; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>New Query from GUZALIC Website</div>
            <div class='content'>
                <div class='field'>
                    <span class='label'>Name:</span> " . $name . "
                </div>
                <div class='field'>
                    <span class='label'>Email:</span> " . $email . "
                </div>
                <div class='field'>
                    <span class='label'>Phone:</span> " . $phone . "
                </div>
                <div class='field'>
                    <span class='label'>Subject:</span> " . $subject . "
                </div>
                <div class='field'>
                    <span class='label'>Message:</span><br>" . nl2br($message) . "
                </div>
                <div class='field'>
                    <span class='label'>Query ID:</span> " . $query['id'] . "
                </div>
            </div>
        </div>
    </body>
    </html>
    ";
    
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
    $headers .= "From: " . $email_to . "\r\n";
    
    mail($to, $subject_email, $message_body, $headers);
    
    // Send confirmation email to user
    $user_subject = "We Received Your Message - GUZALIC Salon";
    $user_message = "
    <html>
    <head>
        <style>
            body { font-family: Arial, sans-serif; color: #333; }
            .container { background: #f5f5f5; padding: 20px; border-radius: 5px; }
            .header { color: #d4af37; font-size: 24px; font-weight: bold; }
            .content { background: white; padding: 20px; margin-top: 10px; border-radius: 5px; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>Thank You for Contacting GUZALIC!</div>
            <div class='content'>
                <p>Dear " . $name . ",</p>
                <p>Thank you for reaching out to us. We have received your message and will get back to you within 24 hours.</p>
                <p>Your Query ID: <strong>" . $query['id'] . "</strong></p>
                <p>Best regards,<br>GUZALIC Salon Team</p>
            </div>
        </div>
    </body>
    </html>
    ";
    
    mail($email, $user_subject, $user_message, $headers);
    
    $_SESSION['success'] = "Thank you! Your message has been sent successfully.";
    header('Location: ../public/contact.php');
    exit;
}
