<?php

require_once get_template_directory() . '/template-parts/navbar.php';


function royalwiki_agregar_css() {
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/css/fontawesome.min.css');
    wp_enqueue_style('all', get_template_directory_uri() . '/css/all.min.css');
    wp_enqueue_style('widget', get_template_directory_uri() . '/css/widget.css');
    wp_enqueue_script('popper' , get_template_directory_uri() . '/js/popper.minc.js', array('jquery'), '1.14', true);
    wp_enqueue_script('jquery', get_template_directory_uri(). '/js/query-3.3.1.min.js');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('popper'), '4.3', true);
    wp_enqueue_script('js-personalizado', get_template_directory_uri(). '/js/app.js', array('bootstrap'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'royalwiki_agregar_css');

if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
}

function royalwiki_widgets() {
    register_sidebar(array(
        'id' => 'widgets-derecha',
        'name' => __( 'Widgets Derecha' ),
        'description' => __( 'arrastra lo que quieras' ),
        'before_widget' => '<div class="bg-dark text-white my-2">',
        'after_widget' => '</div>',
        'before_title' => '<h1 class="h4 text-center">',
        'after_title' => '</h1><hr>'
    ));
}
add_action('widgets_init', 'royalwiki_widgets');

function royalwiki_mi_menu() {
    register_nav_menus(
        array(
            'menu-principal' => __( 'Menu Superior' )
        )
    );
}
add_action('init', 'royalwiki_mi_menu');