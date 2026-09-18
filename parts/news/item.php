<?php
    $title_tag = $args['title_tag'] ?? '';
    if(!$title_tag) $title_tag = 'h2';
?>
<li class="c-news-list__item">
    <a class="link" href="<?php the_permalink();?>">
        <span class="date"><?php echo get_the_date("Y/m/d"); ?></span>
        <?php
            global $post;
            $categories = get_the_terms( $post->ID, 'news-cat' );
        ?>
        <?php if(!empty($categories) && !is_wp_error($categories)):?>
            <span class="category">
            <?php foreach( $categories as $term ):?>
                <?php
                    $term_name = $term->name;
                ?>
                <span class="category-label"><?php echo $term_name;?></span>
            <?php endforeach;?>
            </span>
        <?php endif;?>
        <<?php echo $title_tag;?> class="title">
            <span><?php the_title();?></span>
        </<?php echo $title_tag;?>>
    </a>
</li>