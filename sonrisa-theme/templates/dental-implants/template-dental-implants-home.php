<?php
/*
Template Name: Dental Implants - Home
*/
global $sonrisa_page;
$sonrisa_page = [
    'title'       => 'Dental Implants | Sonrisa Dental Specialists',
    'description' => 'Permanent, natural-looking dental implants from Sonrisa Dental Specialists. Single tooth, full arch, All-on-X, and same-day implants. Book a consultation today.',
    'class'       => 'page-dental-implants',
    'nav_type'    => 'dental-implants',
];
get_header();
?>

<!-- ── HERO ── -->
<section class="hero hero-sm">
  <div class="hero-bg">
    <img src="/assets/images/banner_img.jpg" alt="Sonrisa Dental Specialists modern dental office" draggable="false">
  </div>
  <div class="hero-overlay"></div>
  <div class="hero-inner">
    <div class="hero-content">
      <span class="hero-badge">Sonrisa Dental Specialists</span>
      <h1>
        Lifelong Lasting<br>
        <span class="hero-accent">Dental Implant Solutions</span>
      </h1>
      <p class="hero-sub">We are like the cardiologists of the mouth — specialists who understand that a healthier mouth leads to a healthier life. We restore your smile with the most advanced implant techniques available.</p>
      <div class="hero-cta-group">
        <a href="/dental-implants/survey.php" class="btn btn-primary btn-lg">Book an Appointment</a>
        <a href="tel:+14073591960" class="btn btn-white btn-lg">
          <i class="fa-solid fa-phone" aria-hidden="true"></i>&nbsp;(407) 359-1960
        </a>
      </div>
    </div>
    <?php get_template_part('template-parts/hero-stats-implants'); ?>
  </div>
</section>

<?php get_template_part('template-parts/service-nav-implants'); ?>


<!-- ── IMPLANT SOLUTIONS ── -->
<section class="section implant-solutions">
  <div class="container">
    <div class="implant-solutions-intro">
      <span class="section-label">Our Services</span>
      <h2>Complete Dental<br><span class="text-primary">Implant Solutions.</span></h2>
      <p>At Sonrisa Dental Specialists, your smile is our priority. Our team is dedicated to providing high-quality dental care in a comfortable, modern environment.</p>
    </div>
  </div>
  <div class="implant-carousel">
    <div class="implant-scroll" id="implantScroll">
    <div class="implant-track">

      <div class="implant-card">
        <div class="implant-card-img">
          <img src="/assets/images/dental_bridges8.jpg" alt="Dental implants" draggable="false">
        </div>
        <div class="implant-card-body">
          <h3>Dental Implants</h3>
          <p>The gold standard in tooth replacement — a titanium post fused to your jawbone, topped with a custom crown that looks and functions like a natural tooth.</p>
          <a href="/dental-implants/services/dental-implants/" class="implant-card-link">Learn more <i class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div>

      <div class="implant-card">
        <div class="implant-card-img">
          <img src="/assets/images/dental_crowns06.jpg" alt="Full mouth dental implants" draggable="false">
        </div>
        <div class="implant-card-body">
          <h3>Full Mouth Dental Implants</h3>
          <p>Completely restore your upper and lower arches with a fixed, permanent implant solution — no adhesives, no removal, no compromise.</p>
          <a href="/dental-implants/services/full-mouth-dental-implants/" class="implant-card-link">Learn more <i class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div>

      <div class="implant-card">
        <div class="implant-card-img">
          <img src="/assets/images/Dental%20Bonding04.jpg" alt="All-on-4 dental implants" draggable="false">
        </div>
        <div class="implant-card-body">
          <h3>All-on-4 Dental Implants</h3>
          <p>Replace a full arch using just four strategically angled implants — often eliminating the need for bone grafting and enabling same-day teeth.</p>
          <a href="/dental-implants/services/all-on-4/" class="implant-card-link">Learn more <i class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div>

      <div class="implant-card">
        <div class="implant-card-img">
          <img src="/assets/images/cosmetic_dentistry04.jpg" alt="All-on-6 dental implants" draggable="false">
        </div>
        <div class="implant-card-body">
          <h3>All-on-6 Dental Implants</h3>
          <p>Six implants provide additional support and load distribution for patients who want greater long-term stability across the full arch.</p>
          <a href="/dental-implants/services/all-on-6/" class="implant-card-link">Learn more <i class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div>

      <div class="implant-card">
        <div class="implant-card-img">
          <img src="/assets/images/dental_crowns02.jpg" alt="Same-day dental implants" draggable="false">
        </div>
        <div class="implant-card-body">
          <h3>Same-Day Dental Implants</h3>
          <p>Walk in with missing or failing teeth and leave with a fully restored temporary smile — all in a single appointment.</p>
          <a href="/dental-implants/services/same-day/" class="implant-card-link">Learn more <i class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div>

      <div class="implant-card">
        <div class="implant-card-img">
          <img src="/assets/images/Dentures%2001.jpg" alt="Implant-supported dentures" draggable="false">
        </div>
        <div class="implant-card-body">
          <h3>Implant-Supported Dentures</h3>
          <p>Upgrade traditional dentures with implant-anchored stability — improved comfort, stronger chewing, and lasting confidence.</p>
          <a href="/dental-implants/services/implant-supported-dentures/" class="implant-card-link">Learn more <i class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div>

      <div class="implant-card">
        <div class="implant-card-img">
          <img src="/assets/images/dental_bridges02.jpg" alt="Snap-in dentures" draggable="false">
        </div>
        <div class="implant-card-body">
          <h3>Snap-In Dentures</h3>
          <p>A removable but implant-retained denture that snaps securely into place — far more stable than conventional dentures at an accessible price point.</p>
          <a href="/dental-implants/services/snap-in-dentures/" class="implant-card-link">Learn more <i class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div>

      <div class="implant-card">
        <div class="implant-card-img">
          <img src="/assets/images/Dental%20Crowns%20and%20Bridges%2002.jpg" alt="Zirconia dental implants" draggable="false">
        </div>
        <div class="implant-card-body">
          <h3>Zirconia Dental Implants</h3>
          <p>Metal-free, ceramic implants crafted from high-strength zirconia — naturally white, biocompatible, and ideal for patients with metal sensitivities.</p>
          <a href="/dental-implants/services/zirconia/" class="implant-card-link">Learn more <i class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div>

      <div class="implant-card">
        <div class="implant-card-img">
          <img src="/assets/images/dental_crowns06.jpg" alt="Single tooth dental implants" draggable="false">
        </div>
        <div class="implant-card-body">
          <h3>Single Tooth Implants</h3>
          <p>Replace one missing tooth with a natural-looking titanium implant and custom crown that blends seamlessly with your existing smile.</p>
          <a href="/dental-implants/services/single-tooth/" class="implant-card-link">Learn more <i class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div>

      <div class="implant-card">
        <div class="implant-card-img">
          <img src="/assets/images/cosmetic_dentistry02.jpg" alt="Multiple dental implants" draggable="false">
        </div>
        <div class="implant-card-body">
          <h3>Multiple Dental Implants</h3>
          <p>Replace several missing teeth independently without touching healthy neighboring teeth — a stable, long-term solution for partial tooth loss.</p>
          <a href="/dental-implants/services/multiple/" class="implant-card-link">Learn more <i class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div>

      <div class="implant-card">
        <div class="implant-card-img">
          <img src="/assets/images/dental_bridges01.jpg" alt="Dental implant restoration" draggable="false">
        </div>
        <div class="implant-card-body">
          <h3>Dental Implant Restoration</h3>
          <p>Have an existing implant that needs a new crown, abutment, or repair? We restore implants placed by other providers with precision and care.</p>
          <a href="/dental-implants/services/restoration/" class="implant-card-link">Learn more <i class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div>

      <div class="implant-card">
        <div class="implant-card-img">
          <img src="/assets/images/Dental%20Veneers%2004.jpg" alt="Bone grafting for implants" draggable="false">
        </div>
        <div class="implant-card-body">
          <h3>Bone Grafting for Implants</h3>
          <p>Rebuild lost bone volume to create a strong, stable foundation for implant placement — often performed in the same visit as extractions.</p>
          <a href="/dental-implants/services/bone-grafting/" class="implant-card-link">Learn more <i class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div>

      <div class="implant-card">
        <div class="implant-card-img">
          <img src="/assets/images/Dental%20Extractions%2005.jpg" alt="Sinus lift surgery" draggable="false">
        </div>
        <div class="implant-card-body">
          <h3>Sinus Lift Surgery</h3>
          <p>A specialized procedure that elevates the sinus floor and adds bone to the upper jaw, enabling implant placement where bone height is insufficient.</p>
          <a href="/dental-implants/services/sinus-lift/" class="implant-card-link">Learn more <i class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div>

      <div class="implant-card">
        <div class="implant-card-img">
          <img src="/assets/images/dental_cleaning_exams01.jpg" alt="Implant maintenance" draggable="false">
        </div>
        <div class="implant-card-body">
          <h3>Implant Maintenance</h3>
          <p>Protect your investment with regular implant check-ups, professional cleaning, and long-term monitoring to ensure decades of lasting results.</p>
          <a href="/dental-implants/services/maintenance/" class="implant-card-link">Learn more <i class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div>

    </div>
    </div>
    <button class="implant-nav-btn implant-prev" aria-label="Previous slide"><i class="fa-solid fa-chevron-left"></i></button>
    <button class="implant-nav-btn implant-next" aria-label="Next slide"><i class="fa-solid fa-chevron-right"></i></button>
  </div>
  <div class="implant-dots" id="implantDots"></div>
</section>

<!-- ── WHY TRUST US ── -->
<section class="section trust-section">
  <div class="container">
    <div class="trust-header">
      <span class="section-label">Why Choose Us</span>
      <h2>Why Patients Trust Our<br><span class="text-primary">Implant Specialists.</span></h2>
      <p>We are committed to delivering precise, long-lasting implant results using advanced treatment planning and precision technology.</p>
    </div>
    <div class="trust-grid">

      <div class="trust-card">
        <div class="trust-icon"><img src="/assets/images/icon1.svg" alt=""></div>
        <h4>Thousands of Smiles Transformed</h4>
        <p>We have helped countless patients achieve confident, beautiful smiles they are proud to show off.</p>
      </div>

      <div class="trust-card">
        <div class="trust-icon"><img src="/assets/images/icon2.svg" alt=""></div>
        <h4>Experienced Dental Team</h4>
        <p>Our skilled specialists bring years of implantology expertise and a genuine commitment to patient success.</p>
      </div>

      <div class="trust-card">
        <div class="trust-icon"><img src="/assets/images/icon3.svg" alt=""></div>
        <h4>Advanced Technology</h4>
        <p>We use the latest 3D imaging, guided surgery, and digital planning tools to deliver precise, predictable outcomes.</p>
      </div>

      <div class="trust-card">
        <div class="trust-icon"><img src="/assets/images/icon4.svg" alt=""></div>
        <h4>Long-Term Results</h4>
        <p>Implants designed and placed to last a lifetime, with follow-up care that ensures lasting health and beauty.</p>
      </div>

      <div class="trust-card">
        <div class="trust-icon"><img src="/assets/images/icon5.svg" alt=""></div>
        <h4>Comfort First Surgery</h4>
        <p>Sedation options and a gentle approach mean your procedure is calm, comfortable, and stress-free.</p>
      </div>

      <div class="trust-card">
        <div class="trust-icon"><img src="/assets/images/icon6.svg" alt=""></div>
        <h4>Personalized Treatment Plans</h4>
        <p>Every treatment plan is tailored specifically to your anatomy, goals, and timeline — never one-size-fits-all.</p>
      </div>

    </div>
  </div>
</section>

<!-- ── EXPERTS SECTION ── -->
<section class="section experts-section">
  <div class="container">
    <div class="two-col">

      <div class="two-col-img">
        <img src="/assets/images/about_us.jpg" alt="Dental implant specialist consulting with patient" draggable="false">
      </div>

      <div class="two-col-text">
        <span class="section-label">About Us</span>
        <h2>Experts in Dental<br><span class="text-primary">Implant Restoration.</span></h2>
        <p>For over 10 years, Sonrisa Dental Specialists has focused on restoring smiles through advanced implant dentistry. We treat complex full-mouth cases, implant hundreds of patients per year, and routinely deliver outstanding results with natural-looking precision.</p>
        <p>We combine artistry with science — every smile is custom-crafted.</p>
        <ul class="experts-checklist">
          <li><i class="fa-solid fa-circle-check"></i> Full Mouth Restoration</li>
          <li><i class="fa-solid fa-circle-check"></i> Bone Grafting &amp; Replacement</li>
          <li><i class="fa-solid fa-circle-check"></i> Complete Custom Fabrication</li>
        </ul>
        <a href="/dental-implants/survey.php" class="btn btn-primary">Schedule Appointment</a>
      </div>

    </div>
  </div>
</section>

<!-- ── TRANSFORMATIONS (hidden until content ready) ── -->
<?php /*
<section class="section transformations-section">
  <div class="container">
    <div class="transformations-header">
      <span class="section-label section-label-light">Testimonials</span>
      <h2>Real Implant<br><span class="text-primary">Transformations.</span></h2>
      <p>Hear directly from our patients as they share their experiences at Sonrisa Dental Specialists. These life-changing smile transformations speak for themselves.</p>
    </div>
    <div class="video-coming-soon">
      <i class="fa-solid fa-film"></i>
      <h3>Coming Soon</h3>
      <p>Patient video testimonials are on their way. Check back shortly.</p>
    </div>
  </div>
</section>
*/ ?>

<!-- ── REBUILD SECTION ── -->
<section class="section rebuild-section">
  <div class="container">
    <div class="two-col">

      <div class="two-col-text">
        <span class="section-label">About Us</span>
        <h2>Rebuild Your Smile with<br><span class="text-primary">Sonrisa Dental Specialists</span></h2>
        <p>Choosing the right dental provider is an important decision, and at Sonrisa Dental Specialists we want to make this choice easy. Our team of dedicated implant specialists will work hand-in-hand with you throughout your journey to a renewed smile.</p>
        <p>We offer flexible financing options, accepting most insurance plans and providing affordable payment plans so your dream smile is within reach.</p>
        <a href="/dental-implants/survey.php" class="btn btn-primary">Schedule Appointment</a>
      </div>

      <div class="two-col-img">
        <img src="/assets/images/cta.jpg" alt="Patient smiling after dental implant treatment" draggable="false">
      </div>

    </div>
  </div>
</section>

<!-- ── VISIT OVIEDO ── -->
<section class="section" style="background:var(--bg-light);">
  <div class="container">
    <div class="two-col two-col-map-row">
      <div class="two-col-text">
        <span class="section-label">Location &middot; Oviedo</span>
        <h2>Our Oviedo <span class="text-primary">Implant &amp; Surgery Center.</span></h2>
        <p style="color:var(--text-muted);margin-bottom:20px;">Our Oviedo office is our flagship implant and oral surgery center. Full-arch restoration, All-On-X, complex reconstructive cases — performed by a board-certified oral surgeon with anesthesiology training.</p>
        <ul class="experts-checklist" style="margin-bottom:24px;">
          <li><i class="fa-solid fa-circle-check"></i> Flagship All-On-X and full-arch implant center</li>
          <li><i class="fa-solid fa-circle-check"></i> Board-certified oral surgeon with anesthesiology training</li>
          <li><i class="fa-solid fa-circle-check"></i> CBCT imaging &amp; 3D surgical planning on-site</li>
        </ul>
        <a href="/oviedo/" class="btn btn-primary btn-lg">Visit Our Oviedo Office</a>
      </div>
      <div class="two-col-map">
        <iframe
          src="https://maps.google.com/maps?q=4250+Alafaya+Trail+Suite+180+Oviedo+FL+32765&output=embed&z=15"
          width="100%" height="100%" style="border:0;min-height:360px;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade" title="Sonrisa — Oviedo Office">
        </iframe>
      </div>
    </div>
  </div>
</section>

<!-- ── REVIEWS ── -->
<section class="section reviews-section">
  <div class="container">
    <div class="reviews-header">
      <span class="section-label">5,000+ Smiles</span>
      <h2>Hear their <span class="text-primary">stories.</span></h2>
    </div>
    <div class="reviews-grid">

      <div class="review-card">
        <div class="review-stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
        <p class="review-text">"Only after 14 months, my son's teeth have became so straight. The staff is so sweet to me and my sons, and the place is incredibly clean and cozy. Would recommend people to get their teeth done here!"</p>
        <div class="review-author">
          <div class="review-avatar">J</div>
          <div>
            <strong>Jessica Tran</strong>
            <span>Verified Patient</span>
          </div>
        </div>
      </div>

      <div class="review-card">
        <div class="review-stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
        <p class="review-text">"I've had an amazing experience with my braces here. The whole team is professional and welcoming, but I especially want to give a shout out to Brad — he always makes sure I'm comfortable, explains everything clearly, and really goes above and beyond. I've already seen great progress with my smile, and every appointment feels smooth and stress-free."</p>
        <div class="review-author">
          <div class="review-avatar">C</div>
          <div>
            <strong>Christian Perez</strong>
            <span>Verified Patient</span>
          </div>
        </div>
      </div>

      <div class="review-card">
        <div class="review-stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
        <p class="review-text">"Wow I am beyond happy with the professionalism in the office — the staff, the doctor, and a big shout out to Brad! The doctor responded to my text immediately even after hours, and Brad came back to the office on his own personal time to help my daughter. Speaks volumes of the customer service embedded in all of the staff. Keep up the amazing work — you forever have a customer!"</p>
        <div class="review-author">
          <div class="review-avatar">C</div>
          <div>
            <strong>Chrissy Matos</strong>
            <span>Verified Patient</span>
          </div>
        </div>
      </div>

    </div>
    <div class="reviews-cta">
      <a href="/dental-implants/survey.php" class="btn btn-primary btn-lg">Book an Appointment</a>
    </div>
  </div>
</section>

<!-- ── MAP ── -->
<?php get_template_part('template-parts/dual-locations-map'); ?>

<?php get_footer(); ?>
