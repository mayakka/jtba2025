<?php get_header(); ?>
<?php get_template_part('header-subpage-qa-archive'); ?>
<div id="body-container" data-sticky-container>

  <!-- ここから foundationのパーシャルと同じ構成 -->
  <div id="body-grid-archive">

    <div id="archive-header-container">
      <div class="wrapper-archive-title">
        <h1 class="archive-title"><?php single_term_title('タグ別：'); ?></h1>

      </div>
      <a href="<?php echo esc_url( home_url( '/dhamma/qa/' ) ); ?>" class="archive-close-button"><i class="far fa-window-close"></i></a>
    </div>

    <main id="main-container-tagindex">

      <h2 class="headline-archivelist">INDEX</h2>
      <div class="tagindex-panel">

        <?php
        if ( have_posts() ) :
        while(have_posts()): the_post();
        ?>
        <!-- loop start -->
        <section class="entrylist-container-tagindex">
          <p class="qa-date"><?php echo get_post_meta($post->ID,'qa_date',true); //掲載号 ?></p>
          <h3 class="newentry-title"><a href="<?php echo get_permalink(); ?>">
            <?php the_title(); ?></a></h3>
          <p class="newentry-summary"><?php the_excerpt(); ?></p>
        </section>
        <!-- loop end -->
        <?php
        endwhile;
        endif;
        ?>
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

    <div id="side-container-tagindex">
      <nav id="sidenavi-tagcloud">
        <h3>タグ一覧</h3>
        <div class="wrapper-tags">
          <?php wp_tag_cloud(array(
          'taxonomy'=>'qa_tag',
          'smallest' => 10, //最小文字サイズ
          'largest' => 16, //最大文字サイズ
          )); ?>
        </div>
      </nav>
    </div>


  </div>
  <!-- ここまで foundationのパーシャルと同じ構成 -->
</div>
<?php get_footer(); ?>