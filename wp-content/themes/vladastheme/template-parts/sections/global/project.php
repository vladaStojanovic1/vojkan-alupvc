<div class="m-project _m6 _l4 _xl3 project mb-30">
    <div class="m-project__content">
        <?php if (has_post_thumbnail()) : ?>
            <?php
            $thumbnail_id = get_post_thumbnail_id(get_the_ID());
            $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
            $alt_text = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
            $content_for_caption = get_the_content();
            $short_content = substr($content_for_caption, 0, 100);
            ?>
            <div class="m-project__content--profImage">
                <a data-caption="<?php echo htmlspecialchars($content_for_caption, ENT_QUOTES, 'UTF-8'); ?>" data-fancybox="project-images" href="<?php echo esc_url($thumbnail_url); ?>">

                    <img src="<?php echo esc_url($thumbnail_url); ?>"
                         srcset="<?php echo esc_url($thumbnail_url); ?> 150w,
                         <?php echo esc_url($thumbnail_url); ?> 300w,
                         <?php echo esc_url($thumbnail_url); ?> 600w,
                         <?php echo esc_url($thumbnail_url); ?> 1024w"
                         sizes="(max-width: 600px) 100vw, (max-width: 1200px) 50vw, 33vw"
                         alt="<?php echo esc_attr($alt_text); ?>">

                    <div class="m-project__content--text">
                        <?php
                        if (strlen($content_for_caption) > 100) {
                            echo $short_content;
                            echo ' <span class="more-content" title="Vidi više">...</span>';
                        } else {
                            echo $content_for_caption;
                        }
                        ?>
                        <p class="see-more">Klikni za vise...</p>
                    </div>
                </a>
            </div>
        <?php else : ?>
            <div class="m-project__content--profImage">
                <img
                    src="<?php echo get_template_directory_uri() . '/src/images/placeholder.svg' ?>"
                    alt="PVC Vojkan Vlasotince"
                >
            </div>
        <?php endif; ?>
    </div>
</div>

