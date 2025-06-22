<div id="footer-utilities" data-sticky data-stick-to="bottom" data-sticky-on="small" data-btm-anchor="global-footer:top" data-margin-bottom="0">
  <div class="wrapper-input-group">
    <script async src="https://cse.google.com/cse.js?cx=013966945014124882328:1h1npdgjrq4">
    </script>
    <div class="gcse-searchbox-only"></div>
  </div>
  <a href="#top-nav" class="to-top-button" data-smooth-scroll><span class="hide4small">トップへ </span><i class="fas fa-angle-up fa-lg"></i></a>
</div>

<footer id="global-footer">

  <div class="footer-slogan">
    <!-- サイトのキャッチフレーズ -->
    <?php $description = get_bloginfo('description');
    if ($description) : ?>
      <p><?php bloginfo('description'); ?></p>
    <?php else : ?>
      <P>生きとし生けるものが幸せでありますように</P>
    <?php endif; ?>
  </div>

  <div class="grid-container">
    <div class="grid-x footer-grid">
      <div id="footer-sub" class="cell medium-4 large-3">
        <ul class="vertical menu">
          <li><a href="<?php echo esc_url(home_url('/privacy-policy/')); ?>">個人情報の取り扱い</a></li>
          <li><a href="<?php echo esc_url(home_url('/transactions-law/')); ?>">特定商取引法に基づく表記</a></li>
          <li><a href="<?php echo esc_url(home_url('/sitemaps/')); ?>">サイトマップ</a></li>
        </ul>
      </div>
      <div id="footer-main" class="cell medium-8 large-9">
        <dl>
          <dt><small>宗教法人</small> 日本テーラワーダ仏教協会</dt>
          <dd>〒151-0072 <span>東京都渋谷区幡ヶ谷1-23-9 ゴータミー精舎</span></dd>
          <dd>TEL：03-5738-5526　<span>FAX：03-5738-5527</span></dd>
          <dd class="mail">&#105;&#110;&#102;&#111;&#64;&#106;&#45;&#116;&#104;&#101;&#114;&#97;&#118;&#97;&#100;&#97;&#46;com</dd>
        </dl>
      </div>
    </div>
  </div>

  <p class="footer-copyright"><small>画像やテキストの無断使用はご遠慮ください。</small></p>
  <p class="footer-copyright"><small>&copy; 2000-<?php echo date('Y'); ?>
      Japan Theravada Buddhist Association.</small></p>
</footer>

</div><!-- off-canvas-content end -->
</div><!-- off-canvas-wrapper end -->
<?php wp_footer(); ?>
</body>

</html>