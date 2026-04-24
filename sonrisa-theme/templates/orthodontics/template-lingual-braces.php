<?php
/*
Template Name: Orthodontics - Lingual Braces
*/
global $sonrisa_page;
$sonrisa_page = [
    'title'       => 'Lingual Braces | Sonrisa Orthodontics',
    'description' => 'Lingual braces at Sonrisa Orthodontics in Oviedo, FL — completely hidden brackets bonded to the inside of your teeth. Invisible treatment, powerful results.',
    'class'       => 'page-service',
    'nav_type'    => 'orthodontics',
];
get_header();
?>

<section class="hero hero-sm">
  <div class="hero-bg">
    <img src="/assets/images/Dental%20Bonding03.jpg" alt="Lingual braces hidden orthodontic treatment" draggable="false">
  </div>
  <div class="hero-overlay"></div>
  <div class="hero-inner">
    <div class="hero-content">
      <span class="hero-badge">Orthodontic Treatments</span>
      <h1>Lingual Braces.<br><span class="hero-accent">Invisible. Powerful. Yours.</span></h1>
      <p class="hero-sub">Brackets hidden on the inner surface of your teeth — nobody will ever know you're in treatment, but the results will speak for themselves.</p>
      <a href="/orthodontics/survey_orthodontics.php" class="btn btn-primary btn-lg">Book a Free Consultation</a>
    </div>
  </div>
</section>

<?php get_template_part('template-parts/service-nav-orthodontics'); ?>

<!-- Inside-the-Teeth Explained -->
<section class="section">
  <div class="container">
    <div class="two-col">
      <div class="two-col-text">
        <span class="section-label">The Inside Story</span>
        <h2>Brackets on the Inside.<br><span class="text-primary">Results on the Outside.</span></h2>
        <p>Lingual braces work exactly like traditional braces — with one important difference. The brackets are bonded to the tongue-facing (lingual) surface of your teeth instead of the outer surface. The result: a fully functioning orthodontic appliance that is completely hidden from view when you smile, speak, or laugh.</p>
        <p>Each lingual bracket is custom-fabricated to precisely fit the unique contours of your individual teeth, ensuring maximum effectiveness and comfort. The same archwire-and-bracket mechanics used in traditional braces deliver the same corrective power — just from the inside.</p>
        <ul class="experts-checklist">
          <li><i class="fa-solid fa-circle-check"></i> Bonded to the inner (tongue-side) surface of teeth</li>
          <li><i class="fa-solid fa-circle-check"></i> Completely invisible from any angle outside</li>
          <li><i class="fa-solid fa-circle-check"></i> Custom-fabricated brackets for each tooth</li>
          <li><i class="fa-solid fa-circle-check"></i> Treats the same cases as traditional braces</li>
          <li><i class="fa-solid fa-circle-check"></i> No compromise on result quality</li>
        </ul>
        <a href="/orthodontics/survey_orthodontics.php" class="btn btn-primary">Get a Free Evaluation</a>
      </div>
      <div class="two-col-img">
        <img src="/assets/images/Dental%20Bonding04.jpg" alt="Lingual braces custom brackets" draggable="false">
      </div>
    </div>
  </div>
</section>

<!-- Who Benefits Most -->
<section class="section section-light">
  <div class="container">
    <div class="two-col">
      <div class="two-col-img">
        <img src="/assets/images/Dental%20Bonding05.jpg" alt="Adults and professionals choosing lingual braces" draggable="false">
      </div>
      <div class="two-col-text">
        <span class="section-label">Ideal Candidates</span>
        <h2>Perfect for Adults Who<br><span class="text-primary">Demand Discretion.</span></h2>
        <p>Lingual braces are the treatment of choice for patients who absolutely cannot have visible orthodontic hardware — yet need more corrective power than clear aligners can provide. They're especially popular with professionals, performers, public speakers, and anyone for whom appearance during treatment is non-negotiable.</p>
        <p>Because lingual braces are a fixed appliance, there's no compliance issue — unlike removable aligners that require consistent wear to be effective. Your treatment progresses whether you're in a board meeting, on stage, or in front of a camera.</p>
        <ul class="experts-checklist">
          <li><i class="fa-solid fa-circle-check"></i> Professionals in client-facing roles</li>
          <li><i class="fa-solid fa-circle-check"></i> Performers, actors, and public speakers</li>
          <li><i class="fa-solid fa-circle-check"></i> Adults who've tried aligners but need more correction</li>
          <li><i class="fa-solid fa-circle-check"></i> Patients with complex bite issues</li>
          <li><i class="fa-solid fa-circle-check"></i> Anyone prioritizing complete discretion</li>
        </ul>
        <a href="/orthodontics/survey_orthodontics.php" class="btn btn-primary">Am I a Candidate?</a>
      </div>
    </div>
  </div>
</section>

<!-- FAQ Section -->
<section class="section">
  <div class="container">
    <div class="section-header text-center">
      <span class="section-label">Common Questions</span>
      <h2>Your Lingual Braces Questions, Answered</h2>
    </div>
    <div style="max-width:800px;margin:0 auto;">
      <h3 style="margin-top:2rem;">Are lingual braces comfortable?</h3>
      <p>There is an adjustment period of 2–4 weeks as your tongue gets used to the new brackets. Some patients experience minor speech changes during this time — a temporary lisp is common and typically resolves quickly. Most patients find that any initial discomfort fades completely within the first month, after which they rarely notice the appliance at all.</p>

      <h3 style="margin-top:2rem;">How long does lingual braces treatment take?</h3>
      <p>Treatment duration is similar to traditional braces — typically 18 to 24 months, depending on the complexity of your case. Your orthodontist will provide a personalized timeline estimate after your digital evaluation. Adjustment appointments are scheduled every 4–8 weeks to monitor progress and fine-tune tooth movement.</p>

      <h3 style="margin-top:2rem;">How do I clean lingual braces?</h3>
      <p>Cleaning lingual braces requires a bit more technique than traditional braces because the brackets face inward. We provide detailed instructions and the right tools — including an orthodontic flosser and an interproximal brush — to make cleaning straightforward. Water flossers are also excellent for lingual brace patients and significantly simplify the process.</p>
    </div>
  </div>
</section>

<!-- Dark CTA -->
<section class="section page-cta-dark" style="background-image: url('/assets/images/cta.jpg');">
  <div class="container">
    <span class="section-label">Completely Invisible Treatment</span>
    <h2>Nobody Has to Know<br><span class="text-primary">You're in Braces.</span></h2>
    <p>Book your free consultation and find out if lingual braces are the right solution for your smile goals. Our specialists will evaluate your case and give you an honest recommendation.</p>
    <a href="/orthodontics/survey_orthodontics.php" class="btn btn-primary btn-lg">Book a Free Consultation</a>
  </div>
</section>

<?php get_footer(); ?>
