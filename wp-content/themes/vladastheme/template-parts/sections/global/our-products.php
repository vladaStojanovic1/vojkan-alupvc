<?php
$args = [
    'post_type'      => 'post',
    'posts_per_page' => 6,
    'orderby'        => 'date',
    'order'          => 'ASC',
];

$query = new WP_Query($args);
$p_title = get_field('p_title');
?>


<section class="m-products">
    <div class="_wrapper">
        <div class="text-center mb-70">
            <p class="a-text -small"><?php echo $p_title; ?></p>
            <h2>Kompletna ponuda, prilagođena vama</h2>
            <div class="line-h"></div>
        </div>
        <div class="_row justify-center">
            <?php if ($query->have_posts()) : ?>
                <?php while ($query->have_posts()) : $query->the_post();
                $tcontent = get_field('tcontent')
                ?>
                <div class="_s6 _l3 m-products__item">
                    <a class="text-center" href="<?php echo get_permalink(); ?>">
                        <div class="m-products__item--imgDiv">
                            <?php
                            $image_id = get_post_thumbnail_id(get_the_ID());
                            $alt_text = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                            ?>
                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="<?php echo esc_attr($alt_text); ?>">
                        </div>
                        <h4 class="mt-20 mb-10 a-text -title"><?php echo get_the_title(); ?></h4>
                        <p class="color-gray fs-14"><?php echo get_excerpt_words ($tcontent, 20) ?></p>
                    </a>
                </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </div>
</section>