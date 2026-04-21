<?php
$page_title       = 'Book a Free Consultation | Sonrisa Orthodontics';
$page_description = 'Book your free orthodontic consultation at Sonrisa Orthodontics in Oviedo, FL. Digital scan, treatment plan, and financing review — all at no charge, no obligation.';
$page_class       = 'page-service';
$nav_type         = 'orthodontics';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<section class="hero hero-sm">
  <div class="hero-bg">
    <img src="/assets/images/specialty-orthodontics.jpg" alt="Book a free orthodontic consultation at Sonrisa Orthodontics" draggable="false">
  </div>
  <div class="hero-overlay"></div>
  <div class="hero-inner">
    <div class="hero-content">
      <span class="hero-badge">Free Consultation</span>
      <h1>Book Your Free<br><span class="hero-accent">Smile Consultation.</span></h1>
      <p class="hero-sub">Your path to a straighter, healthier smile starts with one simple step. Book your complimentary consultation today — no obligation, no pressure.</p>
      <a href="#consultation-form" class="btn btn-primary btn-lg">Reserve My Spot</a>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/service-nav-orthodontics.php'; ?>

<!-- What Happens at Your Consultation Steps -->
<section class="section">
  <div class="container">
    <div class="section-header text-center">
      <span class="section-label">What to Expect</span>
      <h2>Your Free Consultation — Step by Step</h2>
      <p>A complete, no-pressure orthodontic evaluation that gives you everything you need to make an informed decision about your smile.</p>
    </div>
    <div class="steps-grid">
      <div class="step-item">
        <div class="step-number">01</div>
        <h4>Digital Scan &amp; X-Rays</h4>
        <p>We begin with a comfortable iTero 3D digital scan and low-radiation X-rays — no messy impressions. In minutes, we have a precise model of your teeth and bite to work from.</p>
      </div>
      <div class="step-item">
        <div class="step-number">02</div>
        <h4>Orthodontist Evaluation</h4>
        <p>Your board-certified orthodontist personally reviews your records, examines your bite and teeth, and listens to your goals. This is your time to ask every question on your mind — nothing is rushed.</p>
      </div>
      <div class="step-item">
        <div class="step-number">03</div>
        <h4>Personalized Treatment Plan</h4>
        <p>You receive a written treatment plan with your recommended options, projected timeline, and a digital simulation of your expected result — all before you make any commitment.</p>
      </div>
      <div class="step-item">
        <div class="step-number">04</div>
        <h4>Flexible Financing Review</h4>
        <p>Our treatment coordinator walks you through your insurance benefits, in-house payment plan options, and third-party financing — so you know exactly what treatment will cost and how to make it work for your budget.</p>
      </div>
    </div>
  </div>
</section>

<!-- Form Placeholder -->
<section class="section section-light" id="consultation-form">
  <div class="container">
    <div class="section-header text-center">
      <span class="section-label">Book Now</span>
      <h2>Reserve Your Free Consultation</h2>
      <p>Fill out the form below and our team will contact you within one business day to confirm your appointment.</p>
    </div>
    <div style="max-width:640px;margin:0 auto;border:2px solid #e0e0e0;border-radius:12px;padding:3rem;text-align:center;background:#fff;">
      <i class="fa-solid fa-calendar-check" style="font-size:3rem;color:var(--color-primary);margin-bottom:1rem;display:block;"></i>
      <h3 style="margin-bottom:.75rem;">Consultation Booking Form</h3>
      <p style="color:#666;margin-bottom:2rem;">Our online booking form is launching soon. In the meantime, please contact us directly to reserve your spot.</p>
      <div style="margin-bottom:1.5rem;">
        <a href="tel:+14073591960" class="btn btn-primary btn-lg">
          <i class="fa-solid fa-phone" style="margin-right:.5rem;"></i>Call (407) 359-1960
        </a>
      </div>
      <p style="color:#666;font-size:.9rem;margin-bottom:.5rem;">Mon–Fri 8am–5pm · Sat by appointment</p>
      <p style="color:#666;font-size:.9rem;">4250 Alafaya Trail Suite 180, Oviedo, FL 32765</p>
    </div>
  </div>
</section>

<!-- Office Info Two-Col -->
<section class="section">
  <div class="container">
    <div class="two-col">
      <div class="two-col-text">
        <span class="section-label">Location &amp; Hours</span>
        <h2>We're Conveniently<br><span class="text-primary">Located in Oviedo.</span></h2>
        <p>Our office is located on Alafaya Trail in Oviedo, Florida — easily accessible from Oviedo, Waterford Lakes, Winter Springs, UCF, and surrounding East Orlando communities. Free parking is available directly in front of our suite.</p>

        <div style="margin-top:1.5rem;">
          <h4 style="color:var(--color-primary);margin-bottom:.5rem;"><i class="fa-solid fa-location-dot" style="margin-right:.5rem;"></i>Address</h4>
          <p style="margin:0;">4250 Alafaya Trail Suite 180<br>Oviedo, FL 32765</p>
        </div>

        <div style="margin-top:1.25rem;">
          <h4 style="color:var(--color-primary);margin-bottom:.5rem;"><i class="fa-solid fa-clock" style="margin-right:.5rem;"></i>Office Hours</h4>
          <p style="margin:0;">Monday – Friday: 8:00 AM – 5:00 PM<br>Saturday: By appointment<br>Sunday: Closed</p>
        </div>

        <div style="margin-top:1.25rem;">
          <h4 style="color:var(--color-primary);margin-bottom:.5rem;"><i class="fa-solid fa-clipboard-list" style="margin-right:.5rem;"></i>What to Bring</h4>
          <ul class="experts-checklist" style="margin:0;">
            <li><i class="fa-solid fa-circle-check"></i> Government-issued photo ID</li>
            <li><i class="fa-solid fa-circle-check"></i> Dental insurance card (if applicable)</li>
            <li><i class="fa-solid fa-circle-check"></i> List of current medications</li>
            <li><i class="fa-solid fa-circle-check"></i> Previous dental X-rays (optional)</li>
          </ul>
        </div>
      </div>
      <div class="two-col-img">
        <img src="/assets/images/about_us.jpg" alt="Sonrisa Orthodontics Oviedo office location" draggable="false">
      </div>
    </div>
  </div>
</section>

<!-- Map -->
<section class="section section-light">
  <div class="container">
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/dual-locations-map.php'; ?>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
