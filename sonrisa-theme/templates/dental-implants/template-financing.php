<?php
/*
Template Name: Dental Implants - Financing & Insurance
*/
global $sonrisa_page;
$sonrisa_page = [
    'title'       => 'Financing & Insurance | Sonrisa Dental Specialists',
    'description' => 'Flexible financing, payment plans, and insurance coordination for dental implants at Sonrisa Dental Specialists. Your new smile is more affordable than you think.',
    'class'       => 'page-financing',
    'nav_type'    => 'dental-implants',
];
get_header();
?>

<!-- ── HERO ── -->
<section class="hero hero-sm">
  <div class="hero-bg">
    <img src="/assets/images/Insurance%20Plans%20and%20Financing01.jpg" alt="Affordable dental implant financing at Sonrisa" draggable="false">
  </div>
  <div class="hero-overlay"></div>
  <div class="hero-inner">
    <div class="hero-content">
      <span class="hero-badge">Financing &amp; Insurance</span>
      <h1>
        Your New Smile Is<br>
        <span class="hero-accent">More Affordable Than You Think.</span>
      </h1>
      <p class="hero-sub">We believe cost should never stand between you and a permanent, confident smile. Sonrisa offers flexible financing options, low-interest payment plans, and full insurance coordination to make your treatment accessible from day one.</p>
      <a href="/dental-implants/survey.php" class="btn btn-primary btn-lg">Get a Free Quote</a>
    </div>
    <?php get_template_part('template-parts/hero-stats-implants'); ?>
  </div>
</section>

<?php get_template_part('template-parts/service-nav-implants'); ?>

<!-- ── THREE OPTIONS OVERVIEW ── -->
<section class="section section-light">
  <div class="container">
    <div style="text-align:center; max-width:600px; margin:0 auto 0;">
      <span class="section-label">Payment Options</span>
      <h2>Three Ways to<br><span class="text-primary">Make It Work.</span></h2>
      <p style="color:var(--text-muted); margin-top:16px;">Whether you have insurance, prefer monthly payments, or want to skip the middleman entirely — we have a path that fits your situation and budget.</p>
    </div>
    <div class="option-cards">

      <div class="option-card">
        <span class="option-label">For Most Patients</span>
        <h3>Monthly Payment Plans</h3>
        <p>We work with trusted financing partners to offer flexible payment terms that fit a wide range of budgets. Our team will find a plan that works for you.</p>
        <ul class="option-list">
          <li><i class="fa-solid fa-circle-check"></i> Flexible monthly payment options</li>
          <li><i class="fa-solid fa-circle-check"></i> Extended terms available</li>
          <li><i class="fa-solid fa-circle-check"></i> Fast approval process</li>
          <li><i class="fa-solid fa-circle-check"></i> No hidden fees</li>
        </ul>
      </div>

      <div class="option-card option-card-featured">
        <span class="option-label">Most Popular</span>
        <h3>Low-Interest Financing</h3>
        <p>Qualified patients may be eligible for low- or no-interest plans — spreading the cost of treatment into manageable equal monthly installments.</p>
        <ul class="option-list">
          <li><i class="fa-solid fa-circle-check"></i> Low- and no-interest options available</li>
          <li><i class="fa-solid fa-circle-check"></i> No down payment required</li>
          <li><i class="fa-solid fa-circle-check"></i> Soft-credit pre-check available</li>
          <li><i class="fa-solid fa-circle-check"></i> Apply same day as consultation</li>
        </ul>
      </div>

      <div class="option-card">
        <span class="option-label">No Insurance? No Problem</span>
        <h3>In-House Savings Plan</h3>
        <p>Our annual membership gives uninsured patients significant discounts on all procedures — no claims, no networks, no waiting periods.</p>
        <ul class="option-list">
          <li><i class="fa-solid fa-circle-check"></i> Meaningful discounts on all services</li>
          <li><i class="fa-solid fa-circle-check"></i> Free annual exams &amp; X-rays</li>
          <li><i class="fa-solid fa-circle-check"></i> No claim submissions</li>
          <li><i class="fa-solid fa-circle-check"></i> Priority scheduling</li>
        </ul>
      </div>

    </div>
  </div>
</section>

<!-- ── INSURANCE COORDINATION ── -->
<section class="section">
  <div class="container">
    <div class="two-col">

      <div class="two-col-img">
        <img src="/assets/images/financial_options01.jpg" alt="Dental insurance coordination for implants" draggable="false">
      </div>

      <div class="two-col-text">
        <span class="section-label">Insurance Coordination</span>
        <h2>We Work With<br><span class="text-primary">Your Insurance.</span></h2>
        <p>Many dental insurance plans offer partial coverage for implant-related procedures — including extractions, bone grafting, and the implant crown itself. Our insurance team reviews your specific plan and submits claims on your behalf to maximize every dollar of your benefit.</p>
        <p>We are in-network with most major dental PPO plans and will provide a complete pre-authorization breakdown before treatment begins — so you know your exact out-of-pocket cost before any work starts.</p>
        <ul class="experts-checklist">
          <li><i class="fa-solid fa-circle-check"></i> In-network with major dental PPO plans</li>
          <li><i class="fa-solid fa-circle-check"></i> Full pre-authorization before treatment</li>
          <li><i class="fa-solid fa-circle-check"></i> We bill insurance directly — you pay the difference</li>
        </ul>
        <a href="/dental-implants/survey.php" class="btn btn-primary">Check My Coverage</a>
      </div>

    </div>
  </div>
</section>

<!-- ── HOW IT WORKS STEPS ── -->
<section class="section section-light">
  <div class="container">
    <div style="text-align:center; max-width:580px; margin:0 auto 48px;">
      <span class="section-label">The Process</span>
      <h2>From Consultation<br><span class="text-primary">to Approved in Hours.</span></h2>
      <p style="color:var(--text-muted); margin-top:16px;">Getting financing set up shouldn't be its own ordeal. Our team walks you through every step on the day of your consultation.</p>
    </div>
    <div class="steps-grid">
      <div class="step-card">
        <div class="step-number">01</div>
        <h4>Free Consultation</h4>
        <p>Your doctor reviews your case, outlines your treatment options, and gives you a clear, itemized cost breakdown — no vague estimates.</p>
      </div>
      <div class="step-card">
        <div class="step-number">02</div>
        <h4>Insurance Review</h4>
        <p>Our team checks your benefits, submits a pre-authorization if applicable, and tells you exactly what your plan will cover before you decide anything.</p>
      </div>
      <div class="step-card">
        <div class="step-number">03</div>
        <h4>Financing Application</h4>
        <p>Apply in-office for a monthly plan or low-interest financing. Our team walks you through your options and helps identify the best fit for your budget.</p>
      </div>
      <div class="step-card">
        <div class="step-number">04</div>
        <h4>Treatment Begins</h4>
        <p>With your plan confirmed and payments structured, you schedule your procedure and start treatment — often within the same week.</p>
      </div>
    </div>
  </div>
</section>

<!-- ── CTA ── -->
<section class="section page-cta-dark" style="background-image: url('/assets/images/cta.jpg');">
  <div class="container">
    <span class="section-label">Get Started Today</span>
    <h2>Find Out What Your<br><span class="text-primary">Implants Will Cost.</span></h2>
    <p>Book a free consultation and our team will provide a complete treatment breakdown with all financing options clearly outlined — before you commit to anything. No pressure, no obligation.</p>
    <a href="/dental-implants/survey.php" class="btn btn-primary btn-lg">Get a Free Quote</a>
  </div>
</section>

<!-- ── MAP ── -->
<?php get_template_part('template-parts/dual-locations-map'); ?>

<?php get_footer(); ?>
