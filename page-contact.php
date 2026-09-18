<?php get_header(); ?>

<!-- main ================================================== -->
<main class="l-main">

    <?php
        $kv_setting = array(
            'sub_title' => 'Contact',
            "bg_img_filename" => 'contact',
        );
        get_template_part( 'parts/sub-mv', null, $kv_setting); 
    ?>

    <div class="p-form-section u-mt-large u-pb-xLarge">
        <div class="p-form-section__inner l-container">
            <?php get_template_part('parts/form-att-list'); ?>

            <?php
                // フォームのショートコード
                echo do_shortcode('[contact-form-7 id="876b0434dd6b41793e753a1abe3e9f539b1caca3f4dda0173a7642b9d6deaeb3" title="お問い合わせ - 入力"]');
            ?>

        </div>
    </div>

</main><!-- /#main -->
<!-- ▲main ================================================== -->

<?php get_footer(); ?>