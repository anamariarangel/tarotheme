<?php

$textdomain = 'tarotheme';
load_theme_textdomain($textdomain, get_template_directory() . '/languages/');

require get_template_directory() . '/inc/customizer.php';

function amr_load_scripts() {
    wp_enqueue_style('amr_style', get_stylesheet_uri(), array(), '1.0', 'all');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&family=Playfair+Display:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet', array(), null);
    wp_enqueue_script('dropdown', get_template_directory_uri() . '/js/dropdown.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts','amr_load_scripts');

register_nav_menus(
    array('amr_main_menu' => 'Main Menu',
    'amr_footer_menu' =>'Footer Menu'
    )
);

function amr_config() {
    register_nav_menus(
        array(
            'amr_main_menu' => esc_html__( 'Main Menu', 'tarotheme' ),
            'amr_footer_menu' => esc_html__( 'Footer Menu', 'tarotheme' )
        )
    ); 
    
    $args = array(
        'height'    => 200,
        'width'     => 1920
    );
    
    add_theme_support( 'custom-header', $args ); //adicionar theme support "header'
    add_theme_support('post-thumbnails');
    add_theme_support( 'custom-logo', array(
        'width' => 120,
        'height' => 120,
        'flex-height'   => true,
        'flex-width'    => true));
    add_theme_support('title-tag'); //recuperar títulos (erro 404)
    add_theme_support('automatic-feed-links');
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ));
    add_theme_support('align-wide');
    add_theme_support('responsive-embeds');
    add_theme_support('editor-styles');
}


add_action('after_setup_theme', 'amr_config',0);

add_action('widgets_init', 'amr_sidebars');

function amr_sidebars(){
    register_sidebar(
        array(
            'name'  => esc_html__( 'Blog Sidebar', 'tarotheme' ),
            'id'    => 'sidebar-blog',
            'description'   => esc_html__( 'This is the Blog Sidebar. You can add your widgets here.', 'tarotheme' ),
            'before_widget' => '<div class= "widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after-title' => '</h4>'
        )
        );

        register_sidebar(
            array(
                'name'  => esc_html__( 'Service 1', 'tarotheme' ),
                'id'    => 'services-1',
                'description'   => esc_html__( 'First Service Area', 'tarotheme' ),
                'before_widget' => '<div class="widget-wrapper">',
                'after_widget'  => '</div>',
                'before_title'  => '<h4 class="widget-title">',
                'after_title'   => '</h4>'
            )
        );
        register_sidebar(
            array(
                'name'  => esc_html__( 'Service 2', 'tarotheme' ),
            'id'    => 'services-2',
            'description'   => esc_html__( 'Second Service Area', 'tarotheme' ),
                'before_widget' => '<div class="widget-wrapper">',
                'after_widget'  => '</div>',
                'before_title'  => '<h4 class="widget-title">',
                'after_title'   => '</h4>'
            )
        );
        register_sidebar(
            array(
                'name'  => esc_html__( 'Service 3', 'tarotheme' ),
            'id'    => 'services-3',
            'description'   => esc_html__( 'Third Service Area', 'tarotheme' ),
                'before_widget' => '<div class="widget-wrapper">',
                'after_widget'  => '</div>',
                'before_title'  => '<h4 class="widget-title">',
                'after_title'   => '</h4>'
            )
        );
}

if(! function_exists('wp_body_open')){
    function wp_body_open() {
        do_action('wp_body_open');
    } 
}
