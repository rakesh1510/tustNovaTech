<?php
$pageTitle = 'About TrustNova Tech | Software Development Company in Germany';

$pageDescription = 'TrustNova Tech is a Germany-based software development brand founded and led by Rakesh Prajapati, an experienced software engineer and IT project manager with 12+ years of experience in custom software, SaaS, web applications, and scalable architecture.';

require_once __DIR__ . '/includes/header.php';
?>

<section class="page-hero">
  <div class="container position-relative" style="z-index:2">
    <div class="breadcrumb-custom"><a href="/">Home</a><span class="sep">/</span> About</div>
    <span class="section-label">About TrustNova Tech</span>
    <h1>Founder-Led Software Development <br>Built on 12+ Years of Experience</h1>
    <p>A Germany-based software development brand founded and led by an experienced software engineer.</p>
  </div>
</section>

<section class="section-pad">
  <div class="container">
    <div class="row g-5 align-items-center">
      <div class="col-lg-6">
        <span class="section-label">Founder-Led Software Development</span>
        <h2 class="section-title">Technology with Purpose, <span class="text-blue">Delivered with Trust</span></h2>

        <p class="mb-4">
          TrustNova Tech is a Germany-based software development brand founded and led by Rakesh Prajapati, an experienced software engineer and IT project manager. It was built on a simple principle: good software depends on trust — trust in technical decisions, trust in delivery, and trust in clear communication.
        </p>

        <p class="mb-4">
          With over 12 years of progressive experience, I have worked across custom software development, full-stack web applications, SaaS platforms, enterprise systems, API integrations, and cloud-based solutions. My background combines hands-on engineering with project leadership and structured delivery.
        </p>

        <p>
          TrustNova Tech allows me to offer that experience through a professional technology brand — helping businesses turn ideas, requirements, and complex workflows into software that is maintainable, secure, scalable, and aligned with real business goals.
        </p>
      </div>

      <div class="col-lg-6">
        <div class="row g-4">
          <?php
          $highlights = [
            ['🏗','Software Architecture','Designing reliable systems that can grow with business needs, from custom applications to larger platform-based solutions.'],
            ['📋','Project Leadership','Supporting structured delivery with clear milestones, practical planning, and strong stakeholder communication.'],
            ['🔒','Security Focus','Applying secure development practices including input validation, safe data handling, and security-aware architecture.'],
            ['🌍','Germany-Based Expertise','Based in Germany with experience working across multicultural teams, international clients, and diverse business environments.'],
          ];

          foreach ($highlights as [$icon, $title, $desc]): ?>
          <div class="col-6 reveal">
            <div class="card-custom text-center">
              <div style="font-size:2rem;margin-bottom:12px"><?= $icon ?></div>
              <h5 style="font-size:.95rem;font-weight:700;margin-bottom:8px"><?= $title ?></h5>
              <p style="font-size:.82rem"><?= $desc ?></p>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section-pad bg-navy-2">
  <div class="container">
    <div class="text-center mb-5">
      <span class="section-label">12+ Years of Progress</span>
      <h2 class="section-title">Experience Across the Full Stack</h2>
      <p class="section-subtitle mx-auto">
        A professional journey built through continuous learning, hands-on development, technical leadership, and client-focused delivery.
      </p>
    </div>

    <div class="row g-4">
      <?php
      $journey = [
        ['2012–2015','Foundation Years','Built a strong base in PHP, MySQL, business websites, CMS-driven systems, and custom web solutions while developing solid fundamentals in OOP, database design, and secure development.'],
        ['2015–2018','Full-Stack Growth','Expanded into JavaScript, AJAX, jQuery, frontend-rich applications, third-party integrations, REST APIs, and more advanced business platforms across multiple domains.'],
        ['2018–2021','Architecture & Leadership','Took on larger responsibilities in software architecture, sprint planning, stakeholder communication, and coordination of development teams on enterprise-oriented projects.'],
        ['2021–Present','Cloud, Scale & AI','Focused on scalable platforms, cloud infrastructure, Docker-based workflows, messaging systems, and AI-related product ideas and integrations under the TrustNova Tech brand.'],
      ];

      foreach ($journey as [$period, $title, $desc]): ?>
      <div class="col-md-6 col-lg-3 reveal">
        <div class="card-custom">
          <div class="tag mb-3"><?= $period ?></div>
          <h4 style="font-size:1rem;font-weight:700;margin-bottom:10px"><?= $title ?></h4>
          <p style="font-size:.85rem"><?= $desc ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section-pad">
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-6">
        <span class="section-label">Core Values</span>
        <h2 class="section-title">What I Stand For</h2>

        <?php
        $values = [
          ['🎯','Trust and Transparency','Clear expectations, honest communication, and reliable delivery are at the center of every project.'],
          ['🔐','Security by Default','Security is treated as a standard part of development, not something added later.'],
          ['📐','Clean, Maintainable Code','The goal is always to build software that is understandable, extensible, and practical to maintain over time.'],
          ['📊','Quality Through Structure','Thoughtful planning, testing, review, and careful execution help create stable and dependable outcomes.'],
        ];

        foreach ($values as [$icon, $title, $desc]): ?>
        <div class="why-item mb-4 reveal">
          <div class="why-icon" style="font-size:1.3rem"><?= $icon ?></div>
          <div>
            <h5><?= $title ?></h5>
            <p><?= $desc ?></p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>

      <div class="col-lg-6">
        <span class="section-label">By the Numbers</span>
        <h2 class="section-title">Professional Snapshot</h2>

        <div class="row g-4">
          <?php
          $numbers = [
            ['12+','Years of Experience'],
            ['50+','Projects Delivered'],
            ['18','Largest Team Led'],
            ['7','Technology Areas'],
          ];

          foreach ($numbers as [$num, $label]): ?>
          <div class="col-6 reveal">
            <div class="card-custom text-center">
              <div style="font-size:2.5rem;font-weight:900;line-height:1"><?= $num ?></div>
              <div style="font-size:.8rem;color:var(--text-muted);margin-top:8px"><?= $label ?></div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="cta-section section-pad">
  <div class="container text-center">
    <h2 class="section-title">Ready to Work Together?</h2>
    <p class="section-subtitle mx-auto mb-5">
      Tell me about your project and let’s explore how TrustNova Tech can help you build it in a secure, scalable, and practical way.
    </p>
    <a href="/contact" class="btn-primary-custom"><i class="bi bi-envelope"></i> Start the Conversation</a>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>