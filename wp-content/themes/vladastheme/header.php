
<?php
/**
 * @package vladastheme
 */
global $globalSite;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Dobrodošli na našu stranicu. Pružamo kvalitetne PVC i ALU stolarije za vaš dom ili poslovni prostor. Kontaktirajte nas već danas!">

    <?php
    if (is_single() || is_page()) {
        $excerpt = strip_tags(get_the_excerpt());
        echo '<meta name="description" content="' . esc_attr($excerpt) . '">';
    }
    ?>
    <?php wp_head(); ?>

    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php if(has_site_icon()): ?>
        <link rel="icon" href="<?php echo get_site_icon_url(); ?>" type="image/x-icon" />
    <?php else: ?>
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() . '/src/images/favicon/favicon-96x96.png'; ?>" sizes="96x96" />
        <link rel="icon" type="image/svg+xml" href="<?php echo get_template_directory_uri() . '/src/images/favicon/favicon.svg'; ?>" />
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri() . '/src/images/favicon/favicon.ico'; ?>" />
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() . '/src/images/favicon/apple-touch-icon.png'; ?>" />
        <link rel="manifest" href="<?php echo get_template_directory_uri() . '/src/images/favicon/site.webmanifest'; ?>" />
    <?php endif; ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">