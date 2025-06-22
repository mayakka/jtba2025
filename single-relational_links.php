<?php get_header(); ?>

<header id="header-subpage">
  <div id="hero-subpage">
    <div id="hero-headline-group">
      <p class="menu-title">精舎とダンマサークル</p>
      <p class="page-title">関連リンク</p>
    </div>
  </div>
  <div id="header-breadcrumbs">
    <nav aria-label="You are here:" role="navigation">
      <ul class="breadcrumbs">
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
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
        <div class="single-header-container">
          <div class="label-single">
            <?php the_category(); ?>
          </div>
          <h1 class="headline-single"><?php the_title(); ?></h1>
          <p class="subtitle-single">
            <?php //サブタイトルがある場合のみ出力
            if(get_post_meta($post->ID,'subtitle',true)):
            echo get_post_meta($post->ID,'subtitle',true); ?>
            <?php endif; ?>
          </p>
        </div>
        <div class="grid-x grid-margin-x">
          <div class="cell medium-9">
            <?php the_content(); ?>
          </div>
          <div class="cell medium-3">
            <div class="cell">
              <?php the_post_thumbnail('info-thumb'); ?>
            </div>
          </div>

        </div>

      </div>

      <?php
      endwhile;
      endif;
      ?>
    </main>
    <?php get_sidebar(); ?>
  </div>
</div>
<?php get_footer(); ?>
