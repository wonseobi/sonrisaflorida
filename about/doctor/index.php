<?php
$page_title       = 'Meet the Doctor | Sonrisa Dental Specialists';
$page_description = 'Learn about the orthodontic specialist at Sonrisa Dental Specialists — 30+ years of experience, 20,000+ smiles transformed, and a deep commitment to exceptional patient care in Orlando, FL.';
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
          <img src="/assets/images/dr-lach-page.jpg" alt="Our Orthodontic Specialist" style="width:100%;height:100%;object-fit:cover;border-radius:inherit;">
        </div>
        <div class="doctor-name-badge">
          <h2>Our Doctor</h2>
          <p class="doctor-specialty">Orthodontic Specialist</p>
        </div>
        <div class="doctor-quick-creds">
          <div class="doctor-quick-cred">
            <i class="fa-solid fa-graduation-cap"></i>
            UNC Chapel Hill &amp; U of Louisville
          </div>
          <div class="doctor-quick-cred">
            <i class="fa-solid fa-certificate"></i>
            Board Certified Specialist
          </div>
          <div class="doctor-quick-cred">
            <i class="fa-solid fa-star"></i>
            30+ Years of Experience
          </div>
          <div class="doctor-quick-cred">
            <i class="fa-solid fa-location-dot"></i>
            Orlando, Florida
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
        <h1>Meet Our Doctor</h1>
        <span class="doctor-role-label">Orthodontic Specialist &mdash; Sonrisa Dental Specialists</span>

        <p>With over 30 years of orthodontic experience in the Orlando area, he has helped transform more than 20,000 smiles — bringing the same patient-first dedication to every case. A graduate at the top of his class from the University of North Carolina at Chapel Hill School of Dentistry, he also earned a Master's Degree in Oral Biology from the University of Louisville, where his original research explored how computers can simulate and predict changes following orthodontic treatment.</p>

        <p>He dedicates 50–100 hours annually to continuing education and has been at the forefront of orthodontic innovation. He was one of the first specialists in Central Florida to introduce 3D scanning, printing, and robotics to his practice, and is one of the area's only Elite Preferred Invisalign® Providers — placing him in the top 1% of providers worldwide. He has also served as an assistant professor of orthodontics at the University of Florida College of Dentistry, sharing his expertise with the next generation of dental professionals.</p>

        <p>Beyond the practice, he is deeply committed to giving back. He founded the Smiles for Hope Foundation, a charity that provides life-changing orthodontic care to families who would otherwise go without. He has also sponsored hundreds of community events for local schools, athletic teams, and charitable organizations throughout Central Florida.</p>

        <div class="doctor-philosophy-quote">
          <p>"Every patient who walks through our doors deserves a personalized plan, honest guidance, and results they are proud to show off. That is the standard we hold ourselves to every single day."</p>
        </div>

        <a href="/dental-implants/survey.php" class="btn btn-primary">Schedule a Consultation</a>
      </div>

    </div>

  </div>
</section>

<!-- ── CTA ── -->
<section class="section doctor-cta-dark" style="background-image:url('/assets/images/about-hero.jpg');background-size:cover;background-position:center;">
  <div class="container">
    <span class="section-label doctor-cta-label">Ready to Get Started?</span>
    <h2 class="doctor-cta-heading">Meet the Doctor <span class="text-primary">In Person.</span></h2>
    <p class="doctor-cta-sub">The best way to experience his approach is to come in for a consultation. You will receive a full evaluation, an honest assessment of your options, and a personalized treatment plan — at no pressure, ever. Same-day appointments available.</p>
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
