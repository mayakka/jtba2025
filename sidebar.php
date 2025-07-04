<div id="side-container">

  <nav id="sidenavi" class="sticky" data-sticky data-top-anchor="body-container:top" data-btm-anchor="body-container:bottom">

    <!-- サイドカラムの目次 -->
    <!-- 各ページの$sect_titleが空でない場合のみ表示 -->
    <?php global $sect_title;
    if (!empty($sect_title[0])) {
      get_template_part('partials/navigation/mokuji-sidebar');
    }
    ?>

    <!-- フォールディングメニュー -->
    <div class="sidenav-box">
      <p class="sidenav-title">メインメニュー</p>
      <ul class="vertical menu accordion-menu menu-sitenavi" data-accordion-menu data-multi-open="false" data-submenu-toggle="true">

        <li><a href="<?php echo esc_url(home_url('/')); ?>">HOME</a></li>

        <li><a href="<?php echo esc_url(home_url('/world/')); ?>">初期仏教の世界</a>
          <ul class="menu vertical nested
            <?php
            $str = $_SERVER["REQUEST_URI"];
            if (false !== strpos($str, '/world/')) {
              echo 'is-active';
            }
            ?>
          ">
            <li><a href="<?php echo esc_url(home_url('/world/introduction/')); ?>">はじめに</a></li>
            <li><a href="<?php echo esc_url(home_url('/world/raihai/')); ?>">礼拝の言葉</a></li>
            <li><a href="<?php echo esc_url(home_url('/world/sutta/')); ?>">パーリ語日常読誦経典</a></li>
            <li><a href="<?php echo esc_url(home_url('/world/metta/')); ?>">慈悲の瞑想</a></li>
            <li><a href="<?php echo esc_url(home_url('/world/vipassana/')); ?>">ヴィパッサナー瞑想</a></li>
            <li><a href="<?php echo esc_url(home_url('/world/keyword/')); ?>">心を育てるキーワード</a></li>
            <li><a href="<?php echo esc_url(home_url('/world/study/')); ?>">初期仏教研究</a></li>
          </ul>
        </li>

        <li><a href="<?php echo esc_url(home_url('/dhamma/')); ?>">法話と解説</a>
          <ul class="menu vertical nested
            <?php
            $str2 = $_SERVER["REQUEST_URI"];
            if (false !== strpos($str2, '/dhamma/')) {
              echo 'is-active';
            }
            ?>
          ">
            <li><a href="<?php echo esc_url(home_url('/dhamma/sumanasara-thero/')); ?>">Ａ・スマナサーラ長老</a></li>
            <li><a href="<?php echo esc_url(home_url('/dhamma/kantou/')); ?>">パティパダー巻頭法話</a></li>
            <li><a href="<?php echo esc_url(home_url('/dhamma/tobira/')); ?>">智慧の扉</a></li>
            <li><a href="<?php echo esc_url(home_url('/dhamma/qa/')); ?>">あなたとの対話（Q&A）</a></li>
            <li><a href="<?php echo esc_url(home_url('/dhamma/kougi/')); ?>">根本仏教講義</a></li>
            <li><a href="<?php echo esc_url(home_url('/dhamma/sehon/')); ?>">施本文庫</a></li>
            <li><a href="<?php echo esc_url(home_url('/dhamma/jataka/')); ?>">ジャータカ物語</a></li>
            <li><a href="<?php echo esc_url(home_url('/dhamma/oriori/')); ?>">折々の法話</a></li>
          </ul>
        </li>

        <li><a href="<?php echo esc_url(home_url('/about/')); ?>">協会について</a>
          <ul class="menu vertical nested
            <?php
            $str = $_SERVER["REQUEST_URI"];
            if (false !== strpos($str, '/about/')) {
              echo 'is-active';
            }
            if (false !== strpos($str, '/contact/')) {
              echo 'is-active';
            }
            ?>
          ">
            <li><a href="<?php echo esc_url(home_url('/about/activities/')); ?>">協会の活動</a></li>
            <li><a href="<?php echo esc_url(home_url('/about/vihara/')); ?>">精舎とダンマサークル</a></li>
            <li><a href="<?php echo esc_url(home_url('/contact/inquiry/')); ?>">お問い合わせ窓口</a></li>
            <li><a href="<?php echo esc_url(home_url('/contact/bbs/')); ?>">掲示板（BBS）</a></li>
          </ul>
        </li>

        <li><a href="<?php echo esc_url(home_url('/support/')); ?>">入会・お布施</a>
          <ul class="menu vertical nested
            <?php
            $str = $_SERVER["REQUEST_URI"];
            if (false !== strpos($str, '/support/')) {
              echo 'is-active';
            }
            ?>
          ">
            <li><a href="<?php echo esc_url(home_url('/support/join/')); ?>">仏教サポーターになる</a></li>
            <li><a href="<?php echo esc_url(home_url('/support/kouryou/')); ?>">日本テーラワーダ仏教協会 綱領</a></li>
            <li><a href="<?php echo esc_url(home_url('/support/online-registration/')); ?>">オンライン入会</a></li>
            <li><a href="<?php echo esc_url(home_url('/support/bank-transfer-registration/')); ?>">振込用紙による入会</a></li>
            <li><a href="<?php echo esc_url(home_url('/support/membership-update/')); ?>">退会・登録情報の変更</a></li>
            <li><a href="<?php echo esc_url(home_url('/support/dana-online')); ?>">オンラインお布施</a></li>
            <li><a href="<?php echo esc_url(home_url('/support/dana-furikomi')); ?>">振込によるお布施</a></li>
          </ul>
        </li>

      </ul>
    </div>

    <div class="bnr-onlineofuse-sidebar">
      <a href="<?php echo esc_url(home_url('/support/dana-online/')); ?>">
        <img src="<?php echo esc_url(get_theme_file_uri('/assets/img/bnr-onlineofuse-270.jpg')) ?>" alt="オンラインお布施" >
      </a>
    </div>

    <div class="return-top-btn" data-smooth-scroll>
      <a href="#top-nav">ページトップ</a>
    </div>

    <script async src="https://cse.google.com/cse.js?cx=013966945014124882328:1h1npdgjrq4">
    </script>
    <div class="gcse-searchbox-only"></div>

  </nav>
</div>
