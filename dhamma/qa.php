<?php
global $sect_title;
$sect_title = array (
  '新着記事', // sect-1-title
  'Ｑ＆Ａインデックス', // sect-2-title
  '疑問・質問の窓口' // sect-3-title
);
?>

<div id="sect-0"  class="u-clearfix u-mb-40">
  <h1 class="leadtext">スマナサーラ長老による<br>質疑応答集</h1>
  <p><img src="<?php echo esc_url( get_theme_file_uri('/assets/img/img-qa.jpg') ) ?>" class="img-qa" alt="スマナサーラ長老">皆様から寄せられた、悩み苦しみ憂い悲しみ、仏教に関する素朴な疑問・質問、専門的な疑問・質問・反論などに、スマナサーラ長老がお釈迦さまの見方・方法からお答えになったものです。協会の機関紙『パティパダー』連載中の「釈尊の教え・あなたとの対話」と、当ホームページに寄せられた御質問を併せてご紹介しています。</p>
</div>

 <div id="sect-1" class="newentry-box">
  <h2 class="headline-newentry">新着記事</h2>
   <?php get_template_part('partials/entry-list/new-entries-qa'); ?>
</div>

<div id="sect-2" class="qa-index">
  <h2 class="headline-houwa-top"><span>Q&A</span>インデックス</h2><hr>
  <?php get_template_part('partials/entry-list/all-entries-qa'); ?>
  <p class="qa-caution">［2020年11月］コンテンツの追加作業に伴い、いままでカテゴリー分けしていた記事をタグで分類する方式に変更しました。従来のカテゴリー別インデックスは<a href="<?php echo esc_url( home_url( '/dhamma/archive-qa/' ) ); ?>">こちら</a>からご覧ください。ただし、2020年11月以降に追加される記事はカテゴリーには反映されませんのでご了承ください。</p>
</div>


<section id="sect-3" class="toiawase-box">
  <h2 class="headline-toiawase">疑問・質問の窓口</h2>
  <p>仏教に関する疑問や質問、協会機関紙『パティパダー』の記事についてのご意見等をお寄せください。<br>
    電話でのご質問や、手紙・FAXの送り先は、「事務局」ボタンのリンク先ページをご参照ください。メールでのご質問、掲示板への書き込みについても下記リンクをご利用ください。</p>
  <div class="stacked-for-small expanded button-group toiawase-btn">
    <a href="<?php echo get_permalink(233); ?>" class="button"><i class="fas fa-building fa-lg"></i>事務局</a>
    <a href="<?php echo get_permalink(237); ?>" class="button"><i class="fas fa-envelope fa-lg"></i>メール</a>
    <a href="<?php echo get_permalink(239); ?>" class="button"><i class="fas fa-list-alt fa-lg"></i>掲示板</a>
  </div>
</section>
