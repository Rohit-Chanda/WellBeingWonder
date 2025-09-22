<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'phgroovyblog_css_check') ):
    function phgroovyblog_css_check( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'phgroovyblog_css_check' );

if ( !function_exists( 'phgroovyblog_main_css' ) ):
    function phgroovyblog_main_css() {
        wp_enqueue_style( 'phgroovyblog_main_css', trailingslashit( get_template_directory_uri() ) . 'style.css', array() );
                // Enqueue child theme custom CSS
                wp_enqueue_style( 'phgroovyblog_child-custom-style', get_stylesheet_directory_uri() . '/design-files/css/main.css', array());
    }
    add_action( 'wp_enqueue_scripts', 'phgroovyblog_main_css', 99 );
endif;


function phgroovyblog_customizer_settings( $wp_customize ) {
    // Check if the control exists
    $control = $wp_customize->get_control('phcreativeblog-home-layout');
    if ( $control ) {
        $control->choices = array(
            'style1' => get_stylesheet_directory_uri() . '/inc/customizer/images/content-style1.png', // Child theme
            'style2' => get_template_directory_uri() . '/inc/customizer/images/content-style2.png',   // Parent theme
            'style3' => get_template_directory_uri() . '/inc/customizer/images/content-style3.png',   // Parent theme
            'style4' => get_template_directory_uri() . '/inc/customizer/images/content-style4.png',   // Parent theme
        );
    } else {
    }
}
add_action('customize_register', 'phgroovyblog_customizer_settings', 20); // Adjusted priority
