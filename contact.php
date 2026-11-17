<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$pageTitle       = 'Contact – TrustNova Tech | Start Your Software Project';
$pageDescription = 'Contact TrustNova Tech to discuss your software project, request a consultation, or send a message. Germany-based freelance software consultancy.';

require_once __DIR__ . '/includes/contact-handler.php';

// Ensure session and CSRF token exist
if (session_status() === PHP_SESSION_NONE) session_start();
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

$result   = null;
$formData = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $result   = handleContact();
    $formData = $result['success'] ? [] : $_POST;
}

require_once __DIR__ . '/includes/header.php';
?>

<section class="page-hero">
  <div class="container position-relative" style="z-index:2">
    <div class="breadcrumb-custom"><a href="/">Home</a><span class="sep">/</span> Contact</div>
    <span class="section-label">Let's Talk</span>
    <h1>Start a Conversation with TrustNova Tech</h1>
    <p>Tell me about your project, idea, or technical challenge, and I will get back to you as soon as possible.</p>
  </div>
</section>

<section class="section-pad contact-section">
  <div class="container">
    <div class="row g-5">

      <!-- Left: Info -->
      <div class="col-lg-4">
        <h3 class="mb-4" style="font-size:1.2rem;font-weight:700">Get in Touch</h3>

        <div class="contact-info-item">
  <div class="contact-info-icon"><i class="bi bi-geo-alt"></i></div>
  <div>
    <h5><?= t('Location') ?></h5>
    <p>
      In den Mühläckern 35<br>
      74196 Neuenstadt am Kocher<br>
      <?= t('Germany (Remote-friendly across Europe)') ?>
    </p>
  </div>
</div>

        <div class="contact-info-item">
          <div class="contact-info-icon"><i class="bi bi-envelope"></i></div>
          <div>
            <h5>Email</h5>
            <p>info@trustnovatech.de</p>
          </div>
        </div>

        <div class="contact-info-item">
          <div class="contact-info-icon"><i class="bi bi-clock"></i></div>
          <div>
            <h5>Response Time</h5>
            <p>Within 1–2 business days</p>
          </div>
        </div>

        <div class="contact-info-item">
          <div class="contact-info-icon"><i class="bi bi-chat-dots"></i></div>
          <div>
            <h5>Languages</h5>
            <p>English, German</p>
          </div>
        </div>

        <hr class="divider my-4">

        <div class="tech-category" style="margin-bottom:0">
          <div class="tech-category-title">Available For</div>
          <ul class="service-benefits" style="margin-top:8px">
            <li>New software development projects</li>
            <li>Legacy system modernisation</li>
            <li>Technical consulting and architecture review</li>
            <li>Freelance development support</li>
            <li>Maintenance and ongoing improvements</li>
            <li>Product ideas and custom solution discussions</li>
          </ul>
        </div>
      </div>

      <!-- Right: Form -->
      <div class="col-lg-8">
        <div class="contact-form-wrap">
          <h3 class="mb-2" style="font-size:1.25rem;font-weight:700">Send a Message</h3>
          <p style="font-size:.875rem;color:var(--text-muted);margin-bottom:28px">
            Fill in the form below and I will get back to you with a practical next step.
          </p>

          <?php if ($result !== null): ?>
          <div class="form-<?= $result['success'] ? 'success' : 'error' ?>">
            <i class="bi bi-<?= $result['success'] ? 'check-circle' : 'exclamation-circle' ?> me-2"></i>
            <?= htmlspecialchars($result['message'], ENT_QUOTES, 'UTF-8') ?>
          </div>
          <?php endif; ?>

          <?php if (!$result || !$result['success']): ?>
          <form method="POST" action="/contact" id="contactForm" novalidate>
            <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($_SESSION['csrf_token'], ENT_QUOTES, 'UTF-8') ?>">

            <!-- Honeypot -->
            <input type="text" name="website" style="display:none" tabindex="-1" autocomplete="off">

            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label-custom" for="name">Full Name *</label>
                <input
                  type="text"
                  id="name"
                  name="name"
                  class="form-control-custom"
                  placeholder="John Smith"
                  value="<?= htmlspecialchars($formData['name'] ?? '', ENT_QUOTES, 'UTF-8') ?>"
                  required
                >
              </div>

              <div class="col-md-6">
                <label class="form-label-custom" for="email">Email Address *</label>
                <input
                  type="email"
                  id="email"
                  name="email"
                  class="form-control-custom"
                  placeholder="john@company.com"
                  value="<?= htmlspecialchars($formData['email'] ?? '', ENT_QUOTES, 'UTF-8') ?>"
                  required
                >
              </div>

              <div class="col-md-6">
                <label class="form-label-custom" for="company">Company / Organisation</label>
                <input
                  type="text"
                  id="company"
                  name="company"
                  class="form-control-custom"
                  placeholder="Company GmbH"
                  value="<?= htmlspecialchars($formData['company'] ?? '', ENT_QUOTES, 'UTF-8') ?>"
                >
              </div>

              <div class="col-md-6">
                <label class="form-label-custom" for="subject">Subject *</label>
                <input
                  type="text"
                  id="subject"
                  name="subject"
                  class="form-control-custom"
                  placeholder="New software development project"
                  value="<?= htmlspecialchars($formData['subject'] ?? '', ENT_QUOTES, 'UTF-8') ?>"
                  required
                >
              </div>

              <div class="col-12">
                <label class="form-label-custom" for="message">Message *</label>
                <textarea
                  id="message"
                  name="message"
                  class="form-control-custom"
                  placeholder="Describe your project, goals, timeline, or any questions you have..."
                  required
                ><?= htmlspecialchars($formData['message'] ?? '', ENT_QUOTES, 'UTF-8') ?></textarea>
              </div>

              <div class="col-12 mt-2">
                <button type="submit" class="btn-primary-custom btn-submit" style="width:100%;justify-content:center;padding:15px">
                  <i class="bi bi-send"></i> Send Message
                </button>

                <p style="font-size:.75rem;color:var(--text-muted);margin-top:12px;text-align:center">
                  Your data is handled in accordance with the <a href="/privacy-policy">Privacy Policy</a>.
                </p>
              </div>
            </div>
          </form>
          <?php endif; ?>
        </div>
      </div>

    </div>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>