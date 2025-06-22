

<?php
/*
Template Name: 初期仏教研究（下層）
*/
get_header(); ?>

<?php get_template_part('header-subpage-study'); ?>
<div id="body-container" data-sticky-container>
  <div id="body-grid">
    <main id="main-container">
      <!-- ここからbody -->
      <?php

      if(is_page( 'world/study/pali-sutta1-1' )):
      get_template_part( 'world/study/pali-sutta1-1');

      elseif(is_page( 'world/study/pali-sutta1-2' )):
      get_template_part( 'world/study/pali-sutta1-2');

      elseif(is_page( 'world/study/pali-sutta1-3' )):
      get_template_part( 'world/study/pali-sutta1-3');

      elseif(is_page( 'world/study/pali-sutta1-4' )):
      get_template_part( 'world/study/pali-sutta1-4');

      elseif(is_page( 'world/study/pali-sutta2-1' )):
      get_template_part( 'world/study/pali-sutta2-1');

      elseif(is_page( 'world/study/pali-sutta2-2' )):
      get_template_part( 'world/study/pali-sutta2-2');

      elseif(is_page( 'world/study/pali-sutta2-3' )):
      get_template_part( 'world/study/pali-sutta2-3');

      elseif(is_page( 'world/study/pali-sutta2-4' )):
      get_template_part( 'world/study/pali-sutta2-4');

      elseif(is_page( 'world/study/pali-sutta3-1' )):
      get_template_part( 'world/study/pali-sutta3-1');

      elseif(is_page( 'world/study/pali-sutta3-2' )):
      get_template_part( 'world/study/pali-sutta3-2');

      elseif(is_page( 'world/study/pali-sutta3-3' )):
      get_template_part( 'world/study/pali-sutta3-3');

      endif; ?>
      <!-- ここまでbody-->
    </main>
    <?php get_sidebar(); ?>
  </div>
</div>

<?php get_footer(); ?>
