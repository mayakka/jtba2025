<?php
global $sect_title;
$sect_title = array(
  '折々の法話', // sect-1-title
);
?>

<section id="sect-0" class="u-clearfix u-mb-40">
  <h1 class="leadtext">折々に説かれた初期仏教の法話集</h1>
  <p><img src="<?php echo esc_url(get_theme_file_uri('/assets/img/img-oriori.png')) ?>" class="img-oriori">このページでは、初期仏教に関する折々の法話記事をご紹介しています。</p>
</section>
<section id="sect-1" class="u-mt-20">
    <h2 class="headline-oriori">パティパダー不定期連載</h2>
    <hr>
    <dl class="oriori-list">
      <dt>スリランカの少女が父に語るブッダの教え</dt>
      <dd class="ven-name">こどもの法話</dd>
      <dd class="houwa-list">
        <ol>
          <?php
          $args =  array(
            'orderby'          => 'id',
            'order'            => 'ASC', //DESC降順　ASC昇順
            'post_type'        => 'oriori', // 投稿タイプ名
            'taxonomy'         => 'ven_name',
            'term'             => 'sachi',
            'posts_per_page'   => 20, //表示件数
            'post_status'      => 'publish', //公開状態
            'ignore_sticky_posts' => 1, //取得した記事の何番目から表示するか
          );
          $wp_query = new WP_Query($args);
          while ($wp_query->have_posts()) : $wp_query->the_post();
          ?>
            <!-- loop start -->
            <li><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></li>
            <!-- loop end -->
          <?php endwhile;
          wp_reset_postdata(); ?>
        </ol>
      </dd>
    </dl>
  </section>
<section id="sect-2" class="u-mt-60">
  <h2 class="headline-oriori">折々の法話</h2>
  <hr>

  <div class="wrapper-oriori-list">
    <dl class="oriori-list">
      <dt>ウ・レワタ大僧正</dt>
      <dd class="ven-name">Ven.Bhaddanta Revata (Aggamaha panditta)</dd>
      <dd class="houwa-list">
        <ol>
          <?php
          $args =  array(
            'orderby'          => 'id',
            'order'            => 'ASC', //DESC降順　ASC昇順
            'post_type'        => 'oriori', // 投稿タイプ名
            'taxonomy'         => 'ven_name',
            'term'             => 'ven_revata',
            'posts_per_page'   => 20, //表示件数
            'post_status'      => 'publish', //公開状態
            'ignore_sticky_posts' => 1, //取得した記事の何番目から表示するか
          );
          $wp_query = new WP_Query($args);
          while ($wp_query->have_posts()) : $wp_query->the_post();
          ?>
            <!-- loop start -->
            <li><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></li>
            <!-- loop end -->
          <?php endwhile;
          wp_reset_postdata(); ?>
        </ol>
      </dd>
    </dl>

    <dl class="oriori-list">
      <dt>ウィセッタ長老</dt>
      <dd class="ven-name">Ven. Vicittasara sayadaw</dd>
      <dd class="houwa-list">
        <ol>
          <?php
          $args =  array(
            'orderby'          => 'id',
            'order'            => 'ASC', //DESC降順　ASC昇順
            'post_type'        => 'oriori', // 投稿タイプ名
            'taxonomy'         => 'ven_name',
            'term'             => 'ven_sayadaw',
            'posts_per_page'   => 20, //表示件数
            'post_status'      => 'publish', //公開状態
            'ignore_sticky_posts' => 1, //取得した記事の何番目から表示するか
          );
          $wp_query = new WP_Query($args);
          while ($wp_query->have_posts()) : $wp_query->the_post();
          ?>
            <!-- loop start -->
            <li><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></li>
            <!-- loop end -->
          <?php endwhile;
          wp_reset_postdata(); ?>
        </ol>
      </dd>
    </dl>

    <dl class="oriori-list">
      <dt>K. スリダンマーナンダ長老</dt>
      <dd class="ven-name">Ven. K. Suri Dhammananda</dd>
      <dd class="houwa-list">
        <ol>
          <?php
          $args =  array(
            'orderby'          => 'id',
            'order'            => 'ASC', //DESC降順　ASC昇順
            'post_type'        => 'oriori', // 投稿タイプ名
            'taxonomy'         => 'ven_name',
            'term'             => 'ven_dhammananda',
            'posts_per_page'   => 20, //表示件数
            'post_status'      => 'publish', //公開状態
            'ignore_sticky_posts' => 1, //取得した記事の何番目から表示するか
          );
          $wp_query = new WP_Query($args);
          while ($wp_query->have_posts()) : $wp_query->the_post();
          ?>
            <!-- loop start -->
            <li><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></li>
            <!-- loop end -->
          <?php endwhile;
          wp_reset_postdata(); ?>
        </ol>
      </dd>
    </dl>

    <dl class="oriori-list">
      <dt>スマナサーラ長老</dt>
      <dd class="ven-name">Ven. Alubomulle Sumanasāra</dd>
      <dd class="houwa-list">
        <ol>
          <?php
          $args =  array(
            'orderby'          => 'id',
            'order'            => 'ASC', //DESC降順　ASC昇順
            'post_type'        => 'oriori', // 投稿タイプ名
            'taxonomy'         => 'ven_name',
            'term'             => 'ven_sumanasara',
            'posts_per_page'   => 20, //表示件数
            //            'orderby'          => 'meta_value', //ソートの基準（meta_keyの値）
            //            'meta_key'         => 'pub_date', //並べ替えに使うカスタムフィールド
            'post_status'      => 'publish', //公開状態
            'ignore_sticky_posts' => 1, //取得した記事の何番目から表示するか
          );
          $wp_query = new WP_Query($args);
          while ($wp_query->have_posts()) : $wp_query->the_post();
          ?>
            <!-- loop start -->
            <li><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></li>
            <!-- loop end -->
          <?php endwhile;
          wp_reset_postdata(); ?>
        </ol>
      </dd>
    </dl>

    <dl class="oriori-list">
      <dt>V.F.グナラトネ師</dt>
      <dd class="ven-name">Ven. F. Gunaratna</dd>
      <dd class="houwa-list">
        <ol>
          <?php
          $args =  array(
            'orderby'          => 'id',
            'order'            => 'ASC', //DESC降順　ASC昇順
            'post_type'        => 'oriori', // 投稿タイプ名
            'taxonomy'         => 'ven_name',
            'term'             => 'ven_gnaratna',
            'posts_per_page'   => 20, //表示件数
            'post_status'      => 'publish', //公開状態
            'ignore_sticky_posts' => 1, //取得した記事の何番目から表示するか
          );
          $wp_query = new WP_Query($args);
          while ($wp_query->have_posts()) : $wp_query->the_post();
          ?>
            <!-- loop start -->
            <li><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></li>
            <!-- loop end -->
          <?php endwhile;
          wp_reset_postdata(); ?>
        </ol>
      </dd>
    </dl>

    <dl class="oriori-list">
      <dt>キラサ師</dt>
      <dd class="ven-name">Ven. Ashin Kelāsa</dd>
      <dd class="houwa-list">
        <ol>
          <?php
          $args =  array(
            'orderby'          => 'id',
            'order'            => 'ASC', //DESC降順　ASC昇順
            'post_type'        => 'oriori', // 投稿タイプ名
            'taxonomy'         => 'ven_name',
            'term'             => 'ven_kelasa',
            'posts_per_page'   => 20, //表示件数
            'post_status'      => 'publish', //公開状態
            'ignore_sticky_posts' => 1, //取得した記事の何番目から表示するか
          );
          $wp_query = new WP_Query($args);
          while ($wp_query->have_posts()) : $wp_query->the_post();
          ?>
            <!-- loop start -->
            <li><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></li>
            <!-- loop end -->
          <?php endwhile;
          wp_reset_postdata(); ?>
        </ol>
      </dd>
    </dl>
  </div>

</section>
