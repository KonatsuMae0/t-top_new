
<div class="c-breadcrumb">
    <div class="c-breadcrumb__inner l-container" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php

            if(function_exists('bcn_display')) {
                // Breadcrumb NavXTがあれば
                bcn_display();
            } elseif(function_exists('aioseo_breadcrumbs')) {
                // なければAIOSEOを使う
                aioseo_breadcrumbs();
            }
        ?>
    </div>
</div>