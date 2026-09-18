<!-- contact ================================================== -->
<aside class="l-contact">
    <div class="l-contact__inner l-container">
        <hgroup class="l-contact__title c-heading-02 is-animation is-animation--fadein">
            <h2 class="main">お問い合わせ</h2>
            <p class="sub">Contact</p>
        </hgroup>
        <p class="l-contact__text u-word-keep">ご相談やご依頼など<wbr>お気軽にお問い合わせ下さい。</p>
        <div class="l-contact__btns">
            <a href="<?php echo home_url('/contact/'); ?>" class="l-contact__btn l-contact__btn--contact">
                <span class="icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/contact_icon_form.svg" alt="" width="25" height="25" loading="lazy">
                </span>
                <span class="text">フォームでのお問い合わせ</span>
            </a>
            <a href="tel:<?php echo COMPANY_FREEDIAL;?>" class="l-contact__btn l-contact__btn--tel c-link--tel">
                <span class="icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/contact_icon_tel.svg" alt="" width="25" height="28" loading="lazy">
                </span>
                <span class="text">
                    <span class="title">お客様相談窓口</span>
                    <span class="number"><?php echo COMPANY_FREEDIAL;?></span>
                    <small>10:00～18:00まで</small>
                </span>
            </a>
        </div>
    </div>
    <div class="l-contact__bg">
        <picture>
            <source
                type="image/webp"
                media="(min-width: 1025px)"
                srcset="<?php echo get_template_directory_uri(); ?>/assets/img/common/contact_bg@1x.webp 1920w, <?php echo get_template_directory_uri(); ?>/assets/img/common/contact_bg.webp 3840w">
            <img
                src="<?php echo get_template_directory_uri(); ?>/assets/img/common/contact_bg_s.webp"
                alt=""
                sizes="100vw"
                loading="lazy" 
                width="780" height="701">
        </picture>
    </div>
</aside>
<!-- //contact ================================================== -->


<!-- footer ================================================== -->
<footer class="l-footer">
    <div class="l-footer__inner l-container">
        <div class="l-footer__logo">
            <a href="<?php echo home_url('/'); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/footer_logo.svg" alt="<?php bloginfo( 'name' ); ?>" width="140" height="32" loading="lazy">
            </a>
        </div>
        <dl class="l-footer__info">
            <dt>大阪本社</dt>
            <dd>
                <span class="address"><?php echo COMPANY_PREF;?><?php echo COMPANY_CITY;?><?php echo COMPANY_STREET;?></span>
                <?php if(COMPANY_BUILDING):?><span class="building"><?php echo COMPANY_BUILDING;?></span><?php endif;?>
            </dd>
            <dt>東京本社</dt>
            <dd>
                <span class="address">東京都港区港南2丁目16-3</span>
                <span class="building">品川グランドセントラルタワー18F</span>
            </dd>
        </dl>
        <ul class="l-footer__nav">
            <li>
                <span class="l-footer__nav-title">T-TOPについて</span>
                <ul class="l-footer__nav-child">
                    <li><a href="<?php echo home_url('/company/'); ?>">会社情報</a></li>
                    <li><a href="<?php echo home_url('/message/'); ?>">経営理念・代表挨拶</a></li>
                </ul>
            </li>
            <li>
                <span class="l-footer__nav-title">品質・ガバナンス</span>
                <ul class="l-footer__nav-child">
                    <li><a href="<?php echo home_url('/quality/'); ?>">工事品質への追求</a></li>
                    <li><a href="<?php echo home_url('/compliance/'); ?>" class="u-word-keep">コンプライアンスの<wbr>遵守</a></li>
                </ul>
            </li>
            <li>
                <a class="l-footer__nav-title l-footer__nav-title--link" href="<?php echo home_url('/business/'); ?>">
                    事業内容
                </a>
                <ul class="l-footer__nav-child">
                    <li>
                        <a href="<?php echo home_url('/business/#solar'); ?>">太陽光発電システム </a>
                    </li>
                    <li>
                        <a href="<?php echo home_url('/business/#battery'); ?>">蓄電池</a>
                    </li>
                    <li>
                        <a href="<?php echo home_url('/business/#v2h'); ?>">V2H</a>
                    </li>
                    <li>
                        <a href="<?php echo home_url('/business/#hems'); ?>">HEMS</a>
                    </li>
                    <li>
                        <a href="<?php echo home_url('/eco_sumai_shop'); ?>">エコ住まい特約店</a>
                    </li>
                </ul>
            </li>
            <li class="l-footer__nav-group">
                <a class="l-footer__nav-title l-footer__nav-title--link" href="<?php echo get_post_type_archive_link('news'); ?>">
                    お知らせ
                </a>
                <a class="l-footer__nav-title l-footer__nav-title--link" href="<?php echo COMPANY_RECRUIT_SITE_URL; ?>" target="_blank">
                    採用情報
                </a>
            </li>
        </ul>
        <div class="l-footer__pmark">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/pmark.png" alt="プライバシーマーク" width="200" height="200" loading="lazy">
        </div>
    </div>
    <div class="l-footer__bottom">
        <div class="l-footer__bottom-inner l-container">
            <p class="l-footer__copy">©株式会社 T-TOP</p>
            <a href="<?php echo home_url('/privacy/');?>" class="l-footer__privacy">プライバシーポリシー</a>
        </div>
    </div>
    
</footer>
<!-- //footer ================================================== -->

<!-- ▼wp_footer -->
<?php wp_footer(); ?>
<!-- ▲wp_footer -->

</body>
</html>
