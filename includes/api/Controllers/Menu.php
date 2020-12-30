<?php

class Menu extends WP_REST_Controller{

    public $namespace = 'api/menu';

    public function register_routes() {

        $path = 'list';
    
        register_rest_route( $this->namespace, '/' . $path, [
          array(
            'methods'             => 'GET',
            'callback'            => array( $this, 'list' )
                ),
    
        ]);     
    }

    public function list(){ 

        // $menus = wp_get_nav_menus();
        $menus_locations = get_nav_menu_locations();
        // $menu_title = wp_get_nav_menu_object($menus[$location])

        return new WP_REST_Response( wp_get_nav_menu_object($menus_locations["menu-primary"]) , 200);
    }

} 
