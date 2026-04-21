<?php
$page_title       = 'New Patient Forms | Sonrisa Orthodontics';
$page_description = 'Download and complete your new patient forms before your first visit to Sonrisa Orthodontics in Oviedo, FL. Save time and start your treatment journey faster.';
$page_class       = 'page-service';
$nav_type         = 'orthodontics';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<section class="hero hero-sm">
  <div class="hero-bg">
    <img src="/assets/images/cosmetic_dentistry02.jpg" alt="New patient forms and information" draggable="false">
  </div>
  <div class="hero-overlay"></div>
  <div class="hero-inner">
    <div class="hero-content">
      <span class="hero-badge">Sonrisa Orthodontics</span>
      <h1>New Patient<br><span class="hero-accent">Forms &amp; Information.</span></h1>
      <p class="hero-sub">Complete your paperwork before your first visit and spend more time with your orthodontist — less time in the waiting room.</p>
      <a href="/orthodontics/survey_orthodontics.php" class="btn btn-primary btn-lg">Book a Free Consultation</a>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/service-nav-orthodontics.php'; ?>

<!-- What to Bring -->
<section class="section">
  <div class="container">
    <div class="two-col">
      <div class="two-col-text">
        <span class="section-label">Before Your First Visit</span>
        <h2>What to Bring<br><span class="text-primary">to Your Appointment.</span></h2>
        <p>To make the most of your first visit, we ask that you bring a few items along. Having this information ready allows our team to complete your records quickly and spend more of your appointment time on what matters most — your evaluation and treatment plan.</p>
        <p>If you're bringing a minor patient, a parent or legal guardian must be present at the initial consultation to sign consent forms and participate in the treatment discussion.</p>
        <ul class="experts-checklist">
          <li><i class="fa-solid fa-circle-check"></i> Government-issued photo ID</li>
          <li><i class="fa-solid fa-circle-check"></i> Dental insurance card(s)</li>
          <li><i class="fa-solid fa-circle-check"></i> List of current medications and dosages</li>
          <li><i class="fa-solid fa-circle-check"></i> Previous dental X-rays (if available)</li>
          <li><i class="fa-solid fa-circle-check"></i> Preferred payment method</li>
          <li><i class="fa-solid fa-circle-check"></i> Referral letter (if sent by your dentist)</li>
        </ul>
        <a href="/orthodontics/survey_orthodontics.php" class="btn btn-primary">Schedule Your Visit</a>
      </div>
      <div class="two-col-img">
        <img src="/assets/images/cosmetic_dentistry03.jpg" alt="Patient preparing for orthodontic visit" draggable="false">
      </div>
    </div>
  </div>
</section>

<!-- Downloadable Forms -->
<section class="section section-light">
  <div class="container">
    <div class="section-header text-center">
      <span class="section-label">Patient Forms</span>
      <h2>Download &amp; Complete Before You Arrive</h2>
      <p>Print, fill out, and bring these forms to your first appointment — or ask our team to email them to you.</p>
    </div>
    <div class="option-cards">
      <div class="option-card">
        <h3>Medical History Form</h3>
        <p style="color:#666;font-size:.95rem;margin-bottom:1rem;">Essential health information that helps our team understand your medical background and provide safe, personalized care.</p>
        <ul>
          <li>Medications and allergies</li>
          <li>Previous surgeries</li>
          <li>Existing health conditions</li>
          <li>Family dental history</li>
        </ul>
        <a href="#" class="btn btn-primary">Download Form</a>
      </div>
      <div class="option-card option-card-featured">
        <span class="option-badge">Required</span>
        <h3>Insurance &amp; Benefits Form</h3>
        <p style="color:#666;font-size:.95rem;margin-bottom:1rem;">Helps our billing team verify your coverage and ensure you receive every dollar of your orthodontic benefit.</p>
        <ul>
          <li>Primary insurance details</li>
          <li>Secondary insurance (if applicable)</li>
          <li>Subscriber information</li>
          <li>Employer information</li>
        </ul>
        <a href="#" class="btn btn-primary">Download Form</a>
      </div>
      <div class="option-card">
        <h3>Financial Agreement</h3>
        <p style="color:#666;font-size:.95rem;margin-bottom:1rem;">Our treatment financial agreement — reviewed and signed at or before your first appointment.</p>
        <ul>
          <li>Payment plan terms</li>
          <li>Insurance assignment authorization</li>
          <li>Fee schedule acknowledgment</li>
          <li>Cancellation policy</li>
        </ul>
        <a href="#" class="btn btn-primary">Download Form</a>
      </div>
    </div>
  </div>
</section>

<!-- What to Expect Steps -->
<section class="section">
  <div class="container">
    <div class="section-header text-center">
      <span class="section-label">First Visit</span>
      <h2>What Happens at Your First Appointment</h2>
    </div>
    <div class="steps-grid">
      <div class="step-item">
        <div class="step-number">01</div>
        <h4>Check-In &amp; Records</h4>
        <p>Our team welcomes you, verifies your information, and collects your completed forms. We'll also confirm insurance details at this step.</p>
      </div>
      <div class="step-item">
        <div class="step-number">02</div>
        <h4>Digital Scan &amp; X-Rays</h4>
        <p>Using our iTero scanner and digital X-ray system, we capture a complete picture of your teeth, bite, and jaw — no messy impressions needed.</p>
      </div>
      <div class="step-item">
        <div class="step-number">03</div>
        <h4>Orthodontist Evaluation</h4>
        <p>Your orthodontist reviews your records, examines your bite, and discusses your goals. This is your time to ask every question on your mind.</p>
      </div>
      <div class="step-item">
        <div class="step-number">04</div>
        <h4>Treatment Plan &amp; Pricing</h4>
        <p>You receive a written treatment plan with recommended options, timeline estimates, and a complete fee breakdown — all at no charge.</p>
      </div>
    </div>
  </div>
</section>

<!-- Dark CTA -->
<section class="section page-cta-dark" style="background-image: url('/assets/images/cta.jpg');">
  <div class="container">
    <span class="section-label">Ready to Begin?</span>
    <h2>Your First Consultation<br><span class="text-primary">Is Always Free.</span></h2>
    <p>Book your complimentary evaluation today. We'll handle the rest — including verifying your insurance and walking you through every option at no cost and no obligation.</p>
    <a href="/orthodontics/survey_orthodontics.php" class="btn btn-primary btn-lg">Book a Free Consultation</a>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
