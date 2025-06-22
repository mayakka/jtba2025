<nav class="nav-single-bottom">
  <a href="<?php echo get_permalink(get_adjacent_post(false,'',true)); ?>" class="navpart-single-left">前の記事</a>
  <a href="<?php echo esc_url( home_url( '/info/alltopics/' ) ); ?>" class="navpart-single-center">INDEX</a>
  <a href="<?php echo get_permalink(get_adjacent_post(false,'',false)); ?>" class="navpart-single-right">次の記事</a>
</nav>
