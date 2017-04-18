 <?php
function load_styles() {
    wp_enqueue_style( 'stylesheet', get_stylesheet_uri() );
    wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/inc/bootstrap-grid.css');
}
add_action( 'wp_enqueue_scripts', 'load_styles');


function load_scripts() {
    wp_enqueue_script( 'jquery' );
		wp_register_script( 'global-js', get_stylesheet_directory_uri() . '/inc/js/functions.js', '1.0.0', array('jquery'), true);
		wp_enqueue_script( 'global-js');
}
add_action( 'wp_enqueue_scripts', 'load_scripts');

 function register_my_menu() {
     register_nav_menu('main-menu',__( 'Main Menu' ));
 }
 add_action( 'init', 'register_my_menu' );