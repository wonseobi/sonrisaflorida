<?php
/*
Template Name: Orthodontics - Digital Consultation
*/
global $sonrisa_page;
$sonrisa_page = [
    'title'       => 'Free Digital Consultation | Sonrisa Orthodontics',
    'description' => 'Get a free digital orthodontic consultation from the comfort of your home. Upload photos, get expert feedback, and receive a personalized treatment overview from Sonrisa Orthodontics — 100% online.',
    'class'       => 'page-service',
    'nav_type'    => 'orthodontics',
];
get_header();
?>

<!-- ── HERO ── -->
<section class="hero hero-sm">
  <div class="hero-bg">
    <img src="/assets/images/Dental%20Technology01.jpg" alt="Free digital orthodontic consultation" draggable="false">
  </div>
  <div class="hero-overlay"></div>
  <div class="hero-inner">
    <div class="hero-content">
      <span class="hero-badge">100% Online. 100% Free.</span>
      <h1>Free Digital<br><span class="hero-accent">Consultation.</span></h1>
      <p class="hero-sub">Not ready to visit us in person? Start your smile journey from home. Upload a few photos, answer a short questionnaire, and receive a personalized assessment from one of our orthodontists — no office visit required.</p>
      <a href="/orthodontics/survey_orthodontics.php" class="btn btn-primary btn-lg">Start My Digital Consult</a>
    </div>
  </div>
</section>

<?php get_template_part('template-parts/service-nav-orthodontics'); ?>

<!-- ── HOW IT WORKS ── -->
<section class="section">
  <div class="container">
    <div class="section-header text-center">
      <span class="section-label">Simple & Fast</span>
      <h2>Your Free Digital Consult<br><span class="text-primary">in 3 Easy Steps.</span></h2>
    </div>
    <div class="steps-grid">
      <div class="step-item">
        <div class="step-number">01</div>
        <h4>Submit Your Photos</h4>
        <p>Take a few simple photos of your smile using our guided instructions — front view, side profile, and bite. Upload them securely through our online form in under five minutes.</p>
      </div>
      <div class="step-item">
        <div class="step-number">02</div>
        <h4>Tell Us Your Goals</h4>
        <p>Answer a brief questionnaire about what bothers you most about your smile, any past orthodontic treatment, and your preferred timeline. The more we know, the more tailored our response.</p>
      </div>
      <div class="step-item">
        <div class="step-number">03</div>
        <h4>Receive Expert Feedback</h4>
        <p>Within one business day, one of our orthodontists reviews your photos and sends you a personalized overview of the treatment options best suited to your smile and goals.</p>
      </div>
      <div class="step-item">
        <div class="step-number">04</div>
        <h4>Schedule If You're Ready</h4>
        <p>If you'd like to move forward, book your free in-office visit for a full 3D scan and confirmed treatment plan. You're never pressured — take all the time you need.</p>
      </div>
    </div>
  </div>
</section>

<!-- ── WHY DIGITAL ── -->
<section class="section section-light">
  <div class="container">
    <div class="two-col">
      <div class="two-col-text">
        <span class="section-label">Why Digital?</span>
        <h2>Expert Advice From<br><span class="text-primary">the Comfort of Home.</span></h2>
        <p>Life is busy. We understand that taking time off work or arranging childcare for an appointment isn't always easy. Our free digital consultation gives you access to the same expert orthodontic knowledge — without leaving your house.</p>
        <p>It's perfect for parents researching options for their children, adults with demanding schedules, or anyone who simply wants a professional opinion before committing to an in-person visit.</p>
        <ul class="experts-checklist">
          <li><i class="fa-solid fa-circle-check"></i> No office visit required to get started</li>
          <li><i class="fa-solid fa-circle-check"></i> Response from a licensed orthodontist within 24 hours</li>
          <li><i class="fa-solid fa-circle-check"></i> Completely free — no credit card, no strings attached</li>
          <li><i class="fa-solid fa-circle-check"></i> Secure, HIPAA-compliant photo submission</li>
          <li><i class="fa-solid fa-circle-check"></i> Available to patients anywhere in Central Florida</li>
        </ul>
      </div>
      <div class="two-col-img">
        <img src="/assets/images/Dental%20Technology03.jpg" alt="Patient doing digital orthodontic consultation at home" draggable="false">
      </div>
    </div>
  </div>
</section>

<!-- ── DIGITAL VS IN-PERSON ── -->
<section class="section">
  <div class="container">
    <div class="section-header text-center">
      <span class="section-label">Your Options</span>
      <h2>Digital Consult vs.<br><span class="text-primary">In-Office Visit.</span></h2>
      <p>Both paths are free. Choose what works best for you — you can always switch to an in-person visit at any time.</p>
    </div>
    <div class="option-cards-two">
      <div class="option-card">
        <h3>Digital Consultation</h3>
        <p class="option-price">100% Free</p>
        <ul>
          <li>Done from home in minutes</li>
          <li>Submit photos &amp; questionnaire</li>
          <li>Orthodontist feedback within 24 hrs</li>
          <li>General treatment overview</li>
          <li>No scan or X-rays required</li>
          <li>Great for initial exploration</li>
        </ul>
        <a href="/orthodontics/survey_orthodontics.php" class="btn btn-primary" style="margin-top:1.5rem;">Start Online</a>
      </div>
      <div class="option-card option-card-featured">
        <span class="option-badge">Most Complete</span>
        <h3>In-Office Consultation</h3>
        <p class="option-price">100% Free</p>
        <ul>
          <li>Full clinical exam by orthodontist</li>
          <li>Complimentary iTero 3D digital scan</li>
          <li>Digital smile simulation on the spot</li>
          <li>Exact pricing &amp; financing options</li>
          <li>Insurance verified before your visit</li>
          <li>Start treatment same day if ready</li>
        </ul>
        <a href="/orthodontics/survey_orthodontics.php" class="btn btn-primary">Book In-Person</a>
      </div>
    </div>
  </div>
</section>

<!-- ── CTA ── -->
<section class="section page-cta-dark" style="background-image: url('/assets/images/cosmetic_dentistry04.jpg');">
  <div class="container">
    <span class="section-label">Start Today</span>
    <h2>Get Expert Orthodontic Advice<br><span class="text-primary">Without Leaving Home.</span></h2>
    <p>Submit your photos and goals online and hear back from one of our orthodontists within one business day. It's the easiest first step you'll ever take toward your best smile.</p>
    <a href="/orthodontics/survey_orthodontics.php" class="btn btn-primary btn-lg">Start My Free Digital Consult</a>
  </div>
</section>

<?php get_footer(); ?>
