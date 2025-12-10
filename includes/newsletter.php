<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
    
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('Location: ' . $_SERVER['HTTP_REFERER'] . '?newsletter=error');
        exit;
    }
    
    $subscriber = [
        'email' => $email,
        'subscribed_at' => date('Y-m-d H:i:s')
    ];
    
    $subscribersFile = __DIR__ . '/subscribers.json';
    $subscribers = [];
    
    if (file_exists($subscribersFile)) {
        $subscribers = json_decode(file_get_contents($subscribersFile), true) ?: [];
    }
    
    foreach ($subscribers as $sub) {
        if ($sub['email'] === $email) {
            header('Location: ' . $_SERVER['HTTP_REFERER'] . '?newsletter=exists');
            exit;
        }
    }
    
    $subscribers[] = $subscriber;
    file_put_contents($subscribersFile, json_encode($subscribers, JSON_PRETTY_PRINT));
    
    header('Location: ' . $_SERVER['HTTP_REFERER'] . '?newsletter=success');
    exit;
} else {
    header('Location: ../public/index.php');
    exit;
}
