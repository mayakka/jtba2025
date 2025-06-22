<!-- あなたとの対話 新着記事 -->
<?php
$the_query = new WP_Query();
$my_posts = array(
  'post_type' => 'qa', // カスタム投稿タイプ
  'posts_per_page'=> '3', // 表示数
);
$the_query->query( $my_posts );
if( $the_query->have_posts() ): while( $the_query->have_posts() ) : $the_query->the_post();
?>

<div class="newentry-wrapper-wide newentry-qa">
  <ul class="newentry-header">
    <li class="issue-number">
      <?php echo get_post_meta($post->ID,'qa_date',true); //掲載号 ?>
    </li>
    <li class="entry-date">
      <?php echo get_the_date(); //投稿日 ?>
    </li>
  </ul>
  <h3 class="newentry-title">
    <a href="<?php echo get_permalink(); ?>">
      <?php the_title(); ?>
    </a>
  </h3>
  <p class="newentry-summary">
    <?php the_excerpt(); ?>
  </p>
</div>
<?php endwhile; endif; wp_reset_postdata(); ?>

