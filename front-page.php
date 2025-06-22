<?php
/*
Template Name: FrontPage
*/get_header(); ?>
<header id="header-top">
  <div id="hero-top">
    <div class="wrapper-hero-title">
      <h1>日本テーラワーダ仏教協会</h1>
      <p class="header-top-en">Japan Theravada Buddhist Association</p>
      <p class="header-top-jp">生きとし生けるものが幸せでありますように</p>
    </div>
    </div>
</header>

<div id="body-grid-layout" data-sticky-container>
 
  <main id="top-main">
  
    <div class="infolist-box">
      <h2 class="headline-info">最新のお知らせ</h2>
      <?php query_posts('posts_per_page=5'); ?>
      <?php if (have_posts()):while (have_posts()): the_post(); ?>
      <?php get_template_part('partials/entry-list/new-info-frontpage'); ?>
      <?php endwhile; endif; wp_reset_query() ;?>
  
      <a href="<?php echo esc_url( home_url( '/info/alltopics/' ) ); ?>" class="info-footer-button">過去のお知らせ一覧</a>
    </div>

    <div class="bnr-onlineofuse">
      <a href="<?php echo esc_url(home_url('/support/dana-online/')); ?>">
        <img src="<?php echo esc_url(get_theme_file_uri('/assets/img/bnr-onlineofuse-text.png')) ?>" alt="オンラインお布施" >
      </a>
    </div>
  
    <div class="newentry-box">
      <h2 class="headline-newentry">新着の法話</h2>
      <?php get_template_part('partials/entry-list/new-houwa-frontpage'); ?>
    </div>
  
    <div class="calender-area">
      <h2 class="headline-calender">近日中の主な予定</h2>
      <?php get_template_part('partials/utility/google-calender'); ?>
    </div>
     
  </main>
  
    <?php get_sidebar('top'); ?>
</div>

<?php get_footer(); ?>
