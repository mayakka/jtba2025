<?php get_header(); ?>

<header id="header-subpage">
  <div id="hero-subpage">
    <div id="hero-headline-group">
      <p class="menu-title">法話と解説</p>
      <p class="page-title">根本仏教講義</p>
    </div>
  </div>
  <div id="header-breadcrumbs">
    <nav aria-label="You are here:" role="navigation">
      <ul class="breadcrumbs">
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
        <li><a href="<?php echo esc_url( home_url( '/dhamma/' ) ); ?>">法話と解説</a></li>
        <li><a href="<?php echo esc_url( home_url( '/dhamma/kougi/' ) ); ?>">根本仏教講義</a></li>
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

        <div class="kougi-midashi">
          <p class="series-title">
            <?php // 講義のシリーズ名を取得
            if ($terms = get_the_terms($post->ID, 'kougi_series')) {
              foreach ( $terms as $term ) {
                echo esc_html($term->name);
              }
            }
            ?>
            <span class="series-number">
              <?php // 講義ナンバーを取得
              echo get_post_meta($post->ID , 'kougi_number' ,true);
              ?>
            </span></p>
          <h1>
            <?php the_title(); ?>
          </h1>
          <p class="author">アルボムッレ・スマナサーラ長老</p>
        </div>

        <div class="houwa-honmon">
          <?php the_content(); ?>
        </div>

        <?php echo do_shortcode('[ssba-buttons]'); ?>
        
        <nav class="nav-single-bottom">
            <?php previous_post_link('<div class="navpart-single-left">%link</div>'); ?>
            <div class="navpart-single-center"><a href="<?php echo esc_url( home_url( '/dhamma/kougi/' ) ); ?>">講義INDEX</a></div>
            <?php next_post_link('<div class="navpart-single-right">%link</div>'); ?>
        </nav>

        <?php endwhile; endif; ?>
      </section>

      <!-- ここまでbody-->
    </main>
    <?php get_sidebar(); ?>
  </div>
</div>
<?php get_footer(); ?>
