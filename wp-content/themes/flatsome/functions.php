<?php
/**
 * Flatsome functions and definitions
 *
 * @package flatsome
 */

require get_template_directory() . '/inc/init.php';

/**
 * Note: It's not recommended to add any custom code here. Please use a child theme so that your customizations aren't lost during updates.
 * Learn more here: http://codex.wordpress.org/Child_Themes
 */
/* wp_nav_menu( array(
        'theme_location' => 'primary',
        'menu_class'     => 'primary-menu',
         ) );
		 */

/**
 * Remove/Disable/DeQueue jQuery Migrate in WordPress.
 *
 * @author Nguy?n Ğình Quân a.k.a narga.
 * @link https://www.narga.net/how-to-remove-jquery-migrate/
 */
add_action( 'wp_default_scripts', 'remove_jquery_migrate' );
function remove_jquery_migrate( $scripts ) {
	if ( ! is_admin() && isset( $scripts->registered['jquery'] ) ) {
		$script = $scripts->registered['jquery'];

		if ( $script->deps ) { // Check whether the script has any dependencies
			$script->deps = array_diff( $script->deps, array( 'jquery-migrate' ) );
		}
	}
 }