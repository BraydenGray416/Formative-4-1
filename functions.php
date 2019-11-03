<?php

function addCustomFormativeThemeFiles_1902(){

    wp_enqueue_style('bootstrapCSSFormative1902', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '4.3.1', 'all');
    wp_enqueue_style('customCSSFormative1902', get_template_directory_uri() . '/assets/css/style.css', array(), '0.0.2', 'all');

    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrapJSFormative1902', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '4.3.1', true);
    wp_enqueue_script('customJSFormative1902', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '0.0.1', true);
};

add_action('wp_enqueue_scripts', 'addCustomFormativeThemeFiles_1902');


add_theme_support('post-thumbnails', array('post', 'movie'));

add_image_size('icon', 50, 50, true);

function addCustomFormativeMenus(){
    add_theme_support('menus');
    // register_nav_menu('top_navigation', 'This is the navigation which is located at the top of each page.);
    register_nav_menu('top_navigation', __('The Top navigation is the navigation located at the top of each page.', '1902Custom'));
    register_nav_menu('side_navigation', __('The Side navigation is the navigation located at the side of each page', '1902Custom'));
    register_nav_menu('bottom_navigation', __('The Bottom navigation is the navigation located at the bottom of each page', '1902Custom'));
}

add_action('after_setup_theme', 'addCustomFormativeMenus');

function register_navwalker(){
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

add_action( 'after_setup_theme', 'register_navwalker' );

register_default_headers( array(
    'defaultImage' => array(
        'url'           => get_template_directory_uri() . '/assets/images/crafts2.jpg',
        'thumbnail_url' => get_template_directory_uri() . '/assets/images/crafts2.jpg',
        'description'   => __( 'The default image for the custom header.', '1902FormativeCustom' )
    )
) );

$customeHeaderDefaults = array(
    'width' => 1280,
    'height' => 720,
    'default-image' => get_template_directory_uri() . '/assets/images/crafts2.jpg'
);
add_theme_support('custom-header', $customeHeaderDefaults);

add_theme_support('wp-block-styles');

function add_custom_post_types(){

    $args = array(
        'labels' => array(
            'name' => 'Products',
            'singular_name' => 'Product',
            'add_new_item' => 'Add New Product'
        ),
        'description' => 'A list of all the Products we have in our website',
        'public' => true,
        'hierarchial' => true,
        'show_in_nav_menus' => false,
        'show_in_rest' => true,
        'menu_position' => 6,
        'menu_icon' => 'dashicons-store',
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
            'post-formats'
        ),
        'delete_with_user' => false
    );

    register_post_type('product', $args);
}

add_action('init', 'add_custom_post_types');

require_once get_template_directory() . '/inc/customizer.php';
