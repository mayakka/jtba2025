<!-- ジャータカ物語 いままでの記事 -->
<?php
$paged = get_query_var('paged') ? get_query_var('paged') : 1 ; //ページの判定
$args =  array(
  'posts_per_page'   => 20, //表示件数
  'orderby'          => 'meta_value_num', //ソートの基準
  'order'            => 'DESC', //DESC降順　ASC昇順
  'post_type'        => 'jataka', //投稿タイプ名postは通常の投稿
  'post_status'      => 'publish', //公開状態
  'meta_key'         => 'jataka_number', //並び順に使うキー
  'ignore_sticky_posts' => 1, //取得した記事の何番目から表示するか
  'paged'            =>  $paged //ページネーションに必要
);
$wp_query = new WP_Query($args);
while ($wp_query->have_posts()) : $wp_query->the_post();
?>

<!-- ループ内の処理 -->

<section class="entrylist-container">
  <div class="wrapper-houwa-title">
    <h4><a href="<?php echo get_permalink(); ?>"><span><?php echo get_post_meta($post->ID,'jataka_number',true); ?>.</span><?php the_title(); ?></a></h4>
    <p><a href="<?php echo get_permalink(); ?>"><?php echo get_post_meta($post->ID,'jataka_subtitle',true); ?></a></p>
  </div>
  <p class="houwa-summary"><?php the_excerpt(); ?></p>
</section>
<?php endwhile; wp_reset_postdata(); ?>

<!-- ページネーション -->
<div class="wp-pagination">
  <?php
  global $wp_rewrite;
  $paginate_base = get_pagenum_link(1);
  if(strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()){
    $paginate_format = '';
    $paginate_base = add_query_arg('paged','%#%');
  }
  else{
    $paginate_format = (substr($paginate_base,-1,1) == '/' ? '' : '/') .
      user_trailingslashit('page/%#%/','paged');;
    $paginate_base .= '%_%';
  }
  echo paginate_links(array(
    'base' => $paginate_base,
    'format' => $paginate_format,
    'total' => $wp_query->max_num_pages,
    'type'  => 'list', //ul liで出力
    'mid_size' => 1, //カレントページの前後
    'end_size' => 0,
    'current' => ($paged ? $paged : 1),
    'prev_text' => '＜',
    'next_text' => '＞',
    'add_fragment' => '#sect-2', //表示位置のID
  ));
  ?>
</div>
