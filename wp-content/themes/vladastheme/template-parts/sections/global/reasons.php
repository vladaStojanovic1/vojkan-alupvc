<?php
$r_title = get_field('r_title');
$r_text = get_field('r_text');
$r_small_title = get_field('r_small_title');
?>
<section class="m-reasons color-silver">
    <div class="_wrapper">
        <div class="text-center">
            <p class="a-text -small"><?php echo $r_small_title; ?></p>
            <h2><?php echo $r_title; ?></h2>
            <div class="line-h mb-30"></div>
            <?php echo $r_text; ?>
        </div>
    </div>
</section>