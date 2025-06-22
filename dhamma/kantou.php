<?php
global $sect_title;
$sect_title = array (
  '新着の法話', // sect-1-title
  '巻頭法話インデックス' // sect-2-title
);
?>

<div id="sect-0"  class="u-clearfix u-mb-40">
  <h1 class="leadtext">毎月更新される<br>スマナサーラ長老の法話集</h1>
  <p><img src="<?php echo esc_url( get_theme_file_uri('/assets/img/img-kantouhouwa.jpg') ) ?>" class="img-kantou" alt="パティパダー表紙">このセクションでは、協会機関紙『パティパダー』に毎号掲載されているスマナサーラ長老の巻頭法話をご紹介しています。<br>
  このサイトには本誌より遅れて掲載されますが、『パティパダー』誌上には毎月、時節に沿った書き下ろしの法話が連載されています。最新の法話に触れたい方は、ぜひ入会もご検討ください。</p>
</div>

<div id="sect-1" class="newentry-box">
  <h2 class="headline-newentry">新着の法話</h2>
  <?php get_template_part('partials/entry-list/new-entries-kantou'); ?>
</div>

<div id="sect-2">
    <h2 class="headline-houwa-top"><span>巻頭法話</span>インデックス</h2><hr>
    <?php get_template_part('partials/entry-list/all-entries-kantou'); ?>
</div>
