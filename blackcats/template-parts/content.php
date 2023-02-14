<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
    while(have_posts()): the_post(); 
         the_content ( );
    endwhile;
?>