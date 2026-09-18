<?php
/**
 * テーマ設定
 */
if ( ! defined( 'ABSPATH' ) ) exit;

/* =========================================================
Version
========================================================= */
define( 'THEME_CONFIG_VER', '2025-12-23-01' );

/* =========================================================
headに入る不要なものを削除する
========================================================= */
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'rest_output_link_wp_head' );
remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles', 10 );

/* =========================================================
タイトルタグ有効化 / エディタCSS
========================================================= */
add_action( 'after_setup_theme', function () {
    add_theme_support( 'title-tag' );

    add_theme_support( 'editor-styles' );
    add_editor_style( [ 'assets/css/editor-style.css' ] );
} );

/* =========================================================
CSS/JS読み込み
========================================================= */
add_action( 'wp_enqueue_scripts', function () {

    $theme_css_rel = 'assets/css/styles.css';
    $theme_js_rel  = 'assets/js/scripts.js';

    $css_path = get_theme_file_path( $theme_css_rel );
    $js_path  = get_theme_file_path( $theme_js_rel );

    // バージョン値（filemtime）
    $css_ver = file_exists( $css_path ) ? filemtime( $css_path ) : time();
    $js_ver  = file_exists( $js_path ) ? filemtime( $js_path ) : time();

    // Splide（スライダー）
    wp_enqueue_style(
        'splide',
        get_theme_file_uri( 'assets/css/splide.min.css' ),
        [],
        null
    );
    wp_enqueue_script(
        'splide',
        get_theme_file_uri( 'assets/js/splide.min.js' ),
        [],
        null,
        true
    );

    // CSS（verではなく v で付与）
    wp_enqueue_style(
        'theme-style',
        add_query_arg( 'v', $css_ver, get_theme_file_uri( $theme_css_rel ) ),
        [ 'splide' ],
        null
    );

    // JS（verではなく v で付与）
    wp_enqueue_script(
        'theme-script',
        add_query_arg( 'v', $js_ver, get_theme_file_uri( $theme_js_rel ) ),
        [ 'jquery', 'splide' ],
        null,
        true
    );

    // eco_sumai_shop固定ページ専用CSSは page-eco_sumai_shop.php 内で読み込んでいます

}, 10 );


/* =========================================================
見出しブロックでh1を選べないようにする
========================================================= */
function my_modify_heading_levels_globally( $args, $block_type ) {
    if ( 'core/heading' !== $block_type ) {
        return $args;
    }

    // ドロップダウンに出す見出しレベル（H2〜H6）
    $args['attributes']['levelOptions']['default'] = [ 2, 3, 4, 5, 6 ];

    // デフォルトも H2
    if ( isset( $args['attributes']['level']['default'] ) ) {
        $args['attributes']['level']['default'] = 2;
    }

    return $args;
}
add_filter( 'register_block_type_args', 'my_modify_heading_levels_globally', 10, 2 );

/* =========================================================
Contact Form 7で自動挿入されるPタグ、brタグを削除
========================================================= */
add_filter( 'wpcf7_autop_or_not', function () {
    return false;
} );

/* =========================================================
記事最初の画像をアイキャッチにする
========================================================= */
function first_img_url( $post_id = null ) {

    $post = $post_id ? get_post( $post_id ) : get_post();
    if ( ! $post ) return false;

    $post_content = $post->post_content ?? '';
    if ( $post_content === '' ) return false;

    $matches = [];
    preg_match_all( '/<img[^>]+?src=[\'"]([^\'"]+)[\'"][^>]*>/i', $post_content, $matches );

    if ( empty( $matches[1][0] ) ) {
        return false;
    }

    return $matches[1][0];
}

/* =========================================================
CSSやJSのバージョン非表示（クエリ ver= を削除）
========================================================= */
function remove_cssjs_ver2( $src ) {
    if ( strpos( $src, 'ver=' ) !== false ) {
        $src = remove_query_arg( 'ver', $src );
    }
    return $src;
}
add_filter( 'style_loader_src', 'remove_cssjs_ver2', 9999 );
add_filter( 'script_loader_src', 'remove_cssjs_ver2', 9999 );

/* =========================================================
固定ページのエディターを非表示にする
========================================================= */
add_filter( 'use_block_editor_for_post', function ( $use_block_editor, $post ) {

    if ( $post && $post->post_type === 'page' ) {
        $exclude_pages = []; // 除外したいページがあればスラッグ

        if ( ! in_array( $post->post_name, $exclude_pages, true ) ) {
            remove_post_type_support( 'page', 'editor' );
            return false;
        }
    }

    return $use_block_editor;
}, 10, 2 );

/* =========================================================
投稿関連のページ以外ではブロックエディタのCSSを読み込まない
========================================================= */
function remove_block_library_css() {

    $is_post_related = is_single() || is_category() || is_home() || is_archive();

    if ( ! $is_post_related ) {
        wp_dequeue_style( 'wp-block-library' );
    }
}
add_action( 'wp_enqueue_scripts', 'remove_block_library_css', 20 );

/* =========================================================
スラッグを自動で英数にする（日本語slugっぽい場合はIDに）
========================================================= */
function auto_post_slug( $slug, $post_ID, $post_status, $post_type ) {
    if ( preg_match( '/(%[0-9a-f]{2})+/', $slug ) ) {
        $slug = (string) $post_ID;
    }
    return $slug;
}
add_filter( 'wp_unique_post_slug', 'auto_post_slug', 10, 4 );

/* =========================================================
ページ判定用
========================================================= */
// 投稿に所属しているページかどうか
function is_belong_post() {
    return is_home() || ( is_archive() && ! is_post_type_archive() && ! is_tax() ) || is_singular( 'post' );
}

// カスタム投稿に所属しているページかどうか
function is_belong_custompost( $slug ) {
    return is_singular( $slug ) || is_post_type_archive( $slug );
}

// ある固定ページに属しているかどうか（親スラッグ判定）
function is_parent_page_slug( $slug ) {

    global $post;
    if ( ! $post ) return false;

    if ( $post->post_parent ) {
        $parent = get_post( $post->post_parent );
        if ( $parent && $parent->post_name === $slug ) {
            return true;
        }
    }
    return false;
}

/* =========================================================
Contact Form 7
========================================================= */

// サイトURLを表示するショートコード
function cf7_site_url_shortcode() {
    return esc_url( home_url() );
}
add_shortcode( 'site_url', 'cf7_site_url_shortcode' );

// Contact Form 7のフォーム構築部分でショートコードを使う
add_filter( 'wpcf7_form_elements', function ( $form ) {
    return do_shortcode( $form );
} );

// CF7 Multi-Step (PRO) の確認画面直アクセス等で、入力データが空ならメール送信をスキップ
add_filter( 'wpcf7_skip_mail', function ( $skip, $contact_form ) {

    if ( ! $contact_form ) {
        return true;
    }

    $submission = WPCF7_Submission::get_instance();
    if ( ! $submission ) {
        return true; // 送信内容が取れない = 送らせない（安全側）
    }

    $data  = (array) $submission->get_posted_data();
    $files = (array) $submission->uploaded_files();

    // 1) 「ユーザー入力」っぽいキーだけ残す（CF7内部/CF7MSM内部のキーは除外）
    $user_data = $data;

    foreach ( array_keys( $user_data ) as $key ) {

        // CF7内部キー（_wpcf7, _wpcf7_version, _wpcf7_unit_tag...）
        if ( isset( $key[0] ) && $key[0] === '_' ) {
            unset( $user_data[ $key ] );
            continue;
        }

        // CF7MSM系（プラグイン由来。念のため広めに除外）
        if ( strpos( $key, 'cf7msm' ) === 0 ) {
            unset( $user_data[ $key ] );
            continue;
        }
    }

    // 2) 値が「空じゃない」ユーザー入力が1つでもあるか？
    $has_any_value = false;

    foreach ( $user_data as $v ) {

        if ( is_array( $v ) ) {
            $vv = array_filter( array_map( 'trim', array_map( 'strval', $v ) ) );
            if ( ! empty( $vv ) ) {
                $has_any_value = true;
                break;
            }
        } else {
            if ( trim( (string) $v ) !== '' ) {
                $has_any_value = true;
                break;
            }
        }
    }

    // 3) ファイルも「ユーザー入力」として扱う（ファイルだけ送るフォーム対策）
    if ( ! $has_any_value ) {
        foreach ( $files as $path ) {
            if ( ! empty( $path ) && file_exists( $path ) ) {
                $has_any_value = true;
                break;
            }
        }
    }

    // 4) ユーザー入力が1つも無い送信は、メール送信させない
    if ( ! $has_any_value ) {
        return true; // skip_mail = true
    }

    return $skip;

}, 10, 2 );
