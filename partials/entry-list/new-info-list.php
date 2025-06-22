<!-- 協会からのお知らせ　最新の投稿 -->
<?php
$the_query = new WP_Query();
$my_posts = array(
  'post_type' => 'post', // カスタム投稿タイプ
  'posts_per_page'=> '5', // 表示数
);
$the_query->query( $my_posts );
if( $the_query->have_posts() ): while( $the_query->have_posts() ) : $the_query->the_post();
?>

<!-- ここから処理内容-->

<div class="info-wrapper">
  <div class="info-thumbnail-container">
    <a href="<?php echo get_permalink(); ?>">
      <?php the_post_thumbnail('info-thumb'); ?>
    </a>
  </div>
  <div class="info-content-container">
    <div class="wrapper-infolabels">
      <?php the_category(); ?>
    </div>
    <p class="info-date"><?php echo get_the_date(); ?></p>
    <h3 class="info-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
    <p class="info-subtitle">
      <a href="<?php echo get_permalink(); ?>">
        <?php //サブタイトルがある場合のみ出力
        if(get_post_meta($post->ID,'subtitle',true)):
        echo get_post_meta($post->ID,'subtitle',true); ?>
        <?php endif; ?>
      </a>
    </p>
    <p class="info-summary"><?php the_excerpt(); ?></p>
  </div>
</div>

<!-- ここまで処理内容-->

<?php endwhile; endif; wp_reset_postdata(); ?>
