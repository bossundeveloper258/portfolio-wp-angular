<?php
require_once __DIR__.'/includes/api/route.php';



function register_my_menus() {
    register_nav_menus(
      array(
        'menu-primary' => __( 'Menú Principal' ),
      )
    );
}
add_action( 'init', 'register_my_menus' );

// var_dump( wp_nav_menu( array("theme_location" => "menu-primary")) );
