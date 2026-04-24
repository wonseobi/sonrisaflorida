<?php
/*
Template Name: Dental Implants - Condition - Dentures vs Implants
*/
global $sonrisa_page;
$sonrisa_page = [
    'title'       => 'Dentures vs. Dental Implants — Which Is Right for You? | Sonrisa',
    'description' => 'Comparing dentures and dental implants? See the honest differences in comfort, cost, bone health, and longevity — and find out why most patients choose implants.',
    'class'       => 'page-condition',
    'nav_type'    => 'dental-implants',
];
get_header();
?>

<!-- ── HERO ── -->
<section class="hero hero-sm">
  <div class="hero-bg">
    <img src="/assets/images/Dentures%2001.jpg" alt="Dentures vs dental implants comparison" draggable="false">
  </div>
  <div class="hero-overlay"></div>
  <div class="hero-inner">
    <div class="hero-content">
      <span class="hero-badge">Condition</span>
      <h1>Dentures vs.<br><span class="hero-accent">Dental Implants.</span></h1>
      <p class="hero-sub">Both replace missing teeth — but in fundamentally different ways. Understanding the long-term differences in function, comfort, and bone health will make your decision clear.</p>
      <a href="/dental-implants/survey.php" class="btn btn-primary btn-lg">Get an Expert Opinion</a>
    </div>
    <?php get_template_part('template-parts/hero-stats-implants'); ?>
  </div>
</section>

<?php get_template_part('template-parts/service-nav-implants'); ?>

<!-- ── COMPARISON OVERVIEW ── -->
<section class="section section-light">
  <div class="container">
    <div style="text-align:center; max-width:600px; margin:0 auto 0;">
      <span class="section-label">Side by Side</span>
      <h2>The Honest<br><span class="text-primary">Comparison.</span></h2>
      <p style="color:var(--text-muted); margin-top:16px;">Both options restore your smile — but only one preserves your jawbone, eliminates adhesives, and improves over time instead of degrading.</p>
    </div>
    <div class="option-cards">
      <div class="option-card">
        <span class="option-label">Traditional Option</span>
        <h3>Removable Dentures</h3>
        <p>A removable acrylic prosthetic resting on your gum tissue. Affordable upfront but associated with ongoing bone loss, poor fit over time, and dietary restrictions.</p>
        <ul class="option-list">
          <li><i class="fa-solid fa-circle-check"></i> Lower initial cost</li>
          <li><i class="fa-solid fa-circle-check"></i> No surgery required</li>
          <li><i class="fa-solid fa-circle-check"></i> Requires daily removal and soaking</li>
          <li><i class="fa-solid fa-circle-check"></i> Requires adhesive creams</li>
        </ul>
      </div>
      <div class="option-card option-card-featured">
        <span class="option-label">Gold Standard</span>
        <h3>Dental Implants</h3>
        <p>Fixed, permanent teeth anchored into your jawbone. They stimulate bone like natural roots, never slip, and require zero adhesive — ever.</p>
        <ul class="option-list">
          <li><i class="fa-solid fa-circle-check"></i> Preserves jawbone permanently</li>
          <li><i class="fa-solid fa-circle-check"></i> Fixed — never removes, never slips</li>
          <li><i class="fa-solid fa-circle-check"></i> No diet restrictions</li>
          <li><i class="fa-solid fa-circle-check"></i> Lasts 20+ years with proper care</li>
        </ul>
      </div>
      <div class="option-card">
        <span class="option-label">Best of Both</span>
        <h3>Implant-Supported Dentures</h3>
        <p>Traditional dentures anchored to 2–4 implants for stability. Removes at night but won't slip or require adhesive during the day.</p>
        <ul class="option-list">
          <li><i class="fa-solid fa-circle-check"></i> More stable than traditional dentures</li>
          <li><i class="fa-solid fa-circle-check"></i> Lower cost than full-arch implants</li>
          <li><i class="fa-solid fa-circle-check"></i> Still removable for cleaning</li>
          <li><i class="fa-solid fa-circle-check"></i> Slows — but doesn't stop — bone loss</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ── BONE LOSS ── -->
<section class="section">
  <div class="container">
    <div class="two-col">
      <div class="two-col-img">
        <img src="/assets/images/Dental%20Implants04.jpg" alt="Bone loss from dentures vs implants" draggable="false">
      </div>
      <div class="two-col-text">
        <span class="section-label">The Critical Difference</span>
        <h2>Dentures Accelerate<br><span class="text-primary">Bone Loss.</span></h2>
        <p>This is the fact most denture wearers aren't told upfront: removable dentures rest on top of gum tissue and do nothing to prevent the bone resorption that began the moment your teeth were lost.</p>
        <p>Over years, the jawbone continues to shrink — causing your denture to fit worse, your face to appear sunken, and your chin to shift forward. Dentures need relining or replacing every 5–7 years as a result. Implants, by contrast, actively maintain bone volume for life.</p>
        <ul class="experts-checklist">
          <li><i class="fa-solid fa-circle-check"></i> Bone loss continues under traditional dentures</li>
          <li><i class="fa-solid fa-circle-check"></i> Facial structure changes over 5–10 years</li>
          <li><i class="fa-solid fa-circle-check"></i> Implants are the only bone-preserving solution</li>
        </ul>
        <a href="/dental-implants/survey.php" class="btn btn-primary">Talk to Our Specialist</a>
      </div>
    </div>
  </div>
</section>

<!-- ── CTA ── -->
<section class="section page-cta-dark" style="background-image: url('/assets/images/Dental%20Implants02.jpg');">
  <div class="container">
    <span class="section-label">Make the Switch</span>
    <h2>Still Wearing Dentures?<br><span class="text-primary">There's a Better Way.</span></h2>
    <p>Book a free consultation and our specialist will assess your current situation — including existing bone volume — and show you what a permanent implant solution would look like for you.</p>
    <a href="/dental-implants/survey.php" class="btn btn-primary btn-lg">Book a Free Consultation</a>
  </div>
</section>

<?php get_template_part('template-parts/dual-locations-map'); ?>

<?php get_footer(); ?>
