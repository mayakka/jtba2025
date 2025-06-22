<?php get_header(); ?>
<header id="header-subpage">
  <div id="hero-subpage">
    <div id="hero-headline-group">
      <p class="menu-title">JTBA</p>
      <?php the_title( '<p class="page-title">','</p>' ); ?>
    </div>
  </div>
</header>
<div id="body-container" data-sticky-container>
  <div id="body-grid">
    <main id="main-container">
      <!-- ここからbody -->
      <?php the_content(); ?>

      <!-- ここまでbody-->
    </main>
    <?php get_sidebar(); ?>
  </div>
</div>
<?php get_footer(); ?>
