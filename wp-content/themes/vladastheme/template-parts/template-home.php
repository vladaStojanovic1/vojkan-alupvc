<?php
/* Template Name: Home */

get_header(); ?>
    <div id="content" class="site-content">
        <?php
        include(get_template_directory() . '/inc/_partials/info-top.php');
        include(get_template_directory() . '/inc/_partials/nav.php');
        headerHomePage();
        ?>

        <main id="main" class="page-main site-main" role="main">
            <?php include(get_template_directory() . '/template-parts/sections/global/quality.php'); ?>
            <?php include(get_template_directory() . '/template-parts/sections/home/3-steps.php'); ?>
            <?php include(get_template_directory() . '/template-parts/sections/global/our-products.php'); ?>
            <?php include(get_template_directory() . '/template-parts/sections/global/reasons.php'); ?>
            <?php include(get_template_directory() . '/template-parts/sections/home/efficiency.php'); ?>
            <?php include(get_template_directory() . '/template-parts/sections/global/contact-form.php'); ?>
        </main>
    </div>
<?php
get_footer();