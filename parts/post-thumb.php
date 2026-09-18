<?php 
/*
    優先順位
    1.アイキャッチ画像
    2.投稿記事内の最初の画像
    3.No image
*/
?>
<?php if(get_the_post_thumbnail()):?>
    <?php the_post_thumbnail( 'medium', array( 'alt'=> get_the_title(), 'class'=>'u-brightness-105' ) );?>
<?php elseif(first_img_url()):?>
    <?php
        $img_url = first_img_url();
        $img_sizes = getimagesize($img_url);
    ?>
    <img class="u-brightness-105" src="<?php echo $img_url;?>" alt="<?php the_title();?>" <?php echo $img_sizes[3];?> loading="lazy">
<?php else:?>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/noimage.png" alt="No image" width="1440" height="960" loading="lazy">
<?php endif;?>