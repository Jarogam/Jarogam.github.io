<?php

add_action('wp_enqueue_scripts', 'con_css', 0 );

function con_css() {
    wp_enqueue_style( 'main', get_stylesheet_directory_uri() . '/style.css' );

    // Fonts 
    wp_enqueue_style( 'avenir', get_stylesheet_directory_uri() . '/assets/fonts/Avenir/stylesheet.css' );
    wp_enqueue_style( 'futura', get_stylesheet_directory_uri() . '/assets/fonts/Futura/stylesheet.css' );
}

add_action('wp_enqueue_scripts', 'con_js', 1);

function con_js() {
    wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);
    wp_enqueue_script('animations-script', get_template_directory_uri() . '/assets/js/animations.js', array(), null, true);
    wp_enqueue_script('animationOnVisible-script', get_template_directory_uri() . '/assets/js/animationOnVisible.js', array(), null, true);
}


require get_template_directory() . '/inc/acf.php';
require get_template_directory() . '/inc/blocked_posts.php';
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/ajax/ajax-controller.php';

// $theme_mods = get_theme_mods();
// $theme_mods_json = json_encode( $theme_mods );
// file_put_contents( 'theme_mods.json', $theme_mods_json );


// $theme_mods_json = file_get_contents( 'theme_mods.json' );
// $theme_mods = json_decode( $theme_mods_json, true );

// foreach ( $theme_mods as $setting => $value ) {
//     set_theme_mod( $setting, $value );
// }


register_nav_menu( 'main-menu', 'Главное меню' );


register_nav_menu( 'main-menu', 'Main Menu' );
register_nav_menu( 'company-menu', 'Company Side Menu' );
register_nav_menu( 'careers-menu', 'Careers Side Menu' );
register_nav_menu( 'services-menu', 'Services Side Menu' );