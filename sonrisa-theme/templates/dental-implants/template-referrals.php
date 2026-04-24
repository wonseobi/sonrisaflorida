<?php
/*
Template Name: Dental Implants - Referrals
*/
global $sonrisa_page;
$sonrisa_page = [
    'title'       => 'Refer a Patient | Sonrisa Dental Specialists',
    'description' => 'Referring dentists trust Sonrisa Dental Specialists for implants, periodontics, laser procedures, and complex oral rehabilitation. Submit a patient referral online.',
    'class'       => 'page-service',
    'nav_type'    => 'dental-implants',
];
get_header();
?>

<!-- ── HERO ── -->
<section class="hero hero-sm">
  <div class="hero-bg">
    <img src="/assets/images/Dental%20Implants01.jpg" alt="Refer a patient to Sonrisa Dental Specialists" draggable="false">
  </div>
  <div class="hero-overlay"></div>
  <div class="hero-inner">
    <div class="hero-content">
      <span class="hero-badge">Dental Implant Services</span>
      <h1>Refer a Patient<br><span class="hero-accent">to Our Specialists.</span></h1>
      <p class="hero-sub">We partner with general dentists and specialists across Central Florida to deliver implant, periodontal, and surgical care their patients can trust — with detailed case reports returned after every visit.</p>
      <a href="#download-referral" class="btn btn-primary btn-lg">Download Referral Form</a>
    </div>
    <?php get_template_part('template-parts/hero-stats-implants'); ?>
  </div>
</section>

<?php get_template_part('template-parts/service-nav-implants'); ?>

<!-- ── WHY REFER TO SONRISA ── -->
<section class="section">
  <div class="container">
    <div class="two-col">
      <div class="two-col-text">
        <span class="section-label">Our Partnership Philosophy</span>
        <h2>Why Referring Doctors<br><span class="text-primary">Choose Sonrisa.</span></h2>
        <p>We understand what referring doctors need: a specialist team that treats their patients with the same level of care they would, communicates clearly and promptly, and sends patients back — not keeps them. That's exactly how we operate.</p>
        <p>Our co-treatment philosophy is built on mutual respect for the patient relationship you've already established. We are the specialists for the procedure; you remain their primary care dentist. Every patient referred to us comes back to you with a detailed case report and a clear plan for their continuing care.</p>
        <ul class="experts-checklist">
          <li><i class="fa-solid fa-circle-check"></i> Board-certified specialists with advanced training in implants and periodontics</li>
          <li><i class="fa-solid fa-circle-check"></i> Same-week appointment availability for most referrals</li>
          <li><i class="fa-solid fa-circle-check"></i> Detailed written case reports returned after every appointment</li>
          <li><i class="fa-solid fa-circle-check"></i> Co-treatment philosophy — we collaborate, not compete</li>
          <li><i class="fa-solid fa-circle-check"></i> We do not solicit or poach referring doctor patients for general care</li>
        </ul>
      </div>
      <div class="two-col-img">
        <img src="/assets/images/Dental%20Implants02.jpg" alt="Specialist partnership and patient referral at Sonrisa" draggable="false">
      </div>
    </div>
  </div>
</section>

<!-- ── WHAT WE TREAT ── -->
<section class="section section-light">
  <div class="container">
    <div style="text-align:center; max-width:600px; margin:0 auto 0;">
      <span class="section-label">Referral Services</span>
      <h2>What We Treat<br><span class="text-primary">for Your Patients.</span></h2>
      <p style="color:var(--text-muted); margin-top:16px;">We accept referrals for the full spectrum of implant, periodontal, laser, and surgical services. If you're unsure whether a case is appropriate, call us — we're happy to consult.</p>
    </div>
    <div class="tech-pillars">
      <div class="tech-pillar">
        <div class="tech-pillar-icon"><i class="fa-solid fa-tooth"></i></div>
        <h4>Implant Placement</h4>
        <p>Single, multiple, and full-arch implant placement using advanced surgical protocols including LAIP and 3D-guided surgery.</p>
      </div>
      <div class="tech-pillar">
        <div class="tech-pillar-icon"><i class="fa-solid fa-shield-halved"></i></div>
        <h4>Periodontal Surgery</h4>
        <p>Osseous surgery, pocket reduction, soft tissue grafting, crown lengthening, and all phases of surgical periodontal care.</p>
      </div>
      <div class="tech-pillar">
        <div class="tech-pillar-icon"><i class="fa-solid fa-bolt"></i></div>
        <h4>LANAP</h4>
        <p>FDA-cleared laser periodontal therapy for moderate to severe periodontitis — an excellent referral option for patients who want to avoid traditional surgery.</p>
      </div>
      <div class="tech-pillar">
        <div class="tech-pillar-icon"><i class="fa-solid fa-layer-group"></i></div>
        <h4>BLAST &amp; LAIP</h4>
        <p>Advanced bone augmentation and laser-assisted implant placement protocols for complex cases and patients with compromised sites.</p>
      </div>
      <div class="tech-pillar">
        <div class="tech-pillar-icon"><i class="fa-solid fa-couch"></i></div>
        <h4>IV Sedation</h4>
        <p>Full IV sedation services for anxious patients, complex procedures, and cases requiring multiple treatments in a single visit.</p>
      </div>
      <div class="tech-pillar">
        <div class="tech-pillar-icon"><i class="fa-solid fa-bone"></i></div>
        <h4>Bone Grafting</h4>
        <p>Socket preservation, ridge augmentation, and all bone grafting procedures necessary to restore candidacy for implant placement.</p>
      </div>
      <div class="tech-pillar">
        <div class="tech-pillar-icon"><i class="fa-solid fa-arrow-up"></i></div>
        <h4>Sinus Lift</h4>
        <p>Lateral window and crestal sinus lift procedures for posterior maxillary implant cases requiring sinus augmentation.</p>
      </div>
      <div class="tech-pillar">
        <div class="tech-pillar-icon"><i class="fa-solid fa-triangle-exclamation"></i></div>
        <h4>Ailing &amp; Failing Implants</h4>
        <p>Evaluation and treatment of peri-implantitis, implant mobility, and failing implants — with a focus on saving the implant when possible.</p>
      </div>
    </div>
  </div>
</section>

<!-- ── REFERRAL DOWNLOAD ── -->
<section class="section section-light" id="download-referral">
  <div class="container">
    <div style="text-align:center; max-width:560px; margin:0 auto;">
      <span class="section-label">Referral Form</span>
      <h2>Download Our<br><span class="text-primary">Referral Form.</span></h2>
      <p style="color:var(--text-muted); margin:16px 0 32px;">Print and complete our referral form, then fax or bring it to our office. For urgent cases, please call us directly at <a href="tel:+14073591960" style="color:var(--primary);">(407) 359-1960</a>.</p>
      <a href="/assets/docs/sonrisa-referral-form.pdf" download class="btn btn-primary btn-lg">
        <i class="fa-solid fa-file-arrow-down" style="margin-right:8px;"></i>Download Referral Form
      </a>
    </div>
  </div>
</section>

<!-- ── CTA ── -->
<section class="section page-cta-dark" style="background-image: url('/assets/images/Dental%20Implants01.jpg');">
  <div class="container">
    <span class="section-label">Partner With Us</span>
    <h2>Your Patients Deserve<br><span class="text-primary">Specialist-Level Care They Can Trust.</span></h2>
    <p>We take referrals seriously and we take care of your patients the way you would. Call us to establish a referral relationship or submit a case using the form above.</p>
    <div style="display:flex; gap:16px; flex-wrap:wrap; justify-content:center; margin-top:8px;">
      <a href="tel:+14073591960" class="btn btn-primary btn-lg">Call Now — (407) 359-1960</a>
      <a href="#download-referral" class="btn btn-outline btn-lg">Download Referral Form</a>
    </div>
  </div>
</section>

<?php get_template_part('template-parts/dual-locations-map'); ?>

<?php get_footer(); ?>
