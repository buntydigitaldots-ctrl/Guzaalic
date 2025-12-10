<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name'] ?? '');
    $email = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars($_POST['phone'] ?? '');
    $subject = htmlspecialchars($_POST['subject'] ?? '');
    $message = htmlspecialchars($_POST['message'] ?? '');
    
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        header('Location: ../public/contact.php?status=error&message=Please fill all required fields');
        exit;
    }
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('Location: ../public/contact.php?status=error&message=Invalid email address');
        exit;
    }
    
    $contact = [
        'id' => uniqid('MSG_'),
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'subject' => $subject,
        'message' => $message,
        'created_at' => date('Y-m-d H:i:s')
    ];
    
    $contactsFile = __DIR__ . '/contacts.json';
    $contacts = [];
    
    if (file_exists($contactsFile)) {
        $contacts = json_decode(file_get_contents($contactsFile), true) ?: [];
    }
    
    $contacts[] = $contact;
    file_put_contents($contactsFile, json_encode($contacts, JSON_PRETTY_PRINT));
    
    header('Location: ../public/contact.php?status=success');
    exit;
} else {
    header('Location: ../public/contact.php');
    exit;
}
