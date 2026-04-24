<?php
/**
 * WordPress fallback template — should never be reached on this site
 * because every routed URL has an explicit page template assigned.
 */
global $sonrisa_page;
$sonrisa_page = [
    'title'       => get_bloginfo('name') . ' | Sonrisa Dental Specialists',
    'description' => get_bloginfo('description'),
    'class'       => 'page-default',
];
get_header();
?>

<section class="section" style="padding:80px 0;text-align:center;">
  <div class="container">
    <h1><?php the_title(); ?></h1>
    <div class="page-content">
      <?php
      if ( have_posts() ) {
          while ( have_posts() ) {
              the_post();
              the_content();
          }
      }
      ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>
