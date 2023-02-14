<?php
/**
 * Blackcats Seguridad
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '7.0.0' );
}

/********************************************************
             pie de pagina del panel de Administración
**********************************************************/

function change_footer_admin() { 
    echo '&copy; 2017 - ' ;
    echo date('Y');
    echo ' Copyright NSK Studios <a target="_blank" rel="nofollow" href="https://blackcats.com.co/">BlackCats</a>. Todos los derechos reservados - Theme BlackCat Version ', _S_VERSION;  
}  
add_filter('admin_footer_text', 'change_footer_admin');

/********************************************************
          Dashboard Widget
**********************************************************/

function blackcat_dashboard_widget() { ?>
    <iframe id="inlineFrameExample"
        title="Inline Frame Example"
        width="100%"
        height="auto"
        src="https://cdn.blackcats.com.co/conect-blackcat.php">
    </iframe>
<?php } 
add_action( 'wp_dashboard_setup', 'blackcat_dashboard_setup_function' );

function blackcat_dashboard_setup_function() {
add_meta_box( 'blackcat_dashboard_widget', 'Bienvenido al Tema BlackCats', 'blackcat_dashboard_widget', 'dashboard', 'normal', 'high' );
}
/***********************************
 *  Login Stylos
 ********************************/

 add_action( 'login_enqueue_scripts', 'blackcat_login_custom' );
 function blackcat_login_custom() {
    wp_enqueue_style( 'blackcat-custom-login', get_stylesheet_directory_uri().  '/assets/css/blackcat-login.css', array('login') );
    wp_enqueue_style('silvergrip', get_stylesheet_directory_uri(). '/inc/librerias/silvergrip/SilverGrip.css' );
 }
/***********************************
 *  Estilos para el Backend
 ********************************/
function wp_blackcat_theme_admin(){
   // wp_enqueue_style('silvergrip', get_stylesheet_directory_uri(). '/inc/librerias/silvergrip/SilverGrip.css' );
    wp_enqueue_style('poppins-font', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' );
}
add_action("admin_enqueue_scripts", "wp_blackcat_theme_admin");

/***********************************
 *  Estilos para el Fontend
 ********************************/
function blackcat_theme_styles () {
    wp_enqueue_style('silvergrip', get_stylesheet_directory_uri(). '/inc/librerias/silvergrip/SilverGrip.css' );
    wp_enqueue_style('blackcat-font', get_stylesheet_directory_uri(). '/assets/css/blackcat.css' );
  	wp_enqueue_style('style', get_stylesheet_uri() );   
    wp_enqueue_script('jquery');  
}
add_action('wp_enqueue_scripts', 'blackcat_theme_styles');

/**** Menu Codigos Cortos */
add_shortcode('primary-menu', 'shortcode_primary_menu');
function shortcode_primary_menu() {
    get_template_part('template-parts/primary_menu');
}


add_shortcode('movil-bar', 'shortcode_movil_bar');
function shortcode_movil_bar() {
    get_template_part('template-parts/dlc/mobilemenu/movil-bar');
}

