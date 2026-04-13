<?php
$pageTitle       = 'Technologies – Full Stack PHP, Python, React, AWS | TrustNova Tech';
$pageDescription = 'TrustNova Tech works with PHP, Python, JavaScript, React, Laravel, MySQL, PostgreSQL, Docker, AWS, Kubernetes, and other modern technologies.';
require_once __DIR__ . '/includes/header.php';

$techGroups = [
  [
    'label' => 'Backend & Languages',
    'icon'  => 'bi-server',
    'desc'  => 'Hands-on backend development across multiple languages and paradigms, from PHP and Python to Java, C, and shell scripting.',
    'items' => ['PHP','OOP','Python','Java','C','C++','Shell Scripting','JavaScript','JSON','XML'],
  ],
  [
    'label' => 'Frontend',
    'icon'  => 'bi-display',
    'desc'  => 'Responsive and interactive frontends built with modern standards, practical frameworks, and a strong focus on usability.',
    'items' => ['HTML5','CSS3','JavaScript','AJAX','jQuery','Bootstrap','Angular','React.js'],
  ],
  [
    'label' => 'Databases',
    'icon'  => 'bi-database',
    'desc'  => 'Relational, NoSQL, and in-memory storage solutions selected according to business logic, performance needs, and scale.',
    'items' => ['MySQL','SQL','MongoDB','MariaDB','DynamoDB','Redis'],
  ],
  [
    'label' => 'Servers / Platforms / OS',
    'icon'  => 'bi-hdd-network',
    'desc'  => 'Experience with Linux server administration, web server setup, local development environments, and platform-level configuration.',
    'items' => ['Apache','Nginx','Linux','Ubuntu','RedHat','CentOS','Windows','macOS','LAMP','WAMP','XAMPP'],
  ],
  [
    'label' => 'Frameworks & CMS',
    'icon'  => 'bi-layers',
    'desc'  => 'Production experience with frameworks and CMS platforms used for maintainable software delivery and fast implementation.',
    'items' => ['Laravel','CodeIgniter','WordPress','Joomla'],
  ],
  [
    'label' => 'APIs & Messaging',
    'icon'  => 'bi-plug',
    'desc'  => 'Integration work across APIs, web services, and messaging systems for reliable communication between platforms and services.',
    'items' => ['REST APIs','SOAP','Web Services','RabbitMQ'],
  ],
  [
    'label' => 'Cloud & DevOps & Tools',
    'icon'  => 'bi-cloud',
    'desc'  => 'Cloud infrastructure, deployment tooling, container workflows, and delivery support for practical and stable software operations.',
    'items' => ['AWS','Azure','Docker','Jenkins','Terraform','Git','GitHub Actions','Ansible','Kubernetes','Composer','JIRA','Scrum','Kanban','ServiceNow','Memcached','Elastic Stack'],
  ],
];

$techIcons = [
  // Backend & Languages
  'PHP' => 'bi-filetype-php',
  'OOP' => 'bi-boxes',
  'Python' => 'bi-terminal',
  'Java' => 'bi-cup-hot',
  'C' => 'bi-c-circle',
  'C++' => 'bi-c-square',
  'Shell Scripting' => 'bi-terminal',
  'JavaScript' => 'bi-filetype-js',
  'JSON' => 'bi-braces',
  'XML' => 'bi-code-slash',

  // Frontend
  'HTML5' => 'bi-filetype-html',
  'CSS3' => 'bi-filetype-css',
  'AJAX' => 'bi-arrow-repeat',
  'jQuery' => 'bi-code-square',
  'Bootstrap' => 'bi-bootstrap',
  'Angular' => 'bi-triangle',
  'React.js' => 'bi-circle-square',

  // Databases
  'MySQL' => 'bi-database',
  'SQL' => 'bi-database-fill',
  'MongoDB' => 'bi-database-gear',
  'MariaDB' => 'bi-database-check',
  'DynamoDB' => 'bi-lightning-charge',
  'Redis' => 'bi-memory',

  // Servers / Platforms / OS
  'Apache' => 'bi-server',
  'Nginx' => 'bi-hdd-network',
  'Linux' => 'bi-terminal',
  'Ubuntu' => 'bi-terminal-fill',
  'RedHat' => 'bi-hdd-rack',
  'CentOS' => 'bi-hdd-stack',
  'Windows' => 'bi-windows',
  'macOS' => 'bi-apple',
  'LAMP' => 'bi-stack',
  'WAMP' => 'bi-stack',
  'XAMPP' => 'bi-box',

  // Frameworks & CMS
  'Laravel' => 'bi-layers',
  'CodeIgniter' => 'bi-lightning',
  'WordPress' => 'bi-wordpress',
  'Joomla' => 'bi-grid-3x3-gap',

  // APIs & Messaging
  'REST APIs' => 'bi-plug',
  'SOAP' => 'bi-diagram-3',
  'Web Services' => 'bi-globe',
  'RabbitMQ' => 'bi-diagram-2',

  // Cloud & DevOps & Tools
  'AWS' => 'bi-cloud',
  'Azure' => 'bi-cloud-fill',
  'Docker' => 'bi-box-seam',
  'Jenkins' => 'bi-gear',
  'Terraform' => 'bi-diagram-3-fill',
  'Git' => 'bi-git',
  'GitHub Actions' => 'bi-github',
  'Ansible' => 'bi-diagram-2-fill',
  'Kubernetes' => 'bi-boxes',
  'Composer' => 'bi-music-note-beamed',
  'JIRA' => 'bi-kanban',
  'Scrum' => 'bi-people',
  'Kanban' => 'bi-kanban-fill',
  'ServiceNow' => 'bi-gear-wide-connected',
  'Memcached' => 'bi-lightning-fill',
  'Elastic Stack' => 'bi-bar-chart-line',
];
?>

<section class="page-hero">
  <div class="container position-relative" style="z-index:2">
    <div class="breadcrumb-custom"><a href="index.php">Home</a><span class="sep">/</span> Technologies</div>
    <span class="section-label">Tech Stack</span>
    <h1>Technologies Built on Real Project Experience</h1>
    <p>TrustNova Tech works with practical, proven technologies across backend, frontend, databases, cloud, DevOps, and enterprise integration.</p>
  </div>
</section>

<section class="section-pad">
  <div class="container">
    <div class="row g-4">
      <?php foreach ($techGroups as $i => $group): ?>
      <div class="col-12 reveal reveal-delay-<?= ($i % 4) + 1 ?>">
        <div class="tech-category">
          <div class="tech-category-title">
            <i class="bi <?= htmlspecialchars($group['icon']) ?>"></i>
            <?= htmlspecialchars($group['label']) ?>
          </div>

          <p style="font-size:.875rem;color:var(--text-muted);margin-bottom:18px;max-width:680px">
            <?= htmlspecialchars($group['desc']) ?>
          </p>

          <div class="tech-badges-wrap">
            <?php foreach ($group['items'] as $item): ?>
              <?php $iconClass = $techIcons[$item] ?? 'bi-circle'; ?>
              <span class="tech-badge">
                <i class="bi <?= htmlspecialchars($iconClass) ?>" style="margin-right:7px;"></i>
                <?= htmlspecialchars($item) ?>
              </span>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section-pad bg-navy-2">
  <div class="container">
    <div class="text-center mb-5">
      <span class="section-label">Technology Philosophy</span>
      <h2 class="section-title">Technology Chosen with Purpose</h2>
      <p class="section-subtitle mx-auto">
        The goal is not to use every trendy framework. The goal is to choose maintainable, secure, and practical technologies that fit the business problem.
      </p>
    </div>

    <div class="row g-4 justify-content-center">
      <?php
      $pillars = [
        ['🛡️','Security & Reliability','Preference is given to technologies with strong security practices, broad adoption, and dependable long-term support.'],
        ['📦','Maintainability','Technology choices are made with future updates, readability, and real-world maintenance in mind.'],
        ['🚀','Performance at Scale','Solutions are planned for speed, efficiency, and growth from the beginning rather than patched later.'],
        ['🔄','Integration Readiness','Tools are selected for compatibility, ecosystem strength, documentation quality, and practical integration potential.'],
      ];
      foreach ($pillars as [$icon, $title, $desc]): ?>
      <div class="col-md-6 col-lg-3 reveal">
        <div class="card-custom text-center">
          <div style="font-size:2.2rem;margin-bottom:14px"><?= $icon ?></div>
          <h4 style="font-size:1rem;font-weight:700;margin-bottom:10px"><?= htmlspecialchars($title) ?></h4>
          <p style="font-size:.85rem"><?= htmlspecialchars($desc) ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="cta-section section-pad">
  <div class="container text-center">
    <h2 class="section-title">Have a Tech Stack in Mind?</h2>
    <p class="section-subtitle mx-auto mb-5">
      Whether you want to work with your current stack or need help choosing the right technologies for a new project, let’s discuss it.
    </p>
    <a href="contact.php" class="btn-primary-custom"><i class="bi bi-chat-dots"></i> Get in Touch</a>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>