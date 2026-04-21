<?php
$page_title       = 'Online Payments | Sonrisa Orthodontics';
$page_description = 'Pay your Sonrisa Orthodontics balance online, anytime. Secure payment portal accepting credit cards, FSA/HSA, bank transfer, and CareCredit in Oviedo, FL.';
$page_class       = 'page-service';
$nav_type         = 'orthodontics';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<section class="hero hero-sm">
  <div class="hero-bg">
    <img src="/assets/images/Dental%20Technology03.jpg" alt="Online payment portal for orthodontics" draggable="false">
  </div>
  <div class="hero-overlay"></div>
  <div class="hero-inner">
    <div class="hero-content">
      <span class="hero-badge">Sonrisa Orthodontics</span>
      <h1>Pay Your Balance<br><span class="hero-accent">Online. Anytime.</span></h1>
      <p class="hero-sub">A fast, secure, and convenient way to manage your payments — from your phone, tablet, or computer, 24 hours a day.</p>
      <a href="/orthodontics/survey_orthodontics.php" class="btn btn-primary btn-lg">Book a Free Consultation</a>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/service-nav-orthodontics.php'; ?>

<!-- Payment Portal Intro -->
<section class="section">
  <div class="container">
    <div class="two-col">
      <div class="two-col-text">
        <span class="section-label">Secure Online Payments</span>
        <h2>Fast, Safe, and<br><span class="text-primary">Always Available.</span></h2>
        <p>Our secure online payment portal makes it easy to manage your orthodontic account without having to call during business hours or wait until your next appointment. Whether you're making a monthly payment, paying off your balance, or simply checking your account, everything is available online 24/7.</p>
        <p>All transactions are processed through an encrypted, HIPAA-compliant payment system. Your financial information is never stored on our servers — every payment is processed securely through our payment partner.</p>
        <ul class="experts-checklist">
          <li><i class="fa-solid fa-circle-check"></i> 24/7 access from any device</li>
          <li><i class="fa-solid fa-circle-check"></i> Instant payment confirmation</li>
          <li><i class="fa-solid fa-circle-check"></i> View account balance and payment history</li>
          <li><i class="fa-solid fa-circle-check"></i> Set up automatic monthly payments</li>
          <li><i class="fa-solid fa-circle-check"></i> Download receipts for FSA/HSA reimbursement</li>
        </ul>
        <a href="/orthodontics/survey_orthodontics.php" class="btn btn-primary">Contact Our Office</a>
      </div>
      <div class="two-col-img">
        <img src="/assets/images/Dental%20Technology01.jpg" alt="Secure orthodontic payment portal" draggable="false">
      </div>
    </div>
  </div>
</section>

<!-- Payment Methods Tech Pillars -->
<section class="section section-light">
  <div class="container">
    <div class="section-header text-center">
      <span class="section-label">Payment Methods</span>
      <h2>We Accept the Way You Want to Pay</h2>
    </div>
    <div class="tech-pillars">
      <div class="tech-pillar">
        <div class="tech-pillar-icon"><i class="fa-solid fa-credit-card"></i></div>
        <h4>Credit &amp; Debit Cards</h4>
        <p>Visa, Mastercard, American Express, and Discover cards all accepted — with instant processing and same-day confirmation.</p>
      </div>
      <div class="tech-pillar">
        <div class="tech-pillar-icon"><i class="fa-solid fa-heart-pulse"></i></div>
        <h4>FSA / HSA Accepted</h4>
        <p>Orthodontic treatment is a qualified FSA/HSA expense. Pay directly from your health savings account and download receipts for your records.</p>
      </div>
      <div class="tech-pillar">
        <div class="tech-pillar-icon"><i class="fa-solid fa-building-columns"></i></div>
        <h4>Bank Transfer (ACH)</h4>
        <p>Pay directly from your checking or savings account with no processing fees. Ideal for recurring monthly payments.</p>
      </div>
      <div class="tech-pillar">
        <div class="tech-pillar-icon"><i class="fa-solid fa-hand-holding-dollar"></i></div>
        <h4>CareCredit</h4>
        <p>Already financing through CareCredit? Use your card directly through the payment portal — no need to call or visit in person.</p>
      </div>
    </div>
  </div>
</section>

<!-- FAQ Section -->
<section class="section">
  <div class="container">
    <div class="section-header text-center">
      <span class="section-label">Frequently Asked Questions</span>
      <h2>Payment Portal FAQ</h2>
    </div>
    <div style="max-width:800px;margin:0 auto;">
      <h3 style="margin-top:2rem;">How do I log in to the patient payment portal?</h3>
      <p>You'll receive your portal login credentials by email when you begin treatment at Sonrisa Orthodontics. If you haven't received your login or have forgotten your credentials, call our office at <a href="tel:+14073591960">(407) 359-1960</a> and a team member will assist you within one business day.</p>

      <h3 style="margin-top:2rem;">Is it safe to enter my payment information online?</h3>
      <p>Yes — our payment portal uses bank-level 256-bit SSL encryption to protect your financial data. We work with a PCI-DSS compliant payment processor, which means your card details are never stored on our systems. The same security standards used by major banks and e-commerce platforms protect every transaction you make with us.</p>

      <h3 style="margin-top:2rem;">What if I have a question about my balance?</h3>
      <p>Your account balance is displayed when you log into the portal. If you notice a discrepancy or have questions about charges, billing adjustments, or insurance coordination, contact our billing team directly at <a href="tel:+14073591960">(407) 359-1960</a> during office hours. We're always happy to review your account and explain every line item in detail.</p>
    </div>
  </div>
</section>

<!-- Dark CTA -->
<section class="section page-cta-dark" style="background-image: url('/assets/images/cta.jpg');">
  <div class="container">
    <span class="section-label">Questions?</span>
    <h2>Our Team Is Here<br><span class="text-primary">to Help.</span></h2>
    <p>Need help with your account, payment plan, or billing questions? Call us at <a href="tel:+14073591960" style="color:var(--color-primary);">(407) 359-1960</a> or book online to speak with our team.</p>
    <a href="/orthodontics/survey_orthodontics.php" class="btn btn-primary btn-lg">Book a Free Consultation</a>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
