<?php
/*
Template Name: Dental Implants - Snap-In Dentures
*/
global $sonrisa_page;
$sonrisa_page = [
    'title'       => 'Snap-In Dentures — Affordable Implant Stability | Sonrisa',
    'description' => 'Snap-in dentures use 2–4 implants to lock your denture in place during the day. No adhesive. No rocking. Removable at night. An affordable step up from traditional dentures.',
    'class'       => 'page-service',
    'nav_type'    => 'dental-implants',
];
get_header();
?>

<!-- ── HERO ── -->
<section class="hero hero-sm">
  <div class="hero-bg">
    <img src="/assets/images/dental_bridges02.jpg" alt="Snap-in dentures at Sonrisa Dental Specialists" draggable="false">
  </div>
  <div class="hero-overlay"></div>
  <div class="hero-inner">
    <div class="hero-content">
      <span class="hero-badge">Dental Implant Services</span>
      <h1>Snap-In<br><span class="hero-accent">Dentures.</span></h1>
      <p class="hero-sub">Your existing denture — or a new one — fitted with implant attachments that snap it securely into place. All-day stability without the full cost of a fixed arch restoration.</p>
      <a href="/dental-implants/survey.php" class="btn btn-primary btn-lg">Book a Free Consultation</a>
    </div>
    <?php get_template_part('template-parts/hero-stats-implants'); ?>
  </div>
</section>

<?php get_template_part('template-parts/service-nav-implants'); ?>

<!-- ── WHAT IT IS ── -->
<section class="section">
  <div class="container">
    <div class="two-col">
      <div class="two-col-text">
        <span class="section-label">How Snap-In Works</span>
        <h2>Lock It In.<br><span class="text-primary">Take It Out at Night.</span></h2>
        <p>Snap-in dentures use 2 to 4 titanium implants placed in the jawbone as anchor points. The underside of your denture is fitted with corresponding attachments that click onto the implants — creating a secure connection that holds all day without adhesive.</p>
        <p>At night, the denture unsnaps for cleaning and soaking, just like a conventional appliance. In the morning it snaps back in — with none of the rocking, shifting, or adhesive mess that conventional dentures require. For many patients, it's a life-changing upgrade that requires as few as two implants.</p>
        <ul class="experts-checklist">
          <li><i class="fa-solid fa-circle-check"></i> Secure all-day fit with just 2 implants</li>
          <li><i class="fa-solid fa-circle-check"></i> No adhesive — ever</li>
          <li><i class="fa-solid fa-circle-check"></i> Removable at night for easy cleaning</li>
        </ul>
      </div>
      <div class="two-col-img">
        <img src="/assets/images/dental_cleaning_exams01.jpg" alt="Snap-in denture attachment mechanism" draggable="false">
      </div>
    </div>
  </div>
</section>

<!-- ── ADVANTAGES ── -->
<section class="section rebuild-section">
  <div class="container">
    <div class="two-col">
      <div class="two-col-img">
        <img src="/assets/images/cosmetic_dentistry01.jpg" alt="Snap-in denture confidence and comfort" draggable="false">
      </div>
      <div class="two-col-text">
        <span class="section-label">Why Patients Love Snap-In</span>
        <h2>The Confidence of Fixed<br><span class="text-primary">at a Fraction of the Cost.</span></h2>
        <p>Snap-in dentures cost significantly less than a fixed All-on-4 arch, but deliver a dramatic improvement in daily confidence compared to conventional full dentures. For patients who are not ready for — or not candidates for — a fully fixed arch, they represent the ideal middle ground.</p>
        <p>Existing dentures can often be retrofitted with snap-in attachments without fabricating a new appliance, reducing the cost further. We evaluate your current denture at your consultation and advise on the most efficient path forward.</p>
        <ul class="experts-checklist">
          <li><i class="fa-solid fa-circle-check"></i> Often compatible with your existing denture</li>
          <li><i class="fa-solid fa-circle-check"></i> Significant cost savings vs. fully fixed arches</li>
          <li><i class="fa-solid fa-circle-check"></i> Massive confidence improvement over traditional dentures</li>
        </ul>
        <a href="/dental-implants/survey.php" class="btn btn-primary">Get a Free Quote</a>
      </div>
    </div>
  </div>
</section>

<!-- ── CTA ── -->
<section class="section page-cta-dark" style="background-image: url('/assets/images/Dental%20Implants02.jpg');">
  <div class="container">
    <span class="section-label">Simple. Affordable. Stable.</span>
    <h2>Never Worry About<br><span class="text-primary">Your Denture Again.</span></h2>
    <p>Book a free consultation and find out if snap-in dentures are right for your situation. We'll assess your bone, check your current denture, and give you an exact cost breakdown.</p>
    <a href="/dental-implants/survey.php" class="btn btn-primary btn-lg">Book a Free Consultation</a>
  </div>
</section>

<?php get_template_part('template-parts/dual-locations-map'); ?>

<?php get_footer(); ?>
