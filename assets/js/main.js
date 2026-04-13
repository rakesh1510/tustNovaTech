/* TrustNova Tech – main.js */

/* ── Active nav link ─────────────────────────────────── */
(function () {
  const path = window.location.pathname.replace(/\/+$/, '') || '/index.php';
  document.querySelectorAll('.navbar-custom .nav-link').forEach(function (a) {
    const href = a.getAttribute('href') || '';
    if (href && (path === href || path.endsWith(href.replace(/^\//, '')))) {
      a.classList.add('active');
    }
  });
})();

/* ── Navbar scroll effect ────────────────────────────── */
(function () {
  const nav = document.querySelector('.navbar-custom');
  if (!nav) return;
  window.addEventListener('scroll', function () {
    nav.classList.toggle('scrolled', window.scrollY > 40);
  }, { passive: true });
})();

/* ── Scroll-to-top button ────────────────────────────── */
(function () {
  const btn = document.getElementById('scrollTop');
  if (!btn) return;
  window.addEventListener('scroll', function () {
    btn.classList.toggle('show', window.scrollY > 300);
  }, { passive: true });
  btn.addEventListener('click', function () {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });
})();

/* ── Scroll-reveal animations ────────────────────────── */
(function () {
  const els = document.querySelectorAll('.reveal');
  if (!els.length) return;
  const observer = new IntersectionObserver(function (entries) {
    entries.forEach(function (e) {
      if (e.isIntersecting) {
        e.target.classList.add('revealed');
        observer.unobserve(e.target);
      }
    });
  }, { threshold: 0.12 });
  els.forEach(function (el) { observer.observe(el); });
})();

/* ── Animated counters ───────────────────────────────── */
(function () {
  function animateCount(el) {
    var target = parseInt(el.dataset.target || el.innerText, 10);
    if (isNaN(target)) return;
    var duration = 1600;
    var start = null;
    function step(ts) {
      if (!start) start = ts;
      var progress = Math.min((ts - start) / duration, 1);
      var eased = 1 - Math.pow(1 - progress, 4);
      el.textContent = Math.floor(eased * target);
      if (progress < 1) requestAnimationFrame(step);
      else el.textContent = target;
    }
    requestAnimationFrame(step);
  }

  var counters = document.querySelectorAll('.counter');
  if (!counters.length) return;

  var observer = new IntersectionObserver(function (entries) {
    entries.forEach(function (e) {
      if (e.isIntersecting) {
        animateCount(e.target);
        observer.unobserve(e.target);
      }
    });
  }, { threshold: 0.5 });

  counters.forEach(function (el) { observer.observe(el); });
})();

/* ── XP bar animations ───────────────────────────────── */
(function () {
  var bars = document.querySelectorAll('.xp-bar-fill');
  if (!bars.length) return;
  var observer = new IntersectionObserver(function (entries) {
    entries.forEach(function (e) {
      if (e.isIntersecting) {
        var width = e.target.dataset.width || '80';
        e.target.style.width = width + '%';
        observer.unobserve(e.target);
      }
    });
  }, { threshold: 0.3 });
  bars.forEach(function (el) { observer.observe(el); });
})();

/* ── Active nav link ─────────────────────────────────── */
(function () {
  var path = window.location.pathname.split('/').pop() || 'index.php';
  document.querySelectorAll('.navbar-custom .nav-link').forEach(function (a) {
    var href = a.getAttribute('href') || '';
    if (href === path || (path === '' && href === 'index.php')) {
      a.classList.add('active');
    }
  });
})();

/* ── Tech badge interactive hover ────────────────────── */
(function () {
  var badges = document.querySelectorAll('.tech-badge');
  badges.forEach(function (b) {
    b.addEventListener('mouseenter', function () {
      b.style.transform = 'translateY(-3px)';
    });
    b.addEventListener('mouseleave', function () {
      b.style.transform = '';
    });
  });
})();

/* ── Contact form (AJAX validation preview) ──────────── */
(function () {
  var form = document.getElementById('contactForm');
  if (!form) return;

  form.addEventListener('submit', function () {
    var btn = form.querySelector('.btn-submit');
    if (btn) {
      btn.disabled = true;
      btn.textContent = 'Sending…';
    }
  });
})();
