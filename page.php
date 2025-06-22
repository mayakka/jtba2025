<?php
/*
Template Name: 統合されたページテンプレート
*/
get_header(); 

$ancestors = array_reverse(get_post_ancestors( get_the_ID() ));

get_template_part('header-subpage'); 

?>

<div id="body-container" data-sticky-container>
  <div id="body-grid">
    <main id="main-container">
      <!-- ここからbody -->
      <?php
      if (!empty($ancestors)) {
        // 子ページのスラッグを取得
        $slug = get_post_field( 'post_name', get_post() );

        // スラッグのパスを作成
        $dir = '';
        foreach($ancestors as $ancestor) {
            $dir .= get_post_field( 'post_name', $ancestor ) . '/';
        }
        $dir = rtrim($dir, '/'); // 末尾の / を削除

        // ディレクトリ名とスラッグ名を元にテンプレートを選択
        get_template_part( $dir . '/' . $slug);
      } else {
        $tmp = get_post( get_the_ID() );
        $slg = $tmp->post_name;

        get_template_part("$slg/index", "$slg");
        get_template_part('global/slogan');
      }
      ?>
      <!-- ここまでbody-->
    </main>
    <?php get_sidebar(); ?>
  </div>
</div>
<?php get_footer(); ?>
