<?php
/*
Template Name: Dental Implants - Our Practice
*/
global $sonrisa_page;
$sonrisa_page = [
    'title'       => 'Our Practice | Sonrisa Dental Specialists',
    'description' => 'Discover Sonrisa Dental Specialists — a state-of-the-art implant practice built around patient comfort, precision technology, and life-changing results.',
    'class'       => 'page-our-practice',
    'nav_type'    => 'dental-implants',
];
get_header();
?>

<!-- ── HERO ── -->
<section class="hero hero-sm">
  <div class="hero-bg">
    <img src="/assets/images/about_us01.jpg" alt="Sonrisa Dental Specialists modern office" draggable="false">
  </div>
  <div class="hero-overlay"></div>
  <div class="hero-inner">
    <div class="hero-content">
      <span class="hero-badge">About Us</span>
      <h1>A Practice Built<br><span class="hero-accent">Around Your Smile.</span></h1>
      <p class="hero-sub">Sonrisa Dental Specialists is a dedicated implant practice — designed from the ground up to deliver precision, comfort, and transformational results for every patient.</p>
      <a href="/dental-implants/survey.php" class="btn btn-primary btn-lg">Book a Consultation</a>
    </div>
    <?php get_template_part('template-parts/hero-stats-implants'); ?>
  </div>
</section>

<?php get_template_part('template-parts/service-nav-implants'); ?>

<!-- ── WHO WE ARE ── -->
<section class="section">
  <div class="container">
    <div class="two-col">
      <div class="two-col-text">
        <span class="section-label">Who We Are</span>
        <h2>Dedicated to One Thing:<br><span class="text-primary">Dental Implants.</span></h2>
        <p>Sonrisa Dental Specialists is not a general dentistry practice that also places implants. We are an implant-only specialty clinic — meaning every procedure, every team member, and every piece of technology in our facility is focused exclusively on implant dentistry.</p>
        <p class="practice-tagline"><strong>"We are like the cardiologists of the mouth."</strong> A healthier mouth leads to a healthier life — and our practice is built on that conviction. Every implant we place, every gum we treat, every laser procedure we perform is guided by the understanding that oral health is systemic health.</p>
        <p>This singular focus allows us to deliver a depth of expertise, consistency of results, and level of patient care that general practices simply cannot match. When you choose Sonrisa, you are choosing a team that does this — and only this — every single day.</p>
        <ul class="experts-checklist">
          <li><i class="fa-solid fa-circle-check"></i> Implant-only specialty clinic</li>
          <li><i class="fa-solid fa-circle-check"></i> Board-certified implantologist on-site</li>
          <li><i class="fa-solid fa-circle-check"></i> In-house lab for faster turnaround</li>
        </ul>
        <a href="/dental-implants/survey.php" class="btn btn-primary">Book a Free Consultation</a>
      </div>
      <div class="two-col-img">
        <img src="/assets/images/Dental%20Implants02.jpg" alt="Sonrisa Dental Specialists implant team" draggable="false">
      </div>
    </div>
  </div>
</section>

<!-- ── OUR FACILITY ── -->
<section class="section rebuild-section">
  <div class="container">
    <div class="two-col">
      <div class="two-col-img">
        <img src="/assets/images/Dental%20Technology03.jpg" alt="State-of-the-art dental technology at Sonrisa" draggable="false">
      </div>
      <div class="two-col-text">
        <span class="section-label">Our Facility</span>
        <h2>A Modern Environment<br><span class="text-primary">Designed for Comfort.</span></h2>
        <p>Our clinic was designed with one goal in mind — making your implant experience as comfortable, efficient, and stress-free as possible. From the moment you arrive, you'll notice the difference: a calming, spa-like atmosphere, private treatment suites, and a team that treats you like a person, not a patient number.</p>
        <p>Every operatory is equipped with the latest digital imaging systems, cone-beam CT scanners, and chairside fabrication tools — so your entire treatment journey happens under one roof, without referrals or back-and-forth between offices.</p>
        <ul class="experts-checklist">
          <li><i class="fa-solid fa-circle-check"></i> Private, spa-like treatment suites</li>
          <li><i class="fa-solid fa-circle-check"></i> Cone-beam 3D CT imaging on-site</li>
          <li><i class="fa-solid fa-circle-check"></i> In-house milling &amp; same-day crowns</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ── CTA ── -->
<section class="section page-cta-dark" style="background-image: url('/assets/images/about_us01.jpg');">
  <div class="container">
    <span class="section-label">Visit Us</span>
    <h2>Come See the Practice<br><span class="text-primary">For Yourself.</span></h2>
    <p>We invite you to schedule a free consultation and experience the Sonrisa difference in person. Tour our facility, meet our team, and learn exactly what's possible for your smile — with no obligation.</p>
    <a href="/dental-implants/survey.php" class="btn btn-primary btn-lg">Book a Free Consultation</a>
  </div>
</section>

<?php get_template_part('template-parts/dual-locations-map'); ?>

<?php get_footer(); ?>
