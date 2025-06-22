<?php get_header(); ?>
<!-- ここから foundationのパーシャルと同じ構成 -->
<?php get_template_part('header-subpage'); ?>
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
          <p class="date-single"><?php echo get_the_date(); ?></p>
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
            <!-- social-icons start-->
            <div class="social-icons cell">
              <p>
                <i class="fab fa-facebook-square"></i> <i class="fab fa-twitter-square"></i>
              </p>
            </div>
            <!-- social-icons end-->
          </div>

        </div>

        <!-- page-bottom-nav start -->
        <div class="single-bottom-nav">
          <?php
          the_post_navigation( array(
            'prev_text'           => '前の記事 - %title',
            'next_text'           => '次の記事 - %title',
            'screen_reader_text'  => '前後の記事へのリンク',
          ) );
          ?>
        </div>
        <!-- page-bottom-nav end -->

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
