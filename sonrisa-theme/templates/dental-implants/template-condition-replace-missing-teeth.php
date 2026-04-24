<?php
/*
Template Name: Dental Implants - Condition - Replace Missing Teeth
*/
global $sonrisa_page;
$sonrisa_page = [
    'title'       => 'Replace Missing Teeth with Dental Implants | Sonrisa Dental Specialists',
    'description' => 'Discover the best ways to replace missing teeth with dental implants. Sonrisa offers single implants, full-arch restoration, and same-day solutions for any case.',
    'class'       => 'page-condition',
    'nav_type'    => 'dental-implants',
];
get_header();
?>

<!-- ── HERO ── -->
<section class="hero hero-sm">
  <div class="hero-bg">
    <img src="/assets/images/dental_cleaning_exams01.jpg" alt="Replace missing teeth with dental implants" draggable="false">
  </div>
  <div class="hero-overlay"></div>
  <div class="hero-inner">
    <div class="hero-content">
      <span class="hero-badge">Condition</span>
      <h1>Ready to Replace<br><span class="hero-accent">Your Missing Teeth?</span></h1>
      <p class="hero-sub">Whether you're missing one tooth or all of them, we have a permanent, implant-supported solution designed for your specific anatomy, lifestyle, and budget.</p>
      <a href="/dental-implants/survey.php" class="btn btn-primary btn-lg">Book a Free Consultation</a>
    </div>
    <?php get_template_part('template-parts/hero-stats-implants'); ?>
  </div>
</section>

<?php get_template_part('template-parts/service-nav-implants'); ?>

<!-- ── OPTIONS ── -->
<section class="section section-light">
  <div class="container">
    <div style="text-align:center; max-width:600px; margin:0 auto 0;">
      <span class="section-label">Replacement Options</span>
      <h2>A Solution for<br><span class="text-primary">Every Situation.</span></h2>
      <p style="color:var(--text-muted); margin-top:16px;">The right implant solution depends on how many teeth you're missing, your bone volume, and your goals. We evaluate all of this at your first free consultation.</p>
    </div>
    <div class="option-cards">
      <div class="option-card">
        <span class="option-label">One Missing Tooth</span>
        <h3>Single Implant</h3>
        <p>A single titanium post topped with a custom ceramic crown. The most natural-looking, natural-feeling replacement available for one missing tooth.</p>
        <ul class="option-list">
          <li><i class="fa-solid fa-circle-check"></i> Preserves adjacent teeth</li>
          <li><i class="fa-solid fa-circle-check"></i> Prevents bone loss at the site</li>
          <li><i class="fa-solid fa-circle-check"></i> Same-day crown option available</li>
        </ul>
      </div>
      <div class="option-card option-card-featured">
        <span class="option-label">Multiple Missing Teeth</span>
        <h3>Implant Bridge / Partial</h3>
        <p>Two or more implants support a fixed bridge spanning several missing teeth — no grinding down healthy teeth, no removable appliances.</p>
        <ul class="option-list">
          <li><i class="fa-solid fa-circle-check"></i> Fixed, non-removable restoration</li>
          <li><i class="fa-solid fa-circle-check"></i> Fewer implants than individual replacements</li>
          <li><i class="fa-solid fa-circle-check"></i> Natural bite and function restored</li>
        </ul>
      </div>
      <div class="option-card">
        <span class="option-label">Full Arch or All Teeth</span>
        <h3>All-on-4 / All-on-6</h3>
        <p>A complete arch of fixed, permanent teeth supported by just 4–6 strategically placed implants. Delivered in as little as one day.</p>
        <ul class="option-list">
          <li><i class="fa-solid fa-circle-check"></i> Full arch in one day possible</li>
          <li><i class="fa-solid fa-circle-check"></i> Works even with bone loss</li>
          <li><i class="fa-solid fa-circle-check"></i> No denture adhesive ever again</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ── WHY IMPLANTS OVER ALTERNATIVES ── -->
<section class="section">
  <div class="container">
    <div class="two-col">
      <div class="two-col-text">
        <span class="section-label">Implants vs. Everything Else</span>
        <h2>Why Implants Outlast<br><span class="text-primary">Every Alternative.</span></h2>
        <p>Dental bridges require grinding down two healthy adjacent teeth to support the false tooth between them — permanently compromising perfectly good dentition. Partial dentures are removable, can loosen over time, and accelerate the bone loss they were meant to address.</p>
        <p>Implants are the only solution that is self-supporting, bone-preserving, and designed to last a lifetime. With proper care, a dental implant can outlast every other restoration you'll ever have.</p>
        <ul class="experts-checklist">
          <li><i class="fa-solid fa-circle-check"></i> No healthy teeth sacrificed for support</li>
          <li><i class="fa-solid fa-circle-check"></i> Stimulates bone like a natural tooth root</li>
          <li><i class="fa-solid fa-circle-check"></i> Designed to last 20+ years with proper care</li>
        </ul>
        <a href="/dental-implants/survey.php" class="btn btn-primary">Find My Best Option</a>
      </div>
      <div class="two-col-img">
        <img src="/assets/images/Dental%20Implants03.jpg" alt="Dental implant vs bridge comparison" draggable="false">
      </div>
    </div>
  </div>
</section>

<!-- ── CTA ── -->
<section class="section page-cta-dark" style="background-image: url('/assets/images/Dental%20Implants05.jpg');">
  <div class="container">
    <span class="section-label">Start Here</span>
    <h2>Find Out Which Solution<br><span class="text-primary">Is Right for You.</span></h2>
    <p>Book a free, no-obligation consultation. Our specialist will review your X-rays, assess your bone volume, and walk you through every option — with transparent pricing from the start.</p>
    <a href="/dental-implants/survey.php" class="btn btn-primary btn-lg">Book a Free Consultation</a>
  </div>
</section>

<?php get_template_part('template-parts/dual-locations-map'); ?>

<?php get_footer(); ?>
