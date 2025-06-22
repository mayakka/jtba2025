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
      <p class="menu-title">お知らせ</p>
      <p class="page-title">協会からのお知らせ</p>
    </div>
  </div>
  <div id="header-breadcrumbs">
    <nav aria-label="You are here:" role="navigation">
      <ul class="breadcrumbs">
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
        <li><a href="<?php echo esc_url( home_url( '/info/' ) ); ?>">お知らせ</a></li>
        <li><a href="<?php echo esc_url( home_url( '/dhamma/topics/' ) ); ?>">協会からのお知らせ</a></li>
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

      <div id="singlepost">
        <div class="wrapper-single-header">
          <div class="category-labels wrapper-infolabels">
            <?php the_category(); ?>
          </div>
          <p class="date-single"><?php echo get_the_date(); ?></p>
          <h1 class="headline-single"><?php the_title(); ?></h1>
          <p class="subtitle-single">
            <?php //サブタイトルがある場合のみ出力
            if(get_post_meta($post->ID,'subtitle',true)):
            echo get_post_meta($post->ID,'subtitle',true); ?>
            <?php endif; ?>
          </p>
        </div>
        <div class="wrapper-single-body">
          <div class="single-body-alone">
            <?php the_content(); ?>
          </div>
        </div>

        <?php echo do_shortcode('[ssba-buttons]'); ?>
        <?php get_template_part('partials/navigation/nav-bottom-single'); ?>
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
