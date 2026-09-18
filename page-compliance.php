<?php get_header(); ?>

<!-- main ================================================== -->
<main class="l-main">

<?php
    $mv_setting = array(
        "sub_title" => 'Compliance',
        "bg_img_filename" => 'compliance',
    );
?>
<?php get_template_part( 'parts/sub-mv', null, $mv_setting ); ?>


<section class="p-compliance-commitment c-lead-section u-mt-xLarge">
    <div class="p-compliance-commitment__inner c-lead-section__inner l-container">
        <div class="c-lead-section__body">
            <hgroup class="c-lead-section__title c-heading-03 is-animation is-animation--fadein">
                <p class="sub">Our Commitment</p>
                <h2 class="main u-word-keep">
                    お客様目線で、考えること。<br>
                    それが、お客様に<wbr>選ばれ続ける理由です。
                </h2>
            </hgroup>
            <p class="c-lead-section__text">
                T-TOPは、お客様に長くお付き合いいただくために、<br class="u-visible-xLarge">誠実な事業運営を何より大切にしています。<br>
                正確な情報をお伝えすること、お客様の不安に丁寧に向き合うこと、<br class="u-visible-xLarge">現場で安全に工事を進めること——<br>
                その一つひとつを、しくみとして整え、社員一人ひとりに浸透させています。
            </p>
        </div>
        <div class="c-lead-section__img is-animation is-animation--imgfadein">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/compliance/commitment.webp" alt="T-TOPのコンプライアンスへの取り組みイメージ" width="1834" height="1200" loading="lazy">
        </div>
    </div>
</section>


<section class="p-compliance-approach u-pt-medium u-pb-xxLarge">
    <div class="p-compliance-approach__inner l-container">
        <hgroup class="p-compliance-approach__title c-heading-02 is-animation is-animation--fadein">
            <h2 class="main u-word-keep">
                誠実さを、しくみで守る。
            </h2>
            <p class="sub">Our Approach</p>
        </hgroup>
        <p class="p-compliance-approach__lead c-lead">
            T-TOPのコンプライアンスは、大きく2つの軸で構成されています。<br>
            お客様との契約・対応における誠実さと、現場で工事を進める際の安全・環境への配慮。<br>
            それぞれをしくみとして整備しています。
        </p>
        <div class="c-icon-list p-compliance-approach__list u-mt-small">
            <a href="#p-compliance-contract" class="c-icon-list__card c-icon-list__card--has-btn">
                <div class="icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/compliance/approach_icon01.svg" alt="" width="131" height="131" loading="lazy">
                </div>
                <h3 class="title u-word-keep"><span>契約・顧客対応<wbr>における<br>コンプライアンス</span></h3>
                <p class="text">
                    特定商取引法をはじめとした法令を遵守し、お客様に正確な情報をお伝えすること。個人情報を適切に取り扱い、お客様にご安心いただける対応を徹底しています。
                </p>
                <span class="btn">View More</span>
            </a>
            <a href="#p-compliance-safety" class="c-icon-list__card c-icon-list__card--has-btn">
                <div class="icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/compliance/approach_icon02.svg" alt="" width="131" height="131" loading="lazy">
                </div>
                <h3 class="title">現場・工事における<br>安全と環境保全</h3>
                <p class="text">
                    工事に関わる全員の安全を守り、近隣の方々や環境への配慮を欠かさないこと。現場での一つひとつの行動をしくみで支えています。
                </p>
                <span class="btn">View More</span>
            </a>
        </div>
    </div>
</section>


<section id="p-compliance-contract" class="p-compliance-contract c-quality-section u-bg-color-02 u-pt-xLarge u-pb-xLarge">
    <div class="c-quality-section__inner l-container">
        <div class="c-quality-section__head">
            <h2 class="c-quality-section__title is-animation is-animation--fadein u-word-keep">
                <span class="number">01</span><span>契約・顧客対応における<wbr>コンプライアンス</span>
            </h2>
            <h3 class="c-quality-section__lead is-animation is-animation--fadein">
                正確に伝える。適切に守る。
            </h3>
        </div>
        <div class="c-quality-section__wrapper">
            <div class="c-quality-section__body">
                <p class="c-quality-section__text">
                    お客様にご納得いただいたうえでご契約いただくこと、<br>
                    いただいた個人情報を大切に扱うこと。当たり前のことを、当たり前に。<br>
                    T-TOPは、その姿勢をしくみとして整えています。
                </p>
                <div class="c-check-list">
                    <dl class="c-check-list__list">
                        <div>
                            <dt>特定商取引法の遵守</dt>
                            <dd>クーリングオフのご説明、契約書面の確実な交付、商品・契約条件についての正確な説明を徹底し、お客様との丁寧なすり合わせを行っています。</dd>
                        </div>
                        <div>
                            <dt>お客様対応の記録管理</dt>
                            <dd>お電話でのお問い合わせ・ご相談は記録管理し、ご訪問後はお客様アンケートでお声を伺うことで、対応品質の継続的な向上に活かしています。</dd>
                        </div>
                        <div>
                            <dt>プライバシーマークの認定取得</dt>
                            <dd class="p-compliance-contract__privacy">
                                <p>個人情報の使用は社内での取り扱いも徹底。目的の範囲内でのみ利用し、法令で定められた場合を除き第三者に提供することはありません。</p>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/pmark.png" alt="プライバシーマーク" width="90" height="90" loading="lazy">
                            </dd>
                        </div>
                        <div>
                            <dt>定期的なコンプライアンス研修</dt>
                            <dd>全社員を対象とした研修を定期的に実施。法令や対応マナーへの理解を、継続的に深めています。</dd>
                        </div>
                    </dl>
                </div>
                <p class="c-quality-section__summary u-word-keep">
                    「お客様に正確に伝える」ことは、<wbr>信頼の基本だと<wbr>考えています。
                </p>
            </div>
            <div class="c-quality-section__img is-animation is-animation--imgfadein">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/compliance/contract.webp" alt="契約・顧客対応におけるコンプライアンスのイメージ" width="1240" height="1240" loading="lazy">
            </div>
        </div>
    </div>
</section>


<section id="p-compliance-safety" class="p-compliance-safety c-quality-section u-pt-xLarge u-pb-xLarge">
    <div class="c-quality-section__inner l-container">
        <div class="c-quality-section__head">
            <h2 class="c-quality-section__title is-animation is-animation--fadein u-word-keep">
                <span class="number">02</span><span>現場・工事における<wbr>安全と環境保全</span>
            </h2>
            <h3 class="c-quality-section__lead u-word-keep is-animation is-animation--fadein">
                現場で働く人を、<wbr>近隣の方々を、<wbr>環境を守る。
            </h3>
        </div>
        <div class="c-quality-section__wrapper">
            <div class="c-quality-section__body">
                <p class="c-quality-section__text">
                    工事は、お客様だけでなく、近隣の方々や、現場で働く施工スタッフ、<br>
                    そして地域環境にも関わるものです。<br>
                    T-TOPは、すべての関係者にとって安心できる現場であるためのしくみを整えています。
                </p>
                <div class="c-check-list">
                    <dl class="c-check-list__list">
                        <div>
                            <dt>現場の安全管理体制</dt>
                            <dd>KY活動（危険予知）の実施、保護具の着用確認、作業手順の遵守。現場で働く人の安全を、組織的に守っています。</dd>
                        </div>
                        <div>
                            <dt>近隣の方々への配慮</dt>
                            <dd>工事前のご挨拶、騒音・振動への配慮、適切な養生など、近隣にお住まいの方にもご安心いただける現場運営を心がけています。</dd>
                        </div>
                        <div>
                            <dt>廃棄物・産業廃棄物の適正処理</dt>
                            <dd>工事で発生する廃棄物は、関連法令に従い適正に処理しています。</dd>
                        </div>
                        <div>
                            <dt>環境への配慮</dt>
                            <dd>太陽光や蓄電池など、私たちが扱う商材そのものが環境負荷の低減に貢献するもの。事業運営自体も、地球環境への配慮を意識しています。</dd>
                        </div>
                    </dl>
                </div>
                <p class="c-quality-section__summary u-word-keep">
                    現場に関わるすべての人に、<wbr>安心していただくこと。<br>
                    それが、私たちの責任だと考えています。
                </p>
            </div>
            <div class="c-quality-section__img is-animation is-animation--imgfadein">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/compliance/safety.webp" alt="現場・工事における安全と環境保全のイメージ" width="1240" height="1240" loading="lazy">
            </div>
        </div>
    </div>
</section>


<div class="l-container u-mb-xxLarge">
    <div class="c-banner">
        <a href="<?php echo home_url('/quality/'); ?>" class="c-banner__link">
            <p class="c-banner__title">工事品質への取り組み</p>
            <p class="c-banner__text u-word-keep">
                コンプライアンスと並び、<wbr>T-TOPが<wbr>大切に<wbr>している<wbr>のが<wbr>工事品質です。<br>
                施工店の評価制度や、<wbr>工事当日の<wbr>管理など、<wbr>品質を<wbr>守る<wbr>しくみも<wbr>あわせて<wbr>ご覧ください。
            </p>
            <span class="c-banner__btn c-primary-btn c-primary-btn--en">
                <span class="c-primary-btn__text">View More</span>
                <span class="c-primary-btn__arrow"></span>
            </span>
            <span class="c-banner__en">QUALITY</span>
        </a>
    </div>
</div>


</main><!-- /#main -->
<!-- ▲main ================================================== -->

<?php get_footer(); ?>
