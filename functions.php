<?php

/* =========================================================
テーマ設定読み込み（削除しないでください）
========================================================= */
if ( ! defined( 'ABSPATH' ) ) exit;
$path = get_theme_file_path( '/inc/theme-config.php' );
if ( file_exists( $path ) ) {
    require_once $path;
}


/* =========================================================
会社情報
========================================================= */
const COMPANY_NAME = '株式会社T-TOP';
const COMPANY_ZIP = '541-0059';
const COMPANY_PREF = '大阪府';
const COMPANY_CITY = '大阪市中央区';
const COMPANY_STREET = '博労町3丁目5-1';
const COMPANY_BUILDING = '御堂筋グランタワー18F';
const COMPANY_TEL = '06-6120-1133';
const COMPANY_FREEDIAL = '0120-39-0336';
const COMPANY_MAIL_DOMAIN = '';

const COMPANY_RECRUIT_SITE_URL ='https://www.ttop-inc.co.jp/recruitment/';


/* =========================================================
以下、自由に記述してください
========================================================= */

/* =========================================================
カスタム投稿タイプ: お知らせ
========================================================= */
function register_post_type_news() {
    register_post_type( 'news', array(
        'label'         => 'お知らせ',
        'labels'        => array(
            'name'                  => 'お知らせ',
            'singular_name'         => 'お知らせ',
            'menu_name'             => 'お知らせ',
            'add_new'               => '新規追加',
            'add_new_item'          => 'お知らせを追加',
            'edit_item'             => 'お知らせを編集',
            'new_item'              => '新しいお知らせ',
            'view_item'             => 'お知らせを表示',
            'view_items'            => 'お知らせを表示',
            'search_items'          => 'お知らせを検索',
            'not_found'             => 'お知らせが見つかりませんでした',
            'not_found_in_trash'    => 'ゴミ箱にお知らせはありません',
            'all_items'             => 'すべてのお知らせ',
            'archives'              => 'お知らせアーカイブ',
            'insert_into_item'      => 'お知らせに挿入',
            'uploaded_to_this_item' => 'このお知らせにアップロード済み',
            'filter_items_list'     => 'お知らせを絞り込み',
        ),
        'public'        => true,
        'has_archive'   => true,
        'show_in_rest'  => true,
        'supports'      => array( 'title', 'editor' ),
        'menu_icon'     => 'dashicons-megaphone',
        'rewrite'       => array( 'slug' => 'news' ),
    ) );
}
add_action( 'init', 'register_post_type_news' );

/* =========================================================
タクソノミー: お知らせカテゴリ
========================================================= */
function register_taxonomy_news_cat() {
    register_taxonomy( 'news-cat', 'news', array(
        'label'         => 'お知らせカテゴリ',
        'labels'        => array(
            'name'                       => 'お知らせカテゴリ',
            'singular_name'              => 'お知らせカテゴリ',
            'menu_name'                  => 'お知らせカテゴリ',
            'add_new_item'               => 'お知らせカテゴリを追加',
            'edit_item'                  => 'お知らせカテゴリを編集',
            'update_item'                => 'お知らせカテゴリを更新',
            'view_item'                  => 'お知らせカテゴリを表示',
            'new_item_name'              => '新しいお知らせカテゴリ名',
            'search_items'               => 'お知らせカテゴリを検索',
            'not_found'                  => 'お知らせカテゴリが見つかりませんでした',
            'all_items'                  => 'すべてのお知らせカテゴリ',
            'parent_item'                => '親お知らせカテゴリ',
            'parent_item_colon'          => '親お知らせカテゴリ:',
            'popular_items'              => 'よく使われるお知らせカテゴリ',
            'separate_items_with_commas' => 'お知らせカテゴリをカンマで区切ってください',
            'add_or_remove_items'        => 'お知らせカテゴリを追加または削除',
            'choose_from_most_used'      => 'よく使われるお知らせカテゴリから選択',
        ),
        'public'        => true,
        'hierarchical'  => true,
        'show_in_rest'  => true,
        'show_admin_column' => true,
        'rewrite'       => array( 'slug' => 'news-cat' ),
    ) );
}
add_action( 'init', 'register_taxonomy_news_cat' );

/* =========================================================
管理画面: 通常の「投稿」メニューを非表示
========================================================= */
function ttop_remove_post_menu() {
    remove_menu_page( 'edit.php' );
}
add_action( 'admin_menu', 'ttop_remove_post_menu' );