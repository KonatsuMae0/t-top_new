<?php get_header(); ?>


<!-- main ================================================== -->
<main class="l-main">

<?php
    $mv_setting = array(
        "main_title" => 'お知らせ',
        "sub_title" => 'News',
        "title_tag" => 'div',
    );
?> 
<?php get_template_part( 'parts/sub-mv', null, $mv_setting ); ?>

<article class="l-article">

    <div class="l-article__contents">
            
        <?php if(have_posts()): ?>
        <?php while(have_posts()):the_post(); ?>
            <div class="c-post-head">
                <span class="c-post-head__date"><?php echo get_the_date("Y/m/d"); ?></span>
                <?php
                    $terms_news = get_the_terms( get_the_ID(), 'news-cat' );
                ?>
                <?php if(!empty($terms_news) && !is_wp_error($terms_news)):?>
                    <span class="c-post-head__category">
                    <?php foreach( $terms_news as $term ):?>
                        <?php
                            $term_slug = $term->slug;
                            $term_name = $term->name;
                        ?>
                        <a class="<?php echo $term_slug;?>" href="<?php echo get_term_link($term->term_id);?>"><?php echo $term_name;?></a>
                    <?php endforeach;?>
                    </span>
                <?php endif;?>
                <h1 class="c-post-head__title"><?php the_title(); ?></h1>
            </div> 

            <div class="c-post-body">
                <?php the_content();?>
            </div>

            <?php
                get_template_part(
                    'parts/pager',
                    null,
                    array(
                        "back_btn_href" => home_url('/news/'),
                    )
                );
            ?>

        <?php endwhile; ?>
        <?php endif ; ?>

    </div><!-- /.l-contents -->

</article><!-- /.l-article -->

</main><!-- /#main -->
<!-- ▲main ================================================== -->

<?php get_footer(); ?>
