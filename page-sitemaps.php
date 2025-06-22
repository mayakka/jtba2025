<?php
/*
Template Name: Site_Maps
*/
get_header(); ?>

<?php get_template_part('header-subpage'); ?>
<div id="body-container" data-sticky-container>
  <div id="body-grid">
    <main id="main-container">
      <!-- ここからbody -->
      <?php echo do_shortcode( ' [wp_sitemap_page]' ); ?>
      <!-- ここまでbody-->
    </main>
    <?php get_sidebar(); ?>
  </div>
</div>

<?php get_footer(); ?>