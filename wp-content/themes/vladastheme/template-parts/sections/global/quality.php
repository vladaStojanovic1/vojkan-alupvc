<?php
$k_year = get_field('k_year');
$k_text_1 = get_field('k_text_1');
$k_title = get_field('k_title');
$k_text_2 = get_field('k_text_2');
$k_text_3 = get_field('k_text_3');
$k_image = get_field('k_image');

?>
<section class="m-quality">
    <div class="_wrapper">
        <div class="_row justify-space align-center">
            <div class="_l5">
                <div>
                    <img class="test" src="<?php echo $k_image['url']; ?>" alt="<?php echo $k_image['alt']; ?>">
                </div>
            </div>

            <div class="_l7 _xl6 m-quality__textContent">
                <div>
                    <div class="d-flex align-center mb-30">
                        <div class="line-up"></div>
                        <div>
                            <p class="a-text -small"><?php echo $k_text_1 ?></p>
                            <h2><?php echo $k_title ?></h2>
                        </div>
                    </div>

                    <p><?php echo $k_text_3 ?></p>

                    <div class="d-flex align-center justify-space mt-40 m-quality__counter">
                        <?php if( have_rows('numbers') ): ?>
                            <?php while( have_rows('numbers') ): the_row();
                                $number_icon = get_sub_field('number_icon');
                                $number = get_sub_field('number');
                                $number_text = get_sub_field('number_text');
                            ?>
                            
                            <div class="text-center m-quality__counter--item"">
                                <div class="d-flex align-center mb-10">
                                    <img class="m-quality__icon" src="<?php echo $number_icon; ?>" alt="">
                                    <h2 class="color-primary counterOne"><?php echo $number; ?></h2>
                                </div>
                                <p class="m-quality__counter--text"><?php echo $number_text; ?></p>
                            </div>

                            <?php endwhile;; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

