<?php
    // シングルページで使うボタン群

    $back_btn_label = $args['back_btn_label'] ?? '一覧へ戻る';
    $next_btn_label = $args['next_btn_label'] ?? '次へ';
    $prev_btn_label = $args['prev_btn_label'] ?? '前へ';
    $back_btn_href = $args['back_btn_href'] ?? '';
?>
<div class="c-pager u-mt-large">
    <div class="c-pager__prev">
        
        <?php next_post_link('%link', '<span class="icon"></span><span>'. $prev_btn_label .'</span>'); ?>
    </div>
    <div class="c-pager__next">
        <?php previous_post_link('%link', '<span>'. $next_btn_label .'</span><span class="icon"></span>'); ?>
    </div>
    <div class="c-pager__back">
        <a href="<?php echo $back_btn_href;?>" class="c-secondary-btn">
            <?php echo $back_btn_label;?>
        </a>
    </div>
</div>