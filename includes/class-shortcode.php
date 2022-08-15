<?php 
namespace simsm;

if ( ! defined( 'ABSPATH' ) ) exit;

if( ! class_exists('simsm\Shortcode')){

	class Shortcode {


		function __construct(){

			add_shortcode( 'simple_slideout_menu', array( $this, 'simple_slideout_menu' ) );

		}


		function simple_slideout_menu( $atts = [] ){

			ob_start();
			?>
				<a href="#" data-trigger="simple-slideout" class="simsm-shortcode-ui"><span class="dashicons dashicons-menu"></span></a>
			<?php
			$contents = ob_get_contents();
			ob_end_clean();
			return $contents;

		}



	}

}