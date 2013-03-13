<?php

include_once( PWP_PLUGIN_DIR . '/pages/social-page.php');
include_once( PWP_PLUGIN_DIR . '/pages/extra-fields-page.php' );
include_once( PWP_PLUGIN_DIR . '/pages/shortcodes-page.php' );

/* Admin options menu */
function surbma_add_menus() {
	add_submenu_page( 'pwp-plugins', 'Közösségi integráció', 'Közösségi integráció', 'manage_options', 'pwp-social', 'pwp_social_page' );
	add_submenu_page( 'pwp-plugins', 'Extra tartalmak megjelenítése', 'Extra tartalmak', 'manage_options', 'pwp-extra-fields', 'pwp_extra_fields_page' );
	add_submenu_page( 'pwp-plugins', 'Extra rövidkódok', 'Extra rövidkódok', 'publish_posts', 'pwp-shortcodes', 'pwp_shortcodes_page' );
}
add_action( 'admin_menu', 'surbma_add_menus' );

