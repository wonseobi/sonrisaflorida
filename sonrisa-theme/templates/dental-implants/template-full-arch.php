<?php
/*
Template Name: Dental Implants - Full Arch
*/
global $sonrisa_page;
$sonrisa_page = [
    'title'       => 'Full Arch Dental Implants | Sonrisa Dental Specialists',
    'description' => 'Restore an entire upper or lower arch of teeth with full arch dental implants at Sonrisa Dental Specialists. Fixed, permanent, and life-changing.',
    'class'       => 'page-full-arch',
    'nav_type'    => 'dental-implants',
];
get_header();
?>

<!-- ── HERO ── -->
<section class="hero hero-sm">
  <div class="hero-bg">
    <img src="/assets/images/dental_bridges04.jpg" alt="Patient with full arch dental implants smiling confidently" draggable="false">
  </div>
  <div class="hero-overlay"></div>
  <div class="hero-inner">
    <div class="hero-content">
      <span class="hero-badge">Dental Implants</span>
      <h1>Restore Your Entire Arch.<br><span class="hero-accent">Permanently.</span></h1>
      <p class="hero-sub">Full arch dental implants replace every tooth on your upper or lower jaw with a fixed, implant-supported prosthetic — giving you a complete, beautiful smile that never comes out and lasts a lifetime.</p>
      <a href="/dental-implants/survey.php" class="btn btn-primary btn-lg">Book a Free Consultation</a>
    </div>
    <?php get_template_part('template-parts/hero-stats-implants'); ?>
  </div>
</section>

<!-- ── WHAT IS IT ── -->
<section class="section">
  <div class="container">
    <div class="two-col">
      <div class="two-col-text">
        <span class="section-label">The Solution</span>
        <h2>All Your Teeth.<br><span class="text-primary">Zero Compromises.</span></h2>
        <p>Full arch dental implants use a series of strategically placed titanium posts to anchor a complete fixed bridge across your entire upper or lower jaw. Unlike traditional dentures, this solution does not slip, does not require adhesive, and stimulates the jawbone to prevent bone loss.</p>
        <p>Whether you have lost most of your teeth to decay, trauma, or gum disease — or you are still wearing uncomfortable dentures — full arch implants give you a permanent, fully functional smile that behaves exactly like natural teeth.</p>
        <ul class="experts-checklist">
          <li><i class="fa-solid fa-circle-check"></i> Fixed permanently — never removed</li>
          <li><i class="fa-solid fa-circle-check"></i> Eat anything without restriction</li>
          <li><i class="fa-solid fa-circle-check"></i> Halts and reverses jawbone loss</li>
        </ul>
        <a href="/dental-implants/survey.php" class="btn btn-primary">Get a Free Quote</a>
      </div>
      <div class="two-col-img">
        <img src="/assets/images/Dental%20Veneers%2003.jpg" alt="Confident man smiling with full arch dental implants" draggable="false">
      </div>
    </div>
  </div>
</section>

<!-- ── PROCESS ── -->
<section class="section rebuild-section">
  <div class="container">
    <div class="two-col">
      <div class="two-col-img">
        <img src="/assets/images/dental_bridge03.jpg" alt="Woman smiling freely after full arch implant restoration" draggable="false">
      </div>
      <div class="two-col-text">
        <span class="section-label">How It Works</span>
        <h2>A Complete Restoration<br><span class="text-primary">From Start to Finish.</span></h2>
        <p>Your treatment begins with a full 3D CBCT scan and comprehensive consultation. Our specialist designs a precise surgical plan that positions implant posts for optimal strength, stability, and aesthetics across the full arch.</p>
        <p>During placement, a temporary prosthetic is often attached the same day so you are never without teeth. Once osseointegration is complete, your final custom-fabricated porcelain arch is permanently secured — delivering a natural-looking result built to last decades.</p>
        <ul class="experts-checklist">
          <li><i class="fa-solid fa-circle-check"></i> Step 1 — Full CBCT scan &amp; consultation</li>
          <li><i class="fa-solid fa-circle-check"></i> Step 2 — Precision implant placement</li>
          <li><i class="fa-solid fa-circle-check"></i> Step 3 — Temporary teeth same day</li>
          <li><i class="fa-solid fa-circle-check"></i> Step 4 — Final permanent arch fitted</li>
        </ul>
        <a href="/dental-implants/survey.php" class="btn btn-primary">Start Your Journey</a>
      </div>
    </div>
  </div>
</section>

<!-- ── WHY SONRISA ── -->
<section class="section">
  <div class="container">
    <div class="two-col">
      <div class="two-col-text">
        <span class="section-label">Why Choose Us</span>
        <h2>Full Arch Expertise<br><span class="text-primary">You Can Count On.</span></h2>
        <p>Full arch restoration is one of the most technically demanding procedures in implant dentistry — and it is one we perform routinely. Our board-certified implantologist uses the latest guided surgical technology to deliver precise, predictable outcomes even in complex cases with bone loss.</p>
        <p>We provide comprehensive care from the initial consultation to the final prosthetic, with flexible financing options that make this life-changing treatment accessible. Thousands of patients across Central Florida have walked out of Sonrisa with a complete, permanent smile.</p>
        <ul class="experts-checklist">
          <li><i class="fa-solid fa-circle-check"></i> Complex full-arch cases welcome</li>
          <li><i class="fa-solid fa-circle-check"></i> In-house bone grafting if needed</li>
          <li><i class="fa-solid fa-circle-check"></i> Financing from $0 down available</li>
        </ul>
        <a href="/dental-implants/survey.php" class="btn btn-primary">Talk to a Specialist</a>
      </div>
      <div class="two-col-img">
        <img src="/assets/images/Dental%20Technology03.jpg" alt="Happy patients who chose Sonrisa for full arch dental implants" draggable="false">
      </div>
    </div>
  </div>
</section>

<!-- ── CTA ── -->
<section class="section page-cta-dark" style="background-image: url('/assets/images/dental_bridges01.jpg');">
  <div class="container">
    <span class="section-label">Time to Make a Change?</span>
    <h2>A Full Smile Is<br><span class="text-primary">Within Your Reach.</span></h2>
    <p>Full arch implants are more accessible than most patients expect. Book a free consultation at Sonrisa Dental Specialists and let our team walk you through your candidacy, the process, and the financing options that fit your budget. Your new smile starts with one call.</p>
    <a href="/dental-implants/survey.php" class="btn btn-primary btn-lg">Book Your Free Consultation</a>
  </div>
</section>

<?php get_template_part('template-parts/dual-locations-map'); ?>

<?php get_footer(); ?>
