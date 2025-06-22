<?php
if(!is_home()):
if(is_page('5012')):
$userArray = array(
"open" => "sesami",
"2505" => "2569",
"2505" => "25691",
"2505" => "2569l",
"2506" => "drop",
"overseas"=>"unlimited"
);
basic_auth($userArray);
endif;
endif;
?>
<header id="header-subpage">
  <div id="hero-subpage">
    <div id="hero-headline-group">

      <p class="menu-title">会員向けページ</p>
      <p class="page-title">パティパダーPDF</p>

    </div>
  </div>
  <div id="header-breadcrumbs">
    <nav aria-label="You are here:" role="navigation">
      <ul class="breadcrumbs">
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
        <li><span class="show-for-sr">Current:</span><?php echo get_the_title(); ?></li>
      </ul>
    </nav>
  </div>
</header>
