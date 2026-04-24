<?php
/*
Template Name: Dental Implants - Multiple Implants
*/
global $sonrisa_page;
$sonrisa_page = [
    'title'       => 'Multiple Dental Implants — Replace Several Missing Teeth | Sonrisa',
    'description' => 'Missing several teeth? Multiple dental implants and implant-supported bridges restore gaps across your smile without a removable appliance — fixed, natural, permanent.',
    'class'       => 'page-service',
    'nav_type'    => 'dental-implants',
];
get_header();
?>

<!-- ── HERO ── -->
<section class="hero hero-sm">
  <div class="hero-bg">
    <img src="/assets/images/cosmetic_dentistry02.jpg" alt="Multiple dental implants at Sonrisa" draggable="false">
  </div>
  <div class="hero-overlay"></div>
  <div class="hero-inner">
    <div class="hero-content">
      <span class="hero-badge">Dental Implant Services</span>
      <h1>Multiple<br><span class="hero-accent">Dental Implants.</span></h1>
      <p class="hero-sub">Missing two, three, or more teeth in different areas? Multiple implants — or an implant-supported bridge — restore each gap with a permanent, fixed solution that never needs to be removed.</p>
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
      <span class="section-label">Your Options</span>
      <h2>The Right Approach Depends<br><span class="text-primary">on Where Your Gaps Are.</span></h2>
      <p style="color:var(--text-muted); margin-top:16px;">Multiple missing teeth can be replaced in several ways depending on the location, spacing, and remaining bone at each site.</p>
    </div>
    <div class="option-cards">
      <div class="option-card">
        <span class="option-label">Non-Adjacent Gaps</span>
        <h3>Individual Implants</h3>
        <p>Each missing tooth is replaced by its own implant and crown. Ideal when gaps are spread throughout the mouth rather than clustered in one area.</p>
        <ul class="option-list">
          <li><i class="fa-solid fa-circle-check"></i> Each tooth independently supported</li>
          <li><i class="fa-solid fa-circle-check"></i> Maximum bone preservation at each site</li>
          <li><i class="fa-solid fa-circle-check"></i> Easiest to clean and maintain</li>
        </ul>
      </div>
      <div class="option-card option-card-featured">
        <span class="option-label">Adjacent Gaps — Best Value</span>
        <h3>Implant-Supported Bridge</h3>
        <p>Two implants placed at either end of a gap support a bridge spanning 3 or more missing teeth — fewer implants, same fixed result.</p>
        <ul class="option-list">
          <li><i class="fa-solid fa-circle-check"></i> 2 implants replace 3–4 teeth</li>
          <li><i class="fa-solid fa-circle-check"></i> No healthy teeth sacrificed</li>
          <li><i class="fa-solid fa-circle-check"></i> Lower cost than individual implants per tooth</li>
        </ul>
      </div>
      <div class="option-card">
        <span class="option-label">Most Teeth Missing</span>
        <h3>Full-Arch Solution</h3>
        <p>If most teeth are missing or failing, All-on-4 or All-on-6 replaces the entire arch with a fixed bridge on 4–6 implants — the most efficient approach.</p>
        <ul class="option-list">
          <li><i class="fa-solid fa-circle-check"></i> Complete arch restored in one procedure</li>
          <li><i class="fa-solid fa-circle-check"></i> Same-day teeth possible</li>
          <li><i class="fa-solid fa-circle-check"></i> Most cost-effective for extensive tooth loss</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ── PROCESS ── -->
<section class="section">
  <div class="container">
    <div class="two-col">
      <div class="two-col-text">
        <span class="section-label">How We Plan Your Case</span>
        <h2>Every Gap Has<br><span class="text-primary">an Optimal Solution.</span></h2>
        <p>When multiple teeth are missing, treatment planning is more complex — and more important. The position and spacing of the gaps, the volume and density of bone at each site, your bite alignment, and the condition of remaining teeth all factor into which combination of solutions will produce the best long-term result.</p>
        <p>Our 3D cone-beam CT gives us a complete picture of your entire mouth at once. We use this to design a coordinated treatment plan — sequencing your restorations for the most efficient path from where you are to a complete, healthy smile.</p>
        <ul class="experts-checklist">
          <li><i class="fa-solid fa-circle-check"></i> Complete 3D assessment of all sites simultaneously</li>
          <li><i class="fa-solid fa-circle-check"></i> Coordinated plan to optimize cost and sequencing</li>
          <li><i class="fa-solid fa-circle-check"></i> Phased treatment available to spread costs over time</li>
        </ul>
        <a href="/dental-implants/survey.php" class="btn btn-primary">Get My Full Plan</a>
      </div>
      <div class="two-col-img">
        <img src="/assets/images/dental_bridges06.jpg" alt="Multiple implant treatment planning" draggable="false">
      </div>
    </div>
  </div>
</section>

<!-- ── CTA ── -->
<section class="section page-cta-dark" style="background-image: url('/assets/images/cosmetic_dentistry03.jpg');">
  <div class="container">
    <span class="section-label">Multiple Gaps, One Plan</span>
    <h2>Let's Map Out Your<br><span class="text-primary">Complete Restoration.</span></h2>
    <p>Book a free consultation and walk out with a complete treatment plan, imaging, and itemized pricing for every gap in your smile — with no obligation to proceed on anything.</p>
    <a href="/dental-implants/survey.php" class="btn btn-primary btn-lg">Book a Free Consultation</a>
  </div>
</section>

<?php get_template_part('template-parts/dual-locations-map'); ?>

<?php get_footer(); ?>
