<?php
$page_title       = 'Meet the Doctor | Sonrisa Dental Specialists';
$page_description = 'Learn about the lead specialist at Sonrisa Dental Specialists — their education, board certifications, and commitment to exceptional patient care in Miami, FL.';
$page_class       = 'page-doctor';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<!-- ── PAGE HERO ── -->
<section class="hero hero-sm">
  <div class="hero-bg">
    <img src="/assets/images/about-hero.jpg" alt="Sonrisa Dental Specialists office" draggable="false">
  </div>
  <div class="hero-overlay"></div>
  <div class="hero-inner">
    <div class="hero-content">
      <span class="hero-badge">Sonrisa Dental Specialists</span>
      <h1>
        Meet the Doctor<br>
        <span class="hero-accent">Behind Your Smile</span>
      </h1>
      <p class="hero-sub">Board-certified, extensively trained, and genuinely passionate about transforming patients' lives — get to know the specialist leading your care at Sonrisa.</p>
      <a href="/dental-implants/survey.php" class="btn btn-primary btn-lg">Book a Consultation</a>
    </div>
  </div>
</section>

<!-- ── DOCTOR PROFILE ── -->
<section class="section">
  <div class="container">
    <div class="doctor-profile">

      <!-- Left: photo + quick credentials -->
      <div class="doctor-profile-left">
        <div class="doctor-profile-photo">
          <img src="/assets/images/dr-lach-page.jpg" alt="Dr. David Lach" style="width:100%;height:100%;object-fit:cover;border-radius:inherit;">
        </div>
        <div class="doctor-name-badge">
          <h2>Doctor #1</h2>
          <p class="doctor-specialty">Lead Specialist</p>
        </div>
        <div class="doctor-quick-creds">
          <div class="doctor-quick-cred">
            <i class="fa-solid fa-graduation-cap"></i>
            University / Dental School
          </div>
          <div class="doctor-quick-cred">
            <i class="fa-solid fa-certificate"></i>
            Board Certified Specialist
          </div>
          <div class="doctor-quick-cred">
            <i class="fa-solid fa-star"></i>
            10+ Years of Experience
          </div>
          <div class="doctor-quick-cred">
            <i class="fa-solid fa-location-dot"></i>
            Miami, Florida
          </div>
          <div class="doctor-quick-cred">
            <i class="fa-solid fa-language"></i>
            English &amp; Spanish
          </div>
        </div>
      </div>

      <!-- Right: bio -->
      <div class="doctor-profile-right">
        <span class="section-label">About the Doctor</span>
        <h1>Doctor #1, DDS</h1>
        <span class="doctor-role-label">Specialist Title &mdash; Sonrisa Dental Specialists</span>

        <p>This is a placeholder biography for Doctor #1. When your doctor's information is ready, this section will highlight their background, professional journey, and the path that led them to founding or joining Sonrisa Dental Specialists. It will speak to their passion for transforming patient lives through expert dental care.</p>

        <p>A graduate of [University / Dental School], Doctor #1 completed advanced specialty training at [Residency Program] and holds board certification in [Specialty]. With over [X] years of experience, they have treated thousands of patients and are recognized as one of the leading specialists in the Miami area.</p>

        <p>Outside of the practice, Doctor #1 is committed to continuing education — regularly attending national conferences and contributing to the advancement of modern dental techniques. Their goal is always the same: to give each patient a result that is both functionally sound and life-changing.</p>

        <div class="doctor-philosophy-quote">
          <p>"Every patient who walks through our doors deserves a personalized plan, honest guidance, and results they are proud to show off. That is the standard we hold ourselves to every single day."</p>
        </div>

        <a href="/dental-implants/survey.php" class="btn btn-primary">Schedule a Consultation</a>
      </div>

    </div>

    <!-- Stats bar -->
    <div class="doctor-stats-bar">
      <div class="doctor-stat-item">
        <strong>5,000+</strong>
        <span>Patients Treated</span>
      </div>
      <div class="doctor-stat-item">
        <strong>10+</strong>
        <span>Years of Experience</span>
      </div>
      <div class="doctor-stat-item">
        <strong>Board</strong>
        <span>Certified Specialist</span>
      </div>
      <div class="doctor-stat-item">
        <strong>4.9★</strong>
        <span>Average Patient Rating</span>
      </div>
    </div>
  </div>
</section>

<!-- ── CTA ── -->
<section class="section doctor-cta-dark" style="background-image:url('/assets/images/about-hero.jpg');background-size:cover;background-position:center;">
  <div class="container">
    <span class="section-label doctor-cta-label">Ready to Get Started?</span>
    <h2 class="doctor-cta-heading">Meet the Doctor <span class="text-primary">In Person.</span></h2>
    <p class="doctor-cta-sub">The best way to experience Doctor #1's approach is to come in for a consultation. You will receive a full evaluation, an honest assessment of your options, and a personalized treatment plan — at no pressure, ever. Same-day appointments available.</p>
    <a href="/dental-implants/survey.php" class="btn btn-primary btn-lg">Book Your Free Consultation</a>
  </div>
</section>

<!-- ── MAP ── -->
<div class="map-section">
  <iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12107.193937141243!2d-81.20743287856882!3d28.614089933807918!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88e767b5ac5083a5%3A0x2ae1d26301790e20!2sLach%20Orthodontic%20Specialists%20-%20Oviedo!5e0!3m2!1sen!2smx!4v1775580878244!5m2!1sen!2smx"
    width="100%" height="420" style="border:0;" allowfullscreen="" loading="lazy"
    referrerpolicy="no-referrer-when-downgrade"
    title="Sonrisa Dental Specialists location map">
  </iframe>
</div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
