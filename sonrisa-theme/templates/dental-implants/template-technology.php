<?php
/*
Template Name: Dental Implants - Technology
*/
global $sonrisa_page;
$sonrisa_page = [
    'title'       => 'Implant Technology | Sonrisa Dental Specialists',
    'description' => 'Discover the advanced technology behind every implant at Sonrisa — 3D CT imaging, guided surgery, intraoral scanning, and in-house same-day milling.',
    'class'       => 'page-technology',
    'nav_type'    => 'dental-implants',
];
get_header();
?>

<!-- ── HERO ── -->
<section class="hero hero-sm">
  <div class="hero-bg">
    <img src="/assets/images/technology-hero.jpg" alt="Advanced dental implant technology at Sonrisa" draggable="false">
  </div>
  <div class="hero-overlay"></div>
  <div class="hero-inner">
    <div class="hero-content">
      <span class="hero-badge">Technology</span>
      <h1>The Technology Behind<br><span class="hero-accent">Every Perfect Implant.</span></h1>
      <p class="hero-sub">Precision implant outcomes start long before surgery. We use the most advanced diagnostic and surgical technology available to plan, place, and restore every implant with accuracy that can't be achieved by hand alone.</p>
      <a href="/dental-implants/survey.php" class="btn btn-primary btn-lg">Book a Consultation</a>
    </div>
    <?php get_template_part('template-parts/hero-stats-implants'); ?>
  </div>
</section>

<?php get_template_part('template-parts/service-nav-implants'); ?>

<!-- ── TECH OVERVIEW PILLARS ── -->
<section class="section section-light">
  <div class="container">
    <div class="section-header" style="text-align:center; max-width:640px; margin:0 auto 0;">
      <span class="section-label">Our Technology Stack</span>
      <h2>Four Systems.<br><span class="text-primary">One Seamless Outcome.</span></h2>
      <p style="color:var(--text-muted); margin-top:16px;">Every implant at Sonrisa is supported by an integrated suite of precision technologies — working together from first scan to final crown.</p>
    </div>
    <div class="tech-pillars">
      <div class="tech-pillar">
        <div class="tech-pillar-icon"><i class="fa-solid fa-cube"></i></div>
        <h4>3D Cone-Beam CT</h4>
        <p>Full volumetric imaging of bone, nerves, and anatomy in a single 20-second scan.</p>
      </div>
      <div class="tech-pillar">
        <div class="tech-pillar-icon"><i class="fa-solid fa-bullseye"></i></div>
        <h4>Guided Surgery</h4>
        <p>Digitally planned implant placement replicated intraoperatively with sub-millimeter accuracy.</p>
      </div>
      <div class="tech-pillar">
        <div class="tech-pillar-icon"><i class="fa-solid fa-camera"></i></div>
        <h4>Intraoral 3D Scanning</h4>
        <p>Chairside digital impressions that replace messy putty trays — instantly shareable with our lab.</p>
      </div>
      <div class="tech-pillar">
        <div class="tech-pillar-icon"><i class="fa-solid fa-gem"></i></div>
        <h4>In-House CAD/CAM</h4>
        <p>Same-day crown milling from high-strength ceramic blocks. No temp crowns, no return visits.</p>
      </div>
    </div>
  </div>
</section>

<!-- ── 3D CT IMAGING ── -->
<section class="section">
  <div class="container">
    <div class="two-col">
      <div class="two-col-text">
        <span class="section-label">Diagnostic Imaging</span>
        <h2>3D Cone-Beam<br><span class="text-primary">CT Imaging.</span></h2>
        <p>Unlike standard dental X-rays, our in-house cone-beam CT scanner produces a precise, three-dimensional map of your jawbone, sinus cavities, nerves, and tooth roots — all in a single 20-second scan with minimal radiation.</p>
        <p>This 3D data allows our doctor to measure exact bone density and volume, identify the safest implant positions, and detect any anatomical factors that would affect treatment — before a single incision is made. The result is fewer surprises, safer surgery, and more predictable outcomes.</p>
        <ul class="experts-checklist">
          <li><i class="fa-solid fa-circle-check"></i> Full 3D bone and nerve mapping</li>
          <li><i class="fa-solid fa-circle-check"></i> On-site scan — no referral needed</li>
          <li><i class="fa-solid fa-circle-check"></i> Low-dose radiation protocol</li>
        </ul>
      </div>
      <div class="two-col-img">
        <img src="/assets/images/Dental%20Extractions%2002.jpg" alt="3D cone-beam CT scan for implant planning" draggable="false">
      </div>
    </div>
  </div>
</section>

<!-- ── GUIDED SURGERY ── -->
<section class="section rebuild-section">
  <div class="container">
    <div class="two-col">
      <div class="two-col-img">
        <img src="/assets/images/Dental%20Implants03.jpg" alt="Computer-guided implant surgery" draggable="false">
      </div>
      <div class="two-col-text">
        <span class="section-label">Surgical Precision</span>
        <h2>Computer-Guided<br><span class="text-primary">Implant Surgery.</span></h2>
        <p>Using your 3D CT data, we digitally simulate your entire surgery before it happens. Every implant is virtually placed on-screen — at the exact angle, depth, and position — then a custom surgical guide is fabricated to replicate that plan in the operating field with sub-millimeter accuracy.</p>
        <p>Guided surgery dramatically reduces the margin for error, shortens procedure time, decreases post-operative discomfort, and allows for same-day teeth in many cases. It's one of the most significant advances in modern implantology.</p>
        <ul class="experts-checklist">
          <li><i class="fa-solid fa-circle-check"></i> Virtual implant placement before surgery</li>
          <li><i class="fa-solid fa-circle-check"></i> Custom surgical guide fabricated per patient</li>
          <li><i class="fa-solid fa-circle-check"></i> Faster healing, less discomfort</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ── TECHNOLOGY WORKFLOW ── -->
<section class="section section-light">
  <div class="container">
    <div style="text-align:center; max-width:600px; margin:0 auto 48px;">
      <span class="section-label">From Scan to Smile</span>
      <h2>How Our Technology<br><span class="text-primary">Works Together.</span></h2>
      <p style="color:var(--text-muted); margin-top:16px;">Every tool in our suite plays a specific role in your treatment journey — designed to eliminate guesswork at every stage.</p>
    </div>
    <div class="steps-grid">
      <div class="step-card">
        <div class="step-number">01</div>
        <h4>3D Diagnostic Scan</h4>
        <p>A cone-beam CT captures complete bone anatomy, nerve paths, and sinus topology in one 20-second pass — the foundation of your entire treatment plan.</p>
      </div>
      <div class="step-card">
        <div class="step-number">02</div>
        <h4>Virtual Treatment Plan</h4>
        <p>Your implants are digitally placed on-screen. Angle, depth, and spacing are optimized before a single incision — every decision is made in software first.</p>
      </div>
      <div class="step-card">
        <div class="step-number">03</div>
        <h4>Guided Surgery</h4>
        <p>A custom surgical guide translates the virtual plan into reality with sub-millimeter precision — ensuring placement matches the digital blueprint exactly.</p>
      </div>
      <div class="step-card">
        <div class="step-number">04</div>
        <h4>Same-Day Crown</h4>
        <p>A digital intraoral scan feeds directly into our in-house CAD/CAM mill. Your permanent crown is fabricated chairside — often on the same day as your surgery.</p>
      </div>
    </div>
  </div>
</section>

<!-- ── INTRAORAL SCANNING + CAD/CAM ── -->
<section class="section">
  <div class="container">
    <div class="two-col">
      <div class="two-col-text">
        <span class="section-label">Digital Impressions &amp; In-House Lab</span>
        <h2>Scanned, Designed,<br><span class="text-primary">Milled Same Day.</span></h2>
        <p>Our intraoral scanner captures a precise 3D model of your teeth and gums in minutes — no putty trays, no gagging, no mess. That digital file goes directly to our in-house CAD/CAM milling unit, where your permanent ceramic crown is fabricated from a solid block of high-strength zirconia.</p>
        <p>Most practices wait 2–3 weeks for an off-site lab. We eliminate that entirely. You leave with your final restoration — not a temporary placeholder — and never need a second crown appointment.</p>
        <ul class="experts-checklist">
          <li><i class="fa-solid fa-circle-check"></i> No putty, no gagging, no discomfort</li>
          <li><i class="fa-solid fa-circle-check"></i> Same-day crown fabrication on-site</li>
          <li><i class="fa-solid fa-circle-check"></i> High-strength zirconia &amp; ceramic options</li>
        </ul>
        <a href="/dental-implants/survey.php" class="btn btn-primary">Book a Technology Consultation</a>
      </div>
      <div class="two-col-img">
        <img src="/assets/images/Dental%20Veneers%2004.jpg" alt="In-house CAD/CAM crown milling at Sonrisa" draggable="false">
      </div>
    </div>
  </div>
</section>

<!-- ── CTA ── -->
<section class="section page-cta-dark" style="background-image: url('/assets/images/about_us01.jpg');">
  <div class="container">
    <span class="section-label">See It in Person</span>
    <h2>Experience the Technology<br><span class="text-primary">Difference.</span></h2>
    <p>Schedule a free consultation and see firsthand how our advanced diagnostic and surgical technology produces implant results that are safer, faster, and more predictable than conventional methods.</p>
    <a href="/dental-implants/survey.php" class="btn btn-primary btn-lg">Book a Free Consultation</a>
  </div>
</section>

<?php get_template_part('template-parts/dual-locations-map'); ?>

<?php get_footer(); ?>
