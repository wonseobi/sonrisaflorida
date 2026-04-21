<?php
$page_title       = 'Virtual Office Tour | Sonrisa Orthodontics';
$page_description = 'Take a virtual tour of Sonrisa Orthodontics in Oviedo, FL. See our state-of-the-art treatment bays, digital scanning room, and comfortable waiting area before you visit.';
$page_class       = 'page-service';
$nav_type         = 'orthodontics';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<section class="hero hero-sm">
  <div class="hero-bg">
    <img src="/assets/images/cosmetic_dentistry01.jpg" alt="Sonrisa Orthodontics office tour" draggable="false">
  </div>
  <div class="hero-overlay"></div>
  <div class="hero-inner">
    <div class="hero-content">
      <span class="hero-badge">Sonrisa Orthodontics</span>
      <h1>See Our Office<br><span class="hero-accent">Before You Visit.</span></h1>
      <p class="hero-sub">We want you to feel at home the moment you walk in. Take a look around before your first appointment.</p>
      <a href="/orthodontics/survey_orthodontics.php" class="btn btn-primary btn-lg">Book a Free Consultation</a>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/service-nav-orthodontics.php'; ?>

<!-- Intro Two-Col -->
<section class="section">
  <div class="container">
    <div class="two-col">
      <div class="two-col-text">
        <span class="section-label">A Space Designed for You</span>
        <h2>Modern, Welcoming,<br><span class="text-primary">Built for Comfort.</span></h2>
        <p>Our Oviedo office was designed with one goal in mind: making every patient feel comfortable, informed, and cared for from the moment they arrive. From the open reception area to our private treatment bays, every detail was chosen to support a stress-free orthodontic experience.</p>
        <p>We use state-of-the-art equipment — including iTero digital scanners, digital X-ray systems, and advanced chairside monitors — so your care is as precise as it is comfortable. No messy impressions, no guesswork, no outdated tools.</p>
        <ul class="experts-checklist">
          <li><i class="fa-solid fa-circle-check"></i> Bright, clean, modern treatment environment</li>
          <li><i class="fa-solid fa-circle-check"></i> Private treatment bays for patient comfort</li>
          <li><i class="fa-solid fa-circle-check"></i> Digital scanning room — no traditional impressions</li>
          <li><i class="fa-solid fa-circle-check"></i> Convenient Oviedo location with easy parking</li>
        </ul>
        <a href="/orthodontics/survey_orthodontics.php" class="btn btn-primary">Schedule Your Visit</a>
      </div>
      <div class="two-col-img">
        <img src="/assets/images/cosmetic_dentistry02.jpg" alt="Modern orthodontics office interior" draggable="false">
      </div>
    </div>
  </div>
</section>

<!-- Amenities Tech Pillars -->
<section class="section">
  <div class="container">
    <div class="section-header text-center">
      <span class="section-label">Office Amenities</span>
      <h2>Every Detail, Thought Through</h2>
    </div>
    <div class="tech-pillars">
      <div class="tech-pillar">
        <div class="tech-pillar-icon"><i class="fa-solid fa-couch"></i></div>
        <h4>Comfort Seating</h4>
        <p>Plush ergonomic seating throughout the waiting area and treatment chairs designed for extended comfort during longer appointments.</p>
      </div>
      <div class="tech-pillar">
        <div class="tech-pillar-icon"><i class="fa-solid fa-x-ray"></i></div>
        <h4>Digital X-Rays</h4>
        <p>Low-radiation digital X-ray systems provide immediate, high-resolution images with a fraction of the exposure of traditional film.</p>
      </div>
      <div class="tech-pillar">
        <div class="tech-pillar-icon"><i class="fa-solid fa-shield-halved"></i></div>
        <h4>Private Treatment Bays</h4>
        <p>Semi-private treatment areas give you space and quiet during your adjustment appointments without feeling exposed or rushed.</p>
      </div>
      <div class="tech-pillar">
        <div class="tech-pillar-icon"><i class="fa-solid fa-child"></i></div>
        <h4>Kids' Play Area</h4>
        <p>A dedicated play corner keeps younger siblings entertained while parents and older patients focus on their care without distraction.</p>
      </div>
    </div>
  </div>
</section>

<!-- Dark CTA -->
<section class="section page-cta-dark" style="background-image: url('/assets/images/cta.jpg');">
  <div class="container">
    <span class="section-label">We'd Love to Meet You</span>
    <h2>Come See the Office<br><span class="text-primary">In Person — Free.</span></h2>
    <p>Your complimentary consultation is the perfect opportunity to tour the office, meet our team, and get your personalized treatment plan — all at no charge.</p>
    <a href="/orthodontics/survey_orthodontics.php" class="btn btn-primary btn-lg">Book a Free Consultation</a>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
