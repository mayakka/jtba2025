<?php

function jtba_enqueue()
{
  // 基本スタイルの読み込み
  wp_enqueue_style('base-style', get_stylesheet_uri(), array(), '1.0.0');
  wp_enqueue_style('jtba-style', get_theme_file_uri('/assets/css/legacy-foundation.css'), array('base-style'), '1.1.1');
  wp_enqueue_style('add-style', get_theme_file_uri('/assets/css/add-style.css'), array('jtba-style'), '1.0.1');
  wp_enqueue_script('jtba-js', get_theme_file_uri('/assets/js/app.js'), array('jquery'), '1.0.0', true);
  wp_enqueue_script('add-script', get_theme_file_uri('/assets/js/add-script.js'), array('jquery'), '1.0.0', true);

  // ページ別スタイル（既存ページ）
  if (is_page(array('dana-online', 'dana01'))) {
    wp_enqueue_style('ofuse-style', get_theme_file_uri('/assets/css/single/single-ofuse.css'), array(), '1.0.1');
  }
  if (is_page(array('online-registration', 'kp'))) {
    wp_enqueue_style('kp-style', get_theme_file_uri('/assets/css/single/single-kp.css'), array(), '1.1.0');
  }
  if (is_page(array('membership-update', 'bank-transfer-registration'))) {
    wp_enqueue_style('membership-update', get_theme_file_uri('/assets/css/single/single-membership-update.css'), array(), '1.0.0');
  }
  if (is_singular('agm')) {
    wp_enqueue_style(
      'single-agm-style',
      get_template_directory_uri() . '/assets/css/single/single-agm.css',
      array(),
      filemtime(get_template_directory() . '/assets/css/single/single-agm.css')
    );
  }
}
add_action('wp_enqueue_scripts', 'jtba_enqueue');

// ✅ サブページ用スタイル（スラッグに応じて自動）
function jtba_enqueue_subpage_styles()
{
  if (is_page(array('kouryou', 'privacy-policy', 'transactions-law'))) {
    wp_enqueue_style(
      'subpage-style',
      get_theme_file_uri('/assets/css/pages/page-subpage.css'),
      array(),
      '1.0.0'
    );
  }
}
add_action('wp_enqueue_scripts', 'jtba_enqueue_subpage_styles');

// エディター用スタイルシートの読み込み
add_theme_support('editor-styles');
add_editor_style('style-editor.css');
function custom_editor_settings($initArray)
{
  $initArray['body_class'] = 'editor-area';
  return $initArray;
}


// 画像サイズ

/* アイキャッチ画像を有効化 */
add_theme_support('post-thumbnails');

/*イメージサイズ info-thumb を追加（タテ160px） */
add_image_size('info-thumb', 0, 160);

/*イメージサイズ books-thumb を追加（タテ210px） */
add_image_size('books-thumb', 0, 210);

/*イメージサイズ bunko-thumb を追加（タテ140px） */
add_image_size('bunko-thumb', 0, 140);


// 抜粋

/*抜粋にpタグを付けない*/
remove_filter('the_excerpt', 'wpautop');

/*抜粋の文字数を変更*/
function custom_excerpt_length($length)
{
  return 85;
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);

/*固定ページにも抜粋を表示*/
add_post_type_support('page', 'excerpt');


// ウィジェットエリア

function jtba_widgets_init()
{
  register_sidebar(array(
    'name'          => 'トップ用サイドバー',
    'id'            => 'sidebar_top',
    'description'   => 'トップページのサイドバーに表示されるウィジェット',
    'before_widget' => '<section id="%1$s" class="widget %2$s u-mb-30">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>'
  ));
}
add_action('widgets_init', 'jtba_widgets_init');


// カスタム投稿タイプとタクソノミー
// 根本仏教講義(kougi)、巻頭法話（kantou）、Q&A（qa）、折々の法話（oriori）、智慧の扉（tobira）、施本文庫（sehon）、ジャータカ物語（jataka）の各投稿タイプについては、プラグインCPT_UIでカスタラムリライトスラッグ（/dhamma/）付きで設定。

function create_jtba_post_types()
{

  register_post_type(
    'kougi', //投稿タイプ名
    array(
      'label' => '根本仏教講義',
      'labels' => array(
        'name' => '根本仏教講義',
        'singular_name' => '根本仏教講義',
      ),
      'public' => true,  // 管理画面に表示しサイト上にも表示する
      'description' => '根本仏教講義投稿用',  //説明文
      'hierarchical' => true,  //コンテンツを階層構造にするかどうか
      'has_archive' => false,  //trueで一覧ページを作成
      'rewrite' => array(
        'slug' => 'dhamma/kougi', //リライトルールのスラッグ
        'with_front' => false, //フロントページのスラッグを含めるかどうか
      ),
      'show_in_rest' => false,  //Gutenbergを有効化
      'supports' => array(  //記事編集画面に表示する項目を配列で指定
        'title',  //タイトル
        'editor'  //本文の編集機能
      ),
      'menu_position' => 7 //メニューの表示順位
    )
  );

  register_post_type(
    'kantou', //投稿タイプ名
    array(
      'label' => '巻頭法話',
      'labels' => array(
        'name' => '巻頭法話',
        'singular_name' => '巻頭法話',
      ),
      'public' => true,  // 管理画面に表示しサイト上にも表示する
      'description' => '巻頭法話投稿用',  //説明文
      'hierarchical' => false,  //コンテンツを階層構造にするかどうか
      'has_archive' => false,  //trueで一覧ページを作成
      'rewrite' => array(
        'slug' => 'dhamma/kantouhouwa', //リライトルールのスラッグ
        'with_front' => false, //フロントページのスラッグを含めるかどうか
      ),
      'show_in_rest' => false,  //Gutenbergを有効化
      'supports' => array(  //記事編集画面に表示する項目を配列で指定
        'title',  //タイトル
        'editor',  //本文の編集機能
        'excerpt'  //抜粋
      ),
      'menu_position' => 8 //メニューの表示順位
    )
  );

  register_post_type(
    'qa', //投稿タイプ名
    array(
      'label' => 'Q&A',
      'labels' => array(
        'name' => 'Q&A',
        'singular_name' => 'Q&A',
      ),
      'public' => true,  // 管理画面に表示しサイト上にも表示する
      'description' => 'Q&A投稿用',  //説明文
      'hierarchical' => false,  //コンテンツを階層構造にするかどうか
      'has_archive' => true,  //trueで一覧ページを作成
      'rewrite' => array(
        'slug' => 'dhamma/q&a', //リライトルールのスラッグ
        'with_front' => false, //フロントページのスラッグを含めるかどうか
      ),
      'show_in_rest' => true,  //Gutenbergを有効化
      'supports' => array(  //記事編集画面に表示する項目を配列で指定
        'title',  //タイトル
        'editor',  //本文の編集機能
        'excerpt'  //抜粋
      ),
      'taxonomies' => array('qa_category'),  //使用するタクソノミー
      'menu_position' => 9  //メニューの表示順位
    )
  );

  register_post_type(
    'oriori', //投稿タイプ名
    array(
      'label' => '折々の法話',
      'labels' => array(
        'name' => '折々の法話',
        'singular_name' => '折々の法話',
      ),
      'public' => true,  // 管理画面に表示しサイト上にも表示する
      'description' => '折々の法話投稿用',  //説明文
      'hierarchical' => false,  //コンテンツを階層構造にするかどうか
      'has_archive' => false,  //trueで一覧ページを作成
      'rewrite' => array(
        'slug' => 'dhamma/oriori', //リライトルールのスラッグ
        'with_front' => false, //フロントページのスラッグを含めるかどうか
      ),
      'show_in_rest' => true,  //Gutenbergを有効化
      'supports' => array(  //記事編集画面に表示する項目を配列で指定
        'title',  //タイトル
        'editor',  //本文の編集機能
        'excerpt',  //抜粋
        'custom-fields'  //カスタムフィールド
      ),
      'menu_position' => 10  //メニューの表示順位
    )
  );

  register_post_type(
    'tobira', //投稿タイプ名
    array(
      'label' => '智慧の扉',
      'labels' => array(
        'name' => '智慧の扉',
        'singular_name' => '智慧の扉',
      ),
      'public' => true,  // 管理画面に表示しサイト上にも表示する
      'description' => '智慧の扉投稿用',  //説明文
      'hierarchical' => false,  //コンテンツを階層構造にするかどうか
      'has_archive' => true,  //trueで一覧ページを作成
      'rewrite' => array(
        'slug' => 'dhamma/chienotobira', //リライトルールのスラッグ
        'with_front' => false, //フロントページのスラッグを含めるかどうか
      ),
      'show_in_rest' => true,  //Gutenbergを有効化
      'supports' => array(  //記事編集画面に表示する項目を配列で指定
        'title',  //タイトル
        'editor',  //本文の編集機能
        'excerpt',  //抜粋
        'custom-fields'  //カスタムフィールド
      ),
      'menu_position' => 10  //メニューの表示順位
    )
  );

  register_post_type(
    'sehon', //投稿タイプ名
    array(
      'label' => '施本文庫',
      'labels' => array(
        'name' => '施本文庫',
        'singular_name' => '施本文庫',
      ),
      'public' => true,  // 管理画面に表示しサイト上にも表示する
      'description' => '施本文庫投稿用',  //説明文
      'hierarchical' => false,  //コンテンツを階層構造にするかどうか
      'has_archive' => true,  //trueで一覧ページを作成
      'rewrite' => array(
        'slug' => 'dhamma/sehonbunko', //リライトルールのスラッグ
        'with_front' => false, //フロントページのスラッグを含めるかどうか
      ),
      'show_in_rest' => true,  //Gutenbergを有効化
      'supports' => array(  //記事編集画面に表示する項目を配列で指定
        'title',  //タイトル
        'editor',  //本文の編集機能
        'thumbnail', //サムネイル
        'excerpt',  //抜粋
        'custom-fields'  //カスタムフィールド
      ),
      'menu_position' => 11  //メニューの表示順位
    )
  );

  register_post_type(
    'jataka', //投稿タイプ名
    array(
      'label' => 'ジャータカ物語',
      'labels' => array(
        'name' => 'ジャータカ物語',
        'singular_name' => 'ジャータカ物語',
      ),
      'public' => true,  // 管理画面に表示しサイト上にも表示する
      'description' => 'ジャータカ物語投稿用',  //説明文
      'hierarchical' => false,  //コンテンツを階層構造にするかどうか
      'has_archive' => true,  //trueで一覧ページを作成
      'show_in_rest' => false,  //Gutenbergを有効化
      'supports' => array(  //記事編集画面に表示する項目を配列で指定
        'title',  //タイトル
        'editor',  //本文の編集機能
        'excerpt'  //抜粋
      ),
      'menu_position' => 12  //メニューの表示順位
    )
  );

  register_post_type(
    'books', //投稿タイプ名
    array(
      'label' => '本屋さん',
      'labels' => array(
        'name' => '本屋さん',
        'singular_name' => '本屋さん',
      ),
      'public' => true,  // 管理画面に表示しサイト上にも表示する
      'description' => '本屋さん投稿用',  //説明文
      'hierarchical' => false,  //コンテンツを階層構造にするかどうか
      'has_archive' => true,  //trueで一覧ページを作成
      'show_in_rest' => true,  //Gutenbergを有効化
      'supports' => array(  //記事編集画面に表示する項目を配列で指定
        'title',  //タイトル
        'editor',  //本文の編集機能
        'thumbnail' //サムネイル
      ),
      'taxonomies' => array('book_category'),  //使用するタクソノミー
      'menu_position' => 13  //メニューの表示順位
    )
  );

  register_post_type(
    'disc', //投稿タイプ名
    array(
      'label' => '映像・音声',
      'labels' => array(
        'name' => '映像・音声',
        'singular_name' => '映像・音声',
      ),
      'public' => true,  // 管理画面に表示しサイト上にも表示する
      'description' => '映像・音声投稿用',  //説明文
      'hierarchical' => false,  //コンテンツを階層構造にするかどうか
      'has_archive' => true,  //trueで一覧ページを作成
      'show_in_rest' => false,  //Gutenbergを有効化
      'supports' => array(  //記事編集画面に表示する項目を配列で指定
        'title',  //タイトル
        'editor'  //本文の編集機能
      ),
      'taxonomies' => array('disc_media'),  //使用するタクソノミー
      'menu_position' => 14,  //メニューの表示順位
    )
  );

  register_post_type(
    'pdf_bunko', //投稿タイプ名
    array(
      'label' => 'PDF文庫',
      'labels' => array(
        'name' => 'PDF文庫',
        'singular_name' => 'PDF文庫',
      ),
      'public' => true,  // 管理画面に表示しサイト上にも表示する
      'description' => 'PDF文庫投稿用',  //説明文
      'hierarchical' => false,  //コンテンツを階層構造にするかどうか
      'has_archive' => false,  //trueで一覧ページを作成
      'show_in_rest' => false,  //Gutenbergを有効化
      'supports' => array(  //記事編集画面に表示する項目を配列で指定
        'title',  //タイトル
        'editor',  //本文の編集機能
        'excerpt',  //抜粋
        'thumbnail' //サムネイル
      ),
      'menu_position' => 15  //メニューの表示順位
    )
  );

  register_post_type(
    'dhamma_circle', //投稿タイプ名
    array(
      'label' => 'ダンマサークル',
      'labels' => array(
        'name' => 'ダンマサークル',
        'singular_name' => 'ダンマサークル',
      ),
      'public' => true,  // 管理画面に表示しサイト上にも表示する
      'description' => 'ダンマサークル投稿用',  //説明文
      'hierarchical' => false,  //コンテンツを階層構造にするかどうか
      'has_archive' => false,  //trueで一覧ページを作成
      'show_in_rest' => false,  //Gutenbergを有効化
      'supports' => array(  //記事編集画面に表示する項目を配列で指定
        'title'  //タイトル
      ),
      'menu_position' => 21  //メニューの表示順位
    )
  );

  register_post_type(
    'relational_temple', //投稿タイプ名
    array(
      'label' => '協力寺院',
      'labels' => array(
        'name' => '協力寺院',
        'singular_name' => '協力寺院',
      ),
      'public' => true,  // 管理画面に表示しサイト上にも表示する
      'description' => '協力寺院投稿用',  //説明文
      'hierarchical' => false,  //コンテンツを階層構造にするかどうか
      'has_archive' => false,  //trueで一覧ページを作成
      'show_in_rest' => false,  //Gutenbergを有効化
      'supports' => array(  //記事編集画面に表示する項目を配列で指定
        'title',  //タイトル
        'editor'  //本文の編集機能
      ),
      'menu_position' => 22  //メニューの表示順位
    )
  );

  register_post_type(
    'relational_links', //投稿タイプ名
    array(
      'label' => '関連リンク集',
      'labels' => array(
        'name' => '関連リンク集',
        'singular_name' => '関連リンク集',
      ),
      'public' => true,  // 管理画面に表示しサイト上にも表示する
      'description' => '関連リンク投稿用',  //説明文
      'hierarchical' => false,  //コンテンツを階層構造にするかどうか
      'has_archive' => false,  //trueで一覧ページを作成
      'show_in_rest' => false,  //Gutenbergを有効化
      'supports' => array(  //記事編集画面に表示する項目を配列で指定
        'title',  //タイトル
        'editor'  //本文の編集機能
      ),
      'menu_position' => 23  //メニューの表示順位
    )
  );

  register_post_type(
    'agm',
    array(
      'label' => '年次総会資料',
      'labels' => array(
        'name' => '年次総会資料',
        'singular_name' => '年次総会資料',
      ),
      'public' => true,
      'exclude_from_search' => true,  // サイト内検索結果に表示させない
      'publicly_queryable' => true,   // 直接リンクで表示は可能にする
      'show_ui' => true,
      'show_in_menu' => true,        // メインメニューに非表示
      'has_archive' => false,
      'rewrite' => array(
        'slug' => 'agm',
        'with_front' => false,
      ),
      'supports' => array('title', 'editor', 'excerpt'),
      'show_in_rest' => true,
      'menu_position' => 24
    )
  );

  //タクソノミー

  register_taxonomy(
    'eizou-onsei',   //カスタムタクソノミー名
    'disc',   //このタクソノミーが使われる投稿タイプ
    array(
      'label' => '映像・音声カテゴリー',  //カスタムタクソノミーのラベル
      'labels' => array(
        'name' => '映像・音声カテゴリー',
        'singular_name' => '映像・音声カテゴリー',
        'search_items' => '映像・音声カテゴリーを検索',
        'all_items' => 'すべての映像・音声カテゴリー',
        'edit_item' => '映像・音声カテゴリーを編集',
        'update_item' => '映像・音声カテゴリーを更新',
        'add_new_item' => '新規映像・音声カテゴリーを追加',
        'new_item_name' => '新しい映像・音声カテゴリー名'
      ),
      'public' => true,  // 管理画面及びサイト上に公開
      'description' => 'メディアの種類',  //説明文
      'hierarchical' => true,  //カテゴリー形式
      'show_in_rest' => true  //Gutenberg で表示
    )
  );

  register_taxonomy(
    'qa_category',   //カスタムタクソノミー名
    'qa',   //このタクソノミーが使われる投稿タイプ
    array(
      'label' => '質問カテゴリー',  //カスタムタクソノミーのラベル
      'labels' => array(
        'name' => '質問カテゴリー',
        'singular_name' => '質問カテゴリー',
        'search_items' => '質問カテゴリーを検索',
        'all_items' => 'すべての質問カテゴリー',
        'edit_item' => '質問カテゴリーを編集',
        'update_item' => '質問カテゴリーを更新',
        'add_new_item' => '新規質問カテゴリーを追加',
        'new_item_name' => '新しい質問カテゴリー名'
      ),
      'public' => true,  // 管理画面及びサイト上に公開
      'description' => '質問のカテゴリー',  //説明文
      'hierarchical' => true,  //カテゴリー形式
      'show_in_rest' => true  //Gutenberg で表示
    )
  );

  register_taxonomy(
    'kougi_series',   //カスタムタクソノミー名
    'kougi',   //このタクソノミーが使われる投稿タイプ
    array(
      'label' => '講義シリーズ名',  //カスタムタクソノミーのラベル
      'labels' => array(
        'name' => '講義シリーズ名',
        'singular_name' => '講義シリーズ名',
        'search_items' => '講義シリーズ名を検索',
        'all_items' => 'すべての講義シリーズ名',
        'edit_item' => '講義シリーズ名を編集',
        'update_item' => '講義シリーズ名を更新',
        'add_new_item' => '新規講義シリーズ名を追加',
        'new_item_name' => '新しい講義シリーズ名'
      ),
      'public' => true,  // 管理画面及びサイト上に公開
      'description' => '講義のシリーズ名',  //説明文
      'hierarchical' => true,  //カテゴリー形式
      'show_in_rest' => true  //Gutenberg で表示
    )
  );

  register_taxonomy(
    'book_category',   //カスタムタクソノミー名
    'books',   //このタクソノミーが使われる投稿タイプ
    array(
      'label' => '本のカテゴリー',  //カスタムタクソノミーのラベル
      'labels' => array(
        'name' => '本のカテゴリー',
        'singular_name' => '本のカテゴリー',
        'search_items' => '本のカテゴリーを検索',
        'all_items' => 'すべての本のカテゴリー',
        'edit_item' => '本のカテゴリーを編集',
        'update_item' => '本のカテゴリーを更新',
        'add_new_item' => '新規本のカテゴリーを追加',
        'new_item_name' => '新しい本のカテゴリー名'
      ),
      'public' => true,  // 管理画面及びサイト上に公開
      'description' => '本のカテゴリー',  //説明文
      'hierarchical' => true,  //カテゴリー形式
      'show_in_rest' => true  //Gutenberg で表示
    )
  );

  register_taxonomy(
    'ven_name',   //カスタムタクソノミー名
    'oriori',   //このタクソノミーが使われる投稿タイプ
    array(
      'label' => '長老の名前',  //カスタムタクソノミーのラベル
      'labels' => array(
        'name' => '長老の名前',
        'singular_name' => '長老の名前',
        'search_items' => '長老の名前を検索',
        'all_items' => 'すべての長老の名前',
        'edit_item' => '長老の名前を編集',
        'update_item' => '長老の名前を更新',
        'add_new_item' => '新規長老の名前を追加',
        'new_item_name' => '新しい長老の名前'
      ),
      'public' => true,  // 管理画面及びサイト上に公開
      'description' => '長老の名前',  //説明文
      'hierarchical' => true,  //カテゴリー形式
      'show_in_rest' => true  //Gutenberg で表示
    )
  );
}
add_action('init', 'create_jtba_post_types');

//ベーシック認証
function basic_auth($auth_list, $realm = "Restricted Area", $failed_text = "認証に失敗しました。ID・パスワードはパティパダー最新号の奥付をご確認ください。")
{
  if (isset($_SERVER['PHP_AUTH_USER']) and isset($auth_list[$_SERVER['PHP_AUTH_USER']])) {
    if ($auth_list[$_SERVER['PHP_AUTH_USER']] == $_SERVER['PHP_AUTH_PW']) {
      return $_SERVER['PHP_AUTH_USER'];
    }
  }
  header('WWW-Authenticate: Basic realm="' . $realm . '"');
  header('HTTP/1.0 401 Unauthorized');
  header('Content-type: text/html; charset=' . mb_internal_encoding());
  die($failed_text);
}

// 固定ページテンプレート「page-subpage.php」用のbodyクラスを追加
// 例: page-subpage page-kouryou など
function jtba_add_custom_body_classes($classes)
{
  if (is_page_template('page-subpage.php')) {
    $classes[] = 'page-subpage';
    $slug = get_post_field('post_name', get_post());
    if ($slug) {
      $classes[] = 'page-' . sanitize_html_class($slug);
    }
  }
  return $classes;
}
add_filter('body_class', 'jtba_add_custom_body_classes');
