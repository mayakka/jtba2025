<?php
/*
Template Name: topics_ALL
*/
get_header(); ?>
<?php get_template_part('header-subpage-topics-archive'); ?>
<div id="body-container" data-sticky-container>
  <div id="body-grid-archive">

    <div id="archive-header-container">
      <div class="wrapper-archive-title">
        <h1 class="archive-title">お知らせ一覧</h1>
      </div>
      <!--      <p>お知らせのカテゴリー別に読みたい方は、カテゴリーを選択してください。</p>-->
      <a href="<?php echo esc_url( home_url( '/info/topics/' ) ); ?>" class="archive-close-button"><i class="far fa-window-close"></i></a>
    </div>

    <main id="main-container">

      <h2 class="headline-archivelist">INDEX</h2>
      <div class="archivelist-panel">

        <?php
        $paged = get_query_var('paged') ? get_query_var('paged') : 1 ; //ページの判定
        $args =  array(
          'posts_per_page'   => 10, //表示件数
          'orderby'          => 'date', //ソートの基準
          'order'            => 'DESC', //DESC降順　ASC昇順
          'post_type'        => 'post', //投稿タイプ名postは通常の投稿
          //    'category_name'    => 'book', //カテゴリー指定
          'post_status'      => 'publish', //公開状態
          'ignore_sticky_posts' => 1, //取得した記事の何番目から表示するか
          'paged'            =>  $paged //ページネーションに必要
        );
        $wp_query = new WP_Query($args);
        while ($wp_query->have_posts()) : $wp_query->the_post();
        ?>
        <!-- カテゴリー名の取得 -->
        <?php
        $cat = get_the_category();
        $catname = $cat[0]->cat_name; //カテゴリー名
        $catslug = $cat[0]->slug; //スラッグ名
        //カテゴリーへのURLを設定（既定の4種以外は/otherに誘導）
        if(($catslug=='book')||($catslug=='event')||($catslug=='media')||($catslug=='news')):
        $catlink = esc_url( home_url( '/' ) ).'category/'.$catslug.'/';
        else:
        $catlink = esc_url( home_url( '/' ) ).'category/other/';
        endif;
        ?>
        <!-- loop start -->
        <dl class="pastnews-list">
          <dt class="pastnews-data">
           <span class="pastnews-label"><a href="<?php echo $catlink; ?>"><?php echo $catname; ?></a></span>
           <?php echo get_the_date(); ?>
          </dt>
          <dd class="pastnews-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></dd>
        </dl>
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

    <?php get_template_part('partials/navigation/sidenav-info-category'); ?>

  </div>
</div>
<?php get_footer(); ?>
