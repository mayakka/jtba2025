<?php
global $sect_title;
$sect_title = array (
  '新着記事', // sect-1-title
  '智慧の扉インデックス' // sect-2-title
);
?>

<section id="sect-0"  class="u-clearfix u-mb-40">
  <h1 class="leadtext">凝縮された仏教のエッセンス</h1>
  <p><img src="<?php echo esc_url( get_theme_file_uri('/assets/img/img-tobira.png') ) ?>" class="img-tobira">「智慧の扉」は、機関誌パティパダーの巻頭に毎号掲載されている、スマナサーラ長老による読み切りのコラムです。見開き２ページの短い文章の中に、お釈迦さまの教えがギュッと詰め込まれています。短い時間で読めますので、ちょっとした待ち時間などにも触れてみてください。くり返し読むことで、きっとまた新しい発見があると思います。</p>
</section>

<div id="sect-1" class="newentry-box">
  <h2 class="headline-newentry">新着記事</h2>
  <?php get_template_part('partials/entry-list/new-entries-tobira'); ?>
</div>

<div id="sect-2" class="tobira-index">
  <h2 class="headline-houwa-top"><span>智慧の扉</span>インデックス</h2><hr>
  <?php get_template_part('partials/entry-list/all-entries-tobira'); ?>
</div>
