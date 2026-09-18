<?php get_header(); ?>

<script>
(function () {
    try {
        if (sessionStorage.getItem('ttopHomeLoadingShown') === '1') {
            document.documentElement.classList.add('is-home-loading-skip');
        }
    } catch (e) {}
})();
</script>

<div class="p-home-loading is-home-loading" data-home-loading>
    <div class="p-home-loading__inner">
        <svg class="p-home-loading__logo" viewBox="0 0 391.04 444.51" xmlns="http://www.w3.org/2000/svg" fill="#1d2087" aria-hidden="true" focusable="false">
            <g class="p-home-loading__person p-home-loading__person--left">
                <path d="M125.53,97.69c26.93,0,48.83-21.91,48.83-48.84S152.46,0,125.53,0s-48.85,21.91-48.85,48.85,21.91,48.84,48.85,48.84ZM125.53,26.81c12.14,0,22.03,9.88,22.03,22.04s-9.88,22.03-22.03,22.03-22.04-9.88-22.04-22.03,9.89-22.04,22.04-22.04Z"/>
                <polygon points="169.43 162.62 130.16 140.17 26.81 194.27 26.81 313.47 0 313.47 0 178.04 130.73 109.62 197.63 147.86 225.27 163.65 251.04 178.38 251.04 313.47 224.23 313.47 224.23 193.93 197.07 178.41 169.43 162.62"/>
            </g>
            <g class="p-home-loading__person p-home-loading__person--right">
                <path d="M265.53,97.69c26.93,0,48.83-21.91,48.83-48.84S292.46,0,265.53,0s-48.85,21.91-48.85,48.85,21.91,48.84,48.85,48.84ZM265.53,26.81c12.14,0,22.03,9.88,22.03,22.04s-9.88,22.03-22.03,22.03-22.04-9.88-22.04-22.03,9.89-22.04,22.04-22.04Z"/>
                <polygon points="309.43 162.62 270.16 140.17 166.81 194.27 166.81 313.47 140 313.47 140 178.04 270.73 109.62 337.63 147.86 365.27 163.65 391.04 178.38 391.04 313.47 364.23 313.47 364.23 193.93 337.07 178.41 309.43 162.62"/>
            </g>
            <g class="p-home-loading__company">
                <polygon points="33.92 384.79 58.07 384.79 58.07 443.37 69.68 443.37 69.68 384.79 93.93 384.79 93.93 375.04 33.92 375.04 33.92 384.79"/>
                <rect x="106.02" y="404.16" width="29.56" height="10.11"/>
                <polygon points="147.02 384.79 171.18 384.79 171.18 443.37 182.78 443.37 182.78 384.79 207.04 384.79 207.04 375.04 147.02 375.04 147.02 384.79"/>
                <path d="M275.64,378.38c-5.55-2.99-11.86-4.51-18.75-4.51-10.54,0-19.27,3.24-25.96,9.62-6.7,6.4-10.1,15.34-10.1,26.58,0,5.96,1.45,11.69,4.31,17.03,2.88,5.37,7.16,9.66,12.73,12.75,5.55,3.09,11.93,4.65,18.97,4.65,6.49,0,12.62-1.41,18.23-4.2,5.65-2.81,10.08-7,13.16-12.46,3.07-5.44,4.62-11.68,4.62-18.55s-1.48-12.93-4.39-18.28c-2.93-5.38-7.24-9.63-12.81-12.64ZM280.94,409.25c0,8.25-2.29,14.68-6.79,19.12-4.51,4.45-10.35,6.7-17.36,6.7s-12.67-2.23-17.21-6.64c-4.54-4.4-6.84-10.53-6.84-18.23,0-9.66,2.39-16.62,7.1-20.69,4.75-4.1,10.5-6.18,17.1-6.18,4.64,0,8.88,1.08,12.6,3.21,3.7,2.11,6.55,5.13,8.47,8.98,1.94,3.88,2.93,8.5,2.93,13.73Z"/>
                <path d="M361.45,378.93c-2.53-1.59-5.7-2.68-9.4-3.24-2.61-.43-6.41-.65-11.31-.65h-28.61v68.33h11.61v-27h17.85c10.58,0,18.04-2.07,22.17-6.14,4.14-4.08,6.24-9.13,6.24-15.02,0-3.43-.79-6.64-2.34-9.51-1.56-2.88-3.64-5.16-6.21-6.77ZM354.5,403.66c-2.45,1.97-6.74,2.96-12.76,2.96h-18v-21.84h17.8c4.3,0,7.27.19,8.82.56,2.35.59,4.18,1.76,5.61,3.58,1.41,1.8,2.12,4,2.12,6.55,0,3.56-1.18,6.24-3.59,8.18Z"/>
            </g>
        </svg>
        <div class="p-home-loading__pulse" aria-hidden="true"><span></span><span></span><span></span></div>
    </div>
</div>


<!-- main ================================================== -->
<main class="l-main l-main--home">

<div class="p-home-wrapper"><?php // 固定背景がかかる部分 ?>

<div class="p-home-bg is-home-bg splide">
    <div class="splide__track">
        <ul class="splide__list">
            <li class="p-home-bg__item splide__slide">
                <picture>
                    <source
                        type="image/webp"
                        media="(min-width: 1025px)"
                        srcset="
                            <?php echo get_template_directory_uri(); ?>/assets/img/home/mv01@1x.webp 1920w,
                            <?php echo get_template_directory_uri(); ?>/assets/img/home/mv01.webp 3840w">
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/home/mv01_s.webp"
                        alt=""
                        fetchpriority="high"
                        width="1200" height="1200">
                </picture>
            </li>
            <li class="p-home-bg__item splide__slide">
                <picture>
                    <source
                        type="image/webp"
                        media="(min-width: 1025px)"
                        srcset="
                            <?php echo get_template_directory_uri(); ?>/assets/img/home/mv02@1x.webp 1920w,
                            <?php echo get_template_directory_uri(); ?>/assets/img/home/mv02.webp 3840w">
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/home/mv02_s.webp"
                        alt=""
                        width="1200" height="1200">
                </picture>
            </li>
            <li class="p-home-bg__item splide__slide">
                <picture>
                    <source
                        type="image/webp"
                        media="(min-width: 1025px)"
                        srcset="
                            <?php echo get_template_directory_uri(); ?>/assets/img/home/mv03@1x.webp 1920w,
                            <?php echo get_template_directory_uri(); ?>/assets/img/home/mv03.webp 3840w">
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/home/mv03_s.webp"
                        alt=""
                        width="1200" height="1200">
                </picture>
            </li>
        </ul>
    </div>
</div>

<div class="p-home-mv is-mv">
    <div class="p-home-mv__inner l-container">
        <h2 class="p-home-mv__lead">
            工事<small>を</small>変え、<br class="u-hidden-medium">暮らし<small>を</small>変え、<br>
            業界<small>の</small>当たり前<small>を</small><br class="u-hidden-medium">変えていく。
        </h2>
        <p class="p-home-mv__text">誠実に、妥協ない工事品質の追求を。</p>
        <p class="p-home-mv__scroll u-visible-large"><span class="p-home-mv__scroll-text">Scroll Down</span></p>
    </div>
</div>


<section class="p-home-concept">
    <div class="p-home-concept__inner l-container">
        <h2 class="p-home-concept__title">T-TOP Concept</h2>
        <p class="p-home-concept__lead">
            設備は、どこで買っても同じ。<br>
            だからこそ、<br class="u-hidden-small">私たちが届けるのは「商品」ではなく、<br>
            品質と、それを生み出す人と、<br class="u-hidden-small">お客様とのつながりです。
        </p>
        <p class="p-home-concept__text u-word-keep">
            T-TOPは、住宅に関わる<wbr>エネルギーソリューション事業を通じて、<wbr>お客様の暮らしを支えています。<br>
            施工会社の選定から、<wbr>工事当日の管理、工事後の点検まで——<br>
            一つひとつのプロセスを、<wbr>しくみとして整えています。
        </p>
        <div class="p-home-concept__mark">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/mark_white.svg" alt="T-TOPロゴマーク" width="536" height="430" loading="lazy">
        </div>
    </div>
</section>


</div><!-- /.p-home-wrapper -->

<section class="p-home-quality">
    <div class="p-home-quality__inner l-container">
        <div class="p-home-quality__head">
            <h2 class="p-home-quality__title is-animation is-animation--fadein">
                <span>Quality &</span>
                <span>Governance</span>
            </h2>
            <p class="p-home-quality__lead">品質を、しくみで守る。</p>
        </div>
        <div class="p-home-quality__list">
            <div class="p-home-quality__card">
                <a href="<?php echo home_url('/quality/'); ?>" class="link">
                    <div class="img c-img-hover-zoom is-animation is-animation--imgfadein">
                        <picture>
                            <source
                                type="image/webp"
                                media="(min-width: 769px)"
                                srcset="<?php echo get_template_directory_uri(); ?>/assets/img/home/quality01.webp">
                            <img
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/home/quality01_s.webp"
                                alt="工事品質への追求のイメージ"
                                width="700" height="300" loading="lazy">
                        </picture>
                    </div>
                    <hgroup class="title">
                        <p class="sub">Construction Quality</p>
                        <h3 class="main">工事品質への追求</h3>
                        <span class="arrow"></span>
                    </hgroup>
                    <p class="text">
                        施工店の選定・育成、A〜E段階の評価制度、工事当日の約40項目チェック、抜き打ち現場監査。再現性のある品質を、組織的なしくみで担保しています。
                    </p>
                </a>
            </div>
            <div class="p-home-quality__card">
                <a href="<?php echo home_url('/compliance/'); ?>" class="link">
                    <div class="img c-img-hover-zoom is-animation is-animation--imgfadein">
                        <picture>
                            <source
                                type="image/webp"
                                media="(min-width: 769px)"
                                srcset="<?php echo get_template_directory_uri(); ?>/assets/img/home/quality02.webp">
                            <img
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/home/quality02_s.webp"
                                alt="コンプライアンスの遵守のイメージ"
                                width="700" height="300" loading="lazy">
                        </picture>
                    </div>
                    <hgroup class="title">
                        <p class="sub">Compliance</p>
                        <h3 class="main">コンプライアンスの遵守</h3>
                        <span class="arrow"></span>
                    </hgroup>
                    <p class="text">
                        特定商取引法の遵守、お客様対応の記録管理、プライバシーマーク取得、定期的な研修。誠実な事業運営をしくみとして整えています。
                    </p>
                </a>
            </div>
        </div>
    </div>
</section>


<section class="p-home-business">
    <div class="p-home-business__inner l-container">
        <div class="p-home-business__img is-animation is-animation--imgfadein">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/business.webp" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/home/business_s.webp 600w, <?php echo get_template_directory_uri(); ?>/assets/img/home/business.webp 1200w" sizes="100vw" alt="" width="2154" height="1200" loading="lazy">
        </div>
        <div class="p-home-business__body">
            <hgroup class="p-home-business__title c-heading-02 c-heading-02--deco is-animation is-animation--fadein">
                <h2 class="main">事業内容</h2>
                <p class="sub">Business</p>
            </hgroup>
            <h3 class="p-home-business__lead u-word-keep">
                ご家庭のエネルギーを、<wbr>丸ごと最適化する。
            </h3>
            <p class="p-home-business__text">
                太陽光発電・蓄電池・V2H・HEMS——<br>
                個別の商品ではなく、家全体のエネルギーを設計する視点で、<br class="u-visible-large">お客様に最適な組み合わせをご提案します。
            </p>
            <div class="p-home-business__more">
                <a href="<?php echo home_url('/business/');?>" class="c-primary-btn">
                    <span class="c-primary-btn__text">事業内容を見る</span>
                    <span class="c-primary-btn__arrow"></span>
                </a>
            </div>
        </div>
    </div>
</section>


<section class="p-home-about">
    <div class="p-home-about__inner l-container">
        <hgroup class="p-home-about__title c-heading-02 is-animation is-animation--fadein">
            <h2 class="main">T-TOPについて</h2>
            <p class="sub">About T-TOP</p>
        </hgroup>
        <div class="p-home-about__list">
            <div class="p-home-about__card">
                <a href="<?php echo home_url('/message/'); ?>" class="link">
                    <div class="img c-img-hover-zoom is-animation is-animation--imgfadein">
                        <img
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/home/about01@1x.webp"
                            srcset="
                                <?php echo get_template_directory_uri(); ?>/assets/img/home/about01@1x.webp 834w,
                                <?php echo get_template_directory_uri(); ?>/assets/img/home/about01.webp 1668w"
                            sizes="(min-width: 1025px) 834px, 50vw"
                            alt="代表挨拶・経営理念のイメージ"
                            width="834" height="500" loading="lazy">
                        <p class="label u-visible-medium">Message & Philosophy</p>
                    </div>
                    <div class="body">
                        <h3 class="title">代表挨拶・経営理念<span class="arrow u-hidden-large"></span></h3>
                        <p class="text">
                            T-TOPが大切にしている考え方と、代表からのメッセージをご紹介します。
                        </p>
                        <p class="c-primary-btn c-primary-btn--en u-visible-large">
                            <span class="c-primary-btn__text">View More</span>
                            <span class="c-primary-btn__arrow"></span>
                        </p>
                    </div>
                </a>
            </div>
            <div class="p-home-about__card">
                <a href="<?php echo home_url('/company/'); ?>" class="link">
                    <div class="img c-img-hover-zoom is-animation is-animation--imgfadein">
                        <img
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/home/about02@1x.webp"
                            srcset="
                                <?php echo get_template_directory_uri(); ?>/assets/img/home/about02@1x.webp 834w,
                                <?php echo get_template_directory_uri(); ?>/assets/img/home/about02.webp 1668w"
                            sizes="(min-width: 1025px) 834px, 50vw"
                            alt="会社情報のイメージ"
                            width="834" height="500" loading="lazy">
                        <p class="label u-visible-medium">Company Overview</p>
                    </div>
                    <div class="body">
                        <h3 class="title">会社情報<span class="arrow u-hidden-large"></span></h3>
                        <p class="text">
                            会社概要、拠点ネットワーク、これまでの歩みについてご紹介します。
                        </p>
                        <p class="c-primary-btn c-primary-btn--en u-visible-large">
                            <span class="c-primary-btn__text">View More</span>
                            <span class="c-primary-btn__arrow"></span>
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>


<section class="p-home-news">
    <div class="p-home-news__inner l-container">
        <div class="p-home-news__head">
            <hgroup class="p-home-news__title c-heading-02 is-animation is-animation--fadein">
                <h2 class="main">お知らせ</h2>
                <p class="sub">News</p>
            </hgroup>
            <div class="p-home-news__btn u-visible-large">
                <a href="<?php echo get_post_type_archive_link('news');?>" class="c-primary-btn c-primary-btn--en">
                    <span class="c-primary-btn__text">View More</span>
                    <span class="c-primary-btn__arrow"></span>
                </a>
            </div>
        </div>
        <?php
        $args = array(
            'post_type' => 'news',
            'posts_per_page' => 3,
        );
        $news_query = new WP_Query( $args );
        ?>
        <?php if($news_query->have_posts()): ?>
        <ul class="p-home-news__list c-news-list">
            <?php while($news_query->have_posts()):$news_query->the_post(); ?>
                <?php get_template_part('parts/news/item', null, array("title_tag" => "h3"));?>
            <?php endwhile; ?>
        </ul>
        <?php else: ?>
            <p class="u-text-center u-pt-medium u-pb-medium">投稿がありません</p>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
        <div class="p-home-news__btn u-hidden-large">
            <a href="<?php echo get_post_type_archive_link('news');?>" class="c-primary-btn c-primary-btn--en">
                <span class="c-primary-btn__text">View More</span>
                <span class="c-primary-btn__arrow"></span>
            </a>
        </div>
    </div>
</section>


<section class="p-home-recruit">
    <div class="p-home-recruit__inner l-container">
        <div class="p-home-recruit__img is-animation is-animation--imgfadein">
            <picture>
                <source
                    type="image/webp"
                    media="(min-width: 1025px)"
                    sizes="100vw"
                    srcset="
                        <?php echo get_template_directory_uri(); ?>/assets/img/home/recruit@1x.webp 1464w,
                        <?php echo get_template_directory_uri(); ?>/assets/img/home/recruit.webp 2928w">
                <img
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/home/recruit_s.webp"
                    alt="採用情報イメージ"
                    width="780" height="541" loading="lazy">
            </picture>
        </div>
        <div class="p-home-recruit__body">
            <hgroup class="p-home-recruit__title c-heading-02 c-heading-02--deco is-animation is-animation--fadein">
                <h2 class="main u-word-keep">「人」が、T-TOPの<wbr>一番の財産です。</h2>
                <p class="sub">Recruit</p>
            </hgroup>
            <p class="p-home-recruit__text u-word-keep">
                業界の当たり前を変えていくのは、<wbr>結局のところ人です。<br>
                T-TOPでは、誇りを持って仕事に向き合える<wbr>仲間を募集しています。
            </p>
            <div class="p-home-recruit__more">
                <a href="<?php echo COMPANY_RECRUIT_SITE_URL?>" target="_blank" class="c-primary-btn">
                    <span class="c-primary-btn__text">採用情報を見る</span>
                    <span class="c-primary-btn__arrow"></span>
                </a>
            </div>
        </div>
    </div>
</section>

</main>
<!-- //main ================================================== -->





<?php get_footer(); ?>
