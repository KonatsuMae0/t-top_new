<?php get_header(); ?>

<!-- main ================================================== -->
<main class="l-main">

<?php
    $mv_setting = array(
        "sub_title" => 'Message & Philosophy',
        "bg_img_filename" => 'message',
    );
?>
<?php get_template_part( 'parts/sub-mv', null, $mv_setting ); ?>


<div class="l-container u-mb-large">
    <div class="p-company-lead__nav c-local-nav c-local-nav--col3 u-mt-medium">
        <a href="#philosophy" class="c-local-nav__btn">経営理念</a>
        <a href="#message" class="c-local-nav__btn">代表挨拶</a>
        <a href="#values" class="c-local-nav__btn"><span class="u-word-keep">大切にしている<wbr>3つのこと</span></a>
    </div>
</div>


<section class="p-message-lead u-mt-xLarge u-pb-xLarge" id="philosophy">
    <div class="p-message-lead__inner l-container">
        <hgroup class="p-message-lead__title c-heading-02 is-animation is-animation--fadein u-mb-small u-text-center">
            <h2 class="main">経営理念</h2>
            <p class="sub">Philosophy</p>
        </hgroup>
        <p class="p-message-lead__lead u-word-keep">
            幸福な未来を創造できる人財を<wbr>育成することにより<br>
            個から家族、関わる全ての方の<br>
            真の幸福を追求する。
        </p>

        <div class="p-message-lead__text">
            <p>
                T-TOPは、事業を通じて社会と人の暮らしを豊かにすることを使命としています。<br>
                そのために大切にしているのが、「人」を育てること。
            </p>
            <p>
                一人ひとりが成長し、誇りを持って仕事に向き合える環境があってこそ、お客様にも本当の価値を届けられると考えています。
            </p>
            <p>
                個人の幸福が家族の幸福につながり、それがお客様、パートナー、社会全体へと広がっていく——<br>
                その循環を、私たちは事業の中心に据えています。
            </p>
        </div>
    </div>
</section>


<section class="p-message u-bg-color-02 u-pt-large u-pb-xLarge" id="message">
    <div class="p-message__inner l-container">
        <hgroup class="p-message__title c-heading-02 is-animation is-animation--fadein u-mb-small u-text-center">
            <h2 class="main">代表挨拶</h2>
            <p class="sub">Message</p>
        </hgroup>
        <div class="p-message__wrapper">
            <div class="p-message__img is-animation is-animation--imgfadein">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/message/message.webp" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/message/message@1x.webp 900w, <?php echo get_template_directory_uri(); ?>/assets/img/message/message.webp 1800w" sizes="(min-width: 1025px) 50vw, 100vw" width="1800" height="1240" alt="代表取締役 村田 達也の写真" loading="lazy">
            </div>
            <div class="p-message__body">
                <h3 class="title">人を大切にする会社で<br>あり続けるために。</h3>
                <div class="text">
                    <p>
                        当社のHPをご覧いただきありがとうございます。
                    </p>
                    <p>
                        私たちは住宅に関わるエネルギーソリューションを通して、お客様の暮らしを支える事業を行っています。事業の本質は、商品を売ることではなく、お客様にとって本当に意味のある選択を一緒に考え、安心して長くお使いいただける状態を届けること。<br>
                        その姿勢は、創業以来変わっていません。
                    </p>
                    <p>
                        そのために何より大切にしているのが、「人」です。お客様にお会いする営業スタッフ、施工現場で工事を担う職人、社内で日々業務に向き合う内勤スタッフ──関わるすべての人が誇りを持てる会社であってこそ、お客様にも本当の価値を届けられると考えています。
                    </p>
                    <p>
                        これからも、お客様、パートナー企業、従業員、そのご家族──<br>
                        T-TOPに関わるすべての方の幸福を追求する会社であり続けます。<br>
                        引き続きご愛顧のほどよろしくお願い申し上げます。
                    </p>
                    <p class="sign u-text-right">
                        株式会社T-TOP<br>
                        代表取締役
                        <span>村田 達也</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="p-message-values u-pt-large u-pb-xLarge" id="values">
    <div class="p-message-values__inner l-container">
        <hgroup class="p-message-values__title c-heading-02 is-animation is-animation--fadein u-mb-small u-text-center">
            <p class="sub">Our Values</p>
            <h2 class="main">大切にしている3つのこと</h2>
        </hgroup>
        <div class="c-number-list u-mt-medium">
            <div class="c-number-list__card">
                <p class="c-number-list__number">Value 01</p>
                <h3 class="c-number-list__title">人を、何より大切に。</h3>
                <p class="c-number-list__text u-word-keep">
                    お客様、社員、<wbr>パートナー<wbr>企業、<wbr>施工店——<wbr>関わる<wbr>すべての<wbr>人が<wbr>誇りを<wbr>持てる<wbr>関係を<wbr>築きます。
                </p>
            </div>
            <div class="c-number-list__card">
                <p class="c-number-list__number">Value 02</p>
                <h3 class="c-number-list__title">正しく、誠実に。</h3>
                <p class="c-number-list__text u-word-keep">
                    短期的な数字よりも、<wbr>長く<wbr>信頼される<wbr>事業運営を<wbr>優先<wbr>します。<wbr>法令遵守と<wbr>透明性を、<wbr>当たり前の<wbr>ものと<wbr>して<wbr>守ります。
                </p>
            </div>
            <div class="c-number-list__card">
                <p class="c-number-list__number">Value 03</p>
                <h3 class="c-number-list__title">本物の品質を、届ける。</h3>
                <p class="c-number-list__text u-word-keep">
                    商品ではなく、<wbr>品質と<wbr>信頼で<wbr>選ばれる<wbr>会社で<wbr>あり続ける<wbr>ために、<wbr>しくみと<wbr>人の<wbr>両面で<wbr>品質を<wbr>磨き<wbr>続けます。
                </p>
            </div>
        </div>
    </div>
</section>


<div class="l-container u-pb-xLarge">
    <div class="c-banner">
        <a href="<?php echo home_url('/quality/'); ?>" class="c-banner__link">
            <p class="c-banner__title">工事品質への追求</p>
            <p class="c-banner__text u-word-keep">
                設備は同じでも、工事の質で、<br class="u-hidden-small">暮らしは変わる——<br>
                T-TOPは、<wbr>施工店の<wbr>選び方<wbr>から<wbr>工事<wbr>当日の<wbr>管理まで、<wbr>独自の<wbr>しくみで<wbr>品質を<wbr>守って<wbr>います。
            </p>
            <span class="c-banner__btn c-primary-btn">
                <span class="c-primary-btn__text">View More</span>
                <span class="c-primary-btn__arrow"></span>
            </span>
            <span class="c-banner__en">QUALITY</span>
        </a>
    </div>

    <div class="c-banner u-mt-small">
        <a href="<?php echo home_url('/compliance/'); ?>" class="c-banner__link">
            <p class="c-banner__title">コンプライアンスの遵守</p>
            <p class="c-banner__text u-word-keep">
                正直であること——それが、<wbr>お客様に<wbr>選んで<wbr>いただく<wbr>理由——<br>
                T-TOPは、<wbr>ご契約・<wbr>対応から<wbr>現場の<wbr>安全管理まで、<wbr>誠実な<wbr>事業運営を<wbr>しくみとして<wbr>整えています。
            </p>
            <span class="c-banner__btn c-primary-btn">
                <span class="c-primary-btn__text">View More</span>
                <span class="c-primary-btn__arrow"></span>
            </span>
            <span class="c-banner__en">COMPLIANCE</span>
        </a>
    </div>
</div>


</main><!-- /#main -->
<!-- ▲main ================================================== -->

<?php get_footer(); ?>
