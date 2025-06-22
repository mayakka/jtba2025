<div id="side-container">
  <?php get_search_form(); ?>

  <nav id="sidenavi" class="sticky"  data-sticky data-top-anchor="body-container:top" data-btm-anchor="body-container:bottom">

    <!-- サイドカラムの目次 -->
    <!-- 各ページの$sect_titleが空でない場合のみ表示 -->
    <?php global $sect_title;
    if(! empty($sect_title[0])){
      get_template_part('partials/navigation/mokuji-sidebar');
    }
    ?>

    <!-- フォールディングメニュー（a〜e） -->
    <?php get_template_part('partials/navigation/nav-folding-z'); ?>

    <div class="return-top-btn"  data-smooth-scroll>
      <a href="#top-nav">ページトップ</a>
    </div>
  </nav>
</div>
