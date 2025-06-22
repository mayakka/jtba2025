 <section id="sect-0">
  <h1 class="headline-topnews">最新のお知らせ</h1><hr>

   <?php get_template_part('partials/entry-list/new-info-list'); ?>

</section>

<div id="sect-1">
  <h2 class="headline-archivepanel">協会からのお知らせアーカイブ</h2>
  <div class="archivepanel">
    <p>これまで当サイトに掲載された「協会からのお知らせ」は、すべて以下のリンクからご覧いただけます。<br>
      カテゴリー別目次も設けましたのでご利用ください。</p>
    <a href="<?php echo esc_url( home_url( '/info/alltopics/' ) ); ?>" class="archive-button-expand">すべての記事</a>
    <p class="headline-thememokuji">カテゴリー別の目次</p>
    <div class="grid-x grid-padding-x small-up-1 medium-up-2 large-up-3">
      <a href="<?php echo esc_url(home_url('/category/book/')); ?>" class="cell archive-button">書籍・電子書籍</a>
      <a href="<?php echo esc_url(home_url('/category/event/')); ?>" class="cell archive-button">イベント</a>
      <a href="<?php echo esc_url(home_url('/category/media/')); ?>" class="cell archive-button">映像・音声</a>
      <a href="<?php echo esc_url(home_url('/category/news/')); ?>" class="cell archive-button">ニュース</a>
    </div>
  </div>
</div>
