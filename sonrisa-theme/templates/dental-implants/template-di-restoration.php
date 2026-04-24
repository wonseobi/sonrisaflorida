<?php
/*
Template Name: Dental Implants - Restoration
*/
global $sonrisa_page;
$sonrisa_page = [
    'title'       => 'Dental Implant Restoration — Crowns, Bridges & Arches | Sonrisa',
    'description' => 'Dental implant restoration at Sonrisa covers the crown, bridge, or arch that attaches to your implant post — custom-crafted for function, aesthetics, and longevity.',
    'class'       => 'page-service',
    'nav_type'    => 'dental-implants',
];
get_header();
?>

<!-- ── HERO ── -->
<section class="hero hero-sm">
  <div class="hero-bg">
    <img src="/assets/images/dental_bridges01.jpg" alt="Dental implant restoration at Sonrisa" draggable="false">
  </div>
  <div class="hero-overlay"></div>
  <div class="hero-inner">
    <div class="hero-content">
      <span class="hero-badge">Dental Implant Services</span>
      <h1>Dental Implant<br><span class="hero-accent">Restoration.</span></h1>
      <p class="hero-sub">The implant post is only half the story. The crown, bridge, or arch attached on top is what you see, feel, and use every day — and we fabricate all restorations in-house for precision, speed, and perfect fit.</p>
      <a href="/dental-implants/survey.php" class="btn btn-primary btn-lg">Book a Free Consultation</a>
    </div>
    <?php get_template_part('template-parts/hero-stats-implants'); ?>
  </div>
</section>

<?php get_template_part('template-parts/service-nav-implants'); ?>

<!-- ── WHAT IS RESTORATION ── -->
<section class="section">
  <div class="container">
    <div class="two-col">
      <div class="two-col-text">
        <span class="section-label">What Restoration Means</span>
        <h2>The Part That Makes<br><span class="text-primary">an Implant a Tooth.</span></h2>
        <p>Dental implant restoration refers specifically to the prosthetic component — the crown, bridge, or arch — that is attached to the titanium post once it has fully integrated with the jawbone. Without the restoration, an implant post is just a fixture in your bone.</p>
        <p>Restoration is also the service needed when an existing implant post is still sound, but the crown or bridge on top has worn, fractured, or no longer fits correctly. In these cases, we can replace only the restorative component — saving the integrated post and the procedure cost associated with re-placement.</p>
        <ul class="experts-checklist">
          <li><i class="fa-solid fa-circle-check"></i> Covers single crowns, bridges, and full-arch prosthetics</li>
          <li><i class="fa-solid fa-circle-check"></i> We restore implants placed by other practitioners</li>
          <li><i class="fa-solid fa-circle-check"></i> Replace only the crown — keep your existing post</li>
        </ul>
      </div>
      <div class="two-col-img">
        <img src="/assets/images/dental_crowns02.jpg" alt="Dental implant crown restoration process" draggable="false">
      </div>
    </div>
  </div>
</section>

<!-- ── PROCESS ── -->
<section class="section section-light">
  <div class="container">
    <div style="text-align:center; max-width:600px; margin:0 auto 48px;">
      <span class="section-label">Our Restoration Process</span>
      <h2>From Scan to Crown<br><span class="text-primary">in as Few as Two Visits.</span></h2>
      <p style="color:var(--text-muted); margin-top:16px;">Our in-house digital workflow compresses the traditional lab timeline from weeks to days — or same day in qualifying cases.</p>
    </div>
    <div class="steps-grid">
      <div class="step-card">
        <div class="step-number">01</div>
        <h4>Digital Impressions</h4>
        <p>We scan your implant site with an intraoral 3D scanner — no putty, no mess. The digital model is sent directly to our in-house CAD software.</p>
      </div>
      <div class="step-card">
        <div class="step-number">02</div>
        <h4>Crown Design</h4>
        <p>Our system designs your crown to precisely match the size, shape, and color of adjacent teeth — reviewed and approved by your doctor before milling begins.</p>
      </div>
      <div class="step-card">
        <div class="step-number">03</div>
        <h4>In-House Milling</h4>
        <p>Your crown is milled from a high-strength ceramic block in our office — completed in under two hours in most cases. No off-site lab, no waiting weeks.</p>
      </div>
      <div class="step-card">
        <div class="step-number">04</div>
        <h4>Final Seating</h4>
        <p>The crown is fitted, adjusted, and permanently cemented or screwed onto your abutment. Bite and aesthetics are verified before you leave.</p>
      </div>
    </div>
  </div>
</section>

<!-- ── MATERIALS ── -->
<section class="section">
  <div class="container">
    <div class="two-col">
      <div class="two-col-img">
        <img src="/assets/images/dental_bridges7.jpg" alt="Implant restoration materials zirconia ceramic" draggable="false">
      </div>
      <div class="two-col-text">
        <span class="section-label">Materials We Use</span>
        <h2>Crowns Built to<br><span class="text-primary">Last a Lifetime.</span></h2>
        <p>All restorations at Sonrisa are fabricated from high-strength zirconia or lithium disilicate ceramic — the same materials used in premium dental laboratories worldwide. Both are metal-free, highly aesthetic, and designed to withstand the full forces of normal chewing for decades.</p>
        <p>Zirconia is preferred for posterior (back) teeth where biting forces are highest. Lithium disilicate offers exceptional translucency for front teeth where natural appearance is the priority. We select the appropriate material for each case based on position, function, and patient preference.</p>
        <ul class="experts-checklist">
          <li><i class="fa-solid fa-circle-check"></i> High-strength zirconia for posterior implants</li>
          <li><i class="fa-solid fa-circle-check"></i> Lithium disilicate for anterior aesthetics</li>
          <li><i class="fa-solid fa-circle-check"></i> All restorations metal-free and custom-shaded</li>
        </ul>
        <a href="/dental-implants/survey.php" class="btn btn-primary">Book a Restoration Consultation</a>
      </div>
    </div>
  </div>
</section>

<!-- ── CTA ── -->
<section class="section page-cta-dark" style="background-image: url('/assets/images/cosmetic_dentistry04.jpg');">
  <div class="container">
    <span class="section-label">Your Crown, Done Right</span>
    <h2>New Crown. Same Day.<br><span class="text-primary">Perfect Fit.</span></h2>
    <p>Whether you need a new crown on an existing implant or a full restoration as part of your treatment, book a free consultation and we'll plan the entire process — including same-day milling eligibility — at your first visit.</p>
    <a href="/dental-implants/survey.php" class="btn btn-primary btn-lg">Book a Free Consultation</a>
  </div>
</section>

<?php get_template_part('template-parts/dual-locations-map'); ?>

<?php get_footer(); ?>
