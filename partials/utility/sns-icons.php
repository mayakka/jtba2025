<dl class="social-icons">
  <dt>この記事をシェア</dt>
  <dd>
    <a href="http://www.facebook.com/share.php?u=<?php echo get_the_permalink(); ?>" rel="nofollow" target="_blank">
      <img src="<?php echo esc_url( get_theme_file_uri('/assets/img/ico-fb.png') ) ?>" alt="FaceBook">
    </a>
  </dd>
  <dd>
    <div class="twitter">
      <a
         href="https://twitter.com/share"
         class="twitter-share-button"
         data-url="<?php the_permalink(); ?>>"
         data-text="<?php echo get_the_title(); ?>"
         data-hashtags="jtba"
         data-lang="ja">
        <img src="<?php echo esc_url( get_theme_file_uri('/assets/img/ico-tw.png') ) ?>" alt="Twitter">
      </a>
    </div>
</dd>
</dl>
