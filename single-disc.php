<?php get_header(); ?>

<header id="header-subpage">
  <div id="hero-subpage">
    <div id="hero-headline-group">
      <p class="menu-title">法話映像・音声</p>
      <p class="page-title">協会直販の法話DVD</p>
    </div>
  </div>
  <div id="header-breadcrumbs">
    <nav aria-label="You are here:" role="navigation">
      <ul class="breadcrumbs">
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
      </ul>
    </nav>
  </div>
</header>

<div id="body-container" data-sticky-container>
  <div id="body-grid">
    <main id="main-container">
      <!-- ここからbody -->
      
      <?php
      if (have_posts()):
      while (have_posts()): the_post(); ?>

      <div id="singlepost">
       
<!--
        <?php
        if(has_term('dvd_media','disc_media')) :
        echo '<p class="media-label">法話映像データ</p>'; 
        ?>
        <?php
        elseif(has_term('cdr_media','disc_media')) :
        echo '<p class="media-label">法話音声データ</p>'; 
        ?>
        <?php endif; ?>
-->


        <div class="wrapper-single-disc-title">
          <h1 class="headline-single-disc"><?php the_title(); ?></h1>
          <?php //サブタイトルがある場合のみ出力
          if(get_post_meta($post->ID,'dvd_subtitle',true)):
          echo '<p class="subtitle-single-disc">'.get_post_meta($post->ID,'dvd_subtitle',true).'</p>'; ?>
          <?php endif; ?>
        </div>
        <div class="wrapper-hanpu-houhou">
          <p>頒布方法</p>
          
          <?php //ダウンロード販売 dl_linkがある場合のみ出力
          if(get_post_meta($post->ID,'dl_link',true)):
          echo '
          <ul class="hanpu-houhou-list">
            <li>DL販売</li>
            <li>'.
            get_post_meta($post->ID,'dl_price',true).
            '</li>
            <li><a href="'.
            get_post_meta($post->ID,'dl_link',true).
            '" target="_blank">販売ページ</a></li>
          </ul>'; ?>
          <?php endif; ?>
          <?php //DVD直販 dvd_priceがある場合のみ出力
          if(get_post_meta($post->ID,'dvd_price',true)):
          echo '<ul class="hanpu-houhou-list">
            <li>直販</li>
            <li>'.
            get_post_meta($post->ID,'dvd_price',true).
            '</li>
            <li>［品番：'.
            get_post_meta($post->ID,'dvd_ordernumber',true).
            '］</li>
          </ul>'; ?>
          <?php endif; ?>

        </div>
        <div class="wrapper-single-body">
          <div class="single-body-main">
            <p><?php echo mb_substr(strip_tags(get_the_content()), 0, 600); //本文から600字を抽出 ?></p>
            <div class="callout small u-mb-0">
              <dl class="hanpu-caption">
                <dt>法話映像・音声データのご購入</dt>
                <dd>ダウンロード販売のデータは「<a href="https://j-theravada.stores.jp/" target="_blank">心をそだてる初期仏教法話</a>」で頒布しています。最新の金額やご購入方法については上記サイトでご確認ください。</dd>
                <dd>直販DVDについては、協会事務局でご注文を承っております。詳し注文方法については「<a href="<?php echo esc_url( home_url( '/' ) ); ?>info/audiovisual/">法話映像・音声</a>」のページをご覧ください</dd>
              </dl>
            </div>
          </div>
          <div class="single-body-sub">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/world-1a.png">
          </div>
        </div>
      </div>

      <?php
      endwhile;
      endif;
      ?>
    </main>
    <?php get_sidebar(); ?>
  </div>
</div>
<?php get_footer(); ?>