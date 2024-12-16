<?php

add_action( 'wp_enqueue_scripts', function () {
    wp_enqueue_style( 'vladastheme-swiper-style', get_stylesheet_directory_uri() . '/src/styles/css/vendor/swiper.min.css' );
    wp_enqueue_style( 'vladastheme-style', get_stylesheet_uri() );

    if( WP_DEBUG === true ) {
        wp_enqueue_script( 'vladastheme-swiper', get_template_directory_uri() . '/src/scripts/src/swiper.js', array('jquery'), true );
        wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/src/scripts/src/fancybox.js', array('jquery'), true );
        wp_enqueue_script( 'vladastheme-script', get_template_directory_uri() . '/src/scripts/src/script.js', array('jquery'), true );
    } else {
        wp_enqueue_script( 'vladastheme-swiper', get_template_directory_uri() . '/src/scripts/src/swiper.js', array('jquery'), true );
        wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/src/scripts/src/fancybox.js', array('jquery'), true );
        wp_enqueue_script( 'textPlugin', get_template_directory_uri() . '/src/scripts/src/textPlugin.min.js', array('jquery'), true );
        wp_enqueue_script( 'gsap', get_template_directory_uri() . '/src/scripts/src/gsap.min.js', array('jquery'), true );
        wp_enqueue_script( 'vladastheme-script-min', get_template_directory_uri() . '/bundles/scripts/scripts.min.js', array('jquery'), true );
    }

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
} );

include ( get_template_directory() . '/inc/_partials/index.php' );

function wpb_custom_new_menu() {
    register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
}
add_action( 'init', 'wpb_custom_new_menu' );


if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Header Settings',
        'menu_title'    => 'Header',
        'parent_slug'   => 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Footer Settings',
        'menu_title'    => 'Footer',
        'parent_slug'   => 'theme-general-settings',
    ));

}

function theme_gsap_script(){
    // The core GSAP library
    wp_enqueue_script( 'gsap-js', get_template_directory_uri() . '/src/scripts/src/gsap.min.js', array(), false, true );
    wp_enqueue_script( 'gsap-st', get_template_directory_uri() . '/src/scripts/src/ScrollTrigger.min.js', array('gsap-js'), false, true );
}
add_action( 'wp_enqueue_scripts', 'theme_gsap_script' );

// Omogućavanje podrške za featured image
function enable_featured_images() {
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'enable_featured_images');

function get_excerpt_words($content, $word_limit = 50) {
    $allowed_tags = [
        'strong' => [],
        'b' => [],
        'em' => [],
        'i' => [],
    ];

    $content = wp_kses($content, $allowed_tags);

    $words = explode(' ', $content);

    if (count($words) > $word_limit) {
        $excerpt = implode(' ', array_slice($words, 0, $word_limit)) . '...';
    } else {
        $excerpt = $content;
    }
    return $excerpt;
}


// CPT Projects
function custom_post_type_projects() {
    $labels = array(
        'name'                  => _x( 'Projects', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Project', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Projects', 'text_domain' ),
        'all_items'             => __( 'All Projects', 'text_domain' ),
        'add_new_item'          => __( 'Add New Project', 'text_domain' ),
        'add_new'               => __( 'Add New', 'text_domain' ),
        'new_item'              => __( 'New Project', 'text_domain' ),
        'edit_item'             => __( 'Edit Project', 'text_domain' ),
        'update_item'           => __( 'Update Project', 'text_domain' ),
        'view_item'             => __( 'View Project', 'text_domain' ),
        'search_items'          => __( 'Search Project', 'text_domain' ),
        'not_found'             => __( 'Not Found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
    );

    $args = array(
        'label'                 => __( 'projects', 'text_domain' ),
        'description'           => __( 'Project Description', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'show_in_nav_menus'     => true,
        'show_in_admin_bar'     => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-portfolio',
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );

    register_post_type( 'projects', $args );
}
add_action( 'init', 'custom_post_type_projects', 0 );

// Load more projects
add_action('wp_ajax_load_more_projects', 'load_more_projects');
add_action('wp_ajax_nopriv_load_more_projects', 'load_more_projects');
function load_more_projects() {
    $offset = isset($_GET['offset']) ? intval($_GET['offset']) : 0;
    $posts_per_page = 4;

    $query = new WP_Query(array(
        'post_type' => 'projects',
        'posts_per_page' => $posts_per_page,
        'offset' => $offset,
    ));

    $html = '';

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            ob_start();
            include get_template_directory() . '/template-parts/sections/global/project.php';
            $html .= ob_get_clean();
        }
        wp_reset_postdata();
        $has_more = $query->found_posts > $offset + $posts_per_page;
    } else {
        $has_more = false;
    }

    wp_send_json(array(
        'html' => $html,
        'has_more' => $has_more,
    ));

    wp_die();
}

add_theme_support( 'title-tag' );


add_theme_support('post-thumbnails');
add_image_size('custom-size', 800, 600, true);

// Proizvodi = 404 stranica
function redirect_to_404_if_product_page() {
    if (is_page('proizvodi')) { // Proverava da li je stranica 'proizvodi'
        wp_redirect(home_url('/404-page/')); // Preusmerava na tvoju custom 404 stranicu
        exit();
    }
}
add_action('template_redirect', 'redirect_to_404_if_product_page');

