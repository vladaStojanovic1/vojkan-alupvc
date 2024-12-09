<?php
/* Template Name: Kontakt */

get_header(); ?>
    <div id="content" class="site-content">
        <?php
        include(get_template_directory() . '/inc/_partials/info-top.php');
        include(get_template_directory() . '/inc/_partials/nav.php');
        headerPage();
        ?>
        <main id="main" class="page-main site-main" role="main">
            <?php include(get_template_directory() . '/template-parts/sections/contact/contact.php'); ?>
            <?php include(get_template_directory() . '/template-parts/sections/global/partner.php'); ?>
            <?php include(get_template_directory() . '/template-parts/sections/global/contact-form.php'); ?>
        </main>
    </div>
<?php
get_footer();