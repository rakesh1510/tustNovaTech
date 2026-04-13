<?php
$pageTitle       = 'Experience & Expertise – 12+ Years of Software Delivery | TrustNova Tech';
$pageDescription = 'TrustNova Tech brings 12+ years of experience in full-stack development, software architecture, project leadership, Agile delivery, and enterprise software consulting.';
require_once __DIR__ . '/includes/header.php';
?>

<section class="page-hero">
  <div class="container position-relative" style="z-index:2">
    <div class="breadcrumb-custom"><a href="index.php">Home</a><span class="sep">/</span> Experience</div>
    <span class="section-label">12+ Years of Experience</span>
    <h1>Practical Expertise Across the Full Software Lifecycle</h1>
    <p>Hands-on engineering experience combined with project leadership, structured delivery, and clear client communication.</p>
  </div>
</section>

<!-- Stats -->
<section class="stats-section section-pad-sm">
  <div class="container">
    <div class="row g-0">
      <?php
      $stats = [
        ['12+','Years of Experience','data-target="12"'],
        ['18','Largest Team Led','data-target="18"'],
        ['50+','Projects Delivered','data-target="50"'],
        ['7','Core Technology Areas','data-target="7"'],
      ];
      foreach ($stats as [$num,$label,$attr]): ?>
      <div class="col-6 col-lg-3">
        <div class="stat-card">
          <span class="stat-number">
            <span class="counter" <?= $attr ?>><?= (int)$num ?></span><span class="stat-suffix"><?= ltrim($num,'0123456789') ?></span>
          </span>
          <span class="stat-label"><?= $label ?></span>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Core Competencies -->
<section class="section-pad">
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-5">
        <span class="section-label">Core Competencies</span>
        <h2 class="section-title mb-4">What I Do <span class="text-blue">Best</span></h2>
        <p style="color:var(--text-muted);margin-bottom:32px">
          My experience covers both the technical and delivery sides of software projects — from architecture and implementation to stakeholder communication and project coordination.
        </p>

        <?php
        $skills = [
          ['Full-Stack Development',95],
          ['Software Architecture',90],
          ['PHP & Laravel',96],
          ['Cloud & DevOps',82],
          ['API Design & Integration',92],
          ['Database Design & Optimisation',88],
          ['Project Leadership & Agile Delivery',87],
          ['AI & Automation Integration',80],
        ];
        foreach ($skills as [$label,$pct]): ?>
        <div class="xp-bar-wrap reveal">
          <div class="xp-bar-label"><span><?= $label ?></span><span><?= $pct ?>%</span></div>
          <div class="xp-bar-track"><div class="xp-bar-fill" data-width="<?= $pct ?>"></div></div>
        </div>
        <?php endforeach; ?>
      </div>

      <div class="col-lg-7">
        <span class="section-label">Expertise Areas</span>
        <h2 class="section-title mb-4">Where I Add the Most Value</h2>
        <div class="row g-3">
          <?php
          $areas = [
            ['code-square','Full-Stack Development','End-to-end software delivery across backend systems, databases, frontend interfaces, and deployment-ready solutions.'],
            ['diagram-3','Software Architecture','Designing system structure, service flow, security layers, data models, and scalable application foundations.'],
            ['kanban','Project & Sprint Leadership','Supporting Agile delivery with planning, sprint coordination, prioritisation, and clear communication across stakeholders.'],
            ['people','Team Leadership Experience','Experience leading and coordinating development teams, setting technical direction, and maintaining delivery momentum.'],
            ['chat-left-text','Client Communication','Translating business requirements into technical direction and helping non-technical stakeholders stay informed and confident.'],
            ['database-gear','Database Design & Migration','Working with schema design, optimisation, migration planning, and structured data handling across business systems.'],
            ['bug','Debugging & Root Cause Analysis','Systematic troubleshooting of production issues, integration failures, and performance bottlenecks in complex environments.'],
            ['journal-code','Technical Documentation','Creating architecture notes, API references, technical specifications, and implementation documentation for maintainable delivery.'],
          ];
          foreach ($areas as $i => [$icon,$title,$desc]): ?>
          <div class="col-md-6 reveal reveal-delay-<?= ($i % 3) + 1 ?>">
            <div class="card-custom">
              <div class="card-icon"><i class="bi bi-<?= $icon ?>"></i></div>
              <h5><?= $title ?></h5>
              <p><?= $desc ?></p>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Leadership Background -->
<section class="section-pad bg-navy-2">
  <div class="container">
    <div class="text-center mb-5">
      <span class="section-label">Leadership Background</span>
      <h2 class="section-title">Experience Beyond Pure Development</h2>
      <p class="section-subtitle mx-auto">
        In addition to hands-on engineering, my background includes project leadership, team coordination, Agile delivery, and enterprise-oriented decision-making.
      </p>
    </div>

    <div class="row g-4">
      <?php
      $leadership = [
        ['🧭','Team Leadership','Experience coordinating development teams of up to 18 people across structured software projects and delivery cycles.'],
        ['🏗️','Architecture Responsibility','Hands-on involvement in architecture planning, technical direction, and system design decisions for business-critical applications.'],
        ['🔄','Agile Delivery','Practical experience with sprint-based planning, prioritisation, structured delivery, and continuous improvement across ongoing projects.'],
        ['🌐','Distributed Collaboration','Worked across different teams, stakeholders, and working styles with a strong focus on communication, ownership, and dependable delivery.'],
      ];
      foreach ($leadership as $i => [$icon,$title,$desc]): ?>
      <div class="col-md-6 col-lg-3 reveal reveal-delay-<?= $i + 1 ?>">
        <div class="card-custom text-center">
          <div style="font-size:2rem;margin-bottom:16px"><?= $icon ?></div>
          <h4 style="font-size:1rem;font-weight:700;margin-bottom:10px"><?= $title ?></h4>
          <p style="font-size:.85rem"><?= $desc ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Methodologies -->
<section class="section-pad">
  <div class="container">
    <div class="text-center mb-5">
      <span class="section-label">How I Work</span>
      <h2 class="section-title">Working Principles That Support Reliable Delivery</h2>
    </div>

    <div class="row g-4 justify-content-center">
      <?php
      $methods = [
        ['⚡','Agile & Scrum','Structured planning, sprint-oriented delivery, transparent progress tracking, and practical iteration based on project needs.'],
        ['📋','Kanban Thinking','A clear workflow mindset for maintenance, support, and continuously evolving software tasks.'],
        ['🔐','Security-Aware Development','Security considerations are included throughout planning, implementation, and review rather than added at the end.'],
        ['🧪','Quality Through Testing','Validation, review, and careful checking are treated as essential parts of delivery, not optional extras.'],
        ['📚','Documentation Discipline','Important architecture choices, APIs, workflows, and technical behaviour are documented to support maintainability.'],
        ['🔄','Deployment Readiness','Solutions are built with practical release, update, and support workflows in mind for smoother long-term operation.'],
      ];
      foreach ($methods as [$icon,$title,$desc]): ?>
      <div class="col-md-6 col-lg-4 reveal">
        <div class="card-custom">
          <div style="font-size:1.8rem;margin-bottom:14px"><?= $icon ?></div>
          <h4 style="font-size:1rem;font-weight:700;margin-bottom:10px"><?= $title ?></h4>
          <p style="font-size:.875rem"><?= $desc ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="cta-section section-pad">
  <div class="container text-center">
    <h2 class="section-title">Ready to Work with an Experienced Software Consultant?</h2>
    <p class="section-subtitle mx-auto mb-5">
      12+ years of experience helps reduce risk, improve decision-making, and support more reliable software delivery. Let’s discuss your project.
    </p>
    <a href="contact.php" class="btn-primary-custom"><i class="bi bi-envelope"></i> Contact TrustNova Tech</a>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>