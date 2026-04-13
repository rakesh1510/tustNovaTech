<?php
$pageTitle       = 'Impressum – Legal Notice | TrustNova Tech';
$pageDescription = 'Impressum (Legal Notice) for TrustNova Tech – Germany-based freelance software consultancy.';
require_once __DIR__ . '/includes/header.php';
?>

<section class="page-hero">
  <div class="container position-relative" style="z-index:2">
    <div class="breadcrumb-custom"><a href="index.php">Home</a><span class="sep">/</span> Impressum</div>
    <span class="section-label">Legal Notice</span>
    <h1>Impressum</h1>
    <p>Legal information in accordance with German legal requirements.</p>
  </div>
</section>

<section class="section-pad">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="card-custom" style="padding:48px">

          <h2 class="mb-4" style="font-size:1.3rem">Information according to § 5 TMG</h2>

          <div class="row g-4">
            <div class="col-md-6">
              <div style="background:rgba(255,255,255,.04);border:1px solid var(--border-light);border-radius:10px;padding:24px">
                <h5 style="font-size:.8rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:var(--blue-light);margin-bottom:12px">Business Name</h5>
                <p style="font-weight:600;margin-bottom:4px">TrustNova Tech</p>
                <p style="color:var(--text-muted);font-size:.875rem">Freelance Software Consulting & Development</p>
              </div>
            </div>

            <div class="col-md-6">
              <div style="background:rgba(255,255,255,.04);border:1px solid var(--border-light);border-radius:10px;padding:24px">
                <h5 style="font-size:.8rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:var(--blue-light);margin-bottom:12px">Location</h5>
                <p style="font-weight:600;margin-bottom:4px">Germany</p>
                <p style="color:var(--text-muted);font-size:.875rem">European Union</p>
              </div>
            </div>

            <div class="col-md-6">
              <div style="background:rgba(255,255,255,.04);border:1px solid var(--border-light);border-radius:10px;padding:24px">
                <h5 style="font-size:.8rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:var(--blue-light);margin-bottom:12px">Contact</h5>
                <p style="font-weight:600;margin-bottom:4px">Email</p>
                <p style="color:var(--text-muted);font-size:.875rem">info@trustnovatech.de</p>
              </div>
            </div>

            <div class="col-md-6">
              <div style="background:rgba(255,255,255,.04);border:1px solid var(--border-light);border-radius:10px;padding:24px">
                <h5 style="font-size:.8rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:var(--blue-light);margin-bottom:12px">Responsible for Content</h5>
                <p style="font-weight:600;margin-bottom:4px">TrustNova Tech</p>
                <p style="color:var(--text-muted);font-size:.875rem">Independent software consultancy</p>
              </div>
            </div>
          </div>

          <hr class="divider my-4">

          <h2 class="mb-3" style="font-size:1.3rem">Liability for Content</h2>
          <p>
            The contents of this website have been created with great care. However, no guarantee can be given for the accuracy, completeness, or currentness of the content.
          </p>

          <hr class="divider my-4">

          <h2 class="mb-3" style="font-size:1.3rem">Liability for Links</h2>
          <p>
            This website may contain links to external third-party websites. No influence is held over the content of those websites. Therefore, no liability can be accepted for such external content. The respective provider or operator of the linked pages is always responsible for their content.
          </p>

          <hr class="divider my-4">

          <h2 class="mb-3" style="font-size:1.3rem">Copyright</h2>
          <p>
            The content and works published on this website are subject to German copyright law. Any duplication, editing, distribution, or use beyond the limits of copyright law requires prior written consent, unless otherwise permitted by law.
          </p>

          <hr class="divider my-4">

          <h2 class="mb-3" style="font-size:1.3rem">Online Dispute Resolution</h2>
          <p>
            The European Commission provides a platform for online dispute resolution (ODR). It can be found at
            <a href="https://ec.europa.eu/consumers/odr" target="_blank" rel="noopener">https://ec.europa.eu/consumers/odr</a>.
          </p>
          <p>
            There is no obligation or willingness to participate in dispute resolution proceedings before a consumer arbitration board.
          </p>

          <hr class="divider my-4">

          <h2 class="mb-3" style="font-size:1.3rem">Professional Information</h2>
          <p>
            TrustNova Tech operates as an independent freelance software consultancy. No trade-specific supervisory authority applies in the context of general software consulting and development services, unless otherwise required by applicable law.
          </p>

          <hr class="divider my-4">

          <p style="font-size:.82rem;color:var(--text-muted)">
            Last updated: <?= date('F Y') ?>.
            For information on the processing of personal data, please see the <a href="privacy-policy.php">Privacy Policy</a>.
          </p>

        </div>
      </div>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>