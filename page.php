<?php get_header(); ?>


<!-- main ================================================== -->
<main class="l-main">

<?php
    //sub-mvSetting
    $mv_setting = array(
        
    );
?> 
<?php get_template_part( 'parts/sub-mv', null, $mv_setting ); ?>



<?php if(have_posts()):while(have_posts()):the_post(); ?>
<?php remove_filter ('the_content', 'wpautop'); ?>
<?php the_content(); ?>
<?php endwhile;endif; ?>

</main><!-- /#main -->
<!-- ▲main ================================================== -->

<?php get_footer(); ?>
