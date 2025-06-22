<!-- 本屋さん　新刊リスト -->
<?php
$the_query = new WP_Query();
$my_posts = array(
  'orderby'          => 'meta_value', //ソートの基準（meta_keyの値）
  'order'            => 'DESC', //DESC降順　ASC昇順
  'post_type'        => 'books', // 投稿タイプ名
  'posts_per_page'   => 6, //表示件数
  'meta_key'         => 'pub_date', //並べ替えに使うカスタムフィールド
  'post_status'      => 'publish', //公開状態
  'ignore_sticky_posts' => 1, //取得した記事の何番目から表示するか
);
$the_query->query( $my_posts );
if( $the_query->have_posts() ): while( $the_query->have_posts() ) : $the_query->the_post();
?>

<!-- ここから処理内容-->

<div class="bookinfo-box">
  <div class="wrapper-book-img">
    <?php the_post_thumbnail('books-thumb'); ?>
  </div>
  <div class="wrapper-book-data">

    <dl class="book-data">
      <dt><?php the_title(); ?></dt>
      <dd class="book-author">著者：<?php echo get_post_meta($post->ID,'books_auther',true); ?></dd>
      <dd class="book-publisher">出版社：<?php echo get_post_meta($post->ID,'books_publisher',true); ?></dd>
      <dd class="book-labels">

        <?php //タクソノミーBOOKカテゴリーをリスト形式で出力
        $term_list = get_the_term_list( $post->ID, 'book_category', '<ul class="category-labels"><li>', '</li><li>', '</li></ul>' );
        if ( $term_list ){
          echo $term_list;
        }
        ?>

      </dd>
      <dd class="newbook-summary">
        <?php echo mb_substr(strip_tags(get_the_content()), 0, 400); //本文から400字を抽出 ?>
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
  </div>
</div>
<!-- ここまで処理内容-->

<?php endwhile; endif; wp_reset_postdata(); ?>
