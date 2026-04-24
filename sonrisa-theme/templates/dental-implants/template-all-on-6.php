<?php
/*
Template Name: Dental Implants - All-on-6
*/
global $sonrisa_page;
$sonrisa_page = [
    'title'       => 'All-on-6 Dental Implants — Superior Stability Full Arch | Sonrisa',
    'description' => 'All-on-6 dental implants use six implants per arch for exceptional stability and load distribution. Ideal for patients wanting the strongest possible full-arch result.',
    'class'       => 'page-service',
    'nav_type'    => 'dental-implants',
];
get_header();
?>

<!-- ── HERO ── -->
<section class="hero hero-sm">
  <div class="hero-bg">
    <img src="/assets/images/cosmetic_dentistry04.jpg" alt="All-on-6 dental implants at Sonrisa" draggable="false">
  </div>
  <div class="hero-overlay"></div>
  <div class="hero-inner">
    <div class="hero-content">
      <span class="hero-badge">Dental Implant Services</span>
      <h1>All-on-6<br><span class="hero-accent">Dental Implants.</span></h1>
      <p class="hero-sub">Six implants per arch means superior load distribution, enhanced long-term stability, and a result that more closely mimics the natural support structure of your original teeth.</p>
      <a href="/dental-implants/survey.php" class="btn btn-primary btn-lg">Book a Free Consultation</a>
    </div>
    <?php get_template_part('template-parts/hero-stats-implants'); ?>
  </div>
</section>

<?php get_template_part('template-parts/service-nav-implants'); ?>

<!-- ── ALL-ON-6 VS ALL-ON-4 ── -->
<section class="section">
  <div class="container">
    <div class="two-col">
      <div class="two-col-text">
        <span class="section-label">All-on-6 vs. All-on-4</span>
        <h2>More Implants,<br><span class="text-primary">More Strength.</span></h2>
        <p>While All-on-4 is an excellent protocol for many patients, All-on-6 adds two additional implants to further distribute the biting forces across the bridge. This is particularly beneficial for patients with a naturally stronger bite, those with adequate bone volume who want to maximize structural integrity, or cases where the arch requires greater support for a larger prosthesis.</p>
        <p>The additional implants also reduce stress on individual posts and can improve the long-term survival rate of the restoration — making All-on-6 the preferred option for patients who want the most durable possible outcome.</p>
        <ul class="experts-checklist">
          <li><i class="fa-solid fa-circle-check"></i> Superior bite-force distribution across 6 implants</li>
          <li><i class="fa-solid fa-circle-check"></i> Reduced stress on each individual post</li>
          <li><i class="fa-solid fa-circle-check"></i> Preferred for patients with adequate bone and strong bite</li>
        </ul>
      </div>
      <div class="two-col-img">
        <img src="/assets/images/Dental%20Extractions%2003.jpg" alt="All-on-6 implant placement strategy" draggable="false">
      </div>
    </div>
  </div>
</section>

<!-- ── PROCESS ── -->
<section class="section rebuild-section">
  <div class="container">
    <div class="two-col">
      <div class="two-col-img">
        <img src="/assets/images/dental_implants05.jpg" alt="All-on-6 process and same day teeth" draggable="false">
      </div>
      <div class="two-col-text">
        <span class="section-label">The Treatment</span>
        <h2>Same-Day Teeth.<br><span class="text-primary">Lifetime Results.</span></h2>
        <p>Like All-on-4, the All-on-6 protocol delivers a fixed provisional bridge on the same day as implant surgery. Your 3D CT scan is used to plan every implant position virtually — then a custom surgical guide replicates that plan precisely during the procedure.</p>
        <p>After a healing period of 3–6 months during which the implants fully integrate with your bone, the provisional bridge is replaced with your final high-strength zirconia arch — designed to last decades without replacement or relining.</p>
        <ul class="experts-checklist">
          <li><i class="fa-solid fa-circle-check"></i> Fixed provisional arch delivered same day</li>
          <li><i class="fa-solid fa-circle-check"></i> Full osseointegration in 3–6 months</li>
          <li><i class="fa-solid fa-circle-check"></i> Final zirconia arch replaces provisional at completion</li>
        </ul>
        <a href="/dental-implants/survey.php" class="btn btn-primary">Get My 3D Assessment</a>
      </div>
    </div>
  </div>
</section>

<!-- ── CTA ── -->
<section class="section page-cta-dark" style="background-image: url('/assets/images/Dental%20Implants04.jpg');">
  <div class="container">
    <span class="section-label">Maximum Stability</span>
    <h2>The Strongest Full-Arch<br><span class="text-primary">Option Available.</span></h2>
    <p>Book a free consultation to find out whether All-on-4 or All-on-6 is the better fit for your bone volume and bite. We'll give you a complete comparison and cost breakdown at your first visit.</p>
    <a href="/dental-implants/survey.php" class="btn btn-primary btn-lg">Book a Free Consultation</a>
  </div>
</section>

<?php get_template_part('template-parts/dual-locations-map'); ?>

<?php get_footer(); ?>
