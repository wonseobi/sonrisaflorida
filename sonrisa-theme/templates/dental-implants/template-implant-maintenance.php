<?php
/*
Template Name: Dental Implants - Implant Maintenance
*/
global $sonrisa_page;
$sonrisa_page = [
    'title'       => 'Dental Implant Maintenance — Protect Your Investment | Sonrisa',
    'description' => 'Dental implants require regular professional maintenance to last a lifetime. Our implant hygiene protocol keeps your implants clean, healthy, and structurally sound for decades.',
    'class'       => 'page-service',
    'nav_type'    => 'dental-implants',
];
get_header();
?>

<!-- ── HERO ── -->
<section class="hero hero-sm">
  <div class="hero-bg">
    <img src="/assets/images/dental_cleaning_exams01.jpg" alt="Dental implant maintenance at Sonrisa" draggable="false">
  </div>
  <div class="hero-overlay"></div>
  <div class="hero-inner">
    <div class="hero-content">
      <span class="hero-badge">Dental Implant Services</span>
      <h1>Implant<br><span class="hero-accent">Maintenance.</span></h1>
      <p class="hero-sub">An implant is a lifetime investment — but like any engineered structure, it needs professional upkeep. Our dedicated implant hygiene protocol ensures your implants stay clean, stable, and problem-free for decades.</p>
      <a href="/dental-implants/survey.php" class="btn btn-primary btn-lg">Schedule a Cleaning</a>
    </div>
    <?php get_template_part('template-parts/hero-stats-implants'); ?>
  </div>
</section>

<?php get_template_part('template-parts/service-nav-implants'); ?>

<!-- ── WHY MAINTENANCE MATTERS ── -->
<section class="section">
  <div class="container">
    <div class="two-col">
      <div class="two-col-text">
        <span class="section-label">Why It Matters</span>
        <h2>Implants Can Fail<br><span class="text-primary">Without Proper Care.</span></h2>
        <p>The most common cause of late implant failure is peri-implantitis — a bacterial infection of the gum and bone tissue surrounding the implant post. It begins as inflammation (peri-implant mucositis, essentially implant-specific gingivitis) and progresses to bone loss around the post, ultimately threatening the implant's structural integrity.</p>
        <p>Peri-implantitis is largely preventable with consistent home care and professional maintenance. The bacteria that cause it form biofilm at and below the gumline — in areas that standard brushing and flossing cannot adequately reach. Professional cleaning removes this biofilm before it becomes a clinical problem.</p>
        <ul class="experts-checklist">
          <li><i class="fa-solid fa-circle-check"></i> Peri-implantitis is preventable — not inevitable</li>
          <li><i class="fa-solid fa-circle-check"></i> Bacterial biofilm requires professional removal</li>
          <li><i class="fa-solid fa-circle-check"></i> Catching problems early is far simpler than treating them late</li>
        </ul>
      </div>
      <div class="two-col-img">
        <img src="/assets/images/dental_cleaning_exams02.jpg" alt="Peri-implantitis prevention through maintenance" draggable="false">
      </div>
    </div>
  </div>
</section>

<!-- ── OUR PROTOCOL ── -->
<section class="section section-light">
  <div class="container">
    <div style="text-align:center; max-width:600px; margin:0 auto 48px;">
      <span class="section-label">Our Maintenance Protocol</span>
      <h2>What Happens at<br><span class="text-primary">Your Implant Cleaning.</span></h2>
      <p style="color:var(--text-muted); margin-top:16px;">Implant maintenance is not the same as a standard teeth cleaning. We use implant-specific instruments and a dedicated assessment checklist at every visit.</p>
    </div>
    <div class="steps-grid">
      <div class="step-card">
        <div class="step-number">01</div>
        <h4>Implant Assessment</h4>
        <p>We check implant stability, probe depths around each implant, and evaluate the gum tissue for signs of inflammation, recession, or peri-implantitis.</p>
      </div>
      <div class="step-card">
        <div class="step-number">02</div>
        <h4>Radiographic Review</h4>
        <p>Periodic X-rays confirm that bone levels around each implant remain stable — catching any early bone loss before it becomes a clinical problem.</p>
      </div>
      <div class="step-card">
        <div class="step-number">03</div>
        <h4>Professional Cleaning</h4>
        <p>We use titanium or carbon-fiber instruments (never metal scalers that scratch implant surfaces) to remove calculus and biofilm at and below the gumline.</p>
      </div>
      <div class="step-card">
        <div class="step-number">04</div>
        <h4>Home Care Review</h4>
        <p>We assess your home care routine and recommend the appropriate tools — interdental brushes, water flossers, implant-specific floss — for your specific restoration type.</p>
      </div>
    </div>
  </div>
</section>

<!-- ── HOW OFTEN ── -->
<section class="section">
  <div class="container">
    <div class="two-col">
      <div class="two-col-img">
        <img src="/assets/images/dental_cleaning_exams02.jpg" alt="How often to get implant maintenance" draggable="false">
      </div>
      <div class="two-col-text">
        <span class="section-label">Frequency</span>
        <h2>How Often Do Implants<br><span class="text-primary">Need Professional Care?</span></h2>
        <p>For most patients with a single implant or a small bridge and good oral hygiene habits, twice-yearly professional maintenance visits are appropriate. Patients with full-arch restorations (All-on-4, All-on-6), a history of peri-implant issues, or conditions like diabetes that increase infection risk typically benefit from three or four visits per year.</p>
        <p>We develop a personalized maintenance schedule for every implant patient at Sonrisa — calibrated to your specific restoration type, medical history, and hygiene compliance — so you get the protection your investment deserves, not a one-size-fits-all recall interval.</p>
        <ul class="experts-checklist">
          <li><i class="fa-solid fa-circle-check"></i> Standard: 2 visits per year minimum</li>
          <li><i class="fa-solid fa-circle-check"></i> Full-arch patients: 3–4 visits per year recommended</li>
          <li><i class="fa-solid fa-circle-check"></i> Schedule personalized to your risk profile</li>
        </ul>
        <a href="/dental-implants/survey.php" class="btn btn-primary">Schedule My Maintenance</a>
      </div>
    </div>
  </div>
</section>

<!-- ── CTA ── -->
<section class="section page-cta-dark" style="background-image: url('/assets/images/about_us01.jpg');">
  <div class="container">
    <span class="section-label">Protect Your Investment</span>
    <h2>Your Implants Are Built<br><span class="text-primary">to Last — Let's Keep Them That Way.</span></h2>
    <p>Whether you had your implants placed here or elsewhere, our implant maintenance program keeps them performing for life. Book your cleaning and implant health check today.</p>
    <a href="/dental-implants/survey.php" class="btn btn-primary btn-lg">Book an Implant Cleaning</a>
  </div>
</section>

<?php get_template_part('template-parts/dual-locations-map'); ?>

<?php get_footer(); ?>
