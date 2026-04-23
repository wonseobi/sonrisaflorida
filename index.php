<?php
$page_title       = 'Dentist in Orlando, FL | Sonrisa Dental Specialists';
$page_description = 'Sonrisa Dental Specialists — comprehensive dental care in Orlando, FL. Serving Lake Nona and Oviedo with general dentistry, dental implants, and orthodontics. Call (407) 359-1960.';
$page_class       = 'page-home';
$hide_top_bar     = true;
include __DIR__ . '/includes/header.php';
?>

<style>
/* ── Override full-screen gateway constraints for scrollable homepage ── */
body.page-home {
  height: auto !important;
  overflow: visible !important;
}
.page-home .site-footer {
  display: block !important;
  height: auto !important;
}

/* ── HERO ── */
.hp-hero {
  position: relative;
  min-height: 72vh;
  display: flex;
  align-items: stretch;
  background: var(--dark);
  overflow: hidden;
}
.hp-hero-bg {
  position: absolute;
  inset: 0;
  z-index: 0;
}
.hp-hero-bg img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  opacity: 0.4;
}
.hp-hero-inner {
  position: relative;
  z-index: 2;
  display: flex;
  flex-direction: row;
  align-items: flex-end;
  gap: 40px;
  padding-top: 80px;
  padding-bottom: 72px;
  padding-left: var(--gutter);
  padding-right: var(--gutter);
  width: 100%;
  max-width: var(--container);
  margin: 0 auto;
}
.hp-hero-content {
  flex: 1;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
}
.hp-hero-eyebrow {
  display: inline-block;
  font-size: 13px;
  font-weight: 600;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  color: var(--primary);
  margin-bottom: 14px;
}
.hp-hero h1 {
  font-family: var(--font-body);
  font-size: clamp(38px, 5vw, 64px);
  font-weight: 800;
  color: #fff;
  letter-spacing: -0.02em;
  line-height: 1.1;
  margin-bottom: 18px;
  max-width: 660px;
}
.hp-hero-sub {
  font-size: 17px;
  color: rgba(255,255,255,0.75);
  line-height: 1.65;
  max-width: 560px;
  margin-bottom: 36px;
}
.hp-hero-ctas {
  display: flex;
  align-items: center;
  gap: 14px;
  flex-wrap: wrap;
}
.btn-phone {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 16px 36px;
  background: rgba(255,255,255,0.1);
  color: #fff;
  border: 1px solid rgba(255,255,255,0.28);
  border-radius: 10px;
  font-size: 16px;
  font-weight: 600;
  transition: background 0.2s, border-color 0.2s, transform 0.2s;
  text-decoration: none;
}
.btn-phone:hover {
  background: rgba(255,255,255,0.18);
  border-color: rgba(255,255,255,0.5);
  transform: translateY(-2px);
}

/* ── Specialties intro header ── */
.hp-specialties-intro {
  padding: 72px var(--gutter) 32px;
  text-align: center;
  max-width: var(--container);
  margin: 0 auto;
}
.hp-specialties-intro h2 {
  font-size: clamp(26px, 3vw, 40px);
  font-weight: 800;
  color: var(--text);
  margin-bottom: 12px;
}
.hp-specialties-intro p {
  font-size: 16px;
  color: var(--text-muted);
  max-width: 520px;
  margin: 0 auto;
}

/* ── Gateway: fixed height when inside scrollable page ── */
.gateway-split {
  flex: none !important;
  height: 68vh !important;
  min-height: 440px !important;
  max-height: 680px !important;
}

/* ── E-E-A-T ── */
.hp-eeat {
  background: var(--bg-light);
}
.hp-eeat-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 22px;
  margin: 48px 0 36px;
}
@media (max-width: 900px) {
  .hp-eeat-grid { grid-template-columns: repeat(2, 1fr) !important; }
  .hp-loc-split .hp-loc-map { order: 2; }
  .hp-loc-split .hp-loc-content { order: 1; }
}
/* Let style.css handle gateway stacking at 768px — only reset the height override */
@media (max-width: 768px) {
  .gateway-split {
    height: auto !important;
    max-height: none !important;
    min-height: 0 !important;
  }
}
@media (max-width: 600px) {
  .hp-eeat-grid { grid-template-columns: 1fr !important; }
}
.hp-eeat-card {
  background: var(--white);
  border: 1px solid var(--border);
  border-radius: 12px;
  padding: 30px 26px;
}
.hp-eeat-icon {
  font-size: 22px;
  color: var(--primary);
  margin-bottom: 14px;
  display: block;
}
.hp-eeat-card h3 {
  font-size: 15px;
  font-weight: 700;
  color: var(--text);
  margin-bottom: 8px;
}
.hp-eeat-card p {
  font-size: 14px;
  color: var(--text-muted);
  line-height: 1.6;
}
.hp-eeat-cta {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 12px;
  flex-wrap: wrap;
}

/* ── Locations split layout ── */
.hp-locations { background: var(--bg-light); }
.hp-loc-split {
  display: grid;
  grid-template-columns: 1fr 1fr;
  align-items: center;
  gap: 72px;
  padding: 80px var(--gutter);
  max-width: var(--container);
  margin: 0 auto;
}
.hp-loc-split + .hp-loc-split {
  border-top: 1px solid var(--border);
}
.hp-loc-map {
  border-radius: 20px;
  overflow: hidden;
  aspect-ratio: 4 / 3;
  box-shadow: 0 8px 40px rgba(0,0,0,0.1);
}
.hp-loc-map iframe {
  width: 100%;
  height: 100%;
  display: block;
  border: 0;
}
.hp-loc-eyebrow {
  font-size: 12px;
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--primary);
  margin-bottom: 16px;
  display: block;
}
.hp-loc-content h3 {
  font-size: clamp(28px, 3vw, 40px);
  font-weight: 800;
  color: var(--text);
  line-height: 1.15;
  margin-bottom: 16px;
}
.hp-loc-content h3 span { color: var(--primary); }
.hp-loc-desc {
  font-size: 15px;
  color: var(--text-muted);
  line-height: 1.7;
  margin-bottom: 20px;
}
.hp-loc-tags {
  display: flex;
  flex-wrap: wrap;
  gap: 8px;
  margin-bottom: 24px;
}
.hp-loc-tag {
  display: inline-block;
  padding: 5px 14px;
  border-radius: 20px;
  background: rgba(0,121,255,0.08);
  color: var(--primary);
  font-size: 13px;
  font-weight: 600;
  border: 1px solid rgba(0,121,255,0.18);
}
.hp-loc-checklist {
  list-style: none;
  margin-bottom: 32px;
}
.hp-loc-checklist li {
  display: flex;
  align-items: flex-start;
  gap: 12px;
  font-size: 15px;
  color: var(--text);
  font-weight: 500;
  margin-bottom: 14px;
}
.hp-loc-checklist li::before {
  content: '';
  flex-shrink: 0;
  width: 22px;
  height: 22px;
  margin-top: 1px;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 22 22'%3E%3Ccircle cx='11' cy='11' r='11' fill='%230079FF'/%3E%3Cpath d='M6 11l3.5 3.5 6.5-6.5' stroke='white' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' fill='none'/%3E%3C/svg%3E");
  background-size: contain;
  background-repeat: no-repeat;
}

/* ── Responsive ── */
@media (max-width: 900px) {
  .hp-eeat-grid { grid-template-columns: repeat(2, 1fr); }
  .hp-loc-split { grid-template-columns: 1fr; gap: 36px; padding: 56px 20px; }
}
@media (max-width: 600px) {
  .hp-eeat-grid { grid-template-columns: 1fr; }
  .hp-hero-inner { flex-direction: column; align-items: flex-start; padding: 96px 20px 52px; gap: 24px; }
  .hp-hero-inner .hero-stats { margin-left: 0; }
  .hp-specialties-intro { padding: 52px 20px 24px; }
  .hp-loc-map { aspect-ratio: 16 / 9; }
}

body > div.asw-container > div > a { margin-bottom: 30px; }
</style>

<!-- ── HERO ── -->
<section class="hp-hero">
  <div class="hp-hero-bg">
    <img src="/assets/images/banner_img.jpg" alt="Sonrisa Dental Specialists — dentist office in Orlando, FL" draggable="false">
  </div>
  <div class="hp-hero-inner">
    <div class="hp-hero-content">
      <p class="hp-hero-eyebrow">Serving Lake Nona &amp; Oviedo, FL</p>
      <h1>Dentist in Orlando, FL</h1>
      <p class="hp-hero-sub">Comprehensive dental care for the whole family — routine cleanings, preventive exams, restorations, and more. Trusted specialists right here in Central Florida.</p>
      <div class="hp-hero-ctas">
        <a href="/dental-implants/survey.php" class="btn btn-primary btn-lg">Book Appointment</a>
        <a href="tel:+14073591960" class="btn-phone">
          <i class="fa-solid fa-phone" aria-hidden="true"></i>&nbsp;(407) 359-1960
        </a>
      </div>
    </div>
    <?php include __DIR__ . '/includes/hero-stats-implants.php'; ?>
  </div>
</section>

<?php include __DIR__ . '/includes/service-nav-implants.php'; ?>

<!-- ── SPECIALTY NAVIGATION (2nd section) ── -->
<div class="hp-specialties-intro">
  <span class="section-label">Our Specialties</span>
  <h2>Advanced Care When You Need It</h2>
  <p>Beyond routine dentistry, our in-house specialists handle complex cases — no referrals, no runaround.</p>
</div>

<section class="gateway-split" aria-label="Choose your specialty">

  <a href="/dental-implants/" class="gateway-half gateway-half-implants">
    <div class="gateway-half-img">
      <img src="/assets/images/specialty-implants.jpg" alt="Patient examining dental implant results" draggable="false">
    </div>
    <div class="gateway-half-overlay"></div>
    <div class="gateway-half-body">
      <span class="gateway-tag tag-blue">Implantology</span>
      <h2 class="gateway-title">Dental Implants</h2>
      <div class="gateway-reveal">
        <p>Permanent, natural-looking tooth replacements. From single implants to complete full-arch restorations, all under one roof with dedicated implant specialists.</p>
        <ul class="gateway-checklist checklist-white">
          <li>Single, multiple &amp; full-arch options available</li>
          <li>Same-day implant procedures offered</li>
          <li>Titanium posts with custom porcelain crowns</li>
          <li>Lifetime bone preservation &amp; aesthetics</li>
        </ul>
        <span class="btn btn-primary gateway-btn">Explore Dental Implants &rarr;</span>
      </div>
    </div>
  </a>

  <a href="/orthodontics/" class="gateway-half gateway-half-ortho">
    <div class="gateway-half-img">
      <img src="/assets/images/specialty-orthodontics.jpg" alt="Patient smiling with braces" draggable="false">
    </div>
    <div class="gateway-half-overlay"></div>
    <div class="gateway-half-body">
      <span class="gateway-tag tag-purple">Orthodontics</span>
      <h2 class="gateway-title">Orthodontics</h2>
      <div class="gateway-reveal">
        <p>Straighter teeth and aligned bites for children, teens, and adults. Discreet and effective treatments designed around your lifestyle and goals.</p>
        <ul class="gateway-checklist checklist-white">
          <li>Invisalign&reg; certified Diamond Provider</li>
          <li>Metal &amp; ceramic braces options</li>
          <li>Early interceptive treatment</li>
          <li>Retention planning &amp; long-term maintenance</li>
        </ul>
        <span class="btn btn-purple gateway-btn">Explore Orthodontics &rarr;</span>
      </div>
    </div>
  </a>

</section>

<!-- ── E-E-A-T: ABOUT THE PRACTICE (3rd section) ── -->
<section class="section hp-eeat">
  <div class="container">
    <div class="section-header">
      <span class="section-label">Why Choose Sonrisa</span>
      <h2>Why Choose Sonrisa Dental Specialists</h2>
      <p class="section-sub">Our doctors bring decades of combined experience, advanced training, and a shared commitment to treating every patient like family.</p>
    </div>
    <div class="hp-eeat-grid">
      <div class="hp-eeat-card">
        <i class="fa-solid fa-trophy hp-eeat-icon" aria-hidden="true"></i>
        <h3>Extensive Orthodontic Experience</h3>
        <p>With over 30 years of clinical experience, our practice delivers orthodontic care grounded in precision, consistency, and proven results.</p>
      </div>
      <div class="hp-eeat-card">
        <i class="fa-solid fa-users hp-eeat-icon" aria-hidden="true"></i>
        <h3>Over 20,000 Patients Treated</h3>
        <p>Our team has successfully treated more than 20,000 patients, reflecting a long-standing commitment to excellence in orthodontic care.</p>
      </div>
      <div class="hp-eeat-card">
        <i class="fa-solid fa-microchip hp-eeat-icon" aria-hidden="true"></i>
        <h3>Advanced Digital Technology</h3>
        <p>We utilize modern 3D imaging and customized treatment systems to improve accuracy, efficiency, and overall patient outcomes.</p>
      </div>
      <div class="hp-eeat-card">
        <i class="fa-solid fa-calendar-check hp-eeat-icon" aria-hidden="true"></i>
        <h3>Same-Day Treatment Options</h3>
        <p>For qualified patients, treatment can begin on the same day as the initial consultation, reducing delays and streamlining the process.</p>
      </div>
      <div class="hp-eeat-card">
        <i class="fa-solid fa-list-check hp-eeat-icon" aria-hidden="true"></i>
        <h3>Comprehensive Treatment Solutions</h3>
        <p>We offer a full range of orthodontic options, including braces and clear aligners, tailored to meet each patient's individual needs.</p>
      </div>
      <div class="hp-eeat-card">
        <i class="fa-solid fa-mobile-screen-button hp-eeat-icon" aria-hidden="true"></i>
        <h3>Remote Monitoring Capabilities</h3>
        <p>Our virtual monitoring tools allow for convenient progress tracking, minimizing the need for frequent in-office visits while maintaining quality care.</p>
      </div>
    </div>
    <div class="hp-eeat-cta">
      <a href="/dental-implants/survey.php" class="btn btn-primary btn-lg">Book Appointment</a>
      <a href="tel:+14073591960" class="btn btn-outline btn-lg"><i class="fa-solid fa-phone" aria-hidden="true"></i>&nbsp;(407) 359-1960</a>
    </div>
  </div>
</section>

<!-- ── MEET THE DOCTOR ── -->
<section class="section experts-section">
  <div class="container">
    <div class="two-col">

      <div class="two-col-img">
        <img src="/assets/images/meet-team-02.jpg" alt="Dr. David Lach — Orthodontic Specialist" draggable="false">
      </div>

      <div class="two-col-text">
        <span class="section-label">Meet the Doctor</span>
        <h2>Dr. David Lach<br><span class="text-primary">Orthodontic Specialist</span></h2>
        <p>Dr. David Lach is a highly experienced orthodontic specialist with over 30 years of clinical expertise serving the Orlando community. Throughout his career, he has helped transform more than 20,000 smiles, combining advanced orthodontic techniques with a patient-first approach.</p>
        <p>He earned his dental degree from the University of North Carolina at Chapel Hill, graduating at the top of his class, and went on to complete a Master's Degree in Oral Biology from the University of Louisville. In addition to leading his practice, Dr. Lach contributes to the field as an Assistant Professor at the University of Florida College of Dentistry.</p>
        <ul class="experts-checklist">
          <li><i class="fa-solid fa-circle-check"></i> 30+ Years of Clinical Experience</li>
          <li><i class="fa-solid fa-circle-check"></i> 20,000+ Smiles Transformed</li>
          <li><i class="fa-solid fa-circle-check"></i> UNC Chapel Hill &amp; University of Louisville</li>
          <li><i class="fa-solid fa-circle-check"></i> Assistant Professor, UF College of Dentistry</li>
        </ul>
        <a href="/about/doctor/" class="btn btn-primary">Learn More About Dr. Lach</a>
      </div>

    </div>
  </div>
</section>

<!-- ── MEET THE TEAM ── -->
<section class="section" style="background:var(--bg-light);">
  <div class="container">
    <div class="two-col">

      <div class="two-col-text">
        <span class="section-label">Meet the Team</span>
        <h2>A Dedicated Team<br><span class="text-primary">Focused on Your Experience.</span></h2>
        <p>At Lach Dental Specialists, our team plays a vital role in delivering a seamless and positive patient experience. From your first interaction to the completion of your treatment, every team member is committed to providing attentive, professional, and personalized care.</p>
        <p>Our clinical and administrative staff are highly trained in orthodontic procedures, patient coordination, and modern treatment technologies. They work closely with Dr. Lach to ensure each patient receives clear communication, efficient visits, and consistent support throughout their smile journey.</p>
        <p>Together, we are dedicated to delivering high-quality orthodontic care while building lasting relationships with the patients and families we serve.</p>
        <a href="/about/team/" class="btn btn-primary">Meet the Team</a>
      </div>

      <div class="two-col-img">
        <img src="/assets/images/team_section.jpg" alt="Sonrisa Dental Specialists team" draggable="false">
      </div>

    </div>
  </div>
</section>

<!-- ── LOCATION SIGNALS ── -->
<section class="hp-locations">

  <!-- Lake Nona: map left, content right -->
  <div class="hp-loc-split">
    <div class="hp-loc-map">
      <iframe
        src="https://maps.google.com/maps?q=10437+Moss+Park+Road+Suite+B+Orlando+FL+32832&output=embed&z=15"
        allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
        title="Sonrisa — Lake Nona Office map">
      </iframe>
    </div>
    <div class="hp-loc-content">
      <span class="hp-loc-eyebrow">Location &middot; Lake Nona</span>
      <h3>Your Lake Nona <span>Orthodontic Specialists.</span></h3>
      <p class="hp-loc-desc">Our Lake Nona office is built around orthodontic care with a kid-friendly atmosphere for families. Board-certified orthodontists, bilingual staff, and pediatric dentistry coming soon.</p>
      <div class="hp-loc-tags">
        <span class="hp-loc-tag">Orthodontics</span>
        <span class="hp-loc-tag">IV Sedation</span>
        <span class="hp-loc-tag">Wisdom Teeth</span>
        <span class="hp-loc-tag">Pediatrics Soon</span>
      </div>
      <ul class="hp-loc-checklist">
        <li>Board-certified orthodontist on-site</li>
        <li>Surgical extractions &amp; IV sedation available</li>
        <li>Saturday &amp; evening appointments available</li>
      </ul>
      <a href="/lake-nona/" class="btn btn-primary btn-lg">Visit Our Lake Nona Office</a>
    </div>
  </div>

  <!-- Oviedo: content left, map right -->
  <div class="hp-loc-split">
    <div class="hp-loc-content">
      <span class="hp-loc-eyebrow">Location &middot; Oviedo</span>
      <h3>Our Oviedo <span>Implant &amp; Surgery Center.</span></h3>
      <p class="hp-loc-desc">Our Oviedo office is our flagship implant and oral surgery center. Full-arch restoration, All-On-X, complex reconstructive cases, plus general dentistry and orthodontics.</p>
      <div class="hp-loc-tags">
        <span class="hp-loc-tag">All-On-X</span>
        <span class="hp-loc-tag">Oral Surgery</span>
        <span class="hp-loc-tag">General Dentistry</span>
        <span class="hp-loc-tag">Orthodontics</span>
      </div>
      <ul class="hp-loc-checklist">
        <li>Flagship All-On-X and full-arch implant center</li>
        <li>Board-certified oral surgeon with anesthesiology training</li>
        <li>CBCT imaging &amp; 3D surgical planning on-site</li>
      </ul>
      <a href="/oviedo/" class="btn btn-primary btn-lg">Visit Our Oviedo Office</a>
    </div>
    <div class="hp-loc-map">
      <iframe
        src="https://maps.google.com/maps?q=4250+Alafaya+Trail+Suite+180+Oviedo+FL+32765&output=embed&z=15"
        allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
        title="Sonrisa — Oviedo Office map">
      </iframe>
    </div>
  </div>

</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
