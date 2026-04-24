<?php
/*
Template Name: Dental Implants - Condition - Missing Teeth
*/
global $sonrisa_page;
$sonrisa_page = [
    'title'       => 'Missing Teeth — When to Act & What to Expect | Sonrisa Dental Specialists',
    'description' => 'Missing teeth affect more than your appearance. Learn what happens when gaps go untreated and how dental implants permanently restore your smile and bone health.',
    'class'       => 'page-condition',
    'nav_type'    => 'dental-implants',
];
get_header();
?>

<!-- ── HERO ── -->
<section class="hero hero-sm">
  <div class="hero-bg">
    <img src="/assets/images/Dental%20Implants01.jpg" alt="Missing teeth treatment with dental implants" draggable="false">
  </div>
  <div class="hero-overlay"></div>
  <div class="hero-inner">
    <div class="hero-content">
      <span class="hero-badge">Condition</span>
      <h1>Living With<br><span class="hero-accent">Missing Teeth.</span></h1>
      <p class="hero-sub">Missing a tooth may feel manageable at first — but the consequences compound over time. Bone loss, shifting teeth, and bite problems begin within months. Implants are the only solution that stops the damage at its root.</p>
      <a href="/dental-implants/survey.php" class="btn btn-primary btn-lg">Book a Free Consultation</a>
    </div>
    <?php get_template_part('template-parts/hero-stats-implants'); ?>
  </div>
</section>

<?php get_template_part('template-parts/service-nav-implants'); ?>

<!-- ── WHAT HAPPENS ── -->
<section class="section">
  <div class="container">
    <div class="two-col">
      <div class="two-col-text">
        <span class="section-label">The Hidden Problem</span>
        <h2>What a Missing Tooth<br><span class="text-primary">Does to Your Jaw.</span></h2>
        <p>The moment a tooth is lost, the jawbone beneath it begins to resorb. Without a tooth root stimulating the bone, your body redirects calcium and minerals away from that area — leading to measurable bone loss within the first year.</p>
        <p>Adjacent teeth then begin to drift and tilt into the gap. Your bite shifts. Opposing teeth over-erupt. What started as a single missing tooth becomes a cascading structural problem affecting chewing, speech, and facial appearance.</p>
        <ul class="experts-checklist">
          <li><i class="fa-solid fa-circle-check"></i> Up to 25% bone loss in the first year</li>
          <li><i class="fa-solid fa-circle-check"></i> Adjacent teeth begin drifting within months</li>
          <li><i class="fa-solid fa-circle-check"></i> Facial structure changes over time without support</li>
        </ul>
      </div>
      <div class="two-col-img">
        <img src="/assets/images/Dental%20Implants02.jpg" alt="Missing tooth causing bone loss diagram" draggable="false">
      </div>
    </div>
  </div>
</section>

<!-- ── WHY IMPLANTS ── -->
<section class="section rebuild-section">
  <div class="container">
    <div class="two-col">
      <div class="two-col-img">
        <img src="/assets/images/Dental%20Implants04.jpg" alt="Dental implant replacing missing tooth" draggable="false">
      </div>
      <div class="two-col-text">
        <span class="section-label">The Right Solution</span>
        <h2>Why Implants Are<br><span class="text-primary">the Standard of Care.</span></h2>
        <p>A dental implant is the only missing tooth replacement that addresses the underlying cause — bone loss. The titanium post acts as an artificial root, stimulating the jawbone and preventing further resorption the same way a natural tooth would.</p>
        <p>Unlike bridges, which grind down healthy adjacent teeth to support a false crown, or dentures, which rest on shrinking gum tissue, an implant is self-supporting. It doesn't compromise neighboring teeth and it doesn't move.</p>
        <ul class="experts-checklist">
          <li><i class="fa-solid fa-circle-check"></i> Preserves jawbone and prevents further loss</li>
          <li><i class="fa-solid fa-circle-check"></i> Does not affect adjacent healthy teeth</li>
          <li><i class="fa-solid fa-circle-check"></i> Functions and feels identical to a natural tooth</li>
        </ul>
        <a href="/dental-implants/services/single-tooth/" class="btn btn-primary">Explore Single Tooth Implants</a>
      </div>
    </div>
  </div>
</section>

<!-- ── CTA ── -->
<section class="section page-cta-dark" style="background-image: url('/assets/images/Dental%20Implants01.jpg');">
  <div class="container">
    <span class="section-label">Don't Wait</span>
    <h2>The Sooner You Act,<br><span class="text-primary">the Better the Outcome.</span></h2>
    <p>The longer a gap remains untreated, the more bone and structure you lose — making future implant treatment more complex. Book a free consultation today and find out exactly where you stand.</p>
    <a href="/dental-implants/survey.php" class="btn btn-primary btn-lg">Book a Free Consultation</a>
  </div>
</section>

<?php get_template_part('template-parts/dual-locations-map'); ?>

<?php get_footer(); ?>
