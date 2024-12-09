<?php
$p_title = get_field('p_title');
$p_text = get_field('p_text');
?>
<section class="m-partners -contact">
    <div class="_wrapper">
        <div class="text-center mb-50">
            <p class="a-text -small"><?php echo $p_text; ?></p>
            <h2><?php echo $p_title; ?></h2>
            <div class="line-h"></div>
        </div>
        <div class="_row justify-center">
            <div class="_l10">
                <div class="swiper-container partners">
                    <div class="swiper-wrapper align-center">
                        <?php if( have_rows('partner_repeater') ): ?>
                            <?php while( have_rows('partner_repeater') ): the_row();
                                $partner_logo = get_sub_field('partner_logo');
                                ?>
                            <div class="swiper-slide">
                                <div class="m-partners__logo">
                                    <img src="<?php echo $partner_logo['url']; ?>" alt="<?php echo $partner_logo['alt']; ?>">
                                </div>
                            </div>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>