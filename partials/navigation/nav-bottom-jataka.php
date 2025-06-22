<nav class="nav-single-bottom nav-for-medium show-for-medium">
  <?php previous_post_link('<div class="navpart-single-left">%link</div>'); ?>
  <div class="navpart-single-center"><a href="<?php echo esc_url( home_url( '/dhamma/jataka/' ) ); ?>">INDEX</a></div>
  <?php next_post_link('<div class="navpart-single-right">%link</div>'); ?>
</nav>
<nav class="nav-single-bottom nav-for-small show-for-small-only">
  <a href="<?php echo get_permalink(get_adjacent_post(false,'',true)); ?>" class="navpart-single-left">前ページ</a>
  <a href="<?php echo esc_url( home_url( '/dhamma/jataka/' ) ); ?>" class="navpart-single-center">INDEX</a>
  <a href="<?php echo get_permalink(get_adjacent_post(false,'',false)); ?>" class="navpart-single-right">次ページ</a>
</nav>
