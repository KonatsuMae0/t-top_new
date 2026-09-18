<?php
/*
    Template Name: フォーム完了画面
*/
?>
<?php get_header(); ?>

<!-- main ================================================== -->
<main class="l-main">

<?php
    $main_title = get_field('main_title') ?? '';
    $sub_title = get_field('sub_title') ?? '';
    $heading = get_field('heading') ?? '';
    $message = get_field('message') ?? '';
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
        <?php if($heading):?>
            <h2 class="p-form-section__title"><?php echo $heading;?></h2>
        <?php endif;?>
        <?php if($message):?>
            <div class="p-form-section__lead"><?php echo $message;?></div>
        <?php endif;?>
        <div class="u-text-center u-mt-large">
            <a href="<?php echo home_url('/');?>" class="c-primary-btn">
                <span class="c-primary-btn__text">トップページへ戻る</span>
                <span class="c-primary-btn__arrow"></span>
            </a>
        </div>

    </div>
</div>

</main><!-- /#main -->
<!-- ▲main ================================================== -->


<?php get_footer(); ?>
