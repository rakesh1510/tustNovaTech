<?php
$pageTitle       = 'Privacy Policy | TrustNova Tech';
$pageDescription = 'Privacy Policy for TrustNova Tech. Learn how personal data is collected, used, and protected in line with GDPR and German data protection law.';
require_once __DIR__ . '/includes/header.php';
?>

<section class="page-hero">
  <div class="container position-relative" style="z-index:2">
    <div class="breadcrumb-custom"><a href="index.php">Home</a><span class="sep">/</span> Privacy Policy</div>
    <span class="section-label">Legal</span>
    <h1>Privacy Policy</h1>
    <p>How personal data is collected, used, and protected. Last updated: <?= date('F Y') ?>.</p>
  </div>
</section>

<section class="section-pad">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="card-custom" style="padding:48px">

          <h2 class="mb-3" style="font-size:1.3rem">1. Introduction</h2>
          <p>
            Protecting personal data is taken seriously. This Privacy Policy explains how personal data is processed when visiting this website or making contact through the contact form.
          </p>
          <p>
            Processing is carried out in accordance with the General Data Protection Regulation (GDPR) and applicable German data protection law.
          </p>

          <hr class="divider my-4">

          <h2 class="mb-3" style="font-size:1.3rem">2. Controller</h2>
          <p>The controller responsible for data processing on this website is:</p>

          <div style="background:rgba(255,255,255,.04);border:1px solid var(--border-light);border-radius:8px;padding:20px;margin-top:12px">
            <strong>TrustNova Tech</strong><br>
            <span style="color:var(--text-muted)">
              Germany<br>
              Email: info@trustnovatech.de
            </span>
          </div>

          <hr class="divider my-4">

          <h2 class="mb-3" style="font-size:1.3rem">3. Data Collected</h2>

          <p>
            <strong>Contact Form:</strong> When the contact form is used, the following data may be collected: name, email address, company name (optional), subject, and message content. This information is used only to process and respond to the enquiry.
          </p>

          <p class="mt-3">
            <strong>Server Log Files:</strong> The hosting environment may automatically collect standard technical log data, such as IP address, browser type, requested pages, and date/time of access. This is used for technical stability, security, and troubleshooting.
          </p>

          <p class="mt-3">
            <strong>Cookies:</strong> Only technically necessary cookies may be used, for example session cookies for form security and CSRF protection. No tracking or marketing cookies are intentionally used.
          </p>

          <hr class="divider my-4">

          <h2 class="mb-3" style="font-size:1.3rem">4. Purpose and Legal Basis of Processing</h2>
          <p>Personal data is processed on the following legal bases under Art. 6 GDPR:</p>

          <ul class="service-benefits mt-3" style="list-style:none;padding:0">
            <li><strong>Art. 6(1)(b) GDPR</strong> – processing necessary to respond to enquiries or prepare for a contract</li>
            <li><strong>Art. 6(1)(f) GDPR</strong> – legitimate interests in ensuring website security, stability, and functionality</li>
            <li><strong>Art. 6(1)(c) GDPR</strong> – where processing is required to comply with a legal obligation</li>
          </ul>

          <hr class="divider my-4">

          <h2 class="mb-3" style="font-size:1.3rem">5. Data Retention</h2>
          <p>
            Personal data is stored only for as long as necessary for the relevant purpose. Contact enquiries may be retained for a reasonable period in order to handle communication, follow-up questions, or project-related matters. Technical log data is retained only as long as necessary for security and operational purposes.
          </p>

          <hr class="divider my-4">

          <h2 class="mb-3" style="font-size:1.3rem">6. Data Sharing</h2>
          <p>
            Personal data is not sold or shared for advertising purposes. Data may be processed by technical service providers such as hosting providers where necessary for operating the website. Such processing is limited to what is required for service delivery and legal compliance.
          </p>

          <hr class="divider my-4">

          <h2 class="mb-3" style="font-size:1.3rem">7. Your Rights</h2>
          <p>Under the GDPR, you may have the following rights:</p>

          <ul class="service-benefits mt-3" style="list-style:none;padding:0">
            <li><strong>Right of access</strong> – to request information about stored personal data</li>
            <li><strong>Right to rectification</strong> – to request correction of inaccurate data</li>
            <li><strong>Right to erasure</strong> – to request deletion of personal data where legally possible</li>
            <li><strong>Right to restriction of processing</strong> – to limit the way data is processed</li>
            <li><strong>Right to data portability</strong> – where applicable</li>
            <li><strong>Right to object</strong> – in cases of processing based on legitimate interests</li>
          </ul>

          <p class="mt-3">
            To exercise these rights, please contact: info@trustnovatech.de
          </p>

          <hr class="divider my-4">

          <h2 class="mb-3" style="font-size:1.3rem">8. Security Measures</h2>
          <p>
            Appropriate technical and organisational measures are taken to protect personal data against unauthorised access, alteration, loss, or destruction. These may include HTTPS encryption, form protection, secure coding practices, and restricted access to submitted data.
          </p>

          <hr class="divider my-4">

          <h2 class="mb-3" style="font-size:1.3rem">9. Right to Lodge a Complaint</h2>
          <p>
            If you believe that your personal data has been processed unlawfully, you have the right to lodge a complaint with a competent data protection supervisory authority in Germany.
          </p>

          <hr class="divider my-4">

          <h2 class="mb-3" style="font-size:1.3rem">10. Changes to This Privacy Policy</h2>
          <p>
            This Privacy Policy may be updated from time to time to reflect legal, technical, or operational changes. The date shown at the top of the page indicates the latest revision.
          </p>

        </div>
      </div>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>