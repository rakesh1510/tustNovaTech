<?php
require_once __DIR__ . '/includes/i18n.php';

$pageTitle       = t('Impressum – Legal Notice | TrustNova Tech');
$pageDescription = t('Impressum (Legal Notice) for TrustNova Tech – Germany-based freelance software consultancy.');
require_once __DIR__ . '/includes/header.php';
?>

<section class="page-hero">
  <div class="container position-relative" style="z-index:2">
    <div class="breadcrumb-custom"><a href="index.php"><?= t('Home') ?></a><span class="sep">/</span> <?= t('Impressum') ?></div>
    <span class="section-label"><?= t('Legal Notice') ?></span>
    <h1><?= t('Impressum') ?></h1>
    <p><?= t('Legal information in accordance with German legal requirements.') ?></p>
  </div>
</section>

<section class="section-pad">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="card-custom" style="padding:48px">

          <h2 class="mb-4" style="font-size:1.3rem"><?= t('Information according to § 5 TMG') ?></h2>

         <div class="row g-4">

  <!-- NAME -->
  <div class="col-md-6">
    <div style="background:rgba(255,255,255,.04);border:1px solid var(--border-light);border-radius:10px;padding:24px">
      <h5 style="font-size:.8rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:var(--blue-light);margin-bottom:12px"><?= t('Name') ?></h5>
      <p style="font-weight:600;margin-bottom:4px">Rakesh Prajapati</p>
      <p style="color:var(--text-muted);font-size:.875rem"><?= t('Freelance Software Consulting & Development') ?></p>
    </div>
  </div>

  <!-- BUSINESS NAME -->
  <div class="col-md-6">
    <div style="background:rgba(255,255,255,.04);border:1px solid var(--border-light);border-radius:10px;padding:24px">
      <h5 style="font-size:.8rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:var(--blue-light);margin-bottom:12px"><?= t('Business Name') ?></h5>
      <p style="font-weight:600;margin-bottom:4px">TrustNova Tech</p>
      <p style="color:var(--text-muted);font-size:.875rem"><?= t('Freelance Software Consulting & Development') ?></p>
    </div>
  </div>

  <!-- ADDRESS (VERY IMPORTANT) -->
  <div class="col-md-6">
    <div style="background:rgba(255,255,255,.04);border:1px solid var(--border-light);border-radius:10px;padding:24px">
      <h5 style="font-size:.8rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:var(--blue-light);margin-bottom:12px"><?= t('Address') ?></h5>
      <p style="font-weight:600;margin-bottom:4px">In den Mühläckern 35</p>
      <p style="color:var(--text-muted);font-size:.875rem">74196 Neuenstadt am Kocher</p>
      <p style="color:var(--text-muted);font-size:.875rem"><?= t('Germany') ?></p>
    </div>
  </div>

  <!-- CONTACT -->
  <div class="col-md-6">
    <div style="background:rgba(255,255,255,.04);border:1px solid var(--border-light);border-radius:10px;padding:24px">
      <h5 style="font-size:.8rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:var(--blue-light);margin-bottom:12px"><?= t('Contact') ?></h5>
      <p style="font-weight:600;margin-bottom:4px">Email</p>
      <p style="color:var(--text-muted);font-size:.875rem">info@trustnovatech.de</p>
      <!-- Optional -->
      <!-- <p style="color:var(--text-muted);font-size:.875rem">+49 XXX XXX</p> -->
    </div>
  </div>

  <!-- RESPONSIBLE PERSON -->
  <div class="col-md-6">
    <div style="background:rgba(255,255,255,.04);border:1px solid var(--border-light);border-radius:10px;padding:24px">
      <h5 style="font-size:.8rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:var(--blue-light);margin-bottom:12px"><?= t('Responsible for Content') ?></h5>
      <p style="font-weight:600;margin-bottom:4px">Rakesh Prajapati</p>
      <p style="color:var(--text-muted);font-size:.875rem"><?= t('Independent software consultancy') ?></p>
    </div>
  </div>

</div>

          <hr class="divider my-4">

          <h2 class="mb-3" style="font-size:1.3rem"><?= t('Liability for Content') ?></h2>
          <p>
            <?= t('The contents of this website have been created with great care. However, no guarantee can be given for the accuracy, completeness, or currentness of the content.') ?>
          </p>

          <hr class="divider my-4">

          <h2 class="mb-3" style="font-size:1.3rem"><?= t('Liability for Links') ?></h2>
          <p>
            <?= t('This website may contain links to external third-party websites. No influence is held over the content of those websites. Therefore, no liability can be accepted for such external content. The respective provider or operator of the linked pages is always responsible for their content.') ?>
          </p>

          <hr class="divider my-4">

          <h2 class="mb-3" style="font-size:1.3rem"><?= t('Copyright') ?></h2>
          <p>
            <?= t('The content and works published on this website are subject to German copyright law. Any duplication, editing, distribution, or use beyond the limits of copyright law requires prior written consent, unless otherwise permitted by law.') ?>
          </p>

          <hr class="divider my-4">

          <h2 class="mb-3" style="font-size:1.3rem"><?= t('Online Dispute Resolution') ?></h2>
          <p>
            <?= t('The European Commission provides a platform for online dispute resolution (ODR). It can be found at') ?>
            <a href="https://ec.europa.eu/consumers/odr" target="_blank" rel="noopener">https://ec.europa.eu/consumers/odr</a>.
          </p>
          <p>
            <?= t('There is no obligation or willingness to participate in dispute resolution proceedings before a consumer arbitration board.') ?>
          </p>

          <hr class="divider my-4">

          <h2 class="mb-3" style="font-size:1.3rem"><?= t('Professional Information') ?></h2>
          <p>
            <?= t('TrustNova Tech operates as an independent freelance software consultancy. No trade-specific supervisory authority applies in the context of general software consulting and development services, unless otherwise required by applicable law.') ?>
          </p>

          <hr class="divider my-4">

          <p style="font-size:.82rem;color:var(--text-muted)">
            <?= t('Last updated:') ?> <?= date('F Y') ?>.
            <?= t('For information on the processing of personal data, please see the <a href="privacy-policy.php">Privacy Policy</a>.') ?>
          </p>

        </div>
      </div>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>