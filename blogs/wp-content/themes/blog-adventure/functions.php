<?php
function blogwaves_child_enqueue_scripts(){

    wp_enqueue_script('masonry');
    wp_enqueue_script( 'adventure-blogwaves-main', get_stylesheet_directory_uri() . '/assets/js/blogwaves-main.js',array('jquery'),true);

    wp_enqueue_style( 'blogwaves-parent-style', get_template_directory_uri() . '/style.css');  
    wp_enqueue_style('adventure-blogwaves-style',get_stylesheet_uri());
    wp_enqueue_style('font-awesome-css-child', get_stylesheet_directory_uri() . '/assets/css/font-awesome.css');
    wp_enqueue_style('adventure-blogwaves-font', 'https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap');

    add_theme_support( 'automatic-feed-links' );

    /**
 * Add a sidebar.
 */
    function wpdocs_theme_slug_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Main Sidebar', 'blog-adventure' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'blog-adventure' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'wpdocs_theme_slug_widgets_init' );
}
add_action('wp_enqueue_scripts','blogwaves_child_enqueue_scripts');

function as_adventure_theme_setup() {

    // Adds <title> tag support
    add_theme_support( 'title-tag');  

}
add_action('after_setup_theme', 'as_adventure_theme_setup');