<!-- 巻頭法話 新着記事 -->
<?php
$the_query = new WP_Query();
$my_posts = array(
  'post_type' => 'sehon', // カスタム投稿タイプ
  'posts_per_page'=> '3', // 表示数
);
$the_query->query( $my_posts );
if( $the_query->have_posts() ): while( $the_query->have_posts() ) : $the_query->the_post();
?>

<div class="bunko-box">
  <h3 class="bunko-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?><span>　<?php echo get_post_meta($post->ID,'sehon_subtitle1',true); ?></span><span>　<?php echo get_post_meta($post->ID,'sehon_subtitle2',true); ?></span></a></h3>
  <p class="bunko-summary"><?php the_excerpt(); ?></p>
  <div class="bunko-img">
    <?php the_post_thumbnail('bunko-thumb'); ?>
  </div>
  <a href="<?php echo get_permalink(); ?>" class="bunko-button">読む</a>
</div>

<?php endwhile; endif; wp_reset_postdata(); ?>
