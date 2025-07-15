<?php get_header(); ?>

<header id="header-subpage">
  <div id="hero-subpage">
    <div id="hero-headline-group">
      <p class="menu-title">法話と解説</p>
      <p class="page-title">あなたとの対話（Q&A）</p>
    </div>
  </div>
  <div id="header-breadcrumbs">
    <nav aria-label="You are here:" role="navigation">
      <ul class="breadcrumbs">
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
        <li><a href="<?php echo esc_url( home_url( '/dhamma/' ) ); ?>">法話と解説</a></li>
        <li><a href="<?php echo esc_url( home_url( '/dhamma/qa/' ) ); ?>">あなたとの対話（Q&A）</a></li>
        <li><span class="show-for-sr">Current:</span><?php echo get_the_title(); ?></li>
      </ul>
    </nav>
  </div>
</header>

<div id="body-container" data-sticky-container>
  <div id="body-grid">
    <main id="main-container">
      <!-- ここからbody -->

      <section class="qa-wrapper">
        <?php if(have_posts()): while(have_posts()):the_post(); ?>
        <div class="qa-midashi">
          <h1><?php the_title(); ?></h1>
          <p class="date"><?php echo get_post_meta($post->ID,'qa_date',true); //掲載号 ?></p>
        </div>
        <div class="qa-honmon">
          <?php the_content(); ?>
        </div>

        <?php echo do_shortcode('[ssba-buttons]'); ?>

        <?php get_template_part('partials/navigation/nav-bottom-qa'); ?>

        <div class="qa-tag-box">
          <h3><i class="far fa-tags"></i> 関連タグ</h3>
          <?php
          $terms = get_the_terms($post->ID, 'qa_tag');
          if ( $terms ) {
            echo '<ul>';
            foreach ( $terms as $term ) {
              $term_link = get_term_link( $term );
              if ( ! is_wp_error( $term_link ) ) {
                echo '<li><a href="' . esc_url( $term_link ) . '">' . $term->name . '</a></li>';
              }
            }
            echo '</ul>';
          }
          ?>
        </div>

        <?php endwhile; endif; ?>
      </section>

      <!-- ここまでbody-->
    </main>
    <?php get_sidebar(); ?>
  </div>
</div>
<?php get_footer(); ?>
