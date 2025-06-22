<?php get_header(); ?>

<header id="header-subpage">
  <div id="hero-subpage">
    <div id="hero-headline-group">
      <p class="menu-title">法話と解説</p>
      <p class="page-title">施本PDF文庫</p>
    </div>
  </div>
  <div id="header-breadcrumbs">
    <nav aria-label="You are here:" role="navigation">
      <ul class="breadcrumbs">
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
        <li><a href="<?php echo esc_url( home_url( '/dhamma/' ) ); ?>">法話と解説</a></li>
        <li><a href="<?php echo esc_url( home_url( '/dhamma/sehon/' ) ); ?>">施本文庫</a></li>
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
        <p class="label-bunko">PDF文庫</p>
        <div class="headergroup-bunko">
          <h1><?php the_title(); ?></h1>
          <?php //サブタイトルがある場合のみ出力
          if(get_post_meta($post->ID,'bunko_subtitle',true)):
          echo '<p class="bunko-subtitle">'.get_post_meta($post->ID,'bunko_subtitle',true).'</p>'; ?>
          <?php endif; ?>
          <?php //説明文がある場合のみ出力
          if(get_post_meta($post->ID,'bunko_description',true)):
          echo '<p class="bunko-description">'.get_post_meta($post->ID,'bunko_description',true).'</p>'; ?>
          <?php endif; ?>
        </div>

        <div class="wrapper-single-body">
          <div class="single-body-main">
            <p>この施本のPDFは、以下の「PDFを開く」ボタンを押してご覧ください。別ウインドウが開きます。</p>
            <a href="<?php echo get_post_meta($post->ID,'bunko_url',true); ?>" class="button expanded hollow" target="_blank">PDFを開く（別ウインドウ）</a>
          </div>
          <div class="single-body-sub">
            <?php the_post_thumbnail('info-thumb'); ?>
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
