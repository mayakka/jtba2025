<?php

get_header(); ?>
<?php get_template_part('header-subpage-books-archive'); ?>
<div id="body-container" data-sticky-container>

  <div id="body-grid-archive">

    <div id="archive-header-container">
      <div class="wrapper-archive-title">
        <h1 class="archive-title">カテゴリー：対談</h1>
      </div>
      <a href="<?php echo esc_url( home_url( '/info/books/' ) ); ?>" class="archive-close-button"><i class="far fa-window-close"></i></a>
    </div>

    <main id="main-container">

      <h2 class="headline-archivelist">INDEX</h2>
      <div class="archivelist-panel">

        <?php
        $paged = get_query_var('paged') ? get_query_var('paged') : 1 ; //ページの判定
        $args =  array(
          'orderby'          => 'meta_value', //ソートの基準（meta_keyの値）
          'order'            => 'DESC', //DESC降順　ASC昇順
          'post_type'        => 'books', // 投稿タイプ名
          'taxonomy'         => 'book_category',
          'term'             => 'taidan',
          'posts_per_page'   => 10, //表示件数
          'meta_key'         => 'pub_date', //並べ替えに使うカスタムフィールド
          'post_status'      => 'publish', //公開状態
          'ignore_sticky_posts' => 1, //取得した記事の何番目から表示するか
          'paged'            =>  $paged //ページネーションに必要
        );
        $wp_query = new WP_Query($args);
        while ($wp_query->have_posts()) : $wp_query->the_post();
        ?>
        <!-- loop start -->
        <div class="bookinfo-container">
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

        <!-- loop end -->
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
          ));
          ?>
        </div>
        <!-- ページネーション -->

      </div>
    </main>

    <?php get_template_part('partials/navigation/sidenav-books-archive'); ?>

  </div>
</div>
<?php get_footer(); ?>
