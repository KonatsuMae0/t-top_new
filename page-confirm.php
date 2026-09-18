<?php
/*
    Template Name: フォーム確認画面
*/
?>
<?php get_header(); ?>

<!-- main ================================================== -->
<main class="l-main">

<?php
    $main_title = get_field('main_title') ?? '';
    $sub_title = get_field('sub_title') ?? '';
    $form_shortcode = get_field('form_shortcode') ?? '';
?>

<?php
    //sub-mvSetting
    $mv_setting = array(
        "main_title" => $main_title,
        "sub_title" => $sub_title,
        "bg_img_filename" => 'contact',
    );
?>
<?php get_template_part( 'parts/sub-mv', null, $mv_setting ); ?>


<div class="p-form-section u-mt-large u-pb-xLarge">
    <div class="p-form-section__inner l-container">
        <p class="p-form-section__lead u-mb-medium">
            入力内容を確認後「送信」をクリックしてください。
        </p>

        <?php
            // フォームのショートコード
            echo do_shortcode($form_shortcode);
        ?>

    </div>
</div>

</main><!-- /#main -->
<!-- ▲main ================================================== -->


<?php get_footer(); ?>
