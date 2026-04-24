<?php
/*
Template Name: Dental Implants - Meet the Doctor
*/
global $sonrisa_page;
$sonrisa_page = [
    'title'       => 'Meet the Doctor | Sonrisa Dental Specialists',
    'description' => 'Meet the implant specialist behind Sonrisa Dental Specialists — a board-certified implantologist with over a decade of experience transforming smiles.',
    'class'       => 'page-meet-the-doctor',
    'nav_type'    => 'dental-implants',
];
get_header();
?>

<!-- ── HERO ── -->
<section class="hero hero-sm">
  <div class="hero-bg">
    <img src="/assets/images/about_us01.jpg" alt="Sonrisa lead implantologist" draggable="false">
  </div>
  <div class="hero-overlay"></div>
  <div class="hero-inner">
    <div class="hero-content">
      <span class="hero-badge">Meet the Doctor</span>
      <h1>Experience You Can<br><span class="hero-accent">Trust With Your Smile.</span></h1>
      <p class="hero-sub">Our lead implantologist brings over a decade of specialized training, thousands of successful implant cases, and a genuine passion for restoring patient confidence through precision dentistry.</p>
      <a href="/dental-implants/survey.php" class="btn btn-primary btn-lg">Book a Consultation</a>
    </div>
    <?php get_template_part('template-parts/hero-stats-implants'); ?>
  </div>
</section>

<?php get_template_part('template-parts/service-nav-implants'); ?>

<!-- ── DOCTOR BIO ── -->
<section class="section">
  <div class="container">
    <div class="two-col">
      <div class="two-col-img">
        <img src="/assets/images/Dental%20Technology03.jpg" alt="Dr. Sonrisa reviewing treatment plan with patient" draggable="false">
      </div>
      <div class="two-col-text">
        <span class="section-label">Biography</span>
        <h2>A Specialist Dedicated<br><span class="text-primary">to Implant Dentistry.</span></h2>
        <p>Our lead doctor completed advanced postgraduate training in implantology and oral surgery, following a Doctorate of Dental Surgery (DDS) from a top-ranked dental school. With over a decade of exclusive focus on implant dentistry, the practice has earned a reputation for handling the most complex full-mouth restoration cases in the region.</p>
        <p>Having placed and restored over 5,000 implants, our doctor combines surgical precision with an artistic eye — ensuring every restored smile is not only functional but naturally beautiful. Patients consistently describe the experience as thorough, reassuring, and unlike any dental office they've visited before.</p>
        <ul class="experts-checklist">
          <li><i class="fa-solid fa-circle-check"></i> DDS — Doctorate of Dental Surgery</li>
          <li><i class="fa-solid fa-circle-check"></i> Advanced Certification in Implantology</li>
          <li><i class="fa-solid fa-circle-check"></i> Member, American Academy of Implant Dentistry</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ── PHILOSOPHY ── -->
<section class="section rebuild-section">
  <div class="container">
    <div class="two-col">
      <div class="two-col-text">
        <span class="section-label">Philosophy</span>
        <h2>Precision, Compassion,<br><span class="text-primary">and Lasting Results.</span></h2>
        <p>Every patient who walks through our door deserves a thorough explanation of their options, an honest assessment of what's achievable, and a treatment plan built specifically for their anatomy, goals, and budget. There is no one-size-fits-all approach here.</p>
        <p>Our doctor believes that the most important part of any implant procedure happens before the first incision — in the planning. Using 3D cone-beam CT imaging and digital surgical guides, every implant is virtually placed before it is physically placed, ensuring optimal positioning, angulation, and long-term stability.</p>
        <ul class="experts-checklist">
          <li><i class="fa-solid fa-circle-check"></i> Digital treatment planning before every case</li>
          <li><i class="fa-solid fa-circle-check"></i> Guided implant surgery for maximum accuracy</li>
          <li><i class="fa-solid fa-circle-check"></i> Honest, unhurried patient consultations</li>
        </ul>
        <a href="/dental-implants/survey.php" class="btn btn-primary">Meet the Doctor in Person</a>
      </div>
      <div class="two-col-img">
        <img src="/assets/images/Dental%20Implants04.jpg" alt="Implant specialist at work" draggable="false">
      </div>
    </div>
  </div>
</section>

<!-- ── CTA ── -->
<section class="section page-cta-dark" style="background-image: url('/assets/images/Dental%20Implants01.jpg');">
  <div class="container">
    <span class="section-label">Take the First Step</span>
    <h2>Ready to Meet<br><span class="text-primary">Your Specialist?</span></h2>
    <p>Schedule a free, no-obligation consultation and sit down with our lead implantologist. We'll review your case, answer every question, and walk you through exactly what's possible for your smile.</p>
    <a href="/dental-implants/survey.php" class="btn btn-primary btn-lg">Book a Free Consultation</a>
  </div>
</section>

<?php get_template_part('template-parts/dual-locations-map'); ?>

<?php get_footer(); ?>
