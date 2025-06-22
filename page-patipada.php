<?php get_header(); ?>
<?php get_template_part('header-subpage-patipada'); ?>
<div id="body-container" data-sticky-container>
  <div id="body-grid">
    <main id="main-container">
      <?php the_content(); ?>
      <!-- ここまでbody-->
    </main>
    <?php get_sidebar(); ?>
  </div>
</div>
<?php get_footer(); ?>
