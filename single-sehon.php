<?php get_header(); ?>

<header id="header-subpage">
  <div id="hero-subpage">
    <div id="hero-headline-group">
      <p class="menu-title">法話と解説</p>
      <p class="page-title">施本文庫</p>
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

      <section class="houwa-wrapper">

        <div class="bunko-midashi-block">
          <div class="title-group">
            <h1 class="sehon-title"><?php the_title(); ?></h1>
            <p class="sehon-subtitle"><?php echo get_post_meta($post->ID,'sehon_subtitle1',true); ?>　<?php echo get_post_meta($post->ID,'sehon_subtitle2',true); ?></p>
          </div>
          <p class="sehon-auther"><?php echo get_post_meta($post->ID,'sehon_auther',true); ?></p>
          <div class="sehon-img">
            <?php the_post_thumbnail('books-thumb'); ?>
          </div>
        </div>
        
        <?php get_template_part('partials/navigation/page-mekuri'); ?>
        
        <div class="sehon-honmon">
          <?php the_content(); ?>
        </div>
        
        <?php get_template_part('partials/navigation/page-mekuri'); ?>
        
        <?php get_template_part('partials/navigation/page-sitei'); ?>
        
        <section class="sehon-card">
          <h3 class="card-label">この施本のデータ</h3>
          <dl class="sehon-data">
            <dt class="title"><?php the_title(); ?></dt>
            <dd class="subtitle"><?php echo get_post_meta($post->ID,'sehon_subtitle1',true); ?>　<?php echo get_post_meta($post->ID,'sehon_subtitle2',true); ?></dd>
            <dd class="auther">著者：<?php echo get_post_meta($post->ID,'sehon_auther',true); ?></dd>
            <dd class="pub-date">初版発行日：<?php echo get_post_meta($post->ID,'sehon_syohan',true); ?></dd>
          </dl>
          <figure class="sehon-img">
            <?php the_post_thumbnail('books-thumb'); ?>
          </figure>
        </section>

      </section>

      <!-- ここまでbody-->
    </main>
    <?php get_sidebar(); ?>
  </div>
</div>
<?php get_footer(); ?>