<?php
/*
Template Name: サムネイルなし
Template Post Type: post
*/
?>

<?php get_header(); ?>

<header id="header-subpage">
  <div id="hero-subpage">
    <div id="hero-headline-group">
      <p class="menu-title">日本テーラワーダ仏教協会</p>
      <p class="page-title">年次総会資料</p>
    </div>
  </div>
  <div id="header-breadcrumbs">
    <nav aria-label="You are here:" role="navigation">
      <ul class="breadcrumbs">
        <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
        <li><span class="show-for-sr">Current:</span><?php echo get_the_title(); ?></li>
      </ul>
    </nav>
  </div>
</header>

<div id="body-container" data-sticky-container>
  <div id="body-grid">
    <main id="main-container">
      <!-- ここからbody -->
      <?php
      if (have_posts()):
        while (have_posts()): the_post(); ?>

          <div id="singlepost" class="singlepost-agm">
            <div class="wrapper-agm-header">
              <p class="date-agm"><?php echo get_the_date(); ?></p>
              <h1 class="headline-agm"><?php the_title(); ?></h1>
            </div>
            <div class="wrapper-single-body">
              <div class="agm-body">
                <?php the_content(); ?>
              </div>
            </div>

          </div>

      <?php
        endwhile;
      endif;
      ?>

      <!-- ここまでbody-->
    </main>
    <?php get_sidebar(); ?>
  </div>
</div>
<?php get_footer(); ?>
