<?php get_header(); ?>

<header id="header-subpage">
  <div id="hero-subpage">
    <div id="hero-headline-group">
      <p class="menu-title">法話と解説</p>
      <p class="page-title">パティパダー巻頭法話</p>
    </div>
  </div>
  <div id="header-breadcrumbs">
    <nav aria-label="You are here:" role="navigation">
      <ul class="breadcrumbs">
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
        <li><a href="<?php echo esc_url( home_url( '/dhamma/' ) ); ?>">法話と解説</a></li>
        <li><a href="<?php echo esc_url( home_url( '/dhamma/kantou/' ) ); ?>">パティパダー巻頭法話</a></li>
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
        <?php if(have_posts()): while(have_posts()):the_post(); ?>
        <div class="houwa-midashi">
          <p class="number">No.<?php echo get_post_meta($post->ID,'kantou_number',true); ?>（<?php echo get_post_meta($post->ID,'kantou_date',true); ?>）</p>
          <h1><?php the_title(); ?></h1>
          <p class="subtitle"><?php echo get_post_meta($post->ID,'kantou_subtitle',true); ?>　<?php echo get_post_meta($post->ID,'kantou_title_eng',true); ?></p>
          <p class="author">アルボムッレ・スマナサーラ長老</p>
        </div>

        <div class="houwa-honmon">
          <?php the_content(); ?>

          <?php echo do_shortcode('[ssba-buttons]'); ?>
          <?php get_template_part('partials/navigation/nav-bottom-kantou'); ?>

        </div>
        <?php endwhile; endif; ?>
      </section>

      <!-- ここまでbody-->
    </main>
    <?php get_sidebar(); ?>
  </div>
</div>
<?php get_footer(); ?>
