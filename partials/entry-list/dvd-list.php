<!-- 法話DVD目録 -->
<?php
$paged = get_query_var('paged') ? get_query_var('paged') : 1 ; //ページの判定
$args =  array(
  'posts_per_page'   => 4, //表示件数
  'orderby'          => 'date', //ソートの基準
  'order'            => 'ASC', //DESC降順　ASC昇順
  'post_type'        => 'disc', //投稿タイプ名postは通常の投稿
  'disc_media'       => 'dvd_media',//タクソノミー名とカテゴリーの指定
  'post_status'      => 'publish', //公開状態
  'ignore_sticky_posts' => 1, //取得した記事の何番目から表示するか
  'paged'            =>  $paged //ページネーションに必要
);
$wp_query = new WP_Query($args);
while ($wp_query->have_posts()) : $wp_query->the_post();
?>

<!-- ループ内の処理 -->

<div class="media-container grid-x align-middle">
  <div class="cell small-12  medium-5">
    <dl class="media-list">
      <dt class="media-title"><?php the_title(); ?>
        <?php //サブタイトルがある場合のみ出力
        if(get_post_meta($post->ID,'dvd_subtitle',true)):
        echo '<small>'.get_post_meta($post->ID,'dvd_subtitle',true).'</small>'; ?>
       <?php endif; ?>
      </dt>
      <dd><span class="order-number label warning">注文番号：<?php echo get_post_meta($post->ID,'dvd_ordernumber',true); ?></span>　<?php echo get_post_meta($post->ID,'dvd_price',true); ?></dd>
    </dl>
  </div>
  <div class="cell small-12  medium-7">
    <p class="media-summary"><?php the_excerpt(); ?></p>
  </div>
</div>

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
    'add_fragment' => '#sect-1', //表示位置のID
  ));
  ?>
</div>
