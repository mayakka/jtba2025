<!-- 法話DVD目録 -->
<?php
$paged = get_query_var('paged') ? get_query_var('paged') : 1 ; //ページの判定
$args =  array(
  'posts_per_page'   => 10, //表示件数
  'orderby'          => 'meta_value_num', //ソートの基準
  'order'            => 'ASC', //DESC降順 ASC昇順
  'meta_key'         => 'order',
  'post_type'        => 'disc', //投稿タイプ名postは通常の投稿
  'disc_media'       => array('dvd_media','cdr_media'),//タクソノミー名とカテゴリーの指定
  'post_status'      => 'publish', //公開状態
  'ignore_sticky_posts' => 1, //取得した記事の何番目から表示するか
  'paged'            =>  $paged //ページネーションに必要
);
$wp_query = new WP_Query($args);
while ($wp_query->have_posts()) : $wp_query->the_post();
?>

<!-- ループ内の処理 -->
<div class="media-container grid-x">
  <dl class="media-list">
    <dt class="media-title">
      <?php
      if(has_term('dvd_media','disc_media')) :
      echo '<span class="category-label"><i class="fas fa-video fa-fw"></i> 映像</span>'; 
      ?>
      <?php
      elseif(has_term('cdr_media','disc_media')) :
      echo '<span class="category-label"><i class="fas fa-volume fa-fw"></i> 音声</span>'; 
      ?>
      <?php endif; ?>
      <?php the_title(); ?>
      <?php //サブタイトルがある場合のみ出力
      if(get_post_meta($post->ID,'dvd_subtitle',true)):
      echo 
        '<small>'.
        get_post_meta($post->ID,'dvd_subtitle',true).
        '</small>'; ?>
      <?php endif; ?>
    </dt>
    <dd>
      <!-- 価格 -->
      <?php if(get_post_meta($post->ID,'dvd_price',true)):
      echo 
        '<span>直販価格 </span>'.
        get_post_meta($post->ID,'dvd_price',true).
        '<small>（税込）</small>'; 
      ?>
      <?php endif; ?>
      <!-- 品番 -->
      <?php if(get_post_meta($post->ID,'dvd_ordernumber',true)):
      echo 
        '<small>[品番: '.
        get_post_meta($post->ID,'dvd_ordernumber',true).
        ']</small>'; 
      ?>
      <?php endif; ?>
      <!-- リンク -->
      <?php if(get_post_meta($post->ID,'dl_link',true)):
      echo 
        '<a href="'.
        get_post_meta($post->ID,'dl_link',true).
        '" class="dl-link-button" target="_blank">ECサイト <i class="fal fa-external-link-square"></i></a>'; 
      ?>
      <?php endif; ?>
      <?php if(get_post_meta($post->ID,'ama_link',true)):
      echo 
        '<a href="'.
        get_post_meta($post->ID,'ama_link',true).
        '" class="dl-link-button" target="_blank"><i class="fab fa-amazon"></i> プライム</a>'; 
      ?>
      <?php endif; ?>
    </dd>
  </dl>
  <p class="media-summary">
    <?php echo mb_substr(strip_tags(get_the_content()), 0, 600); //本文から600字を抽出 ?>
  </p>
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
    'add_fragment' => '#sect-5', //表示位置のID
  ));
  ?>
</div>
