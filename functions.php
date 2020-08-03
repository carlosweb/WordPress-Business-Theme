<?php

//includes

//hooks

// Js and Css files
function add_estilos_e_scripts() {

    if (is_home()) {
        wp_enqueue_style( 'default', get_template_directory_uri() . './style.css');
        }

        if (is_page()) {
            wp_enqueue_style( 'default', get_template_directory_uri() . './style.css');
            }
            
            if (is_single()) {
                wp_enqueue_style( 'default', get_template_directory_uri() . '/assets/css/style-page.css');
                }
    
    wp_enqueue_script( 'app', get_template_directory_uri() . '/assets/js/app.js');
}
 add_action( 'wp_enqueue_scripts', 'add_estilos_e_scripts' );

// add or release recursos no wp


// post thumbnail support
if ( function_exists( 'add_image_size' ) ) add_theme_support( 'post-thumbnails' );

if ( function_exists( 'add_image_size' ) ) {
add_image_size( 'post-thumb', 630, 270 );
add_image_size( 'single-thumb', 800, 600, true );
add_image_size( 'port-thumb', 350, 350, true );
add_image_size( 'home-thumb', 2000, 2000, true );

}

function de_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');

    register_nav_menu('primary', __('Menu Principal', 'labtheme'));
}

add_action('after_setup_theme', 'de_theme_support');

// function de_widgets() {
//     register_sidebar(array (
//         'name' => _('Sidebar lateral'),
//         'id' => 'de_sidebar',
//         'description' =>_('Sidebar lateral tema', 'labtheme'),
//         'before_title' => '<h1>',
//         'after_title' =>'</h1>'
//     ));

// }
// add_action('widgets_init', 'de_widgets');
?>

