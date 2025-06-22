<?php get_header(); ?>
<?php get_template_part('header-subpage-qa-archive'); ?>
<div id="body-container" data-sticky-container>

  <!-- ここから foundationのパーシャルと同じ構成 -->
  <div id="body-grid-archive">

    <div id="archive-header-container">
      <div class="wrapper-archive-title">
        <h1 class="archive-title">カテゴリー：ヴィパッサナー瞑想</h1>
      </div>
      <a href="<?php echo esc_url( home_url( '/dhamma/qa/' ) ); ?>" class="archive-close-button"><i class="far fa-window-close"></i></a>
    </div>

    <main id="main-container">

      <h2 class="headline-archivelist">INDEX</h2>
      <div class="archivelist-panel">

        <?php
        $paged = get_query_var('paged') ? get_query_var('paged') : 1 ; //ページの判定
        $args =  array(

          'posts_per_page'   => 8, //表示件数
          'orderby'          => 'date', //ソートの基準
          'order'            => 'ASC', //DESC降順　ASC昇順
          'post_type'        => 'qa', //投稿タイプ名postは通常の投稿
          'taxonomy'         => 'qa_category',
          'term'             => 'vipassana',
          'post_status'      => 'publish', //公開状態
          'ignore_sticky_posts' => 1, //取得した記事の何番目から表示するか
          'paged'            =>  $paged //ページネーションに必要
        );
        $wp_query = new WP_Query($args);
        while ($wp_query->have_posts()) : $wp_query->the_post();
        ?>
        <!-- loop start -->
        <div class="grid-x newentry-kantou-container">
          <div class="newentry-wrapper-1st">
            <p class="entry-date"><?php echo get_the_date(); //投稿日 ?></p>
          </div>
          <div class="newentry-wrapper-2nd">
            <div class="newentry-title-wrapper">
              <p class="newentry-title"><a href="<?php echo get_permalink(); ?>">
                <?php the_title(); ?></a></p>
              <?php //タクソノミーQAカテゴリーをリスト形式で出力
              $term_list = get_the_term_list( $post->ID, 'qa_category', '<ul class="category-labels qa-labels"><li>', '</li><li>', '</li></ul>' );
              if ( $term_list ){
                echo $term_list;
              }
              ?>
            </div>
            <p class="newentry-summary"><?php the_excerpt(); ?></p>
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

    <?php get_template_part('partials/navigation/sidenav-qa-archive'); ?>

  </div>
  <!-- ここまで foundationのパーシャルと同じ構成 -->
</div>
<?php get_footer(); ?>
