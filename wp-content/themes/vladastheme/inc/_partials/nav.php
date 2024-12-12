<?php
$site_logo = get_field('site_logo', 'option');
?>

<nav class="m-nav">
    <div class="_wrapper">
        <div class="m-nav__content">
            <div class="m-nav__content--logo">
                <a href="/">
                    <img
                        src="<?php echo $site_logo['url']; ?>"
                        srcset="<?php echo wp_get_attachment_image_srcset($site_logo['id']); ?>"
                        sizes="(max-width: 768px) 100vw, 300px"
                        alt="Vojkan ALU & PVC - vrhunska PVC i ALU stolarija, posetite nas u Vlasotincu i Pirotu."
                    >
                </a>
            </div>

            <div class="m-nav__links">
                <?php echo wp_nav_menu(); ?>
            </div>

            <div class="m-nav__hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</nav>
