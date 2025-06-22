<!-- 本屋さん　新刊リスト -->
<!-- 法話DVD目録 -->
<div class="grid-x grid-margin-x small-up-2 medium-up-3 large-up-4 u-mb-20">
<?php
$paged = get_query_var('paged') ? get_query_var('paged') : 1 ; //ページの判定
$args =  array(
  'posts_per_page'   => 12, //表示件数
  'orderby'          => 'meta_value_num', //ソートの基準
  'order'            => 'DESC', //DESC降順　ASC昇順
  'post_type'        => 'books', //投稿タイプ名postは通常の投稿
  'meta_key'         => 'pub_date', //並べ替えに使うキー
  'post_status'      => 'publish', //公開状態
  'ignore_sticky_posts' => 1, //取得した記事の何番目から表示するか
  'paged'            =>  $paged //ページネーションに必要
);
$wp_query = new WP_Query($args);
while ($wp_query->have_posts()) : $wp_query->the_post();
?>
<?php $bookid = get_the_ID(); //モーダル表示用にidを取得 ?>

<!-- ここから処理内容-->
<div class="cell">
  <div class="wrapper-regularbook-img">
    <?php the_post_thumbnail('books-thumb'); ?>
  </div>

  <div class="reveal" <?php echo 'id="modal-'.$bookid.'"' ?> data-reveal>
    <dl class="regularbook-list">
      <dt><?php the_title(); ?></dt>
      <dd>著者：<?php echo get_post_meta($post->ID,'books_auther',true); ?></dd>
      <dd><!-- 価格：<?php echo get_post_meta($post->ID,'books_price',true); ?>　 -->出版社：<?php echo get_post_meta($post->ID,'books_publisher',true); ?></dd>
      <dd class="regularbook-summary">
        <?php echo mb_substr(strip_tags(get_the_content()), 0, 300); //本文から300字を抽出 ?>
      </dd>
    </dl>


    <div class="expanded button-group success stacked-for-small amazon-button-group">

      <?php
      //アマゾンのリンクを取得
      $amalink_p = get_post_meta($post->ID,'link_amazon_p',true);
      $amalink_e = get_post_meta($post->ID,'link_amazon_e',true);
      //書籍・電子書籍のリンクがある場合
      if((get_post_meta($post->ID,'link_amazon_p',true)) and (get_post_meta($post->ID,'link_amazon_e',true))):
      echo '<a href="'.$amalink_p.'" class="button" target="_blank">書籍をAmazonでみる</a>
        <a href="'.$amalink_e.'" class="button" target="_blank">電子書籍をAmazonでみる</a>';
      //書籍のみリンクがある場合
      elseif (get_post_meta($post->ID,'link_amazon_p',true)):
      echo '<a href="'.$amalink_p.'" class="button" target="_blank">書籍をAmazonでみる</a>';
      //電子書籍のみリンクがある場合
      elseif (get_post_meta($post->ID,'link_amazon_e',true)):
      echo '<a href="'.$amalink_e.'" class="button" target="_blank">電子書籍をAmazonでみる</a>';
      //リンクが空の場合
      else :
      echo '<span class="nolink">リンクがありません</span>';
      endif;
      ?>
    </div>

    <button class="close-button" data-close aria-label="Close modal" type="button">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
</div>
<!-- ここまで処理内容-->
<?php endwhile; wp_reset_postdata(); ?>
</div>
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
