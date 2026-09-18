<?php get_header(); ?>

<!-- main ================================================== -->
<main class="l-main">

<?php

    $mv_setting = array(
        "main_title" => 'お知らせ',
        "sub_title" => 'News',
        "bg_img_filename" => 'news',
    );

?> 
<?php get_template_part( 'parts/sub-mv', null, $mv_setting ); ?>

<div class="l-article">

    <div class="l-article__contents">
        
        <?php
            $news_cat_terms = get_terms( array(
                'taxonomy'   => 'news-cat',
                'hide_empty' => false,
            ) );
        ?>
        <?php if ( ! empty( $news_cat_terms ) && ! is_wp_error( $news_cat_terms ) ) : ?>
        <ul class="c-category-list u-mb-small">
            <li>
                <a href="<?php echo esc_url( get_post_type_archive_link( 'news' ) ); ?>" class="c-category-list__btn c-secondary-btn<?php echo ! is_tax() ? ' c-category-list__btn--active' : ''; ?>">ALL</a>
            </li>
            <?php foreach ( $news_cat_terms as $term ) :
                $is_active = is_tax( 'news-cat', $term->term_id );
            ?>
            <li>
                <a href="<?php echo esc_url( get_term_link( $term ) ); ?>" class="c-category-list__btn c-secondary-btn<?php echo $is_active ? ' c-category-list__btn--active' : ''; ?>"><?php echo esc_html( $term->name ); ?></a>
            </li>
            <?php endforeach; ?>
        </ul>
        <?php endif; ?>


        <?php
        $archive_title = '';

        if ( is_category() ) {
            $archive_title = single_cat_title( '', false );
        } elseif ( is_tag() ) {
            $archive_title = single_tag_title( '', false );
        } elseif ( is_year() ) {
            $archive_title = get_the_date( 'Y年' );
        } elseif ( is_month() ) {
            $archive_title = get_the_date( 'Y年n月' );
        } elseif ( is_day() ) {
            $archive_title = get_the_date( 'Y年n月j日' );
        } elseif ( is_tax() ) {
            // カスタムタクソノミーのアーカイブ
            $archive_title = single_term_title( '', false );
        } elseif ( is_author() ) {
            $archive_title = get_the_author();
        } elseif ( is_search() ) {
            $archive_title = '「' . get_search_query() . '」の検索結果';
        }
        // is_post_type_archive() や通常の投稿アーカイブではタイトルを非表示にしたいので、elseは何もしない

        if ( $archive_title ) :
        ?>
            <h2 class="l-article__archive-title u-mb-small"><?php echo esc_html( $archive_title ); ?></h2>
        <?php endif; ?>

        <?php if(have_posts()): ?>
        <ul class="c-news-list">
            <?php while(have_posts()):the_post(); ?>
                <?php
                    $title_tag = 'h2';
                    if($archive_title) {
                        $title_tag = 'h3';
                    }
                ?>
           
                <?php get_template_part('parts/news/item', null, array('title_tag' => $title_tag));?>

            <?php endwhile; ?>
        </ul>
        <?php else: ?>
        <p class="u-text-center u-mt-large">投稿がありません</p>
        <?php endif; ?>

        <?php get_template_part('parts/pagination');?>

    </div><!-- /.l-article__contents -->

</div><!-- /.l-article -->


</main><!-- /#main -->
<!-- ▲main ================================================== -->

<?php get_footer(); ?>
