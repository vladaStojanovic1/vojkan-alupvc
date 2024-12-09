<?php
$t_small_title = get_field( 't_small_title' );
$t_big_title = get_field( 't_big_title' );
$t_text = get_field( 't_text' );
?>
<section class="m-textTitle">
    <div class="_wrapper">
        <div class="_row justify-center">
            <div class="_l7">
                <div class="text-center">
                    <p class="a-text -small"><?php echo $t_small_title; ?></p>
                    <h2><?php echo $t_big_title; ?></h2>
                    <div class="line-h mb-40"></div
                    <?php echo $t_text; ?>
                </div>
            </div>
        </div>
    </div>

</section>