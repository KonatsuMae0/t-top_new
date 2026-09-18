<?php get_header(); ?>

<!-- main ================================================== -->
<main class="l-main">

<?php
    $mv_setting = array(
        "sub_title" => 'Business',
        "bg_img_filename" => 'business',
    );
?>
<?php get_template_part( 'parts/sub-mv', null, $mv_setting ); ?>


<section class="p-business-mission c-lead-section u-mt-xxLarge">
    <div class="p-business-mission__inner c-lead-section__inner l-container">
        <div class="c-lead-section__body">
            <hgroup class="c-lead-section__title c-heading-03 is-animation is-animation--fadein">
                <p class="sub">Our Mission</p>
                <h2 class="main u-word-keep">
                    私たちは、<wbr>設備を売る会社<wbr>ではありません。<br>
                    お客様の暮らしを、<wbr>長く支える会社です。
                </h2>
            </hgroup>
            <p class="c-lead-section__text">
                太陽光発電でも蓄電池でも、製品そのものはメーカーが作るもの。<br>
                どこで買っても、性能に大きな差はありません。<br>
                だからこそ私たちが大切にしているのは、設置後の暮らしです。<br>
                正しく設計し、丁寧に施工し、工事が終わったあとも責任を持って関わり続ける。<br>
                その積み重ねが、T-TOPへの信頼になると考えています。
            </p>
        </div>
        <div class="c-lead-section__img is-animation is-animation--imgfadein">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/business/mission.webp" alt="T-TOPのミッションイメージ" width="1834" height="1200" loading="lazy">
        </div>
    </div>
</section>


<section class="p-business-list u-mt-medium">
    <div class="p-business-list__inner l-container">
        <hgroup class="p-business-list__title c-heading-02 is-animation is-animation--fadein">
            <h2 class="main u-font-palt u-word-keep">「省エネ」を、<wbr>もっと体系的に考える。</h2>
            <p class="sub">Energy Flow</p>
        </hgroup>
        <p class="p-home-list__lead c-lead">
            一つの設備を入れれば解決する、という話ではありません。創る・蓄える・省く・管理する——<br>
            この4つが連動して初めて、本当の意味での省エネが実現します。T-TOPは、その全体設計から関わります。
        </p>
        <div class="c-icon-list u-mt-small">
            <div class="c-icon-list__card">
                <div class="icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/business/flow_icon01.svg" alt="" width="131" height="131" loading="lazy">
                </div>
                <h3 class="title">創エネ<small>Create</small></h3>
                <p class="text">
                    太陽光発電で自宅に電気を生み出す。光熱費削減と環境貢献を同時に実現。
                </p>
            </div>
            <div class="c-icon-list__card">
                <div class="icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/business/flow_icon02.svg" alt="" width="131" height="131" loading="lazy">
                </div>
                <h3 class="title">蓄エネ<small>Store</small></h3>
                <p class="text">
                    余剰電力を蓄電池に。夜間・停電時も電気が使える、暮らしの安心。
                </p>
            </div>
            <div class="c-icon-list__card">
                <div class="icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/business/flow_icon03.svg" alt="" width="131" height="131" loading="lazy">
                </div>
                <h3 class="title">省エネ<small>Save</small></h3>
                <p class="text">
                    高効率給湯器・IH・エネファームで消費エネルギーそのものを削減。
                </p>
            </div>
            <div class="c-icon-list__card">
                <div class="icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/business/flow_icon04.svg" alt="" width="131" height="131" loading="lazy">
                </div>
                <h3 class="title">見える化<small>Manage</small></h3>
                <p class="text">
                    HEMSで家全体のエネルギーを一元管理。無駄を発見し、最適化し続ける。
                </p>
            </div>
        </div>
    </div>
</section>


<section class="p-business-flow">
    <div class="p-business-flow__inner l-container">
        <h2 class="p-business-flow__title is-animation is-animation--fadein">Energy Flow</h2>

        <section class="p-business-flow-lead">
            <div class="p-business-flow-lead__body">
                <h3 class="p-business-flow-lead__title u-word-keep">創って、貯めて、<wbr>広げて、賢く使う。</h3>
                <p class="p-business-flow-lead__text u-word-keep">
                    太陽光発電・蓄電池・HEMS・V2Hを中心に、<br>
                    住まいに最適なエネルギーの<wbr>かたちをご提案します。
                </p>
            </div>
            <div class="p-business-flow-lead__img is-animation is-animation--imgfadein">
                <picture>
                    <source
                        type="image/webp"
                        media="(min-width: 1025px)"
                        srcset="<?php echo get_template_directory_uri(); ?>/assets/img/business/flow_main.webp">
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/business/flow_main_s.webp"
                        alt="Energy Flowの図"
                        width="926" height="714" loading="lazy">
                </picture>
            </div>
        </section>

        <div class="c-local-nav p-business-flow-nav">
            <a href="#solar" class="c-local-nav__btn u-word-keep"><span>太陽光発電<wbr>システム</span></a>
            <a href="#battery" class="c-local-nav__btn">蓄電池</a>
            <a href="#v2h" class="c-local-nav__btn">V2H</a>
            <a href="#hems" class="c-local-nav__btn">HEMS</a>
        </div>

        <div class="p-business-flow__container is-business-flow" id="solar">
            <div class="p-business-flow__body">
                <div class="p-business-flow__section is-business-flow__section">
                    <div class="p-business-flow__section-img is-business-flow__section-img is-animation is-animation--imgfadein u-hidden-large">
                        <picture>
                            <source
                                type="image/webp"
                                media="(min-width: 1025px)"
                                srcset="<?php echo get_template_directory_uri(); ?>/assets/img/business/flow01.webp">
                            <img
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/business/flow01_s.webp"
                                alt="太陽光発電システムの拡大図"
                                width="1160" height="1240" loading="lazy">
                        </picture>
                    </div>
                    <div class="p-business-flow__section-body">
                        <hgroup class="title">
                            <p class="sub">電気を創りだす</p>
                            <h3 class="main u-font-palt">「太陽光発電システム」</h3>
                        </hgroup>
                        <p class="text">
                            太陽光発電は屋根に設置したパネルで太陽の光を電気に変換するシステムです。<br>
                            発電した電気は家庭で使用し、余った電気は電力会社へ売ることもでき、電気の自給自足にぐっと近づきます。
                        </p>
                        <div class="merit c-check-list">
                            <h4 class="merit-title">導入のメリット</h4>
                            <dl class="c-check-list__list">
                                <div>
                                    <dt>電気代が安くなる</dt>
                                    <dd>日中の消費電力を自給自足できるため、電力会社から買う電気を減らせます。</dd>
                                </div>
                                <div>
                                    <dt>電気が売れる</dt>
                                    <dd>使い切れずに余った電気を電力会社に買い取ってもらうことが可能です。</dd>
                                </div>
                                <div>
                                    <dt>環境にやさしい暮らし</dt>
                                    <dd>発電時に CO2 を排出しないため、地球温暖化防止に直接貢献できます。</dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>

                <div class="p-business-flow__section is-business-flow__section" id="battery">
                    <div class="p-business-flow__section-img is-business-flow__section-img is-animation is-animation--imgfadein u-hidden-large">
                        <picture>
                            <source
                                type="image/webp"
                                media="(min-width: 1025px)"
                                srcset="<?php echo get_template_directory_uri(); ?>/assets/img/business/flow02.webp">
                            <img
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/business/flow02_s.webp"
                                alt="蓄電池の拡大図"
                                width="1160" height="1240" loading="lazy">
                        </picture>
                    </div>
                    <div class="p-business-flow__section-body">
                        <hgroup class="title">
                            <p class="sub">電気を蓄える</p>
                            <h3 class="main u-font-palt">「蓄電池」</h3>
                        </hgroup>
                        <p class="text">
                            蓄電池は、電気を貯めて、必要なときに使えるようにするシステムです。<br>
                            太陽光で発電した電気や、夜間の安い電気を蓄えておけるため、電気代の節約はもちろん、停電・災害時にもいつもどおりに電気が使える安心を、暮らしにもたらします。これからの住まいに欠かせない設備として、注目を集めています。
                        </p>
                        <div class="merit c-check-list">
                            <h4 class="merit-title">導入のメリット</h4>
                            <dl class="c-check-list__list">
                                <div>
                                    <dt>停電時でも電気が使える</dt>
                                    <dd>万が一の震災や台風による停電時でも、自動または手動で蓄電池からの給電に切り替わり、冷蔵庫や照明、スマホの充電などが維持できます。</dd>
                                </div>
                                <div>
                                    <dt>電気を安く買える</dt>
                                    <dd>もし昼間の発電だけで蓄電池が満タンにならなくても、電気代の安い時間帯に、電力会社から電気を購入して充電することが可能になり、電気代の節約に繋がります。</dd>
                                </div>
                                <div>
                                    <dt>電気の自給自足を目指せる</dt>
                                    <dd>太陽光発電システムと一緒に導入すれば、昼間に太陽光で創った電気を夜に回せるため、買電量をさらに抑えられます。</dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>

                <div class="p-business-flow__section is-business-flow__section" id="v2h">
                    <div class="p-business-flow__section-img is-business-flow__section-img is-animation is-animation--imgfadein u-hidden-large">
                        <picture>
                            <source
                                type="image/webp"
                                media="(min-width: 1025px)"
                                srcset="<?php echo get_template_directory_uri(); ?>/assets/img/business/flow03.webp">
                            <img
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/business/flow03_s.webp"
                                alt="V2Hの拡大図"
                                width="1160" height="1240" loading="lazy">
                        </picture>
                    </div>
                    <div class="p-business-flow__section-body">
                        <hgroup class="title">
                            <p class="sub">電気を広げる</p>
                            <h3 class="main u-font-palt">「V2H」</h3>
                        </hgroup>
                        <p class="text">
                            電気自動車に蓄えた電気を、家庭の電気として使えるようにするシステムです。<br><br>
                            昼間は太陽光発電でつくった電気を電気自動車に充電し、夜間はその電気を家庭で使用する、そんな新しいエネルギーの使い方が可能になります。<br><br>
                            停電時にも、電気自動車のバッテリーから家庭へ電気を送ることができ、災害時の非常用電源としても活躍します。電気代・燃料費の節約と、もしものの備えを両立する設備として、これからの住まいに広がっています。
                        </p>
                        <div class="merit c-check-list">
                            <h4 class="merit-title">導入のメリット</h4>
                            <dl class="c-check-list__list">
                                <div>
                                    <dt>電気代が安くなる</dt>
                                    <dd>電気料金が安い深夜帯に車を充電し、車から家へ電気を送ることで電気代の大幅な節約が期待できます。更に太陽光をつけている場合は、余剰電力を安い売電単価で売るのではなく、電気自動車に回すことでガソリン代の節約にもなります。</dd>
                                </div>
                                <div>
                                    <dt>停電時でも電気が使える</dt>
                                    <dd>災害による停電時にも、電気自動車のバッテリーに蓄電している電気を家庭に送ることで、家電を使うことができるため、安心して暮らすことができます。</dd>
                                </div>
                                <div>
                                    <dt>環境にやさしい暮らし</dt>
                                    <dd>電力使用ピークの夏場にV2Hシステムで、電気自動車に蓄えた電気を使うことで、電力会社の負担を抑えることができます。そのため、環境にもやさしいシステムです。</dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>

                <div class="p-business-flow__section is-business-flow__section" id="hems">
                    <div class="p-business-flow__section-img is-business-flow__section-img is-animation is-animation--imgfadein u-hidden-large">
                        <picture>
                            <source
                                type="image/webp"
                                media="(min-width: 1025px)"
                                srcset="<?php echo get_template_directory_uri(); ?>/assets/img/business/flow04.webp">
                            <img
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/business/flow04_s.webp"
                                alt="HEMSの拡大図"
                                width="1160" height="1240" loading="lazy">
                        </picture>
                    </div>
                    <div class="p-business-flow__section-body">
                        <hgroup class="title">
                            <p class="sub">電気を賢く使う</p>
                            <h3 class="main u-font-palt">「HEMS」</h3>
                        </hgroup>
                        <p class="text">
                            HEMSは「Home Energy Management System（ホーム エネルギー マネジメント システム）」の略です。<br>
                            家電や電気設備とつないで、エネルギーの使用量をモニター画面で「見える化」し、節約するための管理システムで、家電機器のエネルギーを自動制御することも可能です。<br>
                            また、パソコンやタブレット、スマートフォンで家全体のエネルギー使用量を視覚的に確認できるうえに、電気使用料だけでなくガスや水道の使用量も見ることができ、節電意識のアップにも繋がります。
                        </p>
                        <div class="merit c-check-list">
                            <h4 class="merit-title">導入のメリット</h4>
                            <dl class="c-check-list__list">
                                <div>
                                    <dt>電気の「見える化」で管理が楽に</dt>
                                    <dd>家電ごとの電気使用量や太陽光の発電量がリアルタイムで可視化できるため、家族の節電意識が自然と高まります。</dd>
                                </div>
                                <div>
                                    <dt>自動で賢く節約</dt>
                                    <dd>翌日の天気予報や過去の電気使用パターンを分析し、一番お得なタイミングで充電や家電の運転を自動コントロール。手動で操作する手間なく、賢く電気代を削減できます。</dd>
                                </div>
                                <div>
                                    <dt>スマホで「どこでも一括操作」</dt>
                                    <dd>外出先からでもスマホひとつでエアコンのオン・オフや消し忘れた照明のカットが可能に。</dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>

            <div class="p-business-flow__gallery is-business-flow__gallery is-animation is-animation--imgfadein" aria-hidden="true">
                <div class="p-business-flow__gallery-img is-business-flow__gallery-img is-active">
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/business/flow01.webp"
                        alt="太陽光発電の拡大図"
                        width="1160" height="1240" loading="lazy">
                </div>
                <div class="p-business-flow__gallery-img is-business-flow__gallery-img">
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/business/flow02.webp"
                        alt="蓄電池の拡大図"
                        width="1160" height="1240" loading="lazy">
                </div>
                <div class="p-business-flow__gallery-img is-business-flow__gallery-img">
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/business/flow03.webp"
                        alt="V2Hの拡大図"
                        width="1160" height="1240" loading="lazy">
                </div>
                <div class="p-business-flow__gallery-img is-business-flow__gallery-img">
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/business/flow04.webp"
                        alt="HEMSの拡大図"
                        width="1160" height="1240" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>


<section class="p-business-support u-pt-xLarge u-pb-xLarge">
    <div class="p-business-support__inner l-container">
        <hgroup class="p-business-support__title c-heading-02 is-animation is-animation--fadein">
            <h2 class="main u-word-keep u-word-keep">
                大切なのは、<wbr>工事のあとのお付き合い。
            </h2>
            <p class="sub">After Support</p>
        </hgroup>
        <p class="p-business-support__lead c-lead u-font-palt">
            設備は、設置して終わりではありません。10年・20年と長く使うものだからこそ、工事のあと、いつでも相談できる相手がいることが何より大切だと考えています。<br>
            T-TOPは、工事のあとも変わらずお客様のそばにいます。
        </p>
        <div class="c-number-list u-mt-medium">
            <div class="c-number-list__card">
                <p class="c-number-list__number">Support 01</p>
                <h3 class="c-number-list__title">定期点検・メンテナンス</h3>
                <p class="c-number-list__text">
                    設備は使い続けるほど、小さな変化が積み重なります。<br>
                    定期的な点検で異常を早期に発見し、長く安心して使い続けられる状態を保ちます。
                </p>
            </div>
            <div class="c-number-list__card">
                <p class="c-number-list__number">Support 02</p>
                <h3 class="c-number-list__title">故障・緊急時の対応</h3>
                <p class="c-number-list__text">
                    何かあったとき、すぐに連絡できる相手がいる。それだけで、暮らしの安心は変わります。<br>
                    施工を担当したスタッフが状況を把握しているため、初動が早く、的確な対応が可能です。
                </p>
            </div>
            <div class="c-number-list__card">
                <p class="c-number-list__number">Support 03</p>
                <h3 class="c-number-list__title">補助金・制度の最新情報</h3>
                <p class="c-number-list__text">
                    省エネ設備に関する補助金や税制優遇は、毎年変化します。「知らなかった」で損をしないよう、お客様に関係する情報はT-TOPから積極的にお伝えします。
                </p>
            </div>
        </div>
    </div>
</section>

</main><!-- /#main -->
<!-- ▲main ================================================== -->

<?php get_footer(); ?>
