<?php
$page_title       = 'Oviedo Office — Contact | Sonrisa Orthodontics';
$page_description = 'Contact Sonrisa Orthodontics at our Oviedo, FL office. Address: 4250 Alafaya Trail Suite 180, Oviedo, FL 32765. Phone: (407) 359-1960. Mon–Fri 8am–5pm.';
$page_class       = 'page-service';
$nav_type         = 'orthodontics';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<section class="hero hero-sm">
  <div class="hero-bg">
    <img src="/assets/images/about_us01.jpg" alt="Sonrisa Orthodontics Oviedo office" draggable="false">
  </div>
  <div class="hero-overlay"></div>
  <div class="hero-inner">
    <div class="hero-content">
      <span class="hero-badge">Sonrisa Orthodontics</span>
      <h1>Visit Our<br><span class="hero-accent">Oviedo Office.</span></h1>
      <p class="hero-sub">Conveniently located on Alafaya Trail in Oviedo, FL — serving the entire East Orlando community.</p>
      <a href="/orthodontics/survey_orthodontics.php" class="btn btn-primary btn-lg">Book a Free Consultation</a>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/service-nav-orthodontics.php'; ?>

<!-- Office Info -->
<section class="section">
  <div class="container">
    <div class="two-col">
      <div class="two-col-text">
        <span class="section-label">Our Location</span>
        <h2>Oviedo's Trusted<br><span class="text-primary">Orthodontic Specialists.</span></h2>
        <p>Our Oviedo office is designed from the ground up to deliver a premium orthodontic experience in a welcoming, modern environment. With easy access from Alafaya Trail and ample free parking, we make every visit as convenient as possible for patients and families throughout East Orlando.</p>

        <div style="margin-top:1.5rem;">
          <h4 style="margin-bottom:.5rem;color:var(--color-primary);"><i class="fa-solid fa-location-dot" style="margin-right:.5rem;"></i>Address</h4>
          <p style="margin:0;">4250 Alafaya Trail Suite 180<br>Oviedo, FL 32765</p>
        </div>

        <div style="margin-top:1.25rem;">
          <h4 style="margin-bottom:.5rem;color:var(--color-primary);"><i class="fa-solid fa-phone" style="margin-right:.5rem;"></i>Phone</h4>
          <p style="margin:0;"><a href="tel:+14073591960" style="font-weight:600;font-size:1.1rem;">(407) 359-1960</a></p>
        </div>

        <div style="margin-top:1.25rem;">
          <h4 style="margin-bottom:.5rem;color:var(--color-primary);"><i class="fa-solid fa-clock" style="margin-right:.5rem;"></i>Office Hours</h4>
          <p style="margin:0;">Monday – Friday: 8:00 AM – 5:00 PM<br>Saturday: By appointment<br>Sunday: Closed</p>
        </div>

        <a href="/orthodontics/survey_orthodontics.php" class="btn btn-primary" style="margin-top:1.5rem;">Book a Free Consultation</a>
      </div>
      <div class="two-col-img">
        <img src="/assets/images/about_us.jpg" alt="Sonrisa Orthodontics Oviedo exterior" draggable="false">
      </div>
    </div>
  </div>
</section>

<!-- Map -->
<section class="section section-light">
  <div class="container">
    <div class="section-header text-center">
      <span class="section-label">Find Us</span>
      <h2>We're Easy to Find</h2>
    </div>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/dual-locations-map.php'; ?>
  </div>
</section>

<!-- Contact Form Placeholder -->
<section class="section">
  <div class="container">
    <div class="section-header text-center">
      <span class="section-label">Get in Touch</span>
      <h2>Send Us a Message</h2>
    </div>
    <div style="max-width:600px;margin:0 auto;border:2px solid #e0e0e0;border-radius:12px;padding:3rem;text-align:center;">
      <i class="fa-solid fa-envelope" style="font-size:3rem;color:var(--color-primary);margin-bottom:1rem;display:block;"></i>
      <h3 style="margin-bottom:.75rem;">Contact Form Coming Soon</h3>
      <p style="color:#666;margin-bottom:1.5rem;">Our online contact form is launching soon. In the meantime, please call or visit us directly.</p>
      <p style="font-weight:700;font-size:1.2rem;margin-bottom:.25rem;"><a href="tel:+14073591960">(407) 359-1960</a></p>
      <p style="color:#666;font-size:.9rem;margin-bottom:1rem;">Mon–Fri 8am–5pm · Sat by appointment</p>
      <p style="color:#666;font-size:.9rem;">4250 Alafaya Trail Suite 180, Oviedo, FL 32765</p>
    </div>
  </div>
</section>

<!-- Dark CTA -->
<section class="section page-cta-dark" style="background-image: url('/assets/images/cta.jpg');">
  <div class="container">
    <span class="section-label">Come See Us</span>
    <h2>Your Free Consultation<br><span class="text-primary">Is Waiting.</span></h2>
    <p>Walk through our doors and you'll immediately feel the difference. Book your complimentary orthodontic consultation and meet the team dedicated to transforming your smile.</p>
    <a href="/orthodontics/survey_orthodontics.php" class="btn btn-primary btn-lg">Book a Free Consultation</a>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
