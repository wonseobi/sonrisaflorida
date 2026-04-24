<?php
/*
Template Name: Orthodontics - Blog
*/
global $sonrisa_page;
$sonrisa_page = [
    'title'       => 'Orthodontic Blog | Sonrisa Orthodontics',
    'description' => 'Read expert orthodontic insights from the specialists at Sonrisa Orthodontics in Oviedo, FL. Topics include Invisalign, braces care, treatment timelines, and more.',
    'class'       => 'page-service',
    'nav_type'    => 'orthodontics',
];
get_header();
?>

<section class="hero hero-sm">
  <div class="hero-bg">
    <img src="/assets/images/Dental%20Technology01.jpg" alt="Orthodontic blog and education" draggable="false">
  </div>
  <div class="hero-overlay"></div>
  <div class="hero-inner">
    <div class="hero-content">
      <span class="hero-badge">Sonrisa Orthodontics</span>
      <h1>Orthodontic Insights<br><span class="hero-accent">from Our Specialists.</span></h1>
      <p class="hero-sub">Real answers to real questions — written by the orthodontists and clinical team who treat patients every day.</p>
      <a href="/orthodontics/survey_orthodontics.php" class="btn btn-primary btn-lg">Book a Free Consultation</a>
    </div>
  </div>
</section>

<?php get_template_part('template-parts/service-nav-orthodontics'); ?>

<!-- Blog Grid -->
<section class="section">
  <div class="container">
    <div class="section-header text-center">
      <span class="section-label">Latest Articles</span>
      <h2>From Our Team to You</h2>
      <p>Evidence-based, easy-to-understand orthodontic education for every stage of your treatment journey.</p>
    </div>
    <div class="trust-grid blog-grid">

      <div class="trust-card blog-card">
        <h4>How Long Does Invisalign Take?</h4>
        <p>Wondering how quickly Invisalign can straighten your teeth? The honest answer depends on your specific case — but most adults complete treatment in 12–18 months.</p>
        <div class="blog-expanded" hidden>
          <p>Several factors influence your timeline: the severity of crowding or spacing, how consistently you wear your aligners (20–22 hours daily is required), and whether you need any refinements mid-treatment. Mild cases can finish in as little as 6 months. More complex cases with significant bite correction can extend to 24 months. The single biggest variable within your control is compliance — patients who wear their aligners as prescribed consistently finish faster and with better results. At Sonrisa, we use the iTero scanner to run a ClinCheck simulation before treatment begins, so you can see your projected finish date before committing to a plan.</p>
        </div>
        <button class="blog-toggle implant-card-link" aria-expanded="false">Read Article <i class="fa-solid fa-chevron-down" style="margin-left:.4rem;font-size:.75em;transition:transform .3s;"></i></button>
      </div>

      <div class="trust-card blog-card">
        <h4>Metal vs. Ceramic Braces: Which Is Right for You?</h4>
        <p>Both options use the same wire-and-bracket mechanism to move teeth — but they differ in visibility, cost, and durability.</p>
        <div class="blog-expanded" hidden>
          <p>Metal braces use stainless steel brackets and archwires. They're the most affordable option, highly durable, and capable of handling even the most complex tooth movements. Ceramic braces use tooth-colored or clear brackets that blend with your enamel, making them far less noticeable. The trade-off: ceramic brackets can stain if you regularly consume coffee, tea, or dark foods, and they're slightly more fragile than metal. For teens, metal braces are often the most practical choice. For adults or professionals who want discretion without the cost of lingual braces or Invisalign, ceramic is a smart middle ground. Both options are included in most orthodontic insurance plans, and both deliver the same level of clinical correction.</p>
        </div>
        <button class="blog-toggle implant-card-link" aria-expanded="false">Read Article <i class="fa-solid fa-chevron-down" style="margin-left:.4rem;font-size:.75em;transition:transform .3s;"></i></button>
      </div>

      <div class="trust-card blog-card">
        <h4>What to Eat (and Avoid) with Braces</h4>
        <p>Brackets and wires are tough — but not invincible. Here's the ultimate food guide for braces patients.</p>
        <div class="blog-expanded" hidden>
          <p>The general rule is simple: avoid anything hard, sticky, or chewy. Hard foods — like raw carrots, apples, nuts, and hard candies — can snap brackets off. Sticky foods — caramel, gummy candies, bagels — wrap around brackets and wires and are nearly impossible to clean off. Chewy foods put pressure on brackets that can loosen them over time. Safe options include soft fruits (bananas, grapes, berries), cooked vegetables, yogurt, pasta, soft bread, and lean proteins. Crunchy foods like raw carrots or corn on the cob are fine if you cut them into small pieces first. Carbonated drinks are also worth limiting — the acidity can weaken enamel that's partially covered by brackets, leading to white spot lesions when braces come off.</p>
        </div>
        <button class="blog-toggle implant-card-link" aria-expanded="false">Read Article <i class="fa-solid fa-chevron-down" style="margin-left:.4rem;font-size:.75em;transition:transform .3s;"></i></button>
      </div>

      <div class="trust-card blog-card">
        <h4>Do Retainers Really Matter After Braces?</h4>
        <p>The short answer: absolutely. Without a retainer, teeth can shift back within weeks of completing treatment.</p>
        <div class="blog-expanded" hidden>
          <p>Orthodontic treatment moves teeth through bone by applying controlled pressure over time. When that pressure is removed — when the braces come off — the bone around each tooth is still in the process of fully solidifying in its new position. Without a retainer holding teeth in place during this consolidation phase, they will drift back toward where they started. This is called relapse. In the first 6–12 months after treatment, nightly retainer wear is critical. After that, most patients can transition to wearing retainers a few nights per week for the rest of their lives. At Sonrisa, we include retainers in every treatment plan and offer a lifetime retainer program so you're never left without one if yours is lost or worn out.</p>
        </div>
        <button class="blog-toggle implant-card-link" aria-expanded="false">Read Article <i class="fa-solid fa-chevron-down" style="margin-left:.4rem;font-size:.75em;transition:transform .3s;"></i></button>
      </div>

      <div class="trust-card blog-card">
        <h4>At What Age Should My Child See an Orthodontist?</h4>
        <p>The American Association of Orthodontists recommends a first screening by age 7 — here's why timing matters.</p>
        <div class="blog-expanded" hidden>
          <p>By age 7, most children have a mix of baby teeth and permanent teeth that gives an orthodontist valuable information about how the jaw is developing and whether early intervention will be beneficial. Early evaluation — called Phase I treatment — doesn't mean every child will need braces right away. In fact, many children are simply monitored until their permanent teeth have fully come in. But for children with specific issues — like a narrow palate, a significant crossbite, or severe crowding — early treatment can reduce the complexity and duration of treatment later. Phase I interventions often involve palate expanders or partial braces to guide jaw growth during the window when the bones are still malleable.</p>
        </div>
        <button class="blog-toggle implant-card-link" aria-expanded="false">Read Article <i class="fa-solid fa-chevron-down" style="margin-left:.4rem;font-size:.75em;transition:transform .3s;"></i></button>
      </div>

      <div class="trust-card blog-card">
        <h4>Palate Expanders: What Parents Need to Know</h4>
        <p>Palate expanders are one of the most misunderstood appliances in orthodontics — here's how they actually work.</p>
        <div class="blog-expanded" hidden>
          <p>A palate expander is a fixed device attached to the upper back molars that applies gentle outward pressure to the two halves of the upper jawbone — widening the arch over a period of weeks or months. This sounds dramatic, but it's actually a comfortable and highly effective procedure when done at the right age. The palatal suture (the joint between the two halves of the upper jaw) remains pliable and open until the mid-teens. Before it fuses, expansion is a non-surgical, painless process. After it fuses, the same correction requires surgery. Expanders are used to correct posterior crossbites, create space for crowded permanent teeth, and address narrow arches that contribute to mouth breathing.</p>
        </div>
        <button class="blog-toggle implant-card-link" aria-expanded="false">Read Article <i class="fa-solid fa-chevron-down" style="margin-left:.4rem;font-size:.75em;transition:transform .3s;"></i></button>
      </div>

    </div>

<style>
.blog-expanded { margin-top: .75rem; }
.blog-expanded p { font-size: 15px; color: var(--text-muted); line-height: 1.7; font-weight: 400; font-family: inherit; }
.blog-toggle { background: none; border: none; padding: 0; cursor: pointer; margin-top: .75rem; font-family: inherit; }
.blog-toggle[aria-expanded="true"] i { transform: rotate(180deg); }
</style>
<script>
document.querySelectorAll('.blog-toggle').forEach(function(btn) {
  btn.addEventListener('click', function() {
    var expanded = this.closest('.blog-card').querySelector('.blog-expanded');
    var isOpen = !expanded.hidden;
    expanded.hidden = isOpen;
    this.setAttribute('aria-expanded', !isOpen);
    this.querySelector('i').style.transform = isOpen ? '' : 'rotate(180deg)';
  });
});
</script>
  </div>
</section>

<!-- Topics Two-Col -->
<section class="section section-light">
  <div class="container">
    <div class="two-col">
      <div class="two-col-text">
        <span class="section-label">Topics We Cover</span>
        <h2>Your Questions,<br><span class="text-primary">Answered in Detail.</span></h2>
        <p>Our blog is written by the same orthodontists and specialists who treat patients in our Oviedo office. No generic content — only relevant, accurate guidance drawn from years of clinical experience.</p>
        <p>Whether you're still researching your options, newly in treatment, or preparing for your retainer phase, you'll find articles tailored to exactly where you are on your orthodontic journey.</p>
        <ul class="experts-checklist">
          <li><i class="fa-solid fa-circle-check"></i> Invisalign &amp; clear aligner tips</li>
          <li><i class="fa-solid fa-circle-check"></i> Braces care and maintenance</li>
          <li><i class="fa-solid fa-circle-check"></i> Children's orthodontic milestones</li>
          <li><i class="fa-solid fa-circle-check"></i> Adult orthodontics</li>
          <li><i class="fa-solid fa-circle-check"></i> Financing and insurance guidance</li>
          <li><i class="fa-solid fa-circle-check"></i> TMJ, sleep apnea, and functional issues</li>
        </ul>
        <a href="/orthodontics/survey_orthodontics.php" class="btn btn-primary">Ask Us Your Question</a>
      </div>
      <div class="two-col-img">
        <img src="/assets/images/Dental%20Technology03.jpg" alt="Orthodontic education and insights" draggable="false">
      </div>
    </div>
  </div>
</section>

<!-- Dark CTA -->
<section class="section page-cta-dark" style="background-image: url('/assets/images/cta.jpg');">
  <div class="container">
    <span class="section-label">Have a Question?</span>
    <h2>Let's Talk About<br><span class="text-primary">Your Smile Goals.</span></h2>
    <p>Reading about orthodontics is a great start — but nothing beats a one-on-one consultation with a specialist. Book your free evaluation and get answers tailored specifically to you.</p>
    <a href="/orthodontics/survey_orthodontics.php" class="btn btn-primary btn-lg">Book a Free Consultation</a>
  </div>
</section>

<?php get_template_part('template-parts/dual-locations-map'); ?>

<?php get_footer(); ?>
