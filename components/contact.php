<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name    = trim($_POST["name"] ?? '');
    $email   = filter_var(trim($_POST["email"] ?? ''), FILTER_VALIDATE_EMAIL);
    $subject = trim($_POST["subject"] ?? '');
    $message = trim($_POST["message"] ?? '');

    if (!$name || !$email || !$subject || !$message) {
        echo "Please fill in all fields correctly.";
        exit;
    }

    $mail = new PHPMailer(true);
    try {
        // MAIN EMAIL TO YOU
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = $_ENV['SMTP_USER'];
        $mail->Password   = $_ENV['SMTP_PASS'];
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        $mail->setFrom($_ENV['SMTP_USER'], 'Website Contact Form');
        $mail->addReplyTo($email, $name);
        $mail->addAddress($_ENV['TO_EMAIL'] ?? 'cailayvosh@gmail.com');

        $mail->Subject = $subject;
        $mail->Body    = "Name: $name\nEmail: $email\n\nMessage:\n$message";
        $mail->isHTML(false);
        $mail->send();

        // AUTO-REPLY TO USER
        $reply = new PHPMailer(true);
        $reply->isSMTP();
        $reply->Host       = 'smtp.gmail.com';
        $reply->SMTPAuth   = true;
        $reply->Username   = $_ENV['SMTP_USER'];
        $reply->Password   = $_ENV['SMTP_PASS'];
        $reply->SMTPSecure = 'tls';
        $reply->Port       = 587;

        $reply->setFrom($_ENV['SMTP_USER'], 'Yvosh Martin'); // Your name/brand
        $reply->addAddress($email, $name); // To the user
        $reply->Subject = "Thank you for contacting me!";

        // Styled HTML auto-reply
        $reply->isHTML(true);
        $reply->Body = "
            <div style='font-family: Arial, sans-serif; background:#f8f9fb; padding:20px;'>
                <div style='background:white; padding:20px; border-radius:10px; box-shadow:0 0 10px rgba(0,0,0,0.1); max-width:600px; margin:auto;'>
                    <h2 style='color:#2a75bb;'>Thank you for messaging!</h2>
                    <p>Hi <strong>$name</strong>,</p>
                    <p>Please wait for a moment for the reply. If the response takes too long, feel free to reach out via:</p>
                    <ul>
                        <li><strong>Messenger:</strong> Yvosh Martin</li>
                        <li><strong>Phone:</strong> 0995 595 3899</li>
                    </ul>
                    <p>We appreciate your message!</p>
                </div>
            </div>
        ";

        $reply->send();

        // Redirect to a styled thank-you page
        header("Location: /Portfolio/components/thank-you.php");
        exit;

    } catch (Exception $e) {
        echo "Message failed to send. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
