<?php
// Sanitize helper
function h($str) {
    return htmlspecialchars($str, ENT_QUOTES | ENT_HTML5, 'UTF-8');
}

$pageTitle       = isset($pageTitle)       ? $pageTitle       : 'TrustNova Tech – Secure & Scalable Software Solutions';
$pageDescription = isset($pageDescription) ? $pageDescription : 'TrustNova Tech is a Germany-based freelance software consultancy building modern websites, SaaS platforms, AI-powered applications, and custom business software.';
$pageKeywords    = isset($pageKeywords)    ? $pageKeywords    : 'software development Germany, freelance developer Germany, SaaS, AI solutions, PHP developer';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<title><?= h($pageTitle) ?></title>
<meta name="description" content="<?= h($pageDescription) ?>">
<meta name="keywords" content="<?= h($pageKeywords) ?>">
<meta name="robots" content="index, follow">
<meta name="author" content="TrustNova Tech">

<!-- Open Graph -->
<meta property="og:title" content="<?= h($pageTitle) ?>">
<meta property="og:description" content="<?= h($pageDescription) ?>">
<meta property="og:type" content="website">
<meta property="og:locale" content="en_DE">

<!-- ✅ Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- ✅ Bootstrap Icons (FIX FOR YOUR ISSUE) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<!-- Custom CSS -->
<link rel="stylesheet" href="assets/css/style.css">

<style>
/* ✅ FIX ICON DISPLAY */
.card-icon i,
.service-icon i,
.tech-category-title i {
  font-size: 30px;
  color: #4da3ff;
  display: inline-block;
}

/* Optional: Improve icon container look */
.card-icon,
.service-icon {
  width: 60px;
  height: 60px;
  background: rgba(77,163,255,0.1);
  border-radius: 12px;
  display: flex;
  align-items: center;
  justify-content: center;
}
</style>

</head>

<body>

<?php include __DIR__ . '/navbar.php'; ?>