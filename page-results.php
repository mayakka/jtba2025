<?php get_header(); ?>
<header id="header-subpage">
  <div id="hero-subpage">
    <div id="hero-headline-group">

      <p class="menu-title">Search Results</p>
      <p class="page-title">検索結果</p>

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
<div id="body-container" data-sticky-container>
  <div id="body-grid">
    <main id="main-container">
      <!-- ここからbody -->
      <script>
  (function() {
    var cx = '013966945014124882328:1h1npdgjrq4';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:searchresults-only></gcse:searchresults-only>
      <!-- ここまでbody-->
    </main>
    <?php get_sidebar(); ?>
  </div>
</div>
<?php get_footer(); ?>
