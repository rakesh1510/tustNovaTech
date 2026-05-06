<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/../vendor/autoload.php';

// Load SMTP config from a separate file
require_once __DIR__ . '/config_mail.php';

function handleContact(): array {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    if (
            !isset($_POST['csrf_token'], $_SESSION['csrf_token']) ||
            !hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])
    ) {
        return [
            'success' => false,
            'message' => 'Security validation failed. Please try again.',
        ];
    }

    // Honeypot field
    if (!empty($_POST['website'] ?? '')) {
        return [
            'success' => false,
            'message' => 'Too many submissions. Please try again later.',
        ];
    }

    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $company = trim($_POST['company'] ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if ($name === '') {
        return ['success' => false, 'message' => 'Please enter your full name.'];
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return ['success' => false, 'message' => 'Please enter a valid email address.'];
    }

    if ($subject === '') {
        return ['success' => false, 'message' => 'Please enter a subject.'];
    }

    if (mb_strlen($message) < 10) {
        return ['success' => false, 'message' => 'Message must be at least 10 characters.'];
    }

    try {
        // Mail to business inbox
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = SMTP_HOST;
        $mail->SMTPAuth = true;
        $mail->Username = SMTP_USER;
        $mail->Password = SMTP_PASS;
        $mail->Port = SMTP_PORT;

        if (SMTP_SECURE === 'tls') {
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        } elseif (SMTP_SECURE === 'ssl') {
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        }

        $mail->CharSet = 'UTF-8';

        $mail->setFrom(SMTP_FROM, 'TrustNova Tech Website');
        $mail->addAddress('info@trustnovatech.de', 'TrustNova Tech');
        $mail->addReplyTo($email, $name);

        $mail->isHTML(true);
        $mail->Subject = 'Website Contact: ' . $subject;

        $safeName = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
        $safeEmail = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
        $safeCompany = htmlspecialchars($company ?: 'N/A', ENT_QUOTES, 'UTF-8');
        $safeSubject = htmlspecialchars($subject, ENT_QUOTES, 'UTF-8');
        $safeMessage = nl2br(htmlspecialchars($message, ENT_QUOTES, 'UTF-8'));

        $mail->Body = "
            <h2>New Contact Form Submission</h2>
            <p><strong>Name:</strong> {$safeName}</p>
            <p><strong>Email:</strong> {$safeEmail}</p>
            <p><strong>Company:</strong> {$safeCompany}</p>
            <p><strong>Subject:</strong> {$safeSubject}</p>
            <p><strong>Message:</strong><br>{$safeMessage}</p>
        ";

        $mail->AltBody = "New Contact Form Submission\n\n" .
                "Name: {$name}\n" .
                "Email: {$email}\n" .
                "Company: " . ($company ?: 'N/A') . "\n" .
                "Subject: {$subject}\n\n" .
                "Message:\n{$message}";

        $mail->send();

        // Auto-reply to customer
        $reply = new PHPMailer(true);
        $reply->isSMTP();
        $reply->Host = SMTP_HOST;
        $reply->SMTPAuth = true;
        $reply->Username = SMTP_USER;
        $reply->Password = SMTP_PASS;
        $reply->Port = SMTP_PORT;

        if (SMTP_SECURE === 'tls') {
            $reply->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        } elseif (SMTP_SECURE === 'ssl') {
            $reply->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        }

        $reply->CharSet = 'UTF-8';

        $reply->setFrom(SMTP_FROM, 'TrustNova Tech');
        $reply->addAddress($email, $name);
        $reply->isHTML(true);
        $reply->Subject = 'Thank you for contacting TrustNova Tech';

        $reply->Body = "
<div style='font-family:Arial,Helvetica,sans-serif;line-height:1.6;color:#333;'>

  <p><strong>Hallo {$safeName},</strong></p>

  <p>
    vielen Dank für Ihre Nachricht an <strong>TrustNova Tech</strong>.<br>
    Ich habe Ihre Anfrage erhalten und melde mich so schnell wie möglich bei Ihnen.
  </p>

  <p>Mit freundlichen Grüßen,</p>

  <!-- SIGNATURE -->
  <table cellpadding='0' cellspacing='0' style='font-family:Arial,Helvetica,sans-serif; color:#111; margin-top:14px;'>
    <tr>

      <!-- LOGO -->
      <td style='vertical-align:middle; padding-right:18px; border-right:2px solid #e5e5e5;'>
        <img src='https://trustnovatech.com/assets/images/logo.png' width='110' alt='TrustNova Tech' style='display:block;'>
      </td>

      <!-- DETAILS -->
      <td style='vertical-align:middle; padding-left:18px; font-size:13px; line-height:1.6;'>

        <div style='font-size:16px; font-weight:bold; color:#002b5c;'>Rakesh Prajapati</div>
        <div style='color:#333;'>Founder &amp; Software Engineer</div>
        <div style='font-weight:bold; color:#0a66c2;'>TrustNova Tech</div>

        <div style='margin:8px 0; color:#555;'>
          Neuenstadt am Kocher · Heilbronn Region · Germany
        </div>

        <div>
          🌐 <a href='https://trustnovatech.com' style='color:#0a66c2; text-decoration:none;'>www.trustnovatech.com</a>
        </div>

        <div>
          ✉️ <a href='mailto:info@trustnovatech.de' style='color:#0a66c2; text-decoration:none;'>info@trustnovatech.de</a>
        </div>

        <div style='color:#000; font-weight:bold; margin-top:4px;'>
          📞 +49 176 66145047
        </div>

        <div style='margin-top:10px; padding-top:8px; border-top:1px solid #eeeeee; font-size:12px; color:#777;'>
          Custom Software · SaaS Platforms · Web Applications · Cloud Solutions
        </div>

        <div style='margin-top:10px; color:#333; font-size:12.5px;'>
          Gerne können wir auch kurz telefonieren, um Ihre Anforderungen unverbindlich zu besprechen.
        </div>

      </td>
    </tr>
  </table>

  <p style='font-size:12px;color:#777;margin-top:18px;'>
    (Automatische Bestätigung / Automatic confirmation)
  </p>

</div>
";

        $reply->AltBody = "Hello {$name},\n\n" .
                "Thank you for contacting TrustNova Tech.\n" .
                "Your message has been received successfully. I will get back to you within 1–2 business days.\n\n" .
                "Best regards,\nTrustNova Tech";

        $reply->send();

        return [
            'success' => true,
            'message' => 'Thank you, ' . $name . '! Your message has been received. We will reply within 1–2 business days.',
        ];
    } catch (Exception $e) {
        error_log('Mailer error: ' . $e->getMessage());

        return [
            'success' => false,
            'message' => 'Sorry, your message could not be sent right now. Please try again later.',
        ];
    }
}
