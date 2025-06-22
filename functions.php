<?php

// スタイルシートとスクリプトの読み込み

function jtba_enqueue()
{
  wp_enqueue_style('base-style', get_stylesheet_uri(), array(), '1.0.0');
  wp_enqueue_style('jtba-style', get_theme_file_uri('/assets/css/app.css'), array('base-style'), '1.1.1');
  wp_enqueue_style('add-style', get_theme_file_uri('/assets/css/add-style.css'), array('jtba-style'), '1.0.1');
  wp_enqueue_script('jtba-js', get_theme_file_uri('/assets/js/app.js'), array('jquery'), '1.0.0', true);
  wp_enqueue_script('add-script', get_theme_file_uri('/assets/js/add-script.js'), array('jquery'), '1.0.0', true);
  if (is_page(array('dana-online', 'dana01'))) {
    wp_enqueue_style('ofuse-style', get_theme_file_uri('/assets/css/ofuse-style.css'), array(), '1.0.1');
  }
  if (is_page('online-registration')) {
    wp_enqueue_style('kp-style', get_theme_file_uri('/assets/css/kp-style.css'), array(), '1.0.2');
  }
  if (is_page('kp')) {
    wp_enqueue_style('kp-style', get_theme_file_uri('/assets/css/kp-style.css'), array(), '1.1.0');
  }
  if (is_page(array('membership-update', 'bank-transfer-registration'))) {
    wp_enqueue_style('membership-update', get_theme_file_uri('/assets/css/membership-update.css'), array(), '1.0.0');
  }
}
add_action('wp_enqueue_scripts', 'jtba_enqueue');


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
    'jataka', //投稿タイプ名
    array(
      'label' => 'ジャータカ物語',
      'labels' => array(
        'all_items' => 'ジャータカ物語一覧',
        'add_new' => '新規物語の追加',
        'edit_item' => 'ジャータカ物語の編集',
        'view_item' => 'ジャータカ物語を表示',
        'search_items' => 'ジャータカ物語を検索',
        'not_found' => 'ジャータカ物語は見つかりませんでした。',
        'not_found_in_trash' => 'ゴミ箱にジャータカ物語はありませんでした。',
      ),
      'public' => true,  // 管理画面に表示しサイト上にも表示する
      'description' => 'ジャータカ物語投稿用',  //説明文
      'hierarchical' => false,  //コンテンツを階層構造にするかどうか
      'has_archive' => true,  //trueで一覧ページを作成
      'show_in_rest' => false,  //Gutenbergを有効化
      'supports' => array(  //記事編集画面に表示する項目を配列で指定することができる
        'title',  //タイトル
        'editor',  //本文の編集機能
        'excerpt'  //抜粋
      ),
      'menu_position' => 9 //メニューの表示順位
    )
  );

  register_post_type(
    'books', //投稿タイプ名
    array(
      'label' => '本屋さん',
      'labels' => array(
        'all_items' => '本屋さん一覧',
        'add_new' => '新規アイテムの追加',
        'edit_item' => '本屋さんの編集',
        'view_item' => '本屋さんを表示',
        'search_items' => '本屋さんを検索',
        'not_found' => '本屋さんは見つかりませんでした。',
        'not_found_in_trash' => 'ゴミ箱に本屋さんはありませんでした。',
      ),
      'public' => true,  // 管理画面に表示しサイト上にも表示する
      'description' => '本屋さん投稿用',  //説明文
      'hierarchical' => false,  //コンテンツを階層構造にするかどうか
      'has_archive' => true,  //trueで一覧ページを作成
      'show_in_rest' => true,  //Gutenbergを有効化
      'supports' => array(  //記事編集画面に表示する項目を配列で指定することができる
        'title',  //タイトル
        'editor',  //本文の編集機能
        'thumbnail' //サムネイル
      ),
      'menu_position' => 10, //メニューの表示順位
      'taxonomies' => array('book_category')  //使用するタクソノミー
    )
  );

  register_post_type(
    'disc', //投稿タイプ名
    array(
      'label' => '映像・音声',
      'labels' => array(
        'all_items' => 'アイテム一覧',
        'add_new' => '新規アイテムの追加',
        'edit_item' => 'アイテムの編集',
        'view_item' => 'アイテムを表示',
        'search_items' => 'アイテムを検索',
        'not_found' => 'アイテムは見つかりませんでした。',
        'not_found_in_trash' => 'ゴミ箱にアイテムはありませんでした。',
      ),
      'public' => true,  // 管理画面に表示しサイト上にも表示する
      'description' => '映像・音声投稿用',  //説明文
      'hierarchical' => false,  //コンテンツを階層構造にするかどうか
      'has_archive' => true,  //trueで一覧ページを作成
      'show_in_rest' => false,  //Gutenbergを有効化
      'supports' => array(  //記事編集画面に表示する項目を配列で指定することができる
        'title',  //タイトル
        'editor'  //本文の編集機能
      ),
      'menu_position' => 11, //メニューの表示順位
      'taxonomies' => array('disc_media')  //使用するタクソノミー
    )
  );

  register_post_type(
    'pdf_bunko', //投稿タイプ名
    array(
      'label' => 'PDF文庫',
      'labels' => array(
        'all_items' => 'PDF文庫一覧',
        'add_new' => '新規PDFの追加',
        'edit_item' => 'PDF文庫の編集',
        'view_item' => 'PDF文庫を表示',
        'search_items' => 'PDF文庫を検索',
        'not_found' => 'PDF文庫は見つかりませんでした。',
        'not_found_in_trash' => 'ゴミ箱にPDF文庫はありませんでした。',
      ),
      'public' => true,  // 管理画面に表示しサイト上にも表示する
      'description' => 'PDF文庫投稿用',  //説明文
      'hierarchical' => false,  //コンテンツを階層構造にするかどうか
      'has_archive' => false,  //trueで一覧ページを作成
      'show_in_rest' => false,  //Gutenbergを有効化
      'supports' => array(  //記事編集画面に表示する項目を配列で指定することができる
        'title',  //タイトル
        'editor',  //本文の編集機能
        'excerpt',  //抜粋
        'thumbnail' //サムネイル
      ),
      'menu_position' => 16 //メニューの表示順位
    )
  );

  register_post_type(
    'dhamma_circle', //投稿タイプ名
    array(
      'label' => 'ダンマサークル',
      'labels' => array(
        'all_items' => 'ダンマサークル一覧',
        'add_new' => '新規サークルの追加',
        'edit_item' => 'ダンマサークルの編集',
        'view_item' => 'ダンマサークルを表示',
        'search_items' => 'ダンマサークルを検索',
        'not_found' => 'ダンマサークルは見つかりませんでした。',
        'not_found_in_trash' => 'ゴミ箱にダンマサークルはありませんでした。',
      ),
      'public' => true,  // 管理画面に表示しサイト上にも表示する
      'description' => 'ダンマサークル投稿用',  //説明文
      'hierarchical' => false,  //コンテンツを階層構造にするかどうか
      'has_archive' => false,  //trueで一覧ページを作成
      'show_in_rest' => false,  //Gutenbergを有効化
      'supports' => array(  //記事編集画面に表示する項目を配列で指定することができる
        'title'  //タイトル
      ),
      'menu_position' => 21 //メニューの表示順位
    )
  );

  register_post_type(
    'relational_temple', //投稿タイプ名
    array(
      'label' => '協力寺院',
      'labels' => array(
        'all_items' => '協力寺院一覧',
        'add_new' => '新規寺院の追加',
        'edit_item' => '協力寺院の編集',
        'view_item' => '協力寺院を表示',
        'search_items' => '協力寺院を検索',
        'not_found' => '協力寺院は見つかりませんでした。',
        'not_found_in_trash' => 'ゴミ箱に協力寺院はありませんでした。',
      ),
      'public' => true,  // 管理画面に表示しサイト上にも表示する
      'description' => '協力寺院投稿用',  //説明文
      'hierarchical' => false,  //コンテンツを階層構造にするかどうか
      'has_archive' => false,  //trueで一覧ページを作成
      'show_in_rest' => false,  //Gutenbergを有効化
      'supports' => array(  //記事編集画面に表示する項目を配列で指定することができる
        'title',  //タイトル
        'editor'  //本文の編集機能
      ),
      'menu_position' => 22 //メニューの表示順位
    )
  );

  register_post_type(
    'relational_links', //投稿タイプ名
    array(
      'label' => '関連リンク集',
      'labels' => array(
        'all_items' => '関連リンク一覧',
        'add_new' => '新規リンクの追加',
        'edit_item' => '関連リンクの編集',
        'view_item' => '関連リンクを表示',
        'search_items' => '関連リンクを検索',
        'not_found' => '関連リンクは見つかりませんでした。',
        'not_found_in_trash' => 'ゴミ箱に関連リンクはありませんでした。',
      ),
      'public' => true,  // 管理画面に表示しサイト上にも表示する
      'description' => '関連リンク投稿用',  //説明文
      'hierarchical' => false,  //コンテンツを階層構造にするかどうか
      'has_archive' => false,  //trueで一覧ページを作成
      'show_in_rest' => false,  //Gutenbergを有効化
      'supports' => array(  //記事編集画面に表示する項目を配列で指定することができる
        'title',  //タイトル
        'editor'  //本文の編集機能
      ),
      'menu_position' => 23 //メニューの表示順位
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
