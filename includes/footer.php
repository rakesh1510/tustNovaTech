<footer class="footer">
  <div class="container">
    <div class="row g-5">
      <!-- Brand -->
      <div class="col-lg-4">
        <div class="footer-brand">
          <h4>Trust<span>Nova</span> Tech</h4>
          <p>Germany-based software development and IT solutions company. Building secure, scalable, and reliable software for European and global businesses since 2012.</p>
          <div class="mt-4 d-flex gap-2 flex-wrap">
            <span class="footer-trust-badge"><i class="bi bi-shield-check"></i> Secure Development</span>
            <span class="footer-trust-badge"><i class="bi bi-geo-alt"></i> Germany-Based</span>
          </div>
        </div>
      </div>
      <!-- Quick Links -->
      <div class="col-6 col-lg-2">
        <p class="footer-heading">Company</p>
        <ul class="footer-links">
          <li><a href="/">Home</a></li>
          <li><a href="/about">About Us</a></li>
          <li><a href="/expertise">Experience</a></li>
          <li><a href="/contact">Contact</a></li>
          <li><a href="/privacy-policy">Privacy Policy</a></li>
          <li><a href="/impressum">Impressum</a></li>
        </ul>
      </div>
      <!-- Services -->
      <div class="col-6 col-lg-3">
        <p class="footer-heading">Services</p>
        <ul class="footer-links">
          <li><a href="/services">Custom Software Development</a></li>
          <li><a href="/services">Web Development</a></li>
          <li><a href="/services">SaaS Development</a></li>
          <li><a href="/services">AI Solutions</a></li>
          <li><a href="/services">API Integration</a></li>
          <li><a href="/services">Cloud & DevOps</a></li>
        </ul>
      </div>
      <!-- Products & Contact -->
      <div class="col-lg-3">
        <p class="footer-heading">Products</p>
        <ul class="footer-links mb-4">
          <li><a href="/products">AIHubpedia</a></li>
          <li><a href="/products">FeedbackFlow</a></li>
          <li><a href="/products">Enterprise Solutions</a></li>
        </ul>
        <p class="footer-heading">Get in Touch</p>
        <ul class="footer-links">
          <li><a href="/contact"><i class="bi bi-envelope me-1"></i>info@trustnovatech.de</a></li>
          <li><a href="/contact"><i class="bi bi-chat-dots me-1"></i>Start a Project</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-bottom mt-5">
  <div class="container">
    <div class="d-flex flex-wrap justify-content-between align-items-center gap-3">
      <p>&copy; <?= date('Y') ?> TrustNova Tech. All rights reserved.</p>
      <div class="d-flex gap-3">
        <a href="/privacy-policy" style="font-size:.8rem;color:rgba(255,255,255,.35)">Privacy Policy</a>
        <a href="/impressum" style="font-size:.8rem;color:rgba(255,255,255,.35)">Impressum</a>
        <a href="/sitemap.xml" style="font-size:.8rem;color:rgba(255,255,255,.35)">Sitemap</a>
      </div>
    </div>
  </div>
</div>
</footer>
<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Custom JS -->
<script src="assets/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
if (ob_get_level() > 0) {
    ob_end_flush();
}
?>
