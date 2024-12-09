<?php
include(get_template_directory() . '/inc/_partials/info-top.php');
include(get_template_directory() . '/inc/_partials/nav.php');
headerPostPage();
$header_title = get_field('header_title');
?>

<?php include(get_template_directory() . '/template-parts/sections/about/why.php'); ?>
<?php flex_post_content(); ?>
<?php include(get_template_directory() . '/template-parts/sections/global/contact-form.php'); ?>

