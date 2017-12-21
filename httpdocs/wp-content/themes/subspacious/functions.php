<?php 
//add the parent-style 
 function my_theme_enqueue_styles() {

    $parent_style = 'parent-style'; // This is 'Spacious-style' for the Spacious theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

// modify admin footer
function remove_footer_admin () {
 
echo 'Fueled by <a href="http://www.microscience.com.au" target="_blank">MicroScience</a> | Designed by <a href="http://www.microscience.com.au" target="_blank">Jenny Zeng</a> ';
 
}
 
add_filter('admin_footer_text', 'remove_footer_admin');

//hiding  the information of login failed in Admin
function no_wordpress_errors(){
  return 'Error with username or password!';
}
add_filter( 'login_errors', 'no_wordpress_errors' );

 ?>