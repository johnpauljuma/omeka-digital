<?php
/**
 * Contact form handler for contact.php — sends via SMTP using PHPMailer.
 */

$redirectBase = 'contact.php';

function redirect_with_status(string $status): void {
    global $redirectBase;
    header('Location: ' . $redirectBase . '?status=' . urlencode($status));
    exit;
}

// ---- Only accept POST requests --------------------------------------------
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    redirect_with_status('error');
}

// ---- Honeypot spam check ---------------------------------------------------
if (!empty($_POST['website'])) {
    redirect_with_status('success'); // pretend success so bots learn nothing
}

// ---- Collect + validate input ----------------------------------------------
$name    = trim($_POST['name'] ?? '');
$email   = trim($_POST['email'] ?? '');
$subject = trim($_POST['subject'] ?? '');
$message = trim($_POST['message'] ?? '');

$errors = [];
if ($name === '' || mb_strlen($name) > 100)        $errors[] = 'Invalid name.';
if (!filter_var($email, FILTER_VALIDATE_EMAIL))    $errors[] = 'Invalid email.';
if ($subject === '' || mb_strlen($subject) > 150)  $errors[] = 'Invalid subject.';
if ($message === '' || mb_strlen($message) > 5000) $errors[] = 'Invalid message.';
foreach ([$name, $email, $subject] as $field) {
    if (preg_match('/[\r\n]/', $field)) $errors[] = 'Invalid characters detected.';
}
if (!empty($errors)) {
    redirect_with_status('error');
}

// ---- Load PHPMailer (Composer autoload, or manual fallback) ----------------
$composerAutoload = __DIR__ . '/../vendor/autoload.php';
if (file_exists($composerAutoload)) {
    require $composerAutoload;
} else {
    require __DIR__ . '/PHPMailer/Exception.php';
    require __DIR__ . '/PHPMailer/PHPMailer.php';
    require __DIR__ . '/PHPMailer/SMTP.php';
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// ---- Load SMTP config -------------------------------------------------
$config = require __DIR__ . '/config.php';

$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host       = $config['smtp_host'];
    $mail->SMTPAuth   = true;
    $mail->Username   = $config['smtp_username'];
    $mail->Password   = $config['smtp_password'];
    $mail->SMTPSecure = $config['smtp_encryption'] === 'ssl'
        ? PHPMailer::ENCRYPTION_SMTPS
        : PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = $config['smtp_port'];

    // Sender / recipient
    $mail->setFrom($config['from_email'], $config['from_name']);
    $mail->addAddress($config['to_email']);
    $mail->addReplyTo($email, $name); // lets you hit "Reply" and answer the visitor directly

    // Content
    $mail->isHTML(false);
    $mail->Subject = '[' . $config['from_name'] . '] ' . $subject;
    $mail->Body    = "New message from the website contact form.\n\n"
                    . "Name: {$name}\n"
                    . "Email: {$email}\n"
                    . "Subject: {$subject}\n\n"
                    . "Message:\n{$message}\n";

    $mail->send();
    redirect_with_status('success');

} catch (Exception $e) {
    // Log the real error server-side for debugging; never expose it to the visitor.
    error_log('Contact form mail error: ' . $mail->ErrorInfo);
    redirect_with_status('error');
}