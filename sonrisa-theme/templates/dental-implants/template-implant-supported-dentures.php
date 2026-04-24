<?php
/*
Template Name: Dental Implants - Implant-Supported Dentures
*/
global $sonrisa_page;
$sonrisa_page = [
    'title'       => 'Implant-Supported Dentures — Fixed, Stable Full Arch | Sonrisa',
    'description' => 'Implant-supported dentures give you the stability of implants with the affordability of a denture. No adhesives, no rocking, no embarrassment — at Sonrisa Dental Specialists.',
    'class'       => 'page-service',
    'nav_type'    => 'dental-implants',
];
get_header();
?>

<!-- ── HERO ── -->
<section class="hero hero-sm">
  <div class="hero-bg">
    <img src="/assets/images/Dentures%2001.jpg" alt="Implant-supported dentures at Sonrisa" draggable="false">
  </div>
  <div class="hero-overlay"></div>
  <div class="hero-inner">
    <div class="hero-content">
      <span class="hero-badge">Dental Implant Services</span>
      <h1>Implant-Supported<br><span class="hero-accent">Dentures.</span></h1>
      <p class="hero-sub">The stability of implants. The accessibility of a denture. Implant-supported dentures snap onto 2–4 implants for a fit that doesn't move — without the cost of a fully fixed arch.</p>
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
      <span class="section-label">Two Approaches</span>
      <h2>Choose the Level of<br><span class="text-primary">Stability That Fits You.</span></h2>
      <p style="color:var(--text-muted); margin-top:16px;">Not all implant-supported dentures are the same. We offer two distinct attachment systems depending on your preferences, bone volume, and budget.</p>
    </div>
    <div class="option-cards">
      <div class="option-card">
        <span class="option-label">Removable Option</span>
        <h3>Ball-Attachment Denture</h3>
        <p>Two implants with ball-shaped attachments anchor the denture for a firm fit during the day. The denture snaps off at night for cleaning.</p>
        <ul class="option-list">
          <li><i class="fa-solid fa-circle-check"></i> 2 implants required</li>
          <li><i class="fa-solid fa-circle-check"></i> Most affordable implant option</li>
          <li><i class="fa-solid fa-circle-check"></i> Removable for easy nightly cleaning</li>
          <li><i class="fa-solid fa-circle-check"></i> No adhesive needed during the day</li>
        </ul>
      </div>
      <div class="option-card option-card-featured">
        <span class="option-label">Most Stable</span>
        <h3>Bar-Retained Denture</h3>
        <p>A metal bar connects 3–4 implants and the denture clips onto it — providing maximum stability and near-fixed performance while remaining removable.</p>
        <ul class="option-list">
          <li><i class="fa-solid fa-circle-check"></i> 3–4 implants for superior stability</li>
          <li><i class="fa-solid fa-circle-check"></i> Bar distributes force evenly</li>
          <li><i class="fa-solid fa-circle-check"></i> Feels virtually fixed during use</li>
          <li><i class="fa-solid fa-circle-check"></i> Longer-lasting attachment components</li>
        </ul>
      </div>
      <div class="option-card">
        <span class="option-label">Fully Fixed Option</span>
        <h3>All-on-4 / All-on-6</h3>
        <p>If you want teeth that never come out, our All-on-4 or All-on-6 protocols provide a completely fixed, non-removable arch that you brush like natural teeth.</p>
        <ul class="option-list">
          <li><i class="fa-solid fa-circle-check"></i> 4–6 implants, never removes</li>
          <li><i class="fa-solid fa-circle-check"></i> Highest stability of all options</li>
          <li><i class="fa-solid fa-circle-check"></i> Same-day teeth available</li>
          <li><i class="fa-solid fa-circle-check"></i> Premium long-term investment</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ── VS TRADITIONAL DENTURES ── -->
<section class="section">
  <div class="container">
    <div class="two-col">
      <div class="two-col-text">
        <span class="section-label">The Upgrade</span>
        <h2>What Changes When You<br><span class="text-primary">Add Implants.</span></h2>
        <p>Traditional dentures rest on gum tissue that is constantly shrinking. Implant-supported dentures are anchored to posts in the bone — so the fit doesn't change as bone resorbs, and you're not dependent on adhesive to get through the day without embarrassment.</p>
        <p>Most patients report a dramatic improvement in confidence, speech clarity, and ability to eat a full range of foods after switching from traditional to implant-supported dentures — even with just two implants under a lower arch denture.</p>
        <ul class="experts-checklist">
          <li><i class="fa-solid fa-circle-check"></i> Zero adhesive required during the day</li>
          <li><i class="fa-solid fa-circle-check"></i> Dramatically improved chewing stability</li>
          <li><i class="fa-solid fa-circle-check"></i> Slows bone loss compared to traditional dentures</li>
        </ul>
        <a href="/dental-implants/survey.php" class="btn btn-primary">Compare My Options</a>
      </div>
      <div class="two-col-img">
        <img src="/assets/images/dental_bridges02.jpg" alt="Implant-supported vs traditional dentures" draggable="false">
      </div>
    </div>
  </div>
</section>

<!-- ── CTA ── -->
<section class="section page-cta-dark" style="background-image: url('/assets/images/Dentures%2002.jpg');">
  <div class="container">
    <span class="section-label">Stable. Secure. Permanent.</span>
    <h2>End the Daily Battle<br><span class="text-primary">With Your Denture.</span></h2>
    <p>Book a free consultation and find out whether implant-supported dentures or a fully fixed arch is the right next step for you — with transparent pricing and same-day financing options.</p>
    <a href="/dental-implants/survey.php" class="btn btn-primary btn-lg">Book a Free Consultation</a>
  </div>
</section>

<?php get_template_part('template-parts/dual-locations-map'); ?>

<?php get_footer(); ?>
