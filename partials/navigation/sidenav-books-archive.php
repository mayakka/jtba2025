<div id="side-container-archive">
  <nav id="sidenavi">
    <dl class="menu-archive">
      <dt>カテゴリー選択</dt>
      <dd><a href="<?php echo esc_url( home_url( '/info/archive-books/' ) ); ?>">すべてのカテゴリー</a></dd>
      <?php
      $terms = get_terms('book_category');
      foreach ( $terms as $term ) {
        echo  '<dd><a href="'.get_term_link($term).'">'.esc_html($term->name).'</a></dd>'; // タームタイトル
      }
      ?>
    </dl>
  </nav>
</div>
