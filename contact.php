<?php
// contact.php - PHP Backend for Contact Form (Save as contact.php)
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name'] ?? '');
    $email = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars($_POST['message'] ?? '');
    
    // Email configuration
    $to = 'avni1610jgupta@gmail.com';
    $subject = 'New Portfolio Contact Form Submission';
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    
    $emailBody = "
    <html>
    <body>
        <h2>New Message from Portfolio</h2>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Message:</strong></p>
        <p>$message</p>
        <hr>
        <p><em>This email was sent from your portfolio website.</em></p>
    </body>
    </html>
    ";
    
    // Save to file (backup)
    $logEntry = date('Y-m-d H:i:s') . " - $name ($email): $message\n";
    file_put_contents('contact_logs.txt', $logEntry, FILE_APPEND | LOCK_EX);
    
    // Send email
    if (mail($to, $subject, $emailBody, $headers)) {
        echo json_encode(['success' => true, 'message' => 'Message sent successfully!']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to send message. Please try again.']);
    }
} else {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
}
?>