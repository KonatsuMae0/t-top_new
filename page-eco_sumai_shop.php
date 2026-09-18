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

    

<div id="eco_sumai_shop">
<section class="hero">
  <div class="hero_container">
    <picture>
  <!-- スマホ用の画像（画面幅が768px以下の時に表示） -->
  <source media="(max-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/eco_sumai_shop/img/main_img_sp.png">
  <!-- PC用の画像-->
  <img src="<?php echo get_template_directory_uri(); ?>/eco_sumai_shop/img/main_img.png" alt="家族写真">
</picture>
    <div class="hero_cnt">
      <img src="<?php echo get_template_directory_uri(); ?>/eco_sumai_shop/img/osaka_gas_logo.png" alt="大阪ガス エコ住まい特約店" width="338" height="129" class="osaka-gus_logo">
      <p class="hero-copy">
      「大阪ガスエコ住まい特約店」とは、<br class="br_tb">大阪ガスが提供する太陽光発電サービスの『スマイルーフ』の<br class="br_tb">販売施工を行う、大阪ガスの特約店です。
    </p>
    <div class="hero-btn"><a href="https://home.osakagas.co.jp/housing/eco_sumai_shop/index.html" target="_blank">大阪ガス特約店一覧はこちら</a></div>
    <p class="hero-btn-text">※大阪ガス株式会社の公式サイトへ移動します。</p>
    </div>
  </div>
</section>
<section class="intro">
  <div class="container">
    <h2 class="section-title">
      災害時も、<br>
      家族の日常を守り続ける家
    </h2>
    <p>
      10年以上のガス会社様をはじめとするインフラ系企業様との活動において、非常時でも皆さまの快適な暮らしを守るための新たな取り組みを株式会社T-TOPとしてスタートいたしました。<br>
      避難所へ行かずに住み慣れた我が家で過ごせる『在宅避難ができる家づくり』を推進し、ガスの復旧方法や災害対策の方法などの暮らしに役立つ情報をご提供しております。
    </p>
    <div class="stats">
      <div class="stat-box">
        <div>
        <p>累計提携先企業数</p>
        <span class="big">16</span><span class="stat-small">&nbsp;件</span>
        </div>
      </div>
      <div class="stat-box">
        <div>
        <p>災害対策情報提供件数</p>
        <span class="stat-small">約</span><span class="big">15,000</span><span class="stat-small">&nbsp;件以上</span>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="preparedness">
  <div class="container">
    <div class="block-head">
      <!--<h2>自宅が、そのまま避難所に。</h2>-->
      <p class="lead">
        住み慣れた家で過ごし続けるためには、食料などの備えに加え、<br class="br_tb">インフラの停止に備えた住まいの機能が不可欠です。<br>断水や停電が起きても、家族の笑顔を守るために、<br class="br_tb">私たちが大切だと考える『３つの備え』をご紹介します。
      </p>
    </div>
    <div class="card">
      <p class="card-label">在宅避難を可能にする</p>
      <p class="card-label-ttl">3つの備え</p>
      <div class="three-icons">
        <div class="icon-item">
          <p>ガス</p>
          <div class="icon-circle"><img src="<?php echo get_template_directory_uri(); ?>/eco_sumai_shop/img/icon_gas.png" alt="" width="150" height="150"></div>
        </div>
        <div class="icon-item">
          <p>生活用水</p>
          <div class="icon-circle"><img src="<?php echo get_template_directory_uri(); ?>/eco_sumai_shop/img/icon_water.png" alt="" width="150" height="150"></div>
        </div>
        <div class="icon-item">
          <p>電気</p>
          <div class="icon-circle"><img src="<?php echo get_template_directory_uri(); ?>/eco_sumai_shop/img/icon_denki.png" alt="" width="150" height="150"></div>
        </div>
      </div>

      <div class="feature">
        <div class="feature-tag">その1</div>
        <div class="feature-head">
          <img src="<?php echo get_template_directory_uri(); ?>/eco_sumai_shop/img/icon_gas.png" alt="" width="72" height="72">
          <p class="ttl">ガス</p>
          <div class="feature-pill">湯沸かしや調理などの時に必要！</div>
        </div>
        <div class="feature-text">
          避難生活において、大きなストレスとなるのが『温かい食事がとれない』『お湯が使えない』といった、いまの『当たり前』がなくなることです。<br>大地震が起こると、ガスが自動停止することはご存知ですか？<br>ガスメーターには、震度5相当以上の揺れを感知すると二次災害を防ぐために自動遮断する仕組みが備わっています。<br>万が一の際にも落ち着いて対応できるよう、今のうちにメーターの復旧方法を確認しておきましょう。
        </div>
        <div class="feature-box_block">
          <p class="ttl">ボタンひとつで復旧可能に</p>
        <div class="feature-box img-group">
          <div><img src="<?php echo get_template_directory_uri(); ?>/eco_sumai_shop/img/gas_img01.png" alt="" width="260" height="auto">
          </div>
          <div>
          <img src="<?php echo get_template_directory_uri(); ?>/eco_sumai_shop/img/gas_img02.png" alt="" width="260" height="auto"></div>
        </div>
      </div>

      <div class="feature">
        <div class="feature-tag">その2</div>
        <div class="feature-head">
          <img src="<?php echo get_template_directory_uri(); ?>/eco_sumai_shop/img/icon_water.png" alt="" width="72" height="72">
          <p class="ttl">生活用水</p>
          <div class="feature-pill">飲料水、トイレ、シャワーなどに必要！</div>
        </div>
        <div class="feature-text">災害時、ライフラインの中で最も復旧に時間がかかると言われているのが「水」です。<br>国が推奨する飲料水の備蓄は、1人あたり1日3リットル。最低でも3日分（9リットル）は、家族の人数分を常にストックしておく必要があります。<br>また、飲み水と同じくらい深刻なのが、トイレなどの「使う水」の問題です。<br>避難所の不衛生なトイレを避けようと水分摂取を控え、体調を崩してしまう二次被害は後を絶ちません。<br>「飲む水」は備蓄で守り、「使う水」はエコキュートのタンクや湯船の溜め置きで補う。この両輪の備えがあってこそ、断水下でも家族の健康と尊厳を守り抜くことができるのです。
        </div>
        <div class="feature-box_block">
        <div class="feature-box">
          <div>
            <p class="ttl">断水時の強い味方。<br>エコキュートの水を「生活用水」に。</p>
            <p class="text">
              万が一の断水時、頼りになるのがエコキュートの貯湯タンクです。タンク内には約370リットル※（ポリタンク約18個分以上）もの水が常に蓄えられており、非常用の取水口から取り出すことで、トイレの洗浄や体拭きなどの生活用水として活用できます。
            </p>
            <p class="notion">※タンク容量により異なります。<br>※飲用には適しませんのでご注意ください。</p>
          </div>
          <img src="<?php echo get_template_directory_uri(); ?>/eco_sumai_shop/img/water_img01.png" alt="" width="260" height="auto">
        </div>
      </div>

      <div class="feature">
        <div class="feature-tag">その3</div>
        <div class="feature-head">
          <img src="<?php echo get_template_directory_uri(); ?>/eco_sumai_shop/img/icon_denki.png" alt="" width="72" height="72">
          <p class="ttl">電気</p>
          <div class="feature-pill">照明、冷蔵庫の維持、スマホの充電、冷暖房の稼働に必要！</div>
        </div>
        <div class="feature-text">実は、被災した方が避難所へ向かう大きな理由の一つに、在宅生活を困難にする「停電」があります。<br>過去の震災でも数日間にわたる停電が各地で発生しました。<br>「夜が真っ暗で過ごせない」「スマートフォンの充電が切れて情報が得られない」という切実な問題は、住み慣れた家を離れる決断をせざるを得ないほど深刻です。<br>そこで今、注目されているのが、家で電気を「創り、貯める」仕組みです。<br>太陽光パネルと蓄電池を備えた住まいなら、停電を検知して自動で電気が切り替わり、夜になってもお部屋に明かりが灯り続けます。
        </div>
        <div class="feature-box_block">
        <div class="feature-box">
          <div>
            <p class="ttl">「蓄電池」で停電時でも<br>日常を諦めないために。</p>
            <p class="text">
              蓄電池とは、その名の通り「電気を貯めておくための大きなバッテリー」のことです。 太陽光で創った電気を貯めておくことで、停電時でも日が落ちてからの「夜の暮らし」を支えます。暗闇の不安を解消し、住み慣れたわが家で家族が安心して眠れる環境を整えます。
            </p>
            <p class="notion">※非常時に使用できるのは、事前に計画した特定のコンセントやスイッチのみとなります。同時に使える家電には限りがあるため、蓄電池の残量に注意しながらお使いください。なお、安全上の理由から、生命に関わる医療機器などの接続はできません。蓄電池の電力がなくなった場合は使用できなくなりますので、日頃からの備えと管理が大切です。</p>
          </div>
          <img src="<?php echo get_template_directory_uri(); ?>/eco_sumai_shop/img/denki_img01.png" alt="" width="260" height="auto">
        </div>
        <div class="feature-box">
          <div>
            <p class="ttl">「太陽光発電システム」で<br>停電時でも安心。</p>
            <p class="text">災害による停電が発生しても、太陽が出ている間は創り出した電気をそのままご自宅で活用いただけます。周囲が暗い状況でも、太陽光発電があれば日中の「生活の質」を維持し、家族を守る力になります。
            </p>
            <p class="notion">※発電量は天候に左右されます。より確実な備えには蓄電池の併用をおすすめします。</p>
          </div>
          <img src="<?php echo get_template_directory_uri(); ?>/eco_sumai_shop/img/denki_img02.png" alt="" width="260" height="auto">
        </div>
      </div>
     
    </div>
  </div>
</section>
<section class="reality">
  <div class="container">
    <div class="block-head">
      <h2>今、知っておくべき <br class="br_sp"><span>避難の現実</span></h2>
    </div>
    <div class="card">
      <p class="reality-lead">避難所はあくまで緊急避難場所。<br class="sp">そこでの生活は想像以上に過酷です。</p>
      <div class="bubble-grid">
        <div class="bubble">自由に流せないトイレ<br>浴びられないシャワー</div>
        <div class="bubble">絶えない物音<br>止まない話し声</div>
        <div class="bubble">ペットと離ればなれ</div>
        <div class="bubble">晒されるプライバシーと<br>女性や子供、高齢者の不安</div>
      </div>
      <div class="photo-grid">
        <img src="<?php echo get_template_directory_uri(); ?>/eco_sumai_shop/img/evacuation_img01.png" alt="避難所の様子" width="220" height="auto">
        <img src="<?php echo get_template_directory_uri(); ?>/eco_sumai_shop/img/evacuation_img02.png" alt="避難所の様子" width="220" height="auto">
        <img src="<?php echo get_template_directory_uri(); ?>/eco_sumai_shop/img/evacuation_img03.png" alt="避難所の様子" width="220" height="auto">
      </div>
      <div class="chart-area">
        <div>
          <p class="ttl">見過ごせない「二次被害」の現実。<br>震災関連死は、<span>直接死の約4倍</span>にものぼります。</p>
          <p class="text">
            震災による犠牲者の多くは、揺れそのものではなく、
            その後の過酷な避難生活による体調悪化や精神的ストレスが原因だと言われています。
          </p>
          <p class="notion">●出典：内閣府非常災害対策本部「熊本県熊本地方を震源とする地裏に係る被害状況等について」（2019年4月12日）、熊本県危機管理防災課熊本地震等に係る被害状況等について【第306報】（2020年10月13日）
          </p>
        </div>
        <div class="chart-circle"><img src="<?php echo get_template_directory_uri(); ?>/eco_sumai_shop/img/data01.png" alt="避難所の様子" width="307" height="auto"></div>
      </div>
    </div>
  </div>
</section>
<section class="cta">
  <div class="container">
    <div class="cta-box">
    <h2>
      もしもの時でも、自宅で安心して過ごせるよう<br class="br_tb">災害対策の「正しい知識」と「設備」の導入をしましょう！
    </h2>
    <p>
      ※住まいのエネルギー自給自足により、万が一の際もご自宅での生活継続を支える株式会社T-TOP独自のライフスタイル提案です。<br>あらゆる災害状況下での在宅避難を保証するものではありません。<br>発災時は国や自治体からの避難情報に十分留意し、周囲の状況に応じた適切な行動をお願いいたします。
    </p>
    </div>
  </div>

  <div id="pp" class="container">
    <p class="eco_privacy-policy_ttl">大阪ガスエコ住まい<br class="br_sp">特約店事業における<br>個人情報の共同利用について</p>
    <div class="eco_privacy-policy">

    <p>株式会社T-TOP（以下「当社」といいます）は、大阪ガスエコ住まい特約店事業（以下「本事業」といいます）においてお客さまからご提供いただいた個人情報（以下「お客さま情報」といいます）を、個人情報の保護に関する法律第27条第5項第3号に基づき、以下のとおり共同利用いたします。</p>

    <p>本項の定めは、当社「<a href="https://www.ttop-inc.co.jp/privacy/" target="_blank" rel="noopener noreferrer">プライバシーポリシー</a>」の一部を構成し、本事業におけるお客さま情報の取り扱いについて特有の定めとして適用されます。本項に定めのない事項については、当社プライバシーポリシーの定めによります。</p>

    <p class="ttl">1. 共同して利用するお客さま情報の項目</p>
    <ul>
        <li>お客さまの氏名、生年月日・年齢、性別、住所、電話番号、メールアドレス、家族構成、ご自宅に関する情報、その他お客さまご自身に関する情報</li>
        <li>当社が販売する製品の契約に関する情報</li>
        <li>訪問履歴、お問い合わせ・ご相談の内容、当社および共同利用者のWEBサイトの閲覧履歴その他お客さまとのコンタクトに関する情報</li>
    </ul>

    <p class="ttl">2. 共同して利用する者の範囲</p>
    <ul>
        <li>当社</li>
        <li>大阪ガス株式会社</li>
        <li>大阪ガスマーケティング株式会社</li>
    </ul>

    <p class="ttl">3. 共同利用における利用目的</p>
    <ol>
        <li>ガス機器・住宅設備機器等の販売、施工、修理およびアフターサービスの実施のため</li>
        <li>保安・点検業務の実施およびそのご案内のため</li>
        <li>商品・サービス・キャンペーン等に関する情報のご案内（訪問、郵送、電話、電子メール等によるものを含みます）のため</li>
        <li>商品・サービスの開発・改善のための調査・分析のため</li>
        <li>上記1〜4に付随する業務の遂行のため</li>
    </ol>

    <p class="ttl">4. お客さま情報の管理について責任を有する者</p>
    
    <div class="sub-section">
        <p><strong>お客さまとのコンタクトに関する情報（第1項第3号の情報）について：</strong><br>
        当該お客さま情報を一次的に取得した共同利用者が管理責任を負います。各共同利用者の名称・住所・代表者の氏名は以下のとおりです。</p>

        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>名称</th>
                        <th>住所</th>
                        <th>代表者の氏名</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>株式会社T-TOP</td>
                        <td>大阪府大阪市中央区博労町3丁目5-1 御堂筋グランタワー18F</td>
                        <td>代表取締役 村田 達也</td>
                    </tr>
                    <tr>
                        <td>大阪ガスマーケティング株式会社</td>
                        <td>大阪市中央区平野町四丁目1番2号</td>
                        <td>代表取締役 森崎 健志</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="sub-section">
        <p><strong>上記以外のお客さま情報について：</strong></p>
        <p>
            株式会社T-TOP<br>
            住所：大阪府大阪市中央区博労町3丁目5-1 御堂筋グランタワー18F<br>
            代表者：代表取締役 村田 達也
        </p>
    </div>

    <p class="ttl">5. お問い合わせ窓口</p>
    <p>本事業におけるお客さま情報の取り扱い（開示、訂正、利用停止等のご請求を含みます）に関するお問い合わせは、下記までお願いいたします。</p>
    
    <div class="contact-box">
        <p><strong>株式会社T-TOP 大隅裕人</strong></p>
        <p>電話：06-6120-1133（受付時間：平日9:00～18:00）</p>
        <p>問い合わせフォーム：<a href="https://www.ttop-inc.co.jp/contact/" target="_blank" rel="noopener noreferrer">https://www.ttop-inc.co.jp/contact/</a></p>
    </div>

    <p class="ttl">6. 本ページの改定について</p>
    <p>本ページの内容は、法令の改正その他の事情により変更することがあります。変更した場合は、当社WEBサイトへの掲載その他の適切な方法により公表いたします。</p>
    <div class="date">
        制定日：2026年4月28日
    </div>
    </div>
</div>
</section>
</div>
</div>

<?php // ======================== コンテンツ：終了 ======================== ?>


</main><!-- /#main -->
<!-- ▲main ================================================== -->

<?php get_footer(); ?>
