<?php
/**
 * Contact form handler – save to SQLite
 */
require_once __DIR__ . '/../db/init.php';

function handleContact(): array {
    // CSRF basic check
    session_start();
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    if (!isset($_POST['csrf_token']) || !hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
        return ['success' => false, 'message' => 'Security validation failed. Please try again.'];
    }

    // Honeypot
    if (!empty($_POST['website'])) {
        return ['success' => true, 'message' => 'Thank you for reaching out! We will be in touch shortly.'];
    }

    // Validate & sanitize
    $name    = trim(strip_tags($_POST['name']    ?? ''));
    $email   = trim(strip_tags($_POST['email']   ?? ''));
    $company = trim(strip_tags($_POST['company'] ?? ''));
    $subject = trim(strip_tags($_POST['subject'] ?? ''));
    $message = trim(strip_tags($_POST['message'] ?? ''));

    $errors = [];
    if (strlen($name) < 2)    $errors[] = 'Please enter your full name.';
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Please enter a valid email address.';
    if (strlen($subject) < 2) $errors[] = 'Please enter a subject.';
    if (strlen($message) < 10) $errors[] = 'Message must be at least 10 characters.';

    if ($errors) return ['success' => false, 'message' => implode(' ', $errors)];

    // Rate limiting – max 5 submissions per IP per hour
    $ip = $_SERVER['REMOTE_ADDR'] ?? 'unknown';

    try {
        $pdo = getDb();
        $count = $pdo->prepare("SELECT COUNT(*) FROM contact_messages WHERE ip_address = ? AND created_at > datetime('now', '-1 hour')");
        $count->execute([$ip]);
        if ((int)$count->fetchColumn() >= 5) {
            return ['success' => false, 'message' => 'Too many submissions. Please try again later.'];
        }

        $stmt = $pdo->prepare("INSERT INTO contact_messages (name, email, company, subject, message, ip_address) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->execute([$name, $email, $company, $subject, $message, $ip]);

        return ['success' => true, 'message' => 'Thank you, ' . htmlspecialchars($name, ENT_QUOTES, 'UTF-8') . '! Your message has been received. We will reply within 1–2 business days.'];
    } catch (Exception $e) {
        return ['success' => false, 'message' => 'An error occurred. Please try again or contact us directly.'];
    }
}
