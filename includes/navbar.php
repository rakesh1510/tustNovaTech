<nav class="navbar-custom">
  <div class="container">
    <nav class="navbar navbar-expand-lg p-0" style="background:transparent;width:100%">
      <a class="navbar-brand navbar-brand-text" href="index.php">
        <span class="brand-icon"><i class="bi bi-shield-check"></i></span>
        TrustNova Tech
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navMenu">
        <ul class="navbar-nav mx-auto gap-1">
          <li class="nav-item"><a class="nav-link" href="index.php"><?= t('Home') ?></a></li>
          <li class="nav-item"><a class="nav-link" href="about.php"><?= t('About Us') ?></a></li>
          <li class="nav-item"><a class="nav-link" href="services.php"><?= t('Services') ?></a></li>
          <li class="nav-item"><a class="nav-link" href="technologies.php"><?= t('Technologies') ?></a></li>
          <li class="nav-item"><a class="nav-link" href="products.php"><?= t('Products') ?></a></li>
          <li class="nav-item"><a class="nav-link" href="expertise.php"><?= t('Experience') ?></a></li>
          <li class="nav-item"><a class="nav-link" href="contact.php"><?= t('Contact') ?></a></li>
        </ul>
        <div class="d-flex align-items-center gap-3 mt-3 mt-lg-0">
          <a href="<?= h(current_url_with_lang('en')) ?>" class="nav-link" style="padding:0">EN</a>
          <span style="color:var(--text-muted)">/</span>
          <a href="<?= h(current_url_with_lang('de')) ?>" class="nav-link" style="padding:0">DE</a>
          <a href="https://linkedin.com" target="_blank" rel="noopener" style="color:var(--text-muted);font-size:1.1rem"><i class="bi bi-linkedin"></i></a>
          <a href="contact.php" class="btn-nav-cta nav-link"><?= t('Get in Touch') ?></a>
        </div>
      </div>
    </nav>
  </div>
</nav>
