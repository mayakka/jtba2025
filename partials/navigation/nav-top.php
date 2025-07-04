<nav id="top-nav">

  <div class="title-bar" data-responsive-toggle="pc-top-nav" data-hide-for="large">
    <div class="title-bar-left">
      <button class="menu-icon" type="button" data-toggle="offCanvas"></button>
      <span class="title-bar-title" data-toggle="offCanvas">日本テーラワーダ仏教協会</span>
    </div>
    <div class="title-bar-right">
      <a href="<?php echo esc_url(home_url('/')); ?>"><i class="fas fa-home return-home-button"></i></a>
    </div>
  </div>

  <div class="top-bar" id="pc-top-nav">
    <div class="top-bar-left"><span><img src="<?php echo esc_url(get_theme_file_uri('/assets/img/jtba-mark.png')) ?>" alt="法輪"></span><a href="<?php echo esc_url(home_url('/')); ?>">日本テーラワーダ仏教協会</a>
    </div><!-- top-bar-left end-->

    <div class="top-bar-right">
      <ul class="dropdown menu" data-dropdown-menu>

        <li class="has-submenu">
          <a href="<?php echo esc_url(home_url('/world/')); ?>">初期仏教の世界</a>
          <ul class="submenu menu vertical" data-submenu>
            <li><a href="<?php echo esc_url(home_url('/world/introduction/')); ?>">はじめに</a></li>
            <li><a href="<?php echo esc_url(home_url('/world/raihai/')); ?>">礼拝の言葉</a></li>
            <li><a href="<?php echo esc_url(home_url('/world/sutta/')); ?>">パーリ語日常読誦経典</a></li>
            <li><a href="<?php echo esc_url(home_url('/world/metta/')); ?>">慈悲の瞑想</a></li>
            <li><a href="<?php echo esc_url(home_url('/world/vipassana/')); ?>">ヴィパッサナー瞑想</a></li>
            <li><a href="<?php echo esc_url(home_url('/world/keyword/')); ?>">心を育てるキーワード</a></li>
            <li><a href="<?php echo esc_url(home_url('/world/study/')); ?>">初期仏教研究</a></li>
          </ul>
        </li>

        <li class="has-submenu">
          <a href="<?php echo esc_url(home_url('/dhamma/')); ?>">法話と解説</a>
          <ul class="submenu menu vertical" data-submenu>
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

        <!-- <li class="has-submenu">
          <a href="<?php echo esc_url(home_url('/info/')); ?>">お知らせ</a>
          <ul class="submenu menu vertical" data-submenu>
            <li><a href="<?php echo esc_url(home_url('/info/topics/')); ?>">協会からのお知らせ</a></li>
            <li><a href="<?php echo esc_url(home_url('/info/event/')); ?>">瞑想会・その他行事</a></li>
            <li><a href="<?php echo esc_url(home_url('/info/books/')); ?>">心を育てる本屋さん</a></li>
            <li><a href="<?php echo esc_url(home_url('/info/audiovisual/')); ?>">法話映像・音声</a></li>
          </ul>
        </li> -->

        <li class="has-submenu">
          <a href="<?php echo esc_url(home_url('/about/')); ?>">協会について</a>
          <ul class="submenu menu vertical" data-submenu>
            <li><a href="<?php echo esc_url(home_url('/about/activities/')); ?>">協会の活動</a></li>
            <li><a href="<?php echo esc_url(home_url('/about/vihara/')); ?>">精舎とダンマサークル</a></li>
            <li><a href="<?php echo esc_url(home_url('/contact/inquiry/')); ?>">お問い合わせ窓口</a></li>
            <li><a href="<?php echo esc_url(home_url('/contact/bbs/')); ?>">掲示板（BBS）</a></li>
          </ul>
        </li>

        <li class="has-submenu">
          <a href="<?php echo esc_url(home_url('/support/')); ?>">入会・お布施</a>
          <ul class="submenu menu vertical" data-submenu>
            <li><a href="<?php echo esc_url(home_url('/support/join/')); ?>">仏教サポーターになる</a></li>
            <li><a href="<?php echo esc_url(home_url('/support/kouryou/')); ?>">協会 綱領</a></li>
            <li><a href="<?php echo esc_url(home_url('/support/online-registration/')); ?>">オンライン入会</a></li>
            <li><a href="<?php echo esc_url(home_url('/support/bank-transfer-registration/')); ?>">振込用紙による入会</a></li>
            <li><a href="<?php echo esc_url(home_url('/support/membership-update/')); ?>">退会・登録情報の変更</a></li>
            <li><a href="<?php echo esc_url(home_url('/support/dana-online')); ?>">オンラインお布施</a></li>
            <li><a href="<?php echo esc_url(home_url('/support/dana-furikomi')); ?>">振込によるお布施</a></li>
          </ul>
        </li>

      </ul>
    </div><!-- top-bar-right end -->

  </div><!-- top-bar end -->
</nav>
