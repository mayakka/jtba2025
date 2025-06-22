<?php if (is_active_sidebar('sidebar_top')) : ?>

  <aside id="top-metta">
    <a href="<?php echo esc_url(home_url('/world/metta-full/')); ?>" class="bnr-mettafull">
      <img src="<?php echo esc_url(get_theme_file_uri('/assets/img/bnr-metta-title-pc.png')) ?>" alt="慈悲の瞑想フルバージョン">
    </a>
  </aside>

  <aside id="top-bnrs">
    <a href="https://www.youtube.com/c/j_theravada" target="_blank">
      <img src="<?php echo esc_url(get_theme_file_uri('/assets/img/bnr-youtube.png')) ?>" alt="日本テーラワーダ仏教協会YouTubeチャンネル">
    </a>
    <a href="https://docs.google.com/spreadsheets/d/1LFj1y25zuDe1WPBluhBucWoc71Fxe0wdsdhYKPR7LPs/edit?usp=sharing" target="_blank">
      <img src="<?php echo esc_url(get_theme_file_uri('/assets/img/bnr_youtube_list.webp')) ?>" alt="YouTube動画リスト">
    </a>
    <a href="https://gotami.j-theravada.com/" target="_blank">
      <img src="<?php echo esc_url(get_theme_file_uri('/assets/img/bnr-gotami270.jpg')) ?>" alt="ゴータミー精舎" class="bnr-sujata">
    </a>
    <a href="https://mayadevi.j-theravada.com/" target="_blank">
      <img src="<?php echo esc_url(get_theme_file_uri('/assets/img/bnr-mayadevi.webp')) ?>" alt="マーヤーデーヴィー精舎" class="bnr-sujata">
    </a>
    <a href="https://blue254797.studio.site/" target="_blank">
      <img src="<?php echo esc_url(get_theme_file_uri('/assets/img/bnr-arana.webp')) ?>" alt="アラナ精舎" class="bnr-honyasan">
    </a>
    <a href="https://atami-vipassana.net/" target="_blank">
      <img src="<?php echo esc_url(get_theme_file_uri('/assets/img/bnr-atami.webp')) ?>" alt="熱海仏法学舎" class="bnr-honyasan">
    </a>
    <a href="https://sujaata.net/" target="_blank">
      <img src="<?php echo esc_url(get_theme_file_uri('/assets/img/bnr-sujaata-270.jpg')) ?>" alt="スジャータ婦人会" class="bnr-sujata">
    </a>
    <a href="https://jtba.theshop.jp/" target="_blank">
      <img src="<?php echo esc_url(get_theme_file_uri('/assets/img/banner_ec_270.jpg')) ?>" alt="心を育てる本屋さん" class="bnr-honyasan">
    </a>
    <a href="https://j-theravada.stores.jp/" target="_blank">
      <img src="<?php echo esc_url(get_theme_file_uri('/assets/img/bnr-stores270.jpg')) ?>" alt="心を育てる初期仏教法話" class="bnr-honyasan">
    </a>
    <a href="https://zentoin-sima.j-theravada.com/" target="_blank">
      <img src="<?php echo esc_url(get_theme_file_uri('/assets/img/bnr-zentoin270.jpg')) ?>" alt="禅東院戒壇院">
    </a>
      <a href="<?php echo esc_url(home_url('/support/dana-online/')); ?>">
        <img src="<?php echo esc_url(get_theme_file_uri('/assets/img/bnr-onlineofuse-270.jpg')) ?>" alt="オンラインお布施" >
      </a>
    <a href="https://www.youtube.com/@honobonosodan_tv/" target="_blank">
      <img src="<?php echo esc_url(get_theme_file_uri('/assets/img/bnr-honobonotv.webp')) ?>" alt="ほのぼの相談テレビ" class="bnr-honyasan">
    </a>
    <a href="https://discover.j-theravada.com/" target="_blank">
      <img src="<?php echo esc_url(get_theme_file_uri('/assets/img/bnr-discover270.jpg')) ?>" alt="初期仏教をもっと知る" class="bnr-honyasan">
    </a>

    <div class="sidebar-links">
      <h2>関連リンク集</h2>
      <ul>
        <li><a href="https://www.instagram.com/mayadevi_vihara/" target="_blank">マーヤーデーヴィー精舎インスタグラム</a></li>
        <li><a href="https://twitter.com/oteraban" target="_blank">Twitter寺猫部</a></li>
      </ul>
    </div>
    <?php if (is_active_sidebar('sidebar_top')) : ?>
      <?php dynamic_sidebar('sidebar_top'); ?>
    <?php endif; ?>

  </aside>

  <aside id="top-hide">
  <script async src="https://cse.google.com/cse.js?cx=013966945014124882328:1h1npdgjrq4">
    </script>
    <div class="gcse-searchbox-only"></div>
    <!-- <div class="wrapper-iframe">
      <a class="twitter-timeline" data-height="720" href="https://twitter.com/jtba_info">Tweets by jtba_info</a>
      <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div> -->
  </aside>

  <dl id="top-snslink" class="sns-icons">
    <dt><i class="fas fa-asterisk fa-spin"></i>協会のSNS</dt>
    <dd><a href="https://twitter.com/jtba_info" target="_blank" rel="noopener noreferrer" class="twitter-icon"><i class="fab fa-twitter-square"></i></a></dd>
    <dd><a href="https://www.facebook.com/jtheravada/" target="_blank" rel="noopener noreferrer" class="facebook-icon"><i class="fab fa-facebook-square"></i></a></dd>
    <dd><a href="https://www.instagram.com/mayadevi_vihara/" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a></dd>
  </dl>

<?php endif; ?>
