<?php
    $main_title = $args['main_title'] ?? '';
    $sub_title = $args['sub_title'] ?? '';
    $title_tag = $args['title_tag'] ?? '';
    $bg_img_filename = $args['bg_img_filename'] ?? 'business';

    if(!$title_tag) $title_tag = 'h1';
    if(!$main_title) $main_title = get_the_title();
?>

<div class="c-sub-mv is-mv">
    <div class="c-sub-mv__inner l-container is-animation is-animation--fadein">
        <?php if($sub_title):?>
            <p class="c-sub-mv__subtitle">
                <?php echo $sub_title;?>
            </p>
        <?php endif;?>
        <?php if($main_title):?>
            <<?php echo $title_tag;?> class="c-sub-mv__title">
                <?php echo $main_title;?>
            </<?php echo $title_tag;?>>
        <?php endif;?>
    </div>
    <div class="c-sub-mv__bg">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sub-mv/<?php echo $bg_img_filename;?>.webp" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/sub-mv/<?php echo $bg_img_filename;?>@1x.webp 1920w, <?php echo get_template_directory_uri(); ?>/assets/img/sub-mv/<?php echo $bg_img_filename;?>.webp 3840w" sizes="100vw" width="1920" height="460" fetchpriority="high" alt="">
        <span class="c-sub-mv__bg-right-corner"></span>
    </div>
    <div class="c-sub-mv__band"></div>
</div>


<?php get_template_part('parts/breadcrumb'); ?>
