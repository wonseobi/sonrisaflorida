<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8'); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($page_description, ENT_QUOTES, 'UTF-8'); ?>">

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

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="/assets/css/style.css">

  <!-- Accessibility Widget -->
  <script src="https://cdn.jsdelivr.net/npm/sienna-accessibility@latest/dist/sienna-accessibility.umd.js" defer></script>
</head>
<body class="<?php echo htmlspecialchars($page_class, ENT_QUOTES, 'UTF-8'); ?>">

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5S47HFG8"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?php
// Active nav helper
$_nav_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
function nav_active($prefix) {
  global $_nav_path;
  if ($prefix === '/') return $_nav_path === '/';
  return strpos($_nav_path, $prefix) === 0;
}
function nav_cls($prefix) {
  return nav_active($prefix) ? ' active' : '';
}
?>

<!-- ── TOP BAR ── -->
<?php if (empty($hide_top_bar)): ?>
<div class="top-bar">
  <div class="top-bar-inner">
    <span>Sonrisa Dental Specialists &mdash; Where Your Smile Comes First.</span>
  </div>
</div>
<?php endif; ?>

<!-- ── SITE HEADER ── -->
<?php if (empty($hide_header)): ?>
<header class="site-header">
  <div class="header-inner">

    <a href="/" class="site-logo" aria-label="Sonrisa Dental Specialists — Home">
      <div class="site-logo-circles">
        <img src="/assets/images/logo.svg" alt="Sonrisa Dental Specialists logo">
      </div>
      <span class="site-logo-sub">dental specialists</span>
    </a>

    <nav class="site-nav" aria-label="Main navigation">
      <?php if (empty($hide_nav_links)): ?>

      <?php if (!empty($nav_type) && $nav_type === 'dental-implants'): ?>
      <!-- ── DENTAL IMPLANTS NAV ── -->
      <ul class="nav-list">

        <li class="nav-item<?= $_nav_path === '/dental-implants/' ? ' nav-item-active' : '' ?>">
          <a href="/dental-implants/" class="nav-link">Home</a>
        </li>

        <li class="nav-item has-dropdown<?= strpos($_nav_path, '/dental-implants/about') === 0 ? ' nav-item-active' : '' ?>">
          <a href="javascript:void(0)" class="nav-link">About <i class="fa-solid fa-chevron-down nav-chevron"></i></a>
          <ul class="nav-dropdown">
            <li><a href="/dental-implants/about/our-practice/">Our Practice</a></li>
            <li><a href="/dental-implants/about/meet-the-doctor/">Meet the Doctor</a></li>
          </ul>
        </li>

        <li class="nav-item<?= strpos($_nav_path, '/dental-implants/technology') === 0 ? ' nav-item-active' : '' ?>">
          <a href="/dental-implants/technology/" class="nav-link">Technology</a>
        </li>

        <li class="nav-item has-dropdown<?= strpos($_nav_path, '/dental-implants/services') === 0 ? ' nav-item-active' : '' ?>">
          <a href="javascript:void(0)" class="nav-link">Services <i class="fa-solid fa-chevron-down nav-chevron"></i></a>
          <ul class="nav-dropdown nav-dropdown-wide">
            <li><a href="/dental-implants/services/dental-implants/">Dental Implants</a></li>
            <li><a href="/dental-implants/services/full-mouth-dental-implants/">Full Mouth Dental Implants</a></li>
            <li><a href="/dental-implants/services/all-on-4/">All-on-4 Dental Implants</a></li>
            <li><a href="/dental-implants/services/all-on-6/">All-on-6 Dental Implants</a></li>
            <li><a href="/dental-implants/services/same-day/">Same-Day Dental Implants</a></li>
            <li><a href="/dental-implants/services/implant-supported-dentures/">Implant-Supported Dentures</a></li>
            <li><a href="/dental-implants/services/snap-in-dentures/">Snap-In Dentures</a></li>
            <li><a href="/dental-implants/services/zirconia/">Zirconia Dental Implants</a></li>
            <li><a href="/dental-implants/services/single-tooth/">Single Tooth Dental Implants</a></li>
            <li><a href="/dental-implants/services/multiple/">Multiple Dental Implants</a></li>
            <li><a href="/dental-implants/services/restoration/">Dental Implant Restoration</a></li>
            <li><a href="/dental-implants/services/bone-grafting/">Bone Grafting for Implants</a></li>
            <li><a href="/dental-implants/services/sinus-lift/">Sinus Lift Surgery</a></li>
            <li><a href="/dental-implants/services/maintenance/">Implant Maintenance</a></li>
          </ul>
        </li>

        <li class="nav-item has-dropdown<?= strpos($_nav_path, '/dental-implants/conditions') === 0 ? ' nav-item-active' : '' ?>">
          <a href="javascript:void(0)" class="nav-link">Conditions <i class="fa-solid fa-chevron-down nav-chevron"></i></a>
          <ul class="nav-dropdown">
            <li><a href="/dental-implants/conditions/missing-teeth/">Missing Teeth Solutions</a></li>
            <li><a href="/dental-implants/conditions/replace-missing-teeth/">Replace Missing Teeth</a></li>
            <li><a href="/dental-implants/conditions/dentures-vs-implants/">Dentures vs. Dental Implants</a></li>
            <li><a href="/dental-implants/conditions/loose-dentures/">Loose Dentures Solutions</a></li>
            <li><a href="/dental-implants/conditions/failing-implants/">Broken or Failing Dental Implants</a></li>
            <li><a href="/dental-implants/conditions/teeth-in-a-day/">Teeth in a Day</a></li>
            <li><a href="/dental-implants/conditions/permanent-replacement/">Permanent Teeth Replacement</a></li>
            <li><a href="/dental-implants/conditions/alternative-to-dentures/">Best Alternative to Dentures</a></li>
          </ul>
        </li>

        <li class="nav-item has-dropdown<?= strpos($_nav_path, '/dental-implants/dental-emergencies') === 0 ? ' nav-item-active' : '' ?>">
          <a href="/dental-implants/dental-emergencies/" class="nav-link">Dental Emergencies <i class="fa-solid fa-chevron-down nav-chevron"></i></a>
          <ul class="nav-dropdown">
            <li><a href="/dental-implants/dental-emergencies/">Emergency Care</a></li>
            <li><a href="/dental-implants/dental-emergencies/ailing-failing-implants/">Ailing &amp; Failing Implants</a></li>
          </ul>
        </li>

        <li class="nav-item<?= strpos($_nav_path, '/dental-implants/financing') === 0 ? ' nav-item-active' : '' ?>">
          <a href="/dental-implants/financing/" class="nav-link">Financing &amp; Insurance</a>
        </li>

        <li class="nav-item<?= strpos($_nav_path, '/dental-implants/referrals') === 0 ? ' nav-item-active' : '' ?>">
          <a href="/dental-implants/referrals/" class="nav-link">Referrals</a>
        </li>

      </ul>
      <a href="/dental-implants/survey.php" class="btn btn-primary nav-cta">Book Consultation</a>

      <?php elseif (!empty($nav_type) && $nav_type === 'orthodontics'): ?>
      <!-- ── ORTHODONTICS NAV ── -->
      <ul class="nav-list">

        <li class="nav-item<?= $_nav_path === '/orthodontics/' ? ' nav-item-active' : '' ?>">
          <a href="/orthodontics/" class="nav-link">Home</a>
        </li>

        <li class="nav-item has-dropdown<?= strpos($_nav_path, '/orthodontics/about') === 0 ? ' nav-item-active' : '' ?>">
          <a href="javascript:void(0)" class="nav-link">About Us <i class="fa-solid fa-chevron-down nav-chevron"></i></a>
          <ul class="nav-dropdown">
            <li><a href="/orthodontics/about/meet-the-team/">Meet the Team</a></li>
            <li><a href="/orthodontics/about/our-costs/">Our Costs</a></li>
            <li><a href="/orthodontics/about/virtual-office-tour/">Virtual Office Tour</a></li>
            <li><a href="/orthodontics/about/blog/">Blog</a></li>
          </ul>
        </li>

        <li class="nav-item has-dropdown<?= strpos($_nav_path, '/orthodontics/new-patients') === 0 ? ' nav-item-active' : '' ?>">
          <a href="javascript:void(0)" class="nav-link">New Patients <i class="fa-solid fa-chevron-down nav-chevron"></i></a>
          <ul class="nav-dropdown">
            <li><a href="/orthodontics/new-patients/free-consultation/">Free In-Office Consultation</a></li>
            <li><a href="/orthodontics/new-patients/digital-consultation/">Free Digital Consultation</a></li>
            <li><a href="/orthodontics/new-patients/verify-insurance/">Verify My Insurance</a></li>
            <li><a href="/orthodontics/new-patients/orthodontist-vs-dentist/">Orthodontist vs Dentist</a></li>
            <li><a href="/orthodontics/new-patients/patient-forms/">Patient Forms</a></li>
          </ul>
        </li>

        <li class="nav-item has-dropdown<?= strpos($_nav_path, '/orthodontics/treatments') === 0 ? ' nav-item-active' : '' ?>">
          <a href="javascript:void(0)" class="nav-link">Treatments <i class="fa-solid fa-chevron-down nav-chevron"></i></a>
          <ul class="nav-dropdown nav-dropdown-wide">
            <li><a href="/orthodontics/treatments/braces/">Braces</a></li>
            <li><a href="/orthodontics/treatments/braces/types/">Types of Braces</a></li>
            <li><a href="/orthodontics/treatments/braces/3d-computer-designed/">3D Computer Designed Braces</a></li>
            <li><a href="/orthodontics/treatments/braces/color-braces/">Color Braces for Teeth</a></li>
            <li><a href="/orthodontics/treatments/braces/vs-lingual/">Braces vs Lingual Braces Cost</a></li>
            <li><a href="/orthodontics/treatments/aligners/invisalign-adults/">Invisalign® for Adults</a></li>
            <li><a href="/orthodontics/treatments/aligners/invisalign-teens/">Invisalign® for Teens</a></li>
            <li><a href="/orthodontics/treatments/aligners/lachalign/">Lachalign At Home</a></li>
            <li><a href="/orthodontics/treatments/expanders/">Expanders</a></li>
            <li><a href="/orthodontics/treatments/accelerated-treatment/">Accelerated Treatment</a></li>
            <li><a href="/orthodontics/treatments/3d-digital-scan/">Precision 3D Digital Scan</a></li>
            <li><a href="/orthodontics/treatments/sleep-apnea-tmj/">Sleep Apnea &amp; TMJ</a></li>
            <li><a href="/orthodontics/treatments/smile-makeover/">Smile Makeover</a></li>
            <li><a href="/orthodontics/treatments/teeth-whitening/">Teeth Whitening</a></li>
          </ul>
        </li>

        <li class="nav-item has-dropdown<?= strpos($_nav_path, '/orthodontics/active-patients') === 0 ? ' nav-item-active' : '' ?>">
          <a href="javascript:void(0)" class="nav-link">Active Patients <i class="fa-solid fa-chevron-down nav-chevron"></i></a>
          <ul class="nav-dropdown">
            <li><a href="/orthodontics/active-patients/virtual-appointments/">Virtual Appointments</a></li>
            <li><a href="/orthodontics/active-patients/faqs/">Orthodontic FAQs</a></li>
            <li><a href="/orthodontics/active-patients/emergency/">Emergency Information</a></li>
          </ul>
        </li>

        <li class="nav-item has-dropdown<?= strpos($_nav_path, '/orthodontics/success-stories') === 0 ? ' nav-item-active' : '' ?>">
          <a href="javascript:void(0)" class="nav-link">Success Stories <i class="fa-solid fa-chevron-down nav-chevron"></i></a>
          <ul class="nav-dropdown">
            <li><a href="/orthodontics/success-stories/smile-gallery/">Smile Gallery</a></li>
            <li><a href="/orthodontics/success-stories/reviews/">Reviews</a></li>
          </ul>
        </li>

        <li class="nav-item has-dropdown<?= strpos($_nav_path, '/orthodontics/contact') === 0 ? ' nav-item-active' : '' ?>">
          <a href="javascript:void(0)" class="nav-link">Contact Us <i class="fa-solid fa-chevron-down nav-chevron"></i></a>
          <ul class="nav-dropdown">
            <li><a href="/orthodontics/contact/oviedo/">Oviedo Office</a></li>
            <li><a href="/orthodontics/contact/lake-nona/">Lake Nona Office</a></li>
          </ul>
        </li>

      </ul>
      <a href="/orthodontics/survey_orthodontics.php" class="btn btn-primary nav-cta">Book Consultation</a>

      <?php else: ?>
      <!-- ── DEFAULT NAV ── -->
      <ul class="nav-list">

        <li class="nav-item has-dropdown<?= nav_active('/about') ? ' nav-item-active' : '' ?>">
          <a href="javascript:void(0)" class="nav-link<?= nav_cls('/about') ?>">About Us <i class="fa-solid fa-chevron-down nav-chevron"></i></a>
          <ul class="nav-dropdown">
            <li><a href="/about/team/">Meet Our Team</a></li>
            <li><a href="/about/doctor/">Meet the Dr.</a></li>
          </ul>
        </li>

        <li class="nav-item has-dropdown<?= nav_active('/dental-implants') ? ' nav-item-active' : '' ?>">
          <a href="/dental-implants/" class="nav-link<?= nav_cls('/dental-implants') ?>">Dental Implants <i class="fa-solid fa-chevron-down nav-chevron"></i></a>
          <ul class="nav-dropdown">
            <li><a href="/dental-implants/single-tooth/">Single Tooth Implant</a></li>
            <li><a href="/dental-implants/implant-bridge/">Implant-Supported Bridge</a></li>
            <li><a href="/dental-implants/full-arch/">Full Arch Dental Implants</a></li>
            <li><a href="/dental-implants/all-on-x/">All-on-X Dental Implants</a></li>
            <li><a href="/dental-implants/same-day/">Same-Day Dental Implants</a></li>
            <li><a href="/dental-implants/implant-supported-dentures/">Implant-Supported Dentures</a></li>
          </ul>
        </li>

        <li class="nav-item has-dropdown<?= nav_active('/orthodontics') ? ' nav-item-active' : '' ?>">
          <a href="/orthodontics/" class="nav-link<?= nav_cls('/orthodontics') ?>">Orthodontics <i class="fa-solid fa-chevron-down nav-chevron"></i></a>
          <ul class="nav-dropdown">
            <li><a href="/orthodontics/invisalign/">Invisalign</a></li>
            <li><a href="/orthodontics/clear-aligners/">Clear Aligners</a></li>
            <li><a href="/orthodontics/braces/">Braces</a></li>
          </ul>
        </li>

        <li class="nav-item"><a href="/our-advantage/" class="nav-link<?= nav_cls('/our-advantage') ?>">Our Advantage</a></li>
        <li class="nav-item"><a href="/your-options/" class="nav-link<?= nav_cls('/your-options') ?>">Your Options</a></li>
        <li class="nav-item"><a href="/pricing/" class="nav-link<?= nav_cls('/pricing') ?>">Pricing</a></li>
        <li class="nav-item"><a href="/smile-gallery/" class="nav-link<?= nav_cls('/smile-gallery') ?>">Smile Gallery</a></li>

      </ul>
      <a href="/dental-implants/survey.php" class="btn btn-primary nav-cta">Book Appointment</a>
      <?php endif; ?>

      <?php endif; ?>
    </nav>

    <?php if (empty($hide_nav_links)): ?>
    <button class="nav-toggle" aria-label="Open menu" aria-expanded="false">
      <span></span><span></span><span></span>
    </button>
    <?php endif; ?>

  </div>
</header>
<?php endif; ?>
