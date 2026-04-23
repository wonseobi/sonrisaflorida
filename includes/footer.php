<!-- ── FOOTER ── -->
<footer class="site-footer">
  <div class="footer-inner container">

    <div class="footer-brand">
      <?php
        if (!empty($nav_type) && $nav_type === 'dental-implants') {
          $footer_home = '/dental-implants/';
        } elseif (!empty($nav_type) && $nav_type === 'orthodontics') {
          $footer_home = '/orthodontics/';
        } else {
          $footer_home = '/';
        }
      ?>
      <a href="<?= $footer_home ?>" aria-label="Sonrisa Dental Specialists — Home">
        <img src="/assets/images/logo.svg" alt="Sonrisa Dental Specialists logo" class="footer-logo">
      </a>
      <p class="footer-tagline">Florida's trusted doctors for implant surgery, oral surgery and orthodontics.</p>
    </div>

    <?php if (!empty($nav_type) && $nav_type === 'dental-implants'): ?>

    <div class="footer-col">
      <h3 class="footer-heading">Services</h3>
      <ul class="footer-links">
        <li><a href="/dental-implants/services/dental-implants/">Dental Implants</a></li>
        <li><a href="/dental-implants/services/full-mouth-dental-implants/">Full Mouth Dental Implants</a></li>
        <li><a href="/dental-implants/services/all-on-4/">All-on-4 Dental Implants</a></li>
        <li><a href="/dental-implants/services/all-on-6/">All-on-6 Dental Implants</a></li>
        <li><a href="/dental-implants/services/same-day/">Same-Day Dental Implants</a></li>
        <li><a href="/dental-implants/services/implant-supported-dentures/">Implant-Supported Dentures</a></li>
        <li><a href="/dental-implants/services/snap-in-dentures/">Snap-In Dentures</a></li>
      </ul>
    </div>

    <div class="footer-col">
      <h3 class="footer-heading">&nbsp;</h3>
      <ul class="footer-links">
        <li><a href="/dental-implants/services/zirconia/">Zirconia Dental Implants</a></li>
        <li><a href="/dental-implants/services/single-tooth/">Single Tooth Dental Implants</a></li>
        <li><a href="/dental-implants/services/multiple/">Multiple Dental Implants</a></li>
        <li><a href="/dental-implants/services/restoration/">Dental Implant Restoration</a></li>
        <li><a href="/dental-implants/services/bone-grafting/">Bone Grafting for Implants</a></li>
        <li><a href="/dental-implants/services/sinus-lift/">Sinus Lift Surgery</a></li>
        <li><a href="/dental-implants/services/maintenance/">Implant Maintenance</a></li>
      </ul>
    </div>

    <?php elseif (!empty($nav_type) && $nav_type === 'orthodontics'): ?>

    <div class="footer-col">
      <h3 class="footer-heading">Treatments</h3>
      <ul class="footer-links">
        <li><a href="/orthodontics/treatments/metal-braces/">Metal Braces</a></li>
        <li><a href="/orthodontics/treatments/ceramic-braces/">Ceramic Braces</a></li>
        <li><a href="/orthodontics/treatments/self-ligating-braces/">Self-Ligating Braces</a></li>
        <li><a href="/orthodontics/treatments/lingual-braces/">Lingual Braces</a></li>
        <li><a href="/orthodontics/treatments/invisalign/">Invisalign®</a></li>
        <li><a href="/orthodontics/treatments/clear-aligners/">Clear Aligners</a></li>
        <li><a href="/orthodontics/treatments/palate-expanders/">Palate Expanders</a></li>
      </ul>
    </div>

    <div class="footer-col">
      <h3 class="footer-heading">&nbsp;</h3>
      <ul class="footer-links">
        <li><a href="/orthodontics/treatments/accelerated-orthodontics/">Accelerated Orthodontics</a></li>
        <li><a href="/orthodontics/treatments/3d-scanning/">3D Scanning &amp; X-Rays</a></li>
        <li><a href="/orthodontics/treatments/sleep-apnea-tmj/">Sleep Apnea &amp; TMJ</a></li>
        <li><a href="/orthodontics/treatments/smile-makeover/">Smile Makeover</a></li>
        <li><a href="/orthodontics/treatments/teeth-whitening/">Teeth Whitening</a></li>
        <li><a href="/orthodontics/about/meet-the-team/">Meet the Team</a></li>
        <li><a href="/orthodontics/about/our-costs/">Our Costs</a></li>
      </ul>
    </div>

    <?php else: ?>

    <div class="footer-col">
      <h3 class="footer-heading">Services</h3>
      <ul class="footer-links">
        <li><a href="/dental-implants/">Dental Implants</a></li>
        <li><a href="/orthodontics/">Orthodontics</a></li>
        <li><a href="/contact/">Contact</a></li>
      </ul>
    </div>

    <div class="footer-col">
      <h3 class="footer-heading">Company</h3>
      <ul class="footer-links">
        <li><a href="/dental-implants/privacy-policy/">Privacy Policy</a></li>
        <li><a href="/dental-implants/terms-of-service/">Terms of Service</a></li>
      </ul>
    </div>

    <?php endif; ?>

    <div class="footer-col">
      <h3 class="footer-heading">Contact</h3>
      <ul class="footer-links footer-contact">
        <li>
          <a href="tel:+14073591960">Phone: (407) 359-1960</a>
        </li>
        <li>
          <a href="mailto:info@sonrisadental.com">Email: info@sonrisadental.com</a>
        </li>
        <li>
          <a href="https://maps.google.com/?q=4250+Alafaya+Trail+%23180+Oviedo+FL+32765" target="_blank" rel="noopener">4250 Alafaya Trail #180<br>Oviedo, FL 32765</a>
        </li>
        <li class="footer-social-row" style="margin-top:20px;padding-top:4px;">
          <a href="https://www.facebook.com/LachOrthodonticSpecialists" target="_blank" rel="noopener" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="https://www.instagram.com/lachortho/" target="_blank" rel="noopener" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
          <a href="https://www.linkedin.com/company/lach-orthodontic-specialists" target="_blank" rel="noopener" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
          <a href="https://x.com/LachOrthodontic" target="_blank" rel="noopener" aria-label="X (Twitter)"><i class="fa-brands fa-x-twitter"></i></a>
          <a href="https://www.youtube.com/user/LachOrthoSpecialists/videos" target="_blank" rel="noopener" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
          <a href="https://lachorthodontics.tumblr.com/" target="_blank" rel="noopener" aria-label="Tumblr"><i class="fa-brands fa-tumblr"></i></a>
          <a href="https://www.pinterest.com/lachorthodontic/" target="_blank" rel="noopener" aria-label="Pinterest"><i class="fa-brands fa-pinterest-p"></i></a>
        </li>
        <li class="footer-tagline-item" style="margin-top:20px;text-align:center;font-size:15px;font-style:italic;color:rgba(255,255,255,0.6);line-height:1.5;">"We are like the cardiologists of the mouth."</li>
      </ul>
    </div>

  </div>

  <div class="footer-bottom">
    <div class="container footer-bottom-inner">
      <p>&copy; <?php echo date('Y'); ?> Sonrisa Dental Specialists. All rights reserved.</p>
      <ul class="footer-legal">
        <?php
          if (!empty($nav_type) && $nav_type === 'orthodontics') {
            $legal_base = '/orthodontics';
          } else {
            $legal_base = '/dental-implants';
          }
        ?>
        <li><a href="<?= $legal_base ?>/privacy-policy/">Privacy Policy</a></li>
        <li><a href="<?= $legal_base ?>/terms-of-service/">Terms of Service</a></li>
      </ul>
    </div>
  </div>
</footer>

<!-- Main JS -->
<script src="/assets/js/main.js"></script>
</body>
</html>
