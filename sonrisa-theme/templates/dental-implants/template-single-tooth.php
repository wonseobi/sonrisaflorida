<?php
/*
Template Name: Dental Implants - Single Tooth
*/
global $sonrisa_page;
$sonrisa_page = [
    'title'       => 'Single Tooth Dental Implant — Replace One Missing Tooth | Sonrisa',
    'description' => 'A single tooth dental implant replaces one missing tooth with a permanent, natural-looking crown — without altering adjacent teeth. The cleanest solution available.',
    'class'       => 'page-service',
    'nav_type'    => 'dental-implants',
];
get_header();
?>

<!-- ── HERO ── -->
<section class="hero hero-sm">
  <div class="hero-bg">
    <img src="/assets/images/dental_crowns06.jpg" alt="Single tooth dental implant at Sonrisa" draggable="false">
  </div>
  <div class="hero-overlay"></div>
  <div class="hero-inner">
    <div class="hero-content">
      <span class="hero-badge">Dental Implant Services</span>
      <h1>Single Tooth<br><span class="hero-accent">Dental Implant.</span></h1>
      <p class="hero-sub">One missing tooth. One implant. One crown. The cleanest, most conservative, most permanent way to restore a gap without touching a single adjacent tooth.</p>
      <a href="/dental-implants/survey.php" class="btn btn-primary btn-lg">Book a Free Consultation</a>
    </div>
    <?php get_template_part('template-parts/hero-stats-implants'); ?>
  </div>
</section>

<?php get_template_part('template-parts/service-nav-implants'); ?>

<!-- ── WHY NOT A BRIDGE ── -->
<section class="section">
  <div class="container">
    <div class="two-col">
      <div class="two-col-text">
        <span class="section-label">Implant vs. Bridge</span>
        <h2>Why an Implant Beats<br><span class="text-primary">a Bridge Every Time.</span></h2>
        <p>A traditional dental bridge fills a gap by crowning the two teeth on either side and suspending a false tooth between them. This requires permanently grinding down two perfectly healthy teeth — removing enamel that can never grow back — to support the bridge structure.</p>
        <p>A single implant is entirely self-supporting. It requires no modification to adjacent teeth. The titanium post goes into the jawbone where the missing tooth was, and a custom ceramic crown attaches on top. The result: one restored tooth, no compromised neighbors, and natural bone stimulation that prevents future bone loss at the site.</p>
        <ul class="experts-checklist">
          <li><i class="fa-solid fa-circle-check"></i> Adjacent teeth untouched — no grinding required</li>
          <li><i class="fa-solid fa-circle-check"></i> Prevents bone loss at the missing tooth site</li>
          <li><i class="fa-solid fa-circle-check"></i> Easier to clean than a bridge — floss normally</li>
        </ul>
      </div>
      <div class="two-col-img">
        <img src="/assets/images/cosmetic_dentistry01.jpg" alt="Single implant vs dental bridge comparison" draggable="false">
      </div>
    </div>
  </div>
</section>

<!-- ── THE PROCESS ── -->
<section class="section rebuild-section">
  <div class="container">
    <div class="two-col">
      <div class="two-col-img">
        <img src="/assets/images/dental_bridges04.jpg" alt="Single tooth implant procedure process" draggable="false">
      </div>
      <div class="two-col-text">
        <span class="section-label">What to Expect</span>
        <h2>Simple Process.<br><span class="text-primary">Permanent Outcome.</span></h2>
        <p>A single tooth implant typically involves two or three appointments spread across a few months. At the first, the implant post is placed under local anesthesia — a procedure that takes under an hour for most single-tooth cases. A healing cap or provisional crown is placed while the implant integrates with the bone over 8–12 weeks.</p>
        <p>Once osseointegration is confirmed, a custom ceramic crown is fabricated — matched precisely to the color, shape, and size of your surrounding teeth — and permanently cemented or screwed onto the abutment. Most patients cannot tell which tooth is the implant.</p>
        <ul class="experts-checklist">
          <li><i class="fa-solid fa-circle-check"></i> Placement completed in under one hour</li>
          <li><i class="fa-solid fa-circle-check"></i> 8–12 weeks osseointegration period</li>
          <li><i class="fa-solid fa-circle-check"></i> Crown matched exactly to adjacent teeth</li>
        </ul>
        <a href="/dental-implants/survey.php" class="btn btn-primary">Start the Process</a>
      </div>
    </div>
  </div>
</section>

<!-- ── CTA ── -->
<section class="section page-cta-dark" style="background-image: url('/assets/images/dental_implants05.jpg');">
  <div class="container">
    <span class="section-label">One Tooth. One Implant.</span>
    <h2>The Most Conservative Way<br><span class="text-primary">to Restore Your Smile.</span></h2>
    <p>Book a free consultation and we'll assess the missing tooth site, confirm your bone volume, and walk you through the complete single-tooth implant process — with same-day imaging and transparent pricing.</p>
    <a href="/dental-implants/survey.php" class="btn btn-primary btn-lg">Book a Free Consultation</a>
  </div>
</section>

<?php get_template_part('template-parts/dual-locations-map'); ?>

<?php get_footer(); ?>
