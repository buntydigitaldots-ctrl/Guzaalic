<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name'] ?? '');
    $email = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars($_POST['phone'] ?? '');
    $serviceCategory = htmlspecialchars($_POST['service_category'] ?? '');
    $service = htmlspecialchars($_POST['service'] ?? '');
    $date = htmlspecialchars($_POST['date'] ?? '');
    $time = htmlspecialchars($_POST['time'] ?? '');
    $notes = htmlspecialchars($_POST['notes'] ?? '');
    
    if (empty($name) || empty($email) || empty($phone) || empty($serviceCategory) || empty($service) || empty($date) || empty($time)) {
        header('Location: ../public/booking.php?status=error&message=Please fill all required fields');
        exit;
    }
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('Location: ../public/booking.php?status=error&message=Invalid email address');
        exit;
    }
    
    $booking = [
        'id' => uniqid('GUZALIC_'),
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'service_category' => $serviceCategory,
        'service' => $service,
        'date' => $date,
        'time' => $time,
        'notes' => $notes,
        'status' => 'pending',
        'created_at' => date('Y-m-d H:i:s')
    ];
    
    $bookingsFile = __DIR__ . '/bookings.json';
    $bookings = [];
    
    if (file_exists($bookingsFile)) {
        $bookings = json_decode(file_get_contents($bookingsFile), true) ?: [];
    }
    
    $bookings[] = $booking;
    file_put_contents($bookingsFile, json_encode($bookings, JSON_PRETTY_PRINT));
    
    header('Location: ../public/booking.php?status=success&booking_id=' . $booking['id']);
    exit;
} else {
    header('Location: ../public/booking.php');
    exit;
}
