<?php
/**
 * Template Name: サブページ共通
 * Description: サイドバー付きの汎用固定ページテンプレート。協会綱領、プライバシーポリシー、特商法の表記などに使用。
 */
get_header(); ?>

<?php get_template_part('header-subpage'); ?>
<div id="body-container" data-sticky-container>
  <div id="body-grid">
    <main id="main-container">
      <!-- ここからbody -->
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
      <?php endwhile; else : ?>
      <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif; ?>
      <!-- ここまでbody-->
    </main>
    <?php get_sidebar(); ?>
  </div>
</div>

<?php get_footer(); ?>
