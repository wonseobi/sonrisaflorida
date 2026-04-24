<?php
/*
Template Name: About - Meet the Team
*/
global $sonrisa_page;
$sonrisa_page = [
    'title'       => 'Meet Our Team | Sonrisa Dental Specialists',
    'description' => 'Meet the dedicated team at Sonrisa Dental Specialists — experienced clinical staff and patient coordinators committed to delivering exceptional orthodontic care in Lake Nona and Oviedo.',
    'class'       => 'page-team',
];
get_header();
?>

<style>
.team-prose-section { padding: 72px 0; }
.team-prose-section + .team-prose-section { padding-top: 0; }
.team-prose-inner { max-width: 820px; margin: 0 auto; }
.team-prose-inner h2 { font-size: clamp(1.6rem, 3vw, 2.2rem); font-weight: 800; color: var(--dark); margin-bottom: 1rem; }
.team-prose-inner h2 span { color: var(--primary); }
.team-prose-inner p { font-size: 1.05rem; line-height: 1.75; color: var(--text); margin-bottom: 1.1rem; }
.team-prose-inner ul { margin: 1rem 0 1.25rem 1.25rem; }
.team-prose-inner ul li { font-size: 1.05rem; line-height: 1.75; color: var(--text); margin-bottom: .4rem; list-style: disc; }
.team-prose-divider { border: none; border-top: 1px solid var(--border-light, #e8ecf0); margin: 3rem 0; }

.team-image-block { width: 100%; border-radius: 16px; overflow: hidden; margin: 2.5rem 0; box-shadow: 0 8px 32px rgba(0,0,0,.10); }
.team-image-block img { width: 100%; display: block; }

.team-split { display: grid; grid-template-columns: 1fr 1fr; gap: 64px; align-items: center; margin: 2.5rem 0; }
.team-split-img { border-radius: 16px; overflow: hidden; box-shadow: 0 8px 32px rgba(0,0,0,.10); }
.team-split-img img { width: 100%; display: block; }
.team-split-text h2 { font-size: clamp(1.5rem, 2.8vw, 2rem); font-weight: 800; color: var(--dark); margin-bottom: .85rem; }
.team-split-text h2 span { color: var(--primary); }
.team-split-text p { font-size: 1.05rem; line-height: 1.75; color: var(--text); margin-bottom: 1rem; }
.team-split-text ul { margin: .75rem 0 1rem 1.25rem; }
.team-split-text ul li { font-size: 1.05rem; line-height: 1.75; color: var(--text); margin-bottom: .4rem; list-style: disc; }

@media (max-width: 768px) {
  .team-split { grid-template-columns: 1fr; gap: 32px; }
  .team-split-img { order: -1; }
  .team-prose-section { padding: 48px 0; }
}
</style>

<!-- ── PAGE HERO ── -->
<section class="hero hero-sm">
  <div class="hero-bg">
    <img src="/assets/images/about-hero.jpg" alt="Sonrisa Dental Specialists team" draggable="false">
  </div>
  <div class="hero-overlay"></div>
  <div class="hero-inner">
    <div class="hero-content">
      <span class="hero-badge">Sonrisa Dental Specialists</span>
      <h1>
        Meet the Team<br>
        <span class="hero-accent">Behind Your Smile</span>
      </h1>
      <p class="hero-sub">From your very first visit to the completion of your treatment, our team is dedicated to making every step of your experience smooth, comfortable, and rewarding.</p>
      <a href="/orthodontics/survey_orthodontics.php" class="btn btn-primary btn-lg">Book a Free Consultation</a>
    </div>
  </div>
</section>

<!-- ── A TEAM COMMITTED ── -->
<section class="team-prose-section section">
  <div class="container">
    <div class="team-prose-inner">
      <span class="section-label">Our Team</span>
      <h2>A Team Committed to <span>Exceptional Care</span></h2>
      <p>At Sonrisa Dental Specialists, our team is the foundation of every great patient experience. Each member of our staff is selected not only for their clinical expertise, but also for their professionalism, attention to detail, and commitment to patient care.</p>
      <p>From your first interaction to your final visit, our team works together to ensure every step of your experience is smooth, efficient, and comfortable.</p>
    </div>

  </div>
</section>

<!-- ── MORE THAN STRAIGHT TEETH ── -->
<section class="section" style="padding:72px 0;">
  <div class="container">
    <div class="team-split">

      <div class="team-split-text">
        <span class="section-label">Comprehensive Care</span>
        <h2>Focused on More Than <span>Just Straight Teeth</span></h2>
        <p>Our team understands that a great smile is about more than alignment alone. We take a comprehensive approach that considers overall facial balance, symmetry, and aesthetics.</p>
        <p>By working closely with our doctor, our team helps ensure that each treatment plan is tailored to enhance not only your smile, but your overall appearance and confidence.</p>
      </div>

      <div class="team-split-img">
        <img src="/assets/images/meet-team-01.jpg" alt="Comprehensive orthodontic care at Sonrisa">
      </div>

    </div>
  </div>
</section>

<!-- ── EXPERIENCED ── -->
<section class="section" style="background:var(--bg-light);padding:72px 0;">
  <div class="container">
    <div class="team-prose-inner">
      <span class="section-label">Our Standards</span>
      <h2>Experienced. Trained. <span>Dedicated.</span></h2>
      <p>Our clinical and administrative staff are highly trained in modern orthodontic techniques and technologies. From assisting during procedures to coordinating scheduling and financial arrangements, every team member plays a key role in delivering high-quality care.</p>
      <p>We are committed to:</p>
      <ul>
        <li>Maintaining the highest clinical standards</li>
        <li>Staying current with advancements in orthodontics</li>
        <li>Providing consistent, reliable support to every patient</li>
      </ul>
    </div>
  </div>
</section>

<!-- ── WELCOMING ENVIRONMENT ── -->
<section class="section" style="padding:72px 0;">
  <div class="container">
    <div class="team-prose-inner">
      <span class="section-label">Our Environment</span>
      <h2>A Welcoming Environment for <span>Every Patient</span></h2>
      <p>We strive to create a professional yet friendly atmosphere where patients of all ages feel at ease. Whether it's your first consultation or a routine visit, our team is focused on making your experience as seamless and stress-free as possible.</p>
      <p>Building long-term relationships with our patients and their families is an important part of what we do.</p>
    </div>
  </div>
</section>

<!-- ── MEET US CTA ── -->
<section class="section page-cta-dark" style="background-image:url('/assets/images/cta.jpg');">
  <div class="container">
    <span class="section-label">We'd Love to Meet You</span>
    <h2>Meet Our Team <span class="text-primary">In Person.</span></h2>
    <p>The best way to experience the difference is to visit us. Schedule your <strong>free consultation</strong> at our Lake Nona or Oviedo location and meet the team dedicated to helping you achieve your best smile.</p>
    <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;margin-top:1.5rem;">
      <a href="/lake-nona/" class="btn btn-white btn-lg">Lake Nona Office</a>
      <a href="/oviedo/" class="btn btn-primary btn-lg">Oviedo Office</a>
    </div>
  </div>
</section>

<!-- ── MAP ── -->
<div class="map-section">
  <iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12107.193937141243!2d-81.20743287856882!3d28.614089933807918!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88e767b5ac5083a5%3A0x2ae1d26301790e20!2sLach%20Orthodontic%20Specialists%20-%20Oviedo!5e0!3m2!1sen!2smx!4v1775580878244!5m2!1sen!2smx"
    width="100%" height="420" style="border:0;" allowfullscreen="" loading="lazy"
    referrerpolicy="no-referrer-when-downgrade"
    title="Sonrisa Dental Specialists location map">
  </iframe>
</div>

<?php get_footer(); ?>
