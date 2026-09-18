<!doctype html>
<html lang="ja" id="top">
<head prefix="og: https://ogp.me/ns#">

<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta name="format-detection" content="telephone=no">

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-VV4NGZSFC9"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-VV4NGZSFC9');
</script>

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@600;700&family=Noto+Sans+JP:wght@500;700&display=swap" rel="stylesheet">

<?php wp_head(); ?>

</head>

<body>

<!-- header ================================================== -->
<?php 
$header_logo_tag = 'div';
if(is_front_page()) $header_logo_tag = 'h1';
?>
<header class="l-header is-header<?php if(is_front_page()):?> is-header--home<?php endif;?>">
    <div class="l-header__inner">
        <<?php echo $header_logo_tag;?> class="l-header__logo">
            <a href="<?php echo home_url('/'); ?>">
                <?php echo preg_replace( '/^\s*<\?xml.*?\?>\s*/i', '', file_get_contents( get_template_directory() . '/assets/img/common/logo.svg' ) ); ?>
                <span class="u-visually-hidden"><?php if(is_front_page()): echo wp_get_document_title(); else: bloginfo( 'name' ); endif; ?></span>
            </a>
        </<?php echo $header_logo_tag;?>>

        <nav class="l-header__nav">
            <div class="l-header__nav-inner">
                <ul class="l-gnav">
                    <li class="u-hidden-large">
                        <a class="l-gnav__link<?php if(is_front_page()) echo ' l-gnav__link--active';?>" href="<?php echo home_url('/'); ?>">
                            トップページ
                        </a>
                    </li>
                    <li class="l-gnav__toggle">
                        <span class="l-gnav__link is-toggle-btn<?php if(is_page('company')) echo ' l-gnav__link--active';?>">
                            T-TOPについて
                            <span class="icon"></span>
                        </span>
                        <div class="l-gnav__child is-toggle-contents">
                            <ul class="l-gnav__child-list">
                                <li>
                                    <a class="l-gnav__child-link" href="<?php echo home_url('/company/'); ?>">会社情報</a>
                                </li>
                                <li>
                                    <a class="l-gnav__child-link" href="<?php echo home_url('/message/'); ?>">経営理念・代表挨拶</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="l-gnav__toggle">
                        <span class="l-gnav__link is-toggle-btn<?php if(is_page('quality') || is_page('compliance')) echo ' l-gnav__link--active';?>">
                            品質・ガバナンス
                            <span class="icon"></span>
                        </span>
                        <div class="l-gnav__child is-toggle-contents">
                            <ul class="l-gnav__child-list">
                                <li>
                                    <a class="l-gnav__child-link" href="<?php echo home_url('/quality/'); ?>">工事品質への追求</a>
                                </li>
                                <li>
                                    <a class="l-gnav__child-link" href="<?php echo home_url('/compliance/'); ?>">コンプライアンスの遵守</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="l-gnav__toggle">
                        <span class="l-gnav__link is-toggle-btn<?php if(is_page('business')) echo ' l-gnav__link--active';?>">
                            事業内容
                            <span class="icon"></span>
                        </span>
                        <div class="l-gnav__child is-toggle-contents">
                            <ul class="l-gnav__child-list">
                                <li>
                                    <a class="l-gnav__child-link" href="<?php echo home_url('/business/'); ?>">事業内容TOP</a>
                                </li>
                                <li>
                                    <a class="l-gnav__child-link" href="<?php echo home_url('/business/#solar'); ?>">太陽光発電システム </a>
                                </li>
                                <li>
                                    <a class="l-gnav__child-link" href="<?php echo home_url('/business/#battery'); ?>">蓄電池</a>
                                </li>
                                <li>
                                    <a class="l-gnav__child-link" href="<?php echo home_url('/business/#v2h'); ?>">V2H</a>
                                </li>
                                <li>
                                    <a class="l-gnav__child-link" href="<?php echo home_url('/business/#hems'); ?>">HEMS</a>
                                </li>
                                <li>
                                    <a class="l-gnav__child-link" href="<?php echo home_url('/eco_sumai_shop/'); ?>">大阪ガス エコ住まい特約店</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a class="l-gnav__link<?php if(is_belong_custompost('news')) echo ' l-gnav__link--active';?>" href="<?php echo get_post_type_archive_link('news'); ?>">
                            お知らせ
                        </a>
                    </li>
                    <li>
                        <a class="l-gnav__link" href="<?php echo COMPANY_RECRUIT_SITE_URL; ?>" target="_blank">
                            採用情報
                        </a>
                    </li>
                </ul>
                <a class="l-header__nav-btn" href="<?php echo home_url('/contact/'); ?>">
                    お問い合わせ
                </a>
            </div>
        </nav>
        <button class="l-header__menu-btn is-menu-btn" aria-label="メニュー開閉ボタン">
            <span class="line">
                <span></span>
                <span></span>
            </span>
        </button>
    </div>
</header>