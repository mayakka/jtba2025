<?php get_header(); ?>
<?php get_template_part('header-subpage'); ?>
<div id="body-container" data-sticky-container>
  <div id="body-grid-archive">

    <div id="archive-header-container">
      <div class="wrapper-archive-title">
        <h1 class="archive-title">協会からのお知らせ 一覧</h1>
      </div>
      <p>お知らせのカテゴリー別に読みたい方は、カテゴリーを選択してください。</p>
      <a href="<?php echo esc_url( home_url( '/info/topics/' ) ); ?>" class="archive-close-button"><i class="far fa-window-close"></i></a>
    </div>

    <?php get_template_part('info/topic-cat-all'); ?>

  </div>
</div>
<?php get_footer(); ?>
