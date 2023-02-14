<?php
/**
 * Blackcats Seguridad
 */

 if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/********************************************************
                     The Custom logo
**********************************************************/
add_theme_support( 'automatic-feed-links' );
function blackcat_custom_logo_setup() {
    $defaults = array(
        'flex-width'  => true,
        'flex-height' => true,
    ); 
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'blackcat_custom_logo_setup' );
add_theme_support('post-thumbnails');

/********************************************************
                     Registro de Menus
**********************************************************/
function blackcat_menus(){
	// registro de menis de la plantilla
        register_nav_menus( array (
            'primary_menu'=>__('Menu Primary','blackcat'),
            'secundary_menu'=>__('Menu Secundario','blackcat'),
            'menu_blog'=>__('Menu Blog','blackcat')
        ));
	}
	add_action('init', 'blackcat_menus');
	/* ---- filtro para añadir clases al menu --- */
	 function blackcat_menu_classes($classes, $item, $args){
				if ($args->theme_location == 'primary_menu')
					{
						$classes[] = 'bk-li';
					}
				return $classes;
			}    
	add_filter('nav_menu_css_class', 'blackcat_menu_classes',1,3);
