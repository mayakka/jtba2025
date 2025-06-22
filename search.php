<?php get_header(); ?>
<?php get_template_part('header-subpage-search'); ?>
<div id="body-container" data-sticky-container>
  <div id="body-grid">
    <main id="main-container">
      <!-- ここからbody -->

      <div id="searchresult">
       <?php
        global $wp_query;
        $total_results = $wp_query->found_posts;
        $search_query = get_search_query();
        ?>

        <h1><?php echo $search_query; ?>の検索結果<span>（<?php echo $total_results; ?>件）</span></h1>

        <?php
        if( $total_results >0 ):
        if(have_posts()):
        while(have_posts()): the_post();
        ?>

        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php the_excerpt(); ?>
        <?php echo mb_substr(strip_tags(get_the_content()), 0, 150); //本文から150字を抽出 ?>

        <?php endwhile; wp_reset_postdata(); ?>
        
        <!-- ページネーション -->
        <hr>
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
        
        <?php endif; else: ?>

        <?php echo $search_query; ?> に一致する情報は見つかりませんでした。

        <?php endif; ?></div>

      <!-- ここまでbody-->
    </main>
    <?php get_sidebar(); ?>
  </div>
</div>
<?php get_footer(); ?>
