<nav class="navbar-custom">
    <div class="container">
        <nav class="navbar navbar-expand-lg p-0" style="background:transparent;width:100%">
            <a class="navbar-brand d-flex align-items-center gap-2" href="/">
                <img src="/assets/images/logo.png" alt="TrustNova Tech Logo" style="height:45px;">
                <span style="font-weight:600; font-size:18px; color:#0b2c5f;">
                    TrustNova Tech
                </span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navMenu">
                <ul class="navbar-nav mx-auto gap-1">
                    <li class="nav-item"><a class="nav-link" href="/"><?= t('Home') ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="/about"><?= t('About Us') ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="/services"><?= t('Services') ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="/technologies"><?= t('Technologies') ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="/products"><?= t('Products') ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="/expertise"><?= t('Experience') ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="/contact"><?= t('Contact') ?></a></li>
                </ul>
                <div class="d-flex align-items-center gap-3 mt-3 mt-lg-0">
                    <a href="<?= h(current_url_with_lang('en')) ?>" class="nav-link" style="padding:0">EN</a>
                    <span style="color:var(--text-muted)">/</span>
                    <a href="<?= h(current_url_with_lang('de')) ?>" class="nav-link" style="padding:0">DE</a>
                    <a href="https://www.linkedin.com/company/trustnova-tech/" target="_blank" rel="noopener" style="color:var(--text-muted);font-size:1.1rem"><i class="bi bi-linkedin"></i></a>
                    <a href="/contact" class="btn-nav-cta nav-link"><?= t('Get in Touch') ?></a>
                </div>
            </div>
        </nav>
    </div>
</nav>
