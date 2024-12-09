<?php
function flex_post_content() {
    $post_top_title = get_field('post_top_title');
    ?>

    <section class="m-flexible">
        <div class="_wrapper">
            <div class="text-center mb-80">
                <?php echo $post_top_title; ?>
                <div class="line-h"></div>
            </div>

            <?php if (have_rows('post_flexible')) : ?>
                <?php while (have_rows('post_flexible')) : the_row(); ?>

                    <?php if (get_row_layout() == 'text_&_slider') :
                        $pf_left_text = get_sub_field('pf_left_text');
                        $pf_repeater_images = get_sub_field('pf_repeater_images');
                        ?>
                        <div class="_row justify-space align-center mb-100 m-flexible__content">
                            <div class="_l7">
                                <?php if ($pf_repeater_images) : ?>
                                    <div class="swiper flexible-swiper">
                                        <div class="swiper-wrapper">
                                            <?php foreach ($pf_repeater_images as $image) : ?>
                                                <div class="swiper-slide">
                                                    <div class="m-flexible__content--slideImage">
                                                        <img src="<?php echo esc_url($image['pfr_image']['sizes']['medium']); ?>"
                                                             srcset="<?php echo esc_url($image['pfr_image']['sizes']['thumbnail']); ?> 150w,
                                                             <?php echo esc_url($image['pfr_image']['sizes']['medium']); ?> 300w,
                                                             <?php echo esc_url($image['pfr_image']['sizes']['large']); ?> 1024w"
                                                             sizes="(max-width: 600px) 300px, (max-width: 1200px) 1024px, 100vw"
                                                             alt="<?php echo esc_attr($image['pfr_image']['alt']); ?>">
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="_l5 m-flexible__content--text">
                                <?php if ($pf_left_text) : ?>
                                    <div class="pf-left-text">
                                        <?php echo wp_kses_post($pf_left_text); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>

                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>

    <?php
}
