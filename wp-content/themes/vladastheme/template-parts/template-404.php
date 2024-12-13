<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 * Template Name: 404 Page
 * @package vladastheme
 */

get_header();

include(get_template_directory() . '/inc/_partials/info-top.php');
include(get_template_directory() . '/inc/_partials/nav.php');
headerPage();
include(get_template_directory() . '/template-parts/sections/global/reasons.php');
?>

<?php
get_footer(); ?>
