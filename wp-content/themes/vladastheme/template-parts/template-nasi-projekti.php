<?php
/* Template Name: Nasi Projekti */

get_header(); ?>
    <div id="content" class="site-content">
        <?php
        include(get_template_directory() . '/inc/_partials/info-top.php');
        include(get_template_directory() . '/inc/_partials/nav.php');
        headerPage();
        ?>
        <main id="main" class="page-main site-main" role="main">
            <?php include(get_template_directory() . '/template-parts/sections/global/text-title.php'); ?>
            <?php include(get_template_directory() . '/template-parts/sections/global/projects.php'); ?>
        </main>
    </div>
<?php
get_footer();