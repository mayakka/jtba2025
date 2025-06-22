<header id="header-subpage">
  <div id="hero-subpage">
    <div id="hero-headline-group">
      <?php
      $ancestors = array_reverse(get_post_ancestors(get_the_ID()));
      $num_ancestors = count($ancestors);

      $current_permalink = get_post_field( 'post_name', get_post() ); // 現在のページのパーマリンクを取得

      // 特定のパーマリンクを持つページに対する例外処理
      if ($current_permalink == 'transactions-law') :
        echo '<p class="menu-title">Transactions Law</p>';
        echo '<p class="page-title">' . get_the_title() . '</p>';
      elseif ($current_permalink == 'privacy-policy') :
        echo '<p class="menu-title">Privacy Policy</p>';
        echo '<p class="page-title">' . get_the_title() . '</p>';
      elseif ($current_permalink == 'sitemaps') :
        echo '<p class="menu-title">Site Map</p>';
        echo '<p class="page-title">' . get_the_title() . '</p>';
      elseif ($num_ancestors > 1) : // 孫ページの場合
        echo '<p class="menu-title">' . get_the_title($ancestors[0]) . '</p>'; // 親の親のページのタイトルを表示
        echo '<p class="page-title">' . get_the_title($ancestors[1]) . '</p>'; // 親ページのタイトルを表示
      elseif ($num_ancestors == 1) : // 子ページの場合
        echo '<p class="menu-title">' . get_the_title($ancestors[0]) . '</p>'; // 親ページのタイトルを表示
        echo '<p class="page-title">' . get_the_title() . '</p>';
      else :
        echo '<p class="menu-title">' . get_the_title() . '</p>';
        echo '<p class="page-title">INDEX</p>';
      endif;
      ?>

    </div>
  </div>
  <div id="header-breadcrumbs">
    <nav aria-label="You are here:" role="navigation">
      <ul class="breadcrumbs">
        <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
        <?php
        if ($num_ancestors > 0) : // 親ページが存在する場合
          foreach ($ancestors as $ancestor) :
            echo '<li><a href="' . get_page_link($ancestor) . '">' . get_the_title($ancestor) . '</a></li>'; // 親ページのリンクを表示
          endforeach;
        endif;
        ?>
        <li><span class="show-for-sr">Current:</span> <?php echo get_the_title(); ?></li>
      </ul>
    </nav>
  </div>
</header>
