<?php
// Ovdje preuzimamo ACF polja
$r_title = get_field('r_title');
$r_text = get_field('r_text');
$r_small_title = get_field('r_small_title');
$arrow = get_template_directory() . '/src/images/arrow.svg';
?>

<section class="m-reasons color-silver">
    <div class="_wrapper">
        <div class="_row justify-center">
            <div class="_l9">
                <div class="text-center">
                    <p class="a-text -small"><?php echo $r_small_title; ?></p>
                    <h2><?php echo $r_title; ?></h2>
                    <div class="line-h mb-30"></div>
                    <?php echo $r_text; ?>

                    <?php if (is_page('404-page')) : ?>
                        <p class="m-reasons__homeLink d-flex align-center justify-center">
                            <a href="<?php echo home_url(); ?>" class="button-link">Vratite se na početnu stranicu</a>
                            <?php
                            if (file_exists($arrow)) {
                                echo file_get_contents($arrow);
                            }
                            ?>
                        </p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
