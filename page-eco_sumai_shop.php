<?php
/* =========================================================
このページ専用のCSSを読み込みます
読み込んでいるファイル: /eco_sumai_shop/css/styles.css
（見た目の調整は、このページのHTMLとあわせて上記CSSを編集してください）
※ get_header() より前に書くことでheadタグ内に出力されます
========================================================= */
$eco_css_rel  = 'eco_sumai_shop/css/styles.css';
$eco_css_path = get_theme_file_path( $eco_css_rel );

if ( file_exists( $eco_css_path ) ) {
    wp_enqueue_style(
        'eco-sumai-shop-style',
        add_query_arg( 'v', filemtime( $eco_css_path ), get_theme_file_uri( $eco_css_rel ) ),
        [ 'theme-style' ], // テーマ共通CSSの後に読み込む
        null
    );
}
?>
<?php get_header(); ?>

<!-- main ================================================== -->
<main class="l-main">

<!-- 下層ページヘッダー & パンくず -->
<div class="c-sub-mv is-mv">
    <div class="c-sub-mv__inner l-container is-animation is-animation--fadein">
        <p class="c-sub-mv__subtitle">
            <?php // 英語表記を記述してください ?>
            英語表記
        </p>
        <h1 class="c-sub-mv__title">
            <?php // 管理画面で設定した固定ページタイトルを自動出力します ?>
            <?php the_title();?>
        </h1>
    </div>
    <div class="c-sub-mv__bg">
        <?php 
            /*
            ヘッダー背景画像です。仮で「事業内容」ページと同じものを表示しています。
            必要に応じて差し替えてください。 
            */ 
        ?>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sub-mv/business.webp" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/sub-mv/business@1x.webp 1920w, <?php echo get_template_directory_uri(); ?>/assets/img/sub-mv/business.webp 3840w" sizes="100vw" width="1920" height="460" fetchpriority="high" alt="">
    </div>
    <div class="c-sub-mv__band"></div>
</div>

<div class="u-mb-small">
    <?php get_template_part('parts/breadcrumb'); ?>
</div>
<!-- /下層ページヘッダー & パンくず ここまで -->



<?php // ======================== コンテンツ：開始 ======================== ?>

<div class="eco_sumai_shop">

    <p class="dummy-text">コンテンツを記述してください。</p>

    <img class="dummy-img" src="<?php echo get_template_directory_uri(); ?>/eco_sumai_shop/img/dummy.webp" alt="ダミー画像" width="1834" height="1200">

</div>

<?php // ======================== コンテンツ：終了 ======================== ?>


</main><!-- /#main -->
<!-- ▲main ================================================== -->

<?php get_footer(); ?>
