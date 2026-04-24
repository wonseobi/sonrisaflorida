<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
  // $sonrisa_page is set by each page template before get_header().
  global $sonrisa_page;
  $hide_top_bar   = ! empty( $sonrisa_page['hide_top_bar'] );
  $hide_header    = ! empty( $sonrisa_page['hide_header'] );
  $hide_nav_links = ! empty( $sonrisa_page['hide_nav_links'] );
  $nav_type       = $sonrisa_page['nav_type'] ?? '';
  ?>

  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-5S47HFG8');</script>
  <!-- End Google Tag Manager -->

  <!-- Favicon -->
  <link rel="icon" type="image/svg+xml" href="/assets/images/favicon.svg">
  <link rel="shortcut icon" href="/assets/images/favicon.svg">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <!-- Accessibility Widget -->
  <script src="https://cdn.jsdelivr.net/npm/sienna-accessibility@latest/dist/sienna-accessibility.umd.js" defer></script>

  <style>
  /* ── 2-column dropdown: flex approach for guaranteed top-to-bottom order ── */
  ul.nav-dropdown-2col {
    display: flex !important;
    flex-direction: row !important;
    padding: 0 !important;
    width: 460px !important;
    column-count: unset !important;
  }
  .nav-col-group {
    flex: 1;
    list-style: none;
    padding: 0;
    margin: 0;
  }
  .nav-col-group:first-child {
    border-right: 1px solid var(--border, #e5e7eb);
  }
  .nav-col-group > .nav-group-label {
    display: block;
    font-size: 9px;
    font-weight: 800;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    color: var(--text-muted, #6b7280);
    padding: 10px 16px 6px;
    border-bottom: 1px solid var(--border, #e5e7eb);
    pointer-events: none;
  }
  .nav-col-group > ul {
    list-style: none;
    padding: 0;
    margin: 0;
  }
  .nav-col-group > ul > li > a {
    display: block;
    padding: 7px 16px;
    font-size: 13.5px;
    color: var(--text, #1a202c);
    text-decoration: none;
    transition: color 0.15s, background 0.15s;
    white-space: nowrap;
  }
  .nav-col-group > ul > li > a:hover {
    color: var(--primary, #0079ff);
    background: rgba(0,121,255,0.06);
  }
  @media (max-width: 900px) {
    ul.nav-dropdown-2col { flex-direction: column !important; width: auto !important; }
    .nav-col-group:first-child { border-right: none; border-bottom: 1px solid var(--border, #e5e7eb); }
  }

  /* ── Homepage: header sits flush at top of topbar ── */
  .page-home .site-header { top: var(--topbar-height, 44px) !important; }

  /* ── Footer quote: center only on mobile ── */
  .footer-tagline-item { text-align: left; }
  @media (max-width: 768px) {
    .footer-tagline-item { text-align: center !important; }
  }
  </style>

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5S47HFG8"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?php
// ── TOP BAR ──────────────────────────────────────────────────────────────────
if ( ! $hide_top_bar ) : ?>
<div class="top-bar">
  <div class="top-bar-inner">
    <span>Sonrisa Dental Specialists &mdash; Where Your Smile Comes First.</span>
  </div>
</div>
<?php endif; ?>

<?php
// ── SITE HEADER ───────────────────────────────────────────────────────────────
if ( ! $hide_header ) : ?>
<header class="site-header">
  <div class="header-inner">

    <a href="/" class="site-logo" aria-label="Sonrisa Dental Specialists — Home">
      <div class="site-logo-circles">
        <img src="/assets/images/logo.svg" alt="Sonrisa Dental Specialists logo">
      </div>
      <span class="site-logo-sub">dental specialists</span>
    </a>

    <nav class="site-nav" aria-label="Main navigation">
      <?php if ( ! $hide_nav_links ) : ?>
      <!-- ── UNIVERSAL NAV ── -->
      <ul class="nav-list">

        <li class="nav-item has-dropdown<?= ( sonrisa_nav_active('/lake-nona') || sonrisa_nav_active('/oviedo') ) ? ' nav-item-active' : '' ?>">
          <a href="javascript:void(0)" class="nav-link">Locations <i class="fa-solid fa-chevron-down nav-chevron"></i></a>
          <ul class="nav-dropdown">
            <li><a href="/lake-nona/">Lake Nona</a></li>
            <li><a href="/oviedo/">Oviedo</a></li>
          </ul>
        </li>

        <li class="nav-item has-dropdown<?= sonrisa_nav_cls('/orthodontics') ?>">
          <a href="/orthodontics/" class="nav-link">Orthodontics <i class="fa-solid fa-chevron-down nav-chevron"></i></a>
          <ul class="nav-dropdown nav-dropdown-wide nav-dropdown-2col">
            <li class="nav-col-group">
              <span class="nav-group-label">Braces</span>
              <ul>
                <li><a href="/orthodontics/treatments/braces/">Braces</a></li>
                <li><a href="/orthodontics/treatments/metal-braces/">Metal Braces</a></li>
                <li><a href="/orthodontics/treatments/ceramic-braces/">Ceramic Braces</a></li>
                <li><a href="/orthodontics/treatments/lingual-braces/">Lingual Braces</a></li>
                <li><a href="/orthodontics/treatments/self-ligating-braces/">Self-Ligating Braces</a></li>
              </ul>
            </li>
            <li class="nav-col-group">
              <span class="nav-group-label">Aligners &amp; More</span>
              <ul>
                <li><a href="/orthodontics/treatments/invisalign/">Invisalign&reg;</a></li>
                <li><a href="/orthodontics/treatments/aligners/invisalign-adults/">Invisalign for Adults</a></li>
                <li><a href="/orthodontics/treatments/aligners/invisalign-teens/">Invisalign for Teens</a></li>
                <li><a href="/orthodontics/treatments/clear-aligners/">Clear Aligners</a></li>
                <li><a href="/orthodontics/treatments/palate-expanders/">Palate Expanders</a></li>
                <li><a href="/orthodontics/treatments/accelerated-orthodontics/">Accelerated Orthodontics</a></li>
              </ul>
            </li>
          </ul>
        </li>

        <li class="nav-item has-dropdown<?= sonrisa_nav_cls('/dental-implants') ?>">
          <a href="/dental-implants/" class="nav-link">Dental Implants <i class="fa-solid fa-chevron-down nav-chevron"></i></a>
          <ul class="nav-dropdown nav-dropdown-wide nav-dropdown-2col">
            <li class="nav-col-group">
              <span class="nav-group-label">Implant Types</span>
              <ul>
                <li><a href="/dental-implants/services/all-on-4/">All-on-4</a></li>
                <li><a href="/dental-implants/services/all-on-6/">All-on-6</a></li>
                <li><a href="/dental-implants/all-on-x/">All-on-X</a></li>
                <li><a href="/dental-implants/services/single-tooth/">Single Tooth</a></li>
                <li><a href="/dental-implants/services/full-mouth-dental-implants/">Full Mouth</a></li>
                <li><a href="/dental-implants/services/zirconia/">Zirconia Implants</a></li>
                <li><a href="/dental-implants/services/same-day/">Same Day Implants</a></li>
                <li><a href="/dental-implants/services/implant-supported-dentures/">Implant-Supported Dentures</a></li>
              </ul>
            </li>
            <li class="nav-col-group">
              <span class="nav-group-label">Procedures &amp; More</span>
              <ul>
                <li><a href="/dental-implants/services/snap-in-dentures/">Snap-In Dentures</a></li>
                <li><a href="/dental-implants/services/bone-grafting/">Bone Grafting</a></li>
                <li><a href="/dental-implants/services/sinus-lift/">Sinus Lift</a></li>
                <li><a href="/dental-implants/conditions/failing-implants/">Failing Implants</a></li>
                <li><a href="/dental-implants/services/maintenance/">Implant Maintenance</a></li>
                <li><a href="/dental-implants/services/periodontics/lanap/">LANAP</a></li>
                <li><a href="/dental-implants/financing/">Financing &amp; Insurance</a></li>
              </ul>
            </li>
          </ul>
        </li>

        <li class="nav-item has-dropdown<?= sonrisa_nav_cls('/orthodontics/new-patients') ?>">
          <a href="javascript:void(0)" class="nav-link">New Patients <i class="fa-solid fa-chevron-down nav-chevron"></i></a>
          <ul class="nav-dropdown">
            <li><a href="/orthodontics/new-patients/free-consultation/">Free In-Office Consultation</a></li>
            <li><a href="/orthodontics/new-patients/digital-consultation/">Free Digital Consultation</a></li>
            <li><a href="/orthodontics/new-patients/verify-insurance/">Verify Insurance</a></li>
            <li><a href="/orthodontics/new-patients/patient-forms/">Patient Forms</a></li>
            <li><a href="/dental-implants/financing/">Insurance &amp; Financing</a></li>
          </ul>
        </li>

        <li class="nav-item has-dropdown<?= sonrisa_nav_cls('/orthodontics/active-patients') ?>">
          <a href="javascript:void(0)" class="nav-link">Active Patients <i class="fa-solid fa-chevron-down nav-chevron"></i></a>
          <ul class="nav-dropdown">
            <li><a href="/orthodontics/active-patients/virtual-appointments/">Virtual Appointments</a></li>
            <li><a href="/orthodontics/active-patients/faqs/">FAQs</a></li>
            <li><a href="/orthodontics/active-patients/emergency/">Emergency Information</a></li>
          </ul>
        </li>

        <li class="nav-item has-dropdown<?= sonrisa_nav_cls('/orthodontics/success-stories') ?>">
          <a href="javascript:void(0)" class="nav-link">Stories <i class="fa-solid fa-chevron-down nav-chevron"></i></a>
          <ul class="nav-dropdown">
            <li><a href="/orthodontics/success-stories/smile-gallery/">Smile Gallery</a></li>
            <li><a href="/orthodontics/success-stories/reviews/">Reviews</a></li>
            <li><a href="/orthodontics/success-stories/before-after/">Before &amp; After</a></li>
          </ul>
        </li>

        <li class="nav-item has-dropdown<?= sonrisa_nav_cls('/about') ?>">
          <a href="javascript:void(0)" class="nav-link">About <i class="fa-solid fa-chevron-down nav-chevron"></i></a>
          <ul class="nav-dropdown">
            <li><a href="/about/team/">Meet the Team</a></li>
            <li><a href="/orthodontics/about/our-costs/">Our Costs</a></li>
            <li><a href="/orthodontics/about/blog/">Blog</a></li>
          </ul>
        </li>

        <li class="nav-item has-dropdown">
          <a href="javascript:void(0)" class="nav-link">Contact <i class="fa-solid fa-chevron-down nav-chevron"></i></a>
          <ul class="nav-dropdown">
            <li><a href="/lake-nona/">Lake Nona Office</a></li>
            <li><a href="/oviedo/">Oviedo Office</a></li>
          </ul>
        </li>

      </ul>
      <a href="/dental-implants/survey/" class="btn btn-primary nav-cta">Book Now</a>
      <?php endif; ?>
    </nav>

    <?php if ( ! $hide_nav_links ) : ?>
    <button class="nav-toggle" aria-label="Open menu" aria-expanded="false">
      <span></span><span></span><span></span>
    </button>
    <?php endif; ?>

  </div>
</header>
<?php endif; ?>
