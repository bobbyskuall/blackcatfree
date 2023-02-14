<?php
/**
 * Blackcats Seguridad
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
define( 'BACKCATS_PRO_UPGRADE_URL', 'https://blackcats.com.co/pro/' );

define( 'BACKCATS_THEME_DIR', trailingslashit( get_template_directory() ) );

require_once BACKCATS_THEME_DIR . '/inc/core/blackcats.php';
require_once BACKCATS_THEME_DIR . '/inc/core/compatibiliada/soportes.php';
require_once BACKCATS_THEME_DIR . '/inc/custom/customizer.php';
require_once BACKCATS_THEME_DIR . '/template-parts/dlc/mobilemenu/custom-menu.php';


function jc_change_icon_admin_bar() {
	
	echo '<style type="text/css">
	
			#wpadminbar #wp-admin-bar-wp-logo > .ab-item .ab-icon:before {
				background-image: url(https://cdn.nskstudios.com/blackcats/admin-wordpress.png) !important;
				background-size: cover;
				background-position: 0 0;
				color:rgba(0, 0, 0, 0);
			}
			
			#wpadminbar #wp-admin-bar-wp-logo.hover > .ab-item .ab-icon {
				background-position: 0 0;
			}
	</style>';
}
add_action('wp_before_admin_bar_render', 'jc_change_icon_admin_bar');

add_action( 'admin_bar_menu', 'anadir_productos_barra', 500 );
function anadir_productos_barra( $wp_admin_bar ) {
    $args = array(
        'id'    => 'enlace-productos',
        'title' => __( 'Blackcat' ),
        'href'  => 'blackcats.com.co',
    );
    $wp_admin_bar->add_node($args);
}
add_action( 'admin_bar_menu', 'anadir_submenu_barra', 500 );
function anadir_submenu_barra( $wp_admin_bar ) {
    $wp_admin_bar->add_menu( array(
        'parent' => 'enlace-productos',
        'id'     => 'id_apariencia',
        'title'  => __('Apariencia2'),
        'href'   => 'blackcats.com.co/documentacion',
    ) );
}