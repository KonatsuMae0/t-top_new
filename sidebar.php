<?php
    // 投稿のスラッグ取得
    $post_type_slug = get_post_type();
?>
<aside class="l-article__sidebar">
    <section>
        <h2 class="l-article__sidebar-title">最新の投稿</h2>
        <?php
        $args = array(
            'post_type' => $post_type_slug,
            'posts_per_page' => 3,
        );
        $query = new WP_Query( $args );
        ?>

        <?php if($query->have_posts()): ?>
        <ul class="l-article__sidebar-entry-list">
            <?php while($query->have_posts()):$query->the_post(); ?>
            <li>
                <p class="date"><?php echo get_the_date("Y.m.d"); ?></p>

                <a class="title" href="<?php the_permalink(); ?>"><?php the_title();?></a>
            </li>
            <?php endwhile;?>
        </ul>
        <?php else:?>
        <p>
            投稿がありません
        </p>
        <?php endif;?>
        <?php wp_reset_postdata(); ?>
    </section>

    <?php
    $categories = get_categories(array('hide_empty' => false));
    if(!empty($categories) && !is_wp_error($categories)):?>
    <section>
        <h2 class="l-article__sidebar-title">カテゴリ</h2>
        <ul class="l-article__sidebar-category">
        <?php foreach($categories as $term):?>
            <?php
                $term_slug = $term->slug;
                $term_name = $term->name;
            ?>
            <li>
                <a href="<?php echo get_term_link($term);?>">
                    <span><?php echo $term_name;?></span>
                </a>
            </li>
        <?php endforeach; ?>
        </ul>
    </section>
    <?php endif; ?>

    <section>
        <h2 class="l-article__sidebar-title">アーカイブ</h2>
        <div class="l-article__sidebar-archive">
            <select name="archive-dropdown" onChange='document.location.href=this.options[this.selectedIndex].value;'>
                <option value="">月を選択</option>
                <?php
                wp_get_archives (array(
                    'type' => 'monthly',
                    'format' => 'option',
                    'post_type' => $post_type_slug
                ));
                ?>
            </select>

        </div>
    </section>

</aside>