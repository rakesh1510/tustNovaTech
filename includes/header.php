<?php
require_once __DIR__ . '/i18n.php';

if (!function_exists('h')) {
    function h($str) {
        return htmlspecialchars($str, ENT_QUOTES | ENT_HTML5, 'UTF-8');
    }
}

/*
 * Always start a translation buffer for this request.
 * Do not depend on ob_get_level() because XAMPP may already have output buffering enabled.
 */
ob_start('translate_output');

$pageTitle       = isset($pageTitle)       ? $pageTitle       : 'TrustNova Tech – Secure & Scalable Software Solutions | Germany';
$pageDescription = isset($pageDescription) ? $pageDescription : 'TrustNova Tech is a Germany-based freelance software consultancy building modern websites, SaaS platforms, AI-powered applications, and custom business software.';
$pageKeywords    = isset($pageKeywords)    ? $pageKeywords    : 'software development Germany, freelance developer Germany, SaaS, AI solutions, PHP developer';
?>
<!DOCTYPE html>
<html lang="<?= h(current_lang()) ?>">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<title><?= h($pageTitle) ?></title>
<meta name="description" content="<?= h($pageDescription) ?>">
<meta name="keywords" content="<?= h($pageKeywords) ?>">
<meta name="robots" content="index, follow">
<meta name="author" content="TrustNova Tech">

<meta property="og:title" content="<?= h($pageTitle) ?>">
<meta property="og:description" content="<?= h($pageDescription) ?>">
<meta property="og:type" content="website">
<meta property="og:locale" content="<?= current_lang() === 'de' ? 'de_DE' : 'en_DE' ?>">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<?php include __DIR__ . '/navbar.php'; ?>