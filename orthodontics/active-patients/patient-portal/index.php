<?php
$page_title       = 'Patient Portal | Sonrisa Orthodontics';
$page_description = 'Access your Sonrisa Orthodontics patient portal online — view appointments, treatment progress, documents, and message your care team from any device, 24/7.';
$page_class       = 'page-service';
$nav_type         = 'orthodontics';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<section class="hero hero-sm">
  <div class="hero-bg">
    <img src="/assets/images/Dental%20Technology01.jpg" alt="Sonrisa Orthodontics patient portal" draggable="false">
  </div>
  <div class="hero-overlay"></div>
  <div class="hero-inner">
    <div class="hero-content">
      <span class="hero-badge">Sonrisa Orthodontics</span>
      <h1>Your Patient Portal.<br><span class="hero-accent">Everything in One Place.</span></h1>
      <p class="hero-sub">Secure, 24/7 access to your treatment information, appointment history, documents, and your care team — all from any device.</p>
      <a href="/orthodontics/survey_orthodontics.php" class="btn btn-primary btn-lg">Book a Free Consultation</a>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/service-nav-orthodontics.php'; ?>

<!-- Portal Overview -->
<section class="section">
  <div class="container">
    <div class="two-col">
      <div class="two-col-text">
        <span class="section-label">Your Account, Your Way</span>
        <h2>Managing Your Care<br><span class="text-primary">Has Never Been Easier.</span></h2>
        <p>The Sonrisa Orthodontics patient portal is your secure, centralized hub for everything related to your orthodontic care. Whether you want to check your next appointment, track your treatment progress, send a message to your care team, or download a document for insurance purposes — it's all available at your fingertips, 24 hours a day.</p>
        <p>Your portal account is set up when you begin treatment. You'll receive a secure login link by email from our team. All data is encrypted and stored in a HIPAA-compliant system, ensuring your health information is always protected.</p>
        <ul class="experts-checklist">
          <li><i class="fa-solid fa-circle-check"></i> Secure login — encrypted and HIPAA-compliant</li>
          <li><i class="fa-solid fa-circle-check"></i> View upcoming and past appointments</li>
          <li><i class="fa-solid fa-circle-check"></i> Track your treatment progress milestones</li>
          <li><i class="fa-solid fa-circle-check"></i> Send secure messages to your care team</li>
          <li><i class="fa-solid fa-circle-check"></i> Download forms, receipts, and clinical documents</li>
        </ul>
        <a href="/orthodontics/survey_orthodontics.php" class="btn btn-primary">Questions? Contact Us</a>
      </div>
      <div class="two-col-img">
        <img src="/assets/images/Dental%20Technology03.jpg" alt="Patient portal access on any device" draggable="false">
      </div>
    </div>
  </div>
</section>

<!-- Features Tech Pillars -->
<section class="section section-light">
  <div class="container">
    <div class="section-header text-center">
      <span class="section-label">Portal Features</span>
      <h2>Everything You Need to Manage Your Care</h2>
    </div>
    <div class="tech-pillars">
      <div class="tech-pillar">
        <div class="tech-pillar-icon"><i class="fa-solid fa-calendar-check"></i></div>
        <h4>Appointment Booking</h4>
        <p>Request and manage your appointments directly through the portal. View your upcoming schedule, request time changes, and receive automated reminders by text or email.</p>
      </div>
      <div class="tech-pillar">
        <div class="tech-pillar-icon"><i class="fa-solid fa-chart-line"></i></div>
        <h4>Treatment Progress</h4>
        <p>Track your treatment milestones from start to finish. See where you are in your plan, review notes from your appointments, and visualize your progress over time.</p>
      </div>
      <div class="tech-pillar">
        <div class="tech-pillar-icon"><i class="fa-solid fa-comments"></i></div>
        <h4>Secure Messaging</h4>
        <p>Send questions directly to your treatment coordinator or clinical team without having to call. Messages are encrypted and responded to within one business day.</p>
      </div>
      <div class="tech-pillar">
        <div class="tech-pillar-icon"><i class="fa-solid fa-file-lines"></i></div>
        <h4>Digital Documents</h4>
        <p>Access your financial agreements, insurance letters, clinical notes, and receipts anytime you need them — no more calling the office to request paperwork.</p>
      </div>
    </div>
  </div>
</section>

<!-- Portal Login Placeholder -->
<section class="section">
  <div class="container">
    <div class="section-header text-center">
      <span class="section-label">Patient Login</span>
      <h2>Access Your Portal</h2>
    </div>
    <div style="max-width:560px;margin:0 auto;background:#f0f4ff;border-radius:12px;padding:3rem;text-align:center;">
      <i class="fa-solid fa-user-circle" style="font-size:3rem;color:var(--primary);margin-bottom:1rem;display:block;"></i>
      <h3 style="margin-bottom:.75rem;">Ready to Access Your Account?</h3>
      <p style="color:#555;margin-bottom:1.5rem;">Call our team and we'll get you set up, answer any questions about your treatment progress, or update your appointment — all in one quick call.</p>
      <a href="tel:+14073591960" class="btn btn-primary" style="margin-bottom:1rem;">Call (407) 359-1960</a>
      <p style="color:#888;font-size:.9rem;margin:0;">Mon–Fri 7am–8pm · Sat 9am–3pm</p>
    </div>
  </div>
</section>

<!-- Dark CTA -->
<section class="section page-cta-dark" style="background-image: url('/assets/images/cta.jpg');">
  <div class="container">
    <span class="section-label">We're Here for You</span>
    <h2>Questions About<br><span class="text-primary">Your Treatment?</span></h2>
    <p>Our team is always available by phone during office hours. Call us at <a href="tel:+14073591960" style="color:var(--color-primary);">(407) 359-1960</a> or book a consultation online — we're happy to help.</p>
    <a href="/orthodontics/survey_orthodontics.php" class="btn btn-primary btn-lg">Book a Free Consultation</a>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
