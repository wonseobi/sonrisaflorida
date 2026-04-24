<?php
/*
Template Name: Dental Implants - Sinus Lift
*/
global $sonrisa_page;
$sonrisa_page = [
    'title'       => 'Sinus Lift Surgery for Upper Jaw Implants | Sonrisa Dental Specialists',
    'description' => 'A sinus lift adds bone to the upper jaw when sinus cavities sit too close to the implant site. It\'s a safe, proven procedure that opens the door to upper arch implants.',
    'class'       => 'page-service',
    'nav_type'    => 'dental-implants',
];
get_header();
?>

<!-- ── HERO ── -->
<section class="hero hero-sm">
  <div class="hero-bg">
    <img src="/assets/images/Dental%20Extractions%2005.jpg" alt="Sinus lift surgery for upper jaw implants at Sonrisa" draggable="false">
  </div>
  <div class="hero-overlay"></div>
  <div class="hero-inner">
    <div class="hero-content">
      <span class="hero-badge">Dental Implant Services</span>
      <h1>Sinus Lift<br><span class="hero-accent">Surgery.</span></h1>
      <p class="hero-sub">When the upper jaw lacks the bone height needed for posterior implants, a sinus lift procedure creates the space — safely and predictably — allowing you to proceed with implants you were told weren't possible.</p>
      <a href="/dental-implants/survey.php" class="btn btn-primary btn-lg">Book a Free Consultation</a>
    </div>
    <?php get_template_part('template-parts/hero-stats-implants'); ?>
  </div>
</section>

<?php get_template_part('template-parts/service-nav-implants'); ?>

<!-- ── WHAT IS A SINUS LIFT ── -->
<section class="section">
  <div class="container">
    <div class="two-col">
      <div class="two-col-text">
        <span class="section-label">The Procedure</span>
        <h2>Why the Sinus Gets<br><span class="text-primary">in the Way.</span></h2>
        <p>The maxillary sinuses are air-filled spaces directly above your upper back teeth. When upper teeth are lost, two things happen simultaneously: bone resorbs downward from the ridge, and the sinus floor can expand downward to fill the space. The net result is a very thin band of bone between the sinus floor and the top of the jaw — often insufficient to house an implant without perforating the sinus.</p>
        <p>A sinus lift (also called sinus augmentation) involves gently lifting the sinus membrane and packing bone graft material into the newly created space beneath it. As this heals over 4–6 months, the graft consolidates into living bone — creating the vertical height needed to safely place implants in the posterior upper jaw.</p>
        <ul class="experts-checklist">
          <li><i class="fa-solid fa-circle-check"></i> Addresses insufficient bone height in the upper posterior jaw</li>
          <li><i class="fa-solid fa-circle-check"></i> Sinus membrane is preserved — no sinus damage</li>
          <li><i class="fa-solid fa-circle-check"></i> New bone forms within 4–6 months of healing</li>
        </ul>
      </div>
      <div class="two-col-img">
        <img src="/assets/images/Dental%20Bonding02.jpg" alt="Sinus lift anatomy and procedure" draggable="false">
      </div>
    </div>
  </div>
</section>

<!-- ── TWO APPROACHES ── -->
<section class="section rebuild-section">
  <div class="container">
    <div class="two-col">
      <div class="two-col-img">
        <img src="/assets/images/Dental%20Technology01.jpg" alt="Lateral vs crestal sinus lift comparison" draggable="false">
      </div>
      <div class="two-col-text">
        <span class="section-label">Surgical Approaches</span>
        <h2>Lateral vs. Internal<br><span class="text-primary">Sinus Lift — What's the Difference?</span></h2>
        <p><strong>Lateral (open) sinus lift</strong> involves creating a small window in the cheek-side of the upper jaw to access and lift the sinus membrane directly. This approach allows placement of larger volumes of graft material and is used when significant vertical height is needed — typically 5mm or more. It is performed as a separate procedure before implant placement.</p>
        <p><strong>Crestal (internal) sinus lift</strong> is performed through the same opening that will be used for the implant, using specialized instruments to gently push the sinus membrane upward. It's suitable when only 1–4mm of additional height is needed and can often be combined with implant placement in the same appointment.</p>
        <ul class="experts-checklist">
          <li><i class="fa-solid fa-circle-check"></i> Internal approach: simultaneous with implant in mild cases</li>
          <li><i class="fa-solid fa-circle-check"></i> Lateral approach: more bone, separate procedure</li>
          <li><i class="fa-solid fa-circle-check"></i> We determine the right approach with 3D imaging</li>
        </ul>
        <a href="/dental-implants/survey.php" class="btn btn-primary">Evaluate My Case</a>
      </div>
    </div>
  </div>
</section>

<!-- ── CTA ── -->
<section class="section page-cta-dark" style="background-image: url('/assets/images/Dental%20Technology01.jpg');">
  <div class="container">
    <span class="section-label">Upper Jaw Implants Are Possible</span>
    <h2>Don't Let a Low Sinus<br><span class="text-primary">Rule Out Your Implants.</span></h2>
    <p>Book a free consultation and we'll take a 3D CT scan of your upper jaw, measure your available bone height, and tell you exactly whether a sinus lift is needed and what the complete treatment timeline looks like.</p>
    <a href="/dental-implants/survey.php" class="btn btn-primary btn-lg">Book a Free Consultation</a>
  </div>
</section>

<?php get_template_part('template-parts/dual-locations-map'); ?>

<?php get_footer(); ?>
