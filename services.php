<?php
$pageTitle       = 'Services – Custom Software, Web, E-Commerce, SaaS & AI Solutions | TrustNova Tech';
$pageDescription = 'TrustNova Tech offers software development services including custom software, web development, e-commerce development, SaaS platforms, AI solutions, API integration, cloud support, DevOps, and maintenance.';
require_once __DIR__ . '/includes/header.php';
?>

<section class="page-hero">
  <div class="container position-relative" style="z-index:2">
    <div class="breadcrumb-custom"><a href="/">Home</a><span class="sep">/</span> Services</div>
    <span class="section-label">Services</span>
    <h1>End-to-End Software Development Services</h1>
    <p>From requirements and architecture to deployment and support, TrustNova Tech provides practical software services tailored to real business needs.</p>
  </div>
</section>

<section class="section-pad">
  <div class="container">
    <div class="row g-4">
      <?php
      $services = [
        [
          'bi-code-slash', 'Custom Software Development',
          'I design and build tailor-made software solutions from the ground up, engineered around your business processes, workflows, and technical requirements. The focus is always on practical delivery, maintainability, and long-term value.',
          ['Business process analysis and requirement clarification','Modular, maintainable, and well-documented architecture','Clean OOP and proven design principles','Integration with existing systems and data sources','Performance-conscious and secure development from day one']
        ],
        [
          'bi-window', 'Web Development',
          'I build modern, fast, and responsive web applications that work well across devices and browsers. From business websites to custom platforms, every project is built with clean code and usability in mind.',
          ['Full-stack development with PHP, Python, and JavaScript','Responsive design using HTML5, CSS3, and Bootstrap','Frontend applications with React and similar frameworks','WordPress and CMS-based implementations where appropriate','Performance, SEO, and accessibility best practices']
        ],
        [
          'bi-cart-check', 'E-Commerce & Online Shop Development',
          'I design and develop secure, scalable, and user-friendly e-commerce solutions that help businesses sell products and services online. From custom online shops to payment and logistics integrations, the focus is on conversion, performance, and reliable order processing.',
          ['Custom e-commerce platforms and online shop development','Shopping cart, checkout, and order management workflows','Payment gateway integration such as Stripe, PayPal, Klarna, or similar providers','Product catalogue, pricing, inventory, and customer management','SEO-friendly product pages and performance optimisation','Multi-language and multi-currency support where required','Integration with ERP, CRM, logistics, and third-party systems']
        ],
        [
          'bi-cloud-arrow-up', 'SaaS Development',
          'For businesses building digital products, I help design and develop SaaS platforms that are structured for growth, maintainability, and reliable delivery.',
          ['Scalable application architecture','User roles and access control','Subscription and account-based workflows','Dashboards, reporting, and usage visibility','Cloud-ready deployment planning']
        ],
        [
          'bi-robot', 'AI Solutions',
          'I help businesses integrate AI-powered features and automation into existing software or new platforms, always with a focus on real business usefulness rather than unnecessary complexity.',
          ['LLM and AI API integration','AI-assisted workflow automation','Chat and natural language interfaces','Data processing and structured automation flows','Practical, business-oriented AI implementation']
        ],
        [
          'bi-plug', 'API Integration',
          'I connect software systems with third-party services such as CRMs, ERPs, payment providers, communication tools, and external platforms so your systems work together reliably.',
          ['REST API and SOAP integration','Authentication with OAuth2, JWT, and API keys','Webhook and event-based integrations','Middleware and data exchange workflows','API documentation and maintainable integration structure']
        ],
        [
          'bi-wrench-adjustable', 'Maintenance & Support',
          'Software needs ongoing care after launch. I provide support for bug fixing, performance improvement, security updates, compatibility adjustments, and continuous improvement.',
          ['Bug fixing and issue resolution','Security and dependency updates','Performance review and optimisation','Feature enhancements and version improvements','Reliable technical support for live systems']
        ],
        [
          'bi-hdd-stack', 'Cloud & DevOps Support',
          'I support businesses with cloud deployment, Docker-based environments, deployment pipelines, and practical infrastructure improvements that reduce risk and improve release quality.',
          ['Cloud deployment support on AWS and Azure','Docker containerisation and environment setup','CI/CD pipeline support','Infrastructure planning with modern tooling','Monitoring, logging, and operational stability']
        ],
        [
          'bi-building', 'Enterprise Software Solutions',
          'For larger and more structured environments, I bring experience from enterprise-oriented projects involving complex systems, technical planning, stakeholder communication, and coordinated delivery.',
          ['Enterprise-focused architecture thinking','System integration and migration support','Large database and workflow considerations','Structured planning and stakeholder communication','Modernisation of older systems and platforms']
        ],
      ];

      foreach ($services as $i => [$icon, $title, $desc, $benefits]): ?>
      <div class="col-md-6 col-lg-6 reveal">
        <div class="service-card">
          <div class="service-icon"><i class="bi <?= $icon ?>"></i></div>
          <h3><?= $title ?></h3>
          <p><?= $desc ?></p>
          <ul class="service-benefits">
            <?php foreach ($benefits as $b): ?>
            <li><?= $b ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section-pad bg-navy-2">
  <div class="container">
    <div class="text-center mb-5">
      <span class="section-label">Security by Design</span>
      <h2 class="section-title">Every Project Built with Secure Development Principles</h2>
      <p class="section-subtitle mx-auto">Security is not something added at the end. It is part of how every solution is planned, developed, and reviewed.</p>
    </div>
    <div class="row g-4">
      <?php
      $security = [
        ['bi-database-lock','SQL Injection Prevention','Database interactions are handled with prepared statements and parameterised queries to reduce risk and improve reliability.'],
        ['bi-input-cursor-text','Input Validation','Inputs are checked against expected formats, lengths, and business rules before processing or storage.'],
        ['bi-shield-x','XSS Prevention','Dynamic output is escaped carefully to reduce cross-site scripting risks and improve frontend safety.'],
        ['bi-key','CSRF Protection','Sensitive forms and actions are protected with token-based request validation where needed.'],
        ['bi-lock','Secure Development Practices','Error handling, session security, access control, and careful data exposure are treated as part of the development process.'],
        ['bi-diagram-3','Clean Architecture','Structured code, separation of concerns, and maintainable application design help improve quality and reduce long-term risk.'],
      ];
      foreach ($security as [$icon, $title, $desc]): ?>
      <div class="col-md-6 col-lg-4 reveal">
        <div class="card-custom">
          <div class="card-icon"><i class="bi <?= $icon ?>"></i></div>
          <h4><?= $title ?></h4>
          <p><?= $desc ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="cta-section section-pad">
  <div class="container text-center">
    <h2 class="section-title">Ready to Discuss Your Project?</h2>
    <p class="section-subtitle mx-auto mb-5">Tell me what you want to build, and I will get back to you with a practical next-step assessment.</p>
    <a href="/contact" class="btn-primary-custom"><i class="bi bi-chat-dots"></i> Request a Consultation</a>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>