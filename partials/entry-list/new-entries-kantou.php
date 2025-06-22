<!-- 巻頭法話 新着記事 -->
<?php
$the_query = new WP_Query();
$my_posts = array(
  'post_type' => 'kantou', // カスタム投稿タイプ
  'posts_per_page'=> '3', // 表示数
);
$the_query->query( $my_posts );
if( $the_query->have_posts() ): while( $the_query->have_posts() ) : $the_query->the_post();
?>

<div class="newentry-wrapper newentry-kantou">
  <p class="entry-date"><?php echo get_the_date(); //投稿日 ?></p>
  <a href="<?php echo get_permalink(); ?>">
  <p class="newentry-title">
    <span class="kantou-number"><?php echo get_post_meta($post->ID,'kantou_number',true); //法話No. ?></span>
    <?php the_title(); ?>
  </p>
  <p class="newentry-subtitle"><?php echo get_post_meta($post->ID,'kantou_subtitle',true); //サブタイトル ?></p>
  </a>
  <p class="newentry-summary"><?php the_excerpt(); ?></p>
</div>

<?php endwhile; endif; wp_reset_postdata(); ?>
