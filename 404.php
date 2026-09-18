<?php get_header(); ?>

<!-- main ================================================== -->
<main class="l-main">

<?php
    $mv_setting = array(
        "main_title" => 'ページが<br class="u-hidden-small">見つかりません',
        "sub_title" => '404 Not found',
        "bg_img_filename" => '404',
    );
?> 
<?php get_template_part( 'parts/sub-mv', null, $mv_setting ); ?>


<div class="l-container u-text-center u-mt-large u-pb-xLarge">
    <p class="u-text-medium">お探しのページが見つかりませんでした。<br>
URLが正しく入力されていない可能性がありますので、再度ご確認ください。</p>
    <div class="u-mt-large">
        <a href="<?php echo home_url('/');?>" class="c-primary-btn">
            <span class="c-primary-btn__text">トップページへ戻る</span>
            <span class="c-primary-btn__arrow"></span>
        </a>
    </div>
</div>



</main>
<!-- //main ================================================== -->


<?php get_footer(); ?>
