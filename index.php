<?php
$pageTitle       = 'TrustNova Tech – Secure & Scalable Software Solutions | Germany';
$pageDescription = 'TrustNova Tech is a Germany-based freelance software consultancy helping businesses build modern websites, SaaS platforms, AI-powered applications, and custom business software with secure architecture and strong engineering practices.';
require_once __DIR__ . '/includes/header.php';
?>

<!-- ═══════════════════ HERO ═══════════════════ -->
<section class="hero">
  <div class="container position-relative" style="z-index:2">
    <div class="row align-items-center g-5">
      <div class="col-lg-6">
        <div class="hero-eyebrow">
          <span>🇩🇪 Germany-Based Software Freelancer · 12+ Years of Experience</span>
        </div>
        <h1 class="hero-title">Secure and <span>Scalable Software</span> Solutions</h1>
        <p class="hero-subtitle">
          TrustNova Tech is a Germany-based freelance software consultancy helping businesses build modern websites, SaaS platforms, AI-powered applications, and custom business software with secure architecture and strong engineering practices.
        </p>

        <div class="hero-buttons">
          <a href="services.php" class="btn-primary-custom"><i class="bi bi-grid-3x3-gap-fill"></i> Services</a>
          <a href="contact.php" class="btn-outline-custom"><i class="bi bi-chat-dots"></i> Contact</a>
          <a href="products.php" class="btn-outline-custom"><i class="bi bi-box-seam"></i> Products</a>
        </div>

        <div class="hero-trust">
          <div class="trust-item">
            <div class="trust-icon">🏆</div>
            <div class="trust-text"><strong>12+ Years</strong><span>Experience</span></div>
          </div>
          <div class="trust-item">
            <div class="trust-icon">🇩🇪</div>
            <div class="trust-text"><strong>Germany-Based</strong><span>Freelancer</span></div>
          </div>
          <div class="trust-item">
            <div class="trust-icon">🔐</div>
            <div class="trust-text"><strong>Secure Dev</strong><span>By Design</span></div>
          </div>
          <div class="trust-item">
            <div class="trust-icon">📈</div>
            <div class="trust-text"><strong>Scalable</strong><span>Solutions</span></div>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="hero-visual">
          <div class="hero-card">
            <div class="hero-badge"><i class="bi bi-circle-fill" style="font-size:.5rem"></i> Production Ready</div>

            <div class="hero-code-window">
              <div class="code-header">
                <span class="dot dot-red"></span>
                <span class="dot dot-yellow"></span>
                <span class="dot dot-green"></span>
                <span style="margin-left:10px;font-size:.72rem;color:#64748b">TrustNova :: Secure Architecture</span>
              </div>

              <div class="code-body">
                <span class="code-comment">// TrustNova Tech – Core Principles</span><br>
                <span class="code-keyword">class</span> <span class="code-var">SecureApp</span> {<br>
                &nbsp;&nbsp;<span class="code-keyword">public function</span> <span class="code-var">build</span>(): <span class="code-var">Solution</span> {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="code-keyword">return</span> <span class="code-keyword">new</span> <span class="code-var">Solution</span>([<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="code-string">'security'</span>  => <span class="code-string">'by_design'</span>,<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="code-string">'scale'</span>     => <span class="code-string">'practical'</span>,<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="code-string">'delivery'</span>  => <span class="code-string">'reliable'</span>,<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="code-string">'trust'</span>     => <span class="code-var">PHP_INT_MAX</span>,<br>
                &nbsp;&nbsp;&nbsp;&nbsp;]);<br>
                &nbsp;&nbsp;}<br>
                }
              </div>
            </div>

            <div class="row g-3 mt-3">
              <div class="col-4 text-center">
                <div style="font-size:1.6rem;font-weight:900;color:#fff"><span class="counter" data-target="12">0</span>+</div>
                <div style="font-size:.72rem;color:var(--text-muted)">Years</div>
              </div>
              <div class="col-4 text-center" style="border-left:1px solid var(--border-light);border-right:1px solid var(--border-light)">
                <div style="font-size:1.6rem;font-weight:900;color:#fff"><span class="counter" data-target="50">0</span>+</div>
                <div style="font-size:.72rem;color:var(--text-muted)">Projects</div>
              </div>
              <div class="col-4 text-center">
                <div style="font-size:1.6rem;font-weight:900;color:#fff"><span class="counter" data-target="18">0</span></div>
                <div style="font-size:.72rem;color:var(--text-muted)">Largest Team Led</div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ═══════════════════ WHY CHOOSE US ═══════════════════ -->
<section class="section-pad bg-navy-2">
  <div class="container">
    <div class="row g-5 align-items-center">
      <div class="col-lg-5">
        <span class="section-label">Why TrustNova Tech</span>
        <h2 class="section-title">Engineering You Can <span class="text-blue">Rely On</span></h2>
        <p class="section-subtitle mb-0">
          TrustNova Tech combines hands-on software engineering, project leadership, and clear communication to deliver solutions that are practical, secure, and built to last.
        </p>
      </div>

      <div class="col-lg-7">
        <div class="row g-3">
          <?php
          $reasons = [
            ['bi-shield-lock','Secure by Design','Every project follows OWASP principles, input validation, secure coding practices, and careful data handling from day one.'],
            ['bi-lightning-charge','12+ Years of Experience','More than a decade of hands-on experience in software development, architecture, and enterprise project delivery.'],
            ['bi-people','Leadership Background','Experience leading and coordinating development teams of up to 18 engineers across complex projects and multiple stakeholders.'],
            ['bi-globe2','Germany-Based Freelancer','Based in Germany with a strong focus on quality, reliability, and professional delivery standards.'],
            ['bi-gear-wide-connected','Full-Stack Expertise','From backend systems to frontend interfaces, cloud infrastructure, and APIs — projects are handled end-to-end with a practical engineering mindset.'],
            ['bi-headset','Long-Term Support','Ongoing support, maintenance, and improvement help keep systems stable, secure, and ready to scale.'],
          ];
          foreach ($reasons as [$icon, $title, $desc]): ?>
          <div class="col-md-6 reveal">
            <div class="why-item">
              <div class="why-icon"><i class="<?= $icon ?>"></i></div>
              <div>
                <h5><?= $title ?></h5>
                <p><?= $desc ?></p>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════ SERVICES OVERVIEW ═══════════════════ -->
<section class="section-pad">
  <div class="container">
    <div class="text-center mb-5">
      <span class="section-label">Services</span>
      <h2 class="section-title">Services Offered</h2>
      <p class="section-subtitle mx-auto">
        From custom software to AI-powered platforms, TrustNova Tech delivers solutions designed around real business needs.
      </p>
    </div>

    <div class="row g-4">
      <?php
      $services = [
        ['bi-code-slash','Custom Software Development','Tailor-made software engineered around your requirements, workflows, and business logic.'],
        ['bi-window','Web Development','Modern, fast, responsive web applications built with proven technologies and clean architecture.'],
        ['bi-cloud-arrow-up','SaaS Development','Cloud-ready SaaS products designed for performance, maintainability, and long-term scalability.'],
        ['bi-robot','AI Solutions','Intelligent systems, automation tools, and AI-powered features integrated into real business workflows.'],
        ['bi-plug','API Integration','Seamless integration of third-party services, REST APIs, SOAP interfaces, and custom middleware.'],
        ['bi-wrench-adjustable','Maintenance & Support','Ongoing technical support, optimisation, debugging, and improvement for live systems.'],
      ];
      foreach ($services as $i => [$icon, $title, $desc]): ?>
      <div class="col-md-6 col-lg-4 reveal reveal-delay-<?= ($i % 3) + 1 ?>">
        <div class="card-custom">
          <div class="card-icon"><i class="<?= $icon ?>"></i></div>
          <h3><?= $title ?></h3>
          <p><?= $desc ?></p>
          <a href="services.php" class="text-blue" style="font-size:.85rem;font-weight:600">
            Learn more <i class="bi bi-arrow-right"></i>
          </a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <div class="text-center mt-5">
      <a href="services.php" class="btn-primary-custom">View Services <i class="bi bi-arrow-right"></i></a>
    </div>
  </div>
</section>

<!-- ═══════════════════ STATS ═══════════════════ -->
<section class="stats-section section-pad-sm">
  <div class="container">
    <div class="row g-0">
      <?php
      $stats = [
        ['12+','counter','data-target="12"','Years of Experience'],
        ['50+','counter','data-target="50"','Projects Delivered'],
        ['18','counter','data-target="18"','Largest Team Led'],
        ['100%','','','Client-Focused Approach'],
      ];
      foreach ($stats as [$num, $class, $attr, $label]): ?>
      <div class="col-6 col-lg-3">
        <div class="stat-card">
          <span class="stat-number">
            <?php if ($class): ?>
              <span class="<?= $class ?>" <?= $attr ?>><?= (int)$num ?></span><span class="stat-suffix"><?= ltrim($num, '0123456789') ?></span>
            <?php else: ?>
              <?= $num ?>
            <?php endif; ?>
          </span>
          <span class="stat-label"><?= $label ?></span>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══════════════════ TECHNOLOGIES SNAPSHOT ═══════════════════ -->
<section class="section-pad bg-navy-2">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-4">
        <span class="section-label">Tech Stack</span>
        <h2 class="section-title">Battle-Tested <span class="text-blue">Technologies</span></h2>
        <p class="section-subtitle mb-4">
          The right tools are chosen for the right job — from PHP and Python backends to React frontends, cloud platforms, and Docker-based deployments.
        </p>
        <a href="technologies.php" class="btn-outline-custom">View Tech Stack <i class="bi bi-arrow-right"></i></a>
      </div>

      <div class="col-lg-8">
        <div class="tech-badges-wrap">
          <?php
          $techs = ['PHP','Laravel','Python','JavaScript','React.js','Node.js','MySQL','PostgreSQL','MongoDB','Redis','Docker','AWS','Azure','Linux','Git','REST API','RabbitMQ','Kubernetes','Terraform','Ansible','NGINX','Apache','Bootstrap','jQuery','WordPress','CI/CD'];
          foreach ($techs as $t): ?>
          <span class="tech-badge"><span class="badge-dot"></span><?= $t ?></span>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════ PRODUCTS HIGHLIGHT ═══════════════════ -->
<section class="section-pad">
  <div class="container">
    <div class="text-center mb-5">
      <span class="section-label">Products & Ideas</span>
      <h2 class="section-title">Software Built for Real Problems</h2>
      <p class="section-subtitle mx-auto">
        Alongside freelance client work, TrustNova Tech also explores selected product ideas and digital platforms focused on real-world business value.
      </p>
    </div>

    <div class="row g-4 justify-content-center">
      <?php
      $products = [
        ['🤖','AIHubpedia','Live Platform','Discover, explore, and compare AI tools across hundreds of categories and use cases in one place.','purple'],
        ['💬','FeedbackFlow','Concept Product','A concept for structured feedback collection and analysis to help businesses understand and act on customer insights.','blue'],
        ['🏢','Enterprise Solutions','Custom Software Direction','Examples of tailored internal tools, automation systems, and business applications built around operational needs.','green'],
      ];
      foreach ($products as [$emoji, $name, $tag, $desc, $color]): ?>
      <div class="col-md-6 col-lg-4 reveal">
        <div class="product-card">
          <div class="product-card-header">
            <div class="product-logo"><?= $emoji ?></div>
            <div>
              <h3><?= $name ?></h3>
              <div class="product-tag"><?= $tag ?></div>
            </div>
          </div>
          <div class="product-card-body">
            <p><?= $desc ?></p>
            <a href="products.php" class="btn-outline-custom mt-auto" style="font-size:.85rem;padding:10px 20px">
              Learn More <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══════════════════ PROCESS ═══════════════════ -->
<section class="section-pad bg-navy-2">
  <div class="container">
    <div class="row g-5 align-items-center">
      <div class="col-lg-5">
        <span class="section-label">How I Work</span>
        <h2 class="section-title">A Process Built for <span class="text-blue">Results</span></h2>
        <p class="section-subtitle">
          Each project follows a clear, collaborative delivery process that keeps you informed and ensures the final product is secure, maintainable, and aligned with your business goals.
        </p>
      </div>

      <div class="col-lg-7">
        <?php
        $steps = [
          ['Discovery','Understanding your goals, requirements, technical constraints, and business context through focused consultation.'],
          ['Planning','Defining architecture, stack, milestones, and delivery priorities before development begins.'],
          ['Design & Development','Building your solution iteratively with clean, modular, and well-structured code.'],
          ['Testing & Security Review','Carrying out QA, validation, security checks, and performance review before release.'],
          ['Deployment & Support','Handling go-live, infrastructure setup, monitoring, and ongoing improvement after launch.'],
        ];
        foreach ($steps as $i => [$title, $desc]): ?>
        <div class="process-step reveal reveal-delay-<?= $i + 1 ?>">
          <div class="step-number"><?= $i + 1 ?></div>
          <h4><?= $title ?></h4>
          <p><?= $desc ?></p>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════ TESTIMONIALS ═══════════════════ -->
<section class="section-pad">
  <div class="container">
    <div class="text-center mb-5">
      <span class="section-label">Work Style</span>
      <h2 class="section-title">What Clients Value</h2>
      <p class="section-subtitle mx-auto">
        The kind of feedback clients typically value in freelance software delivery: quality, communication, reliability, and practical problem-solving.
      </p>
    </div>

    <div class="row g-4">
      <?php
      $testimonials = [
        ['Q','Quality Focus','','Secure architecture, clean structure, and maintainable code are built into every project from the beginning.'],
        ['C','Clear Communication','','Expect transparent updates, practical recommendations, and direct communication throughout the project.'],
        ['R','Reliable Delivery','','Projects are approached with ownership, structured planning, and a strong focus on delivering real business value.'],
      ];
      foreach ($testimonials as $i => [$init, $name, $role, $text]): ?>
      <div class="col-md-4 reveal reveal-delay-<?= $i + 1 ?>">
        <div class="testimonial-card">
          <div class="testimonial-stars">★★★★★</div>
          <p class="testimonial-text">"<?= $text ?>"</p>
          <div class="testimonial-author">
            <div class="author-avatar"><?= $init ?></div>
            <div class="author-info">
              <strong><?= $name ?></strong>
              <?php if (!empty($role)): ?>
                <span><?= $role ?></span>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══════════════════ CTA ═══════════════════ -->
<section class="cta-section section-pad">
  <div class="container text-center">
    <span class="section-label">Ready to Start?</span>
    <h2 class="section-title mt-2">Let's Build Something Great Together</h2>
    <p class="section-subtitle mx-auto mb-5">
      Whether you already have a detailed specification or just an early idea, TrustNova Tech can help turn it into a secure, scalable, and practical software solution.
    </p>
    <div class="d-flex gap-3 justify-content-center flex-wrap">
      <a href="contact.php" class="btn-primary-custom"><i class="bi bi-envelope"></i> Contact Us</a>
      <a href="services.php" class="btn-outline-custom"><i class="bi bi-grid-3x3-gap-fill"></i> View Services</a>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>