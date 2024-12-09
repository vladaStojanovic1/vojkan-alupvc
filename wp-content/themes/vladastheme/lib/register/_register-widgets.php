<?php
/**
 * Register widget area.
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
add_action( 'widgets_init', function () {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'ftheme' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here.', 'ftheme' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    // register_sidebar( array(
    // 	'name' => esc_html__( 'Footer - Left', 'ftheme' ),
    // 	'id' => 'footer-1',
    // 	'before_widget' => '',
    // 	'after_widget'  => '',
    // 	'before_title' => '<h3 class="footer-title">',
    // 	'after_title' => '</h3>',
    // ) );

    // register_sidebar( array(
    // 	'name' => esc_html__( 'Footer - Mid', 'ftheme' ),
    // 	'id' => 'footer-2',
    // 	'before_widget' => '',
    // 	'after_widget'  => '',
    // 	'before_title' => '<h3 class="footer-title">',
    // 	'after_title' => '</h3>',
    // ) );

    // register_sidebar( array(
    // 	'name' => esc_html__( 'Footer - Right', 'ftheme' ),
    // 	'id' => 'footer-3',
    // 	'before_widget' => '',
    // 	'after_widget'  => '',
    // 	'before_title' => '<h3 class="footer-title">',
    // 	'after_title' => '</h3>',
    // ) );
} );