<?php
$the_query = new WP_Query();
$my_posts = array(
  'post_type' => array('qa','kantou','tobira','sehon','jataka'), // 複数のカスタム投稿タイプを取得
  'posts_per_page'=> '12', // 表示数
);
$the_query->query( $my_posts );
if( $the_query->have_posts() ): while( $the_query->have_posts() ) : $the_query->the_post();
?>
<?php
  $houwalabel = esc_html(get_post_type_object(get_post_type())->label);
  $houwaname = esc_html(get_post_type_object(get_post_type())->name);
  if($houwaname=='qa'):
  $houwaurl = esc_url(home_url('/dhamma/qa/'));
  elseif($houwaname=='kantou'):
  $houwaurl = esc_url(home_url('/dhamma/kantou/'));
  elseif($houwaname=='tobira'):
  $houwaurl = esc_url(home_url('/dhamma/tobira/'));
  elseif($houwaname=='sehon'):
  $houwaurl = esc_url(home_url('/dhamma/sehon/'));
  elseif($houwaname=='jataka'):
  $houwaurl = esc_url(home_url('/dhamma/jataka/'));
  endif;
?>
<div class="newentry-wrapper front-newentry">
  <p class="entry-date"><?php echo get_the_date(); ?></p>
  <p class="houwa-label"><a href="<?php echo $houwaurl;?>">
    <?php echo esc_html(get_post_type_object(get_post_type())->label ); //ラベル用にカスタム投稿タイプ名を取得 ?>
    </a></p>
  <p class="newentry-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></p>
</div>
<?php endwhile; endif; wp_reset_postdata(); ?>
