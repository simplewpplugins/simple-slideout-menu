<?php
$position = get_option( 'simsm_panel_position', 'left');
$shadow = get_option( 'simsm_panel_shadow', 'shadow');
if($shadow){
	$shadow = 'shadow';
}else{
	$shadow = 'no_shadow';
}
?>
<div id="simple-slideout-menu-panel" class="simple-slideout-menu-panel <?php echo esc_html( $position ); ?> <?php echo esc_html( $shadow ); ?>">
    <a href="#" class="simple-slideout-menu-close" data-trigger="simple-slideout"><span class="dashicons dashicons-menu"></span></a>
    <?php 
    do_action('before_simple_slideout_menu');
    wp_nav_menu([
    	'theme_location' => 'slideout_menu',
    	'container' 	 => false, 
    	'depth' 		 => 3,
    	'menu_class'     => 'slideout-menu'

    ]); 
    do_action('after_simple_slideout_menu');
    ?>
</div>