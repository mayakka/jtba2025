<?php
global $sect_title;
$sect_title = array (
  '施本文庫', // sect-1-title
  '施本PDF文庫', // sect-2-title
);
?>

<section id="sect-0"  class="u-clearfix u-mb-40">
  <h1 class="leadtext">施本として編纂された法話集</h1>
  <p><img src="<?php echo esc_url( get_theme_file_uri('/assets/img/img-sehon.png') ) ?>" class="img-sehon">このページでは、協会から出版された施本のうち、配布終了したもの順次公開しています。これまでは「施本PDF文庫」としてPDF形式のデータを配布していましたが、スマートフォンなどでも読みやすいよう、ブラウザでそのまま閲覧できる形式に順次移し替えています。<br>
    施本は皆さまのサポートで成り立っています。この活動に興味がある方は<a href="/about/join/">こちら</a>のページをご覧ください。</p>
</section>

<section id="sect-1">
  <h2 class="headline-sehon">施本文庫</h2><hr>
  <p>ブラウザで読める施本のデータはこちら。順次追加していきます。</p>
  <div class="wrapper-bunko">
    <?php get_template_part('partials/entry-list/all-entries-sehon'); ?>
  </div>
</section>

<section id="sect-2">
  <h2 class="headline-oriori u-mt-40">施本PDF文庫</h2><hr>
  <p>従来のPDF文庫はこちら。ただいまPDFリンク調整中です。リンク先のページから更に「PDFを開く」ボタンを押してご覧ください。</p>
  <div class="wrapper-pdfbunko">

    <?php
  $args =  array(
  'orderby'          => 'meta_value', //ソートの基準（meta_keyの値）
  'order'            => 'ASC', //DESC降順　ASC昇順
  'post_type'        => 'pdf_bunko', // 投稿タイプ名
  'posts_per_page'   => 24, //表示件数
  'post_status'      => 'publish', //公開状態
  'ignore_sticky_posts' => 1, //取得した記事の何番目から表示するか
);
                         $wp_query = new WP_Query($args);
                         while ($wp_query->have_posts()) : $wp_query->the_post();
    ?>
    <div class="pdfbunko-box">
      <div class="wrapper-pdfbunko-data">
        <dl class="pdfbunko-data">
          <dt><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></dt>
          <?php //サブタイトルがある場合のみ出力
          if(get_post_meta($post->ID,'pdfbunko_subtitle',true)):
          echo '<dd class="pdfbunko-subtitle">'.get_post_meta($post->ID,'pdfbunko_subtitle',true).'</dd>'; ?>
          <?php endif; ?>
          <?php //説明文がある場合のみ出力
          if(get_post_meta($post->ID,'pdfbunko_description',true)):
          echo '<dd class="pdfbunko-sub">'.get_post_meta($post->ID,'pdfbunko_description',true).'</dd>'; ?>
          <?php endif; ?>
        </dl>
        <a href="<?php echo get_permalink(); ?>" class="pdfbunko-button">リンクを開く</a>
      </div>
      <div class="pdfbunko-img-wrapper">
       <img src="<?php the_post_thumbnail_url('info-thumb'); ?>" alt="">
      </div>
    </div>

    <?php endwhile; wp_reset_postdata(); ?>

  </div>
</section>
