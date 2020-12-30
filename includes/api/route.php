<?php

require_once __DIR__.'/Controllers/Menu.php';

// $menu = new Menu;

// add_action( 'rest_api_init', function () {
//     register_rest_route( 'myplugin/v1', '/author/(?P<id>\d+)', array(
//         'methods' => 'GET',
//         'callback' => array('Menu' , "list"),
//     ) );
//   } );

// function test(){
//     return array("ddddd" => "rtrtrttr");
// }

add_action('rest_api_init', function () {           
    $menu = new Menu();
    $menu->register_routes();
});
