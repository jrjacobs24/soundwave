<?php

// Translations can be filed in the /lang/ directory
load_theme_textdomain( 'themejunkie', TEMPLATEPATH . '/lang' );


require_once(TEMPLATEPATH . '/includes/sidebar-init.php');
require_once(TEMPLATEPATH . '/includes/custom-functions.php');
require_once(TEMPLATEPATH . '/includes/post-thumbnails.php');

require_once(TEMPLATEPATH . '/includes/theme-comments.php');

require_once(TEMPLATEPATH . '/includes/theme-options.php');
require_once(TEMPLATEPATH . '/includes/theme-widgets.php');

require_once(TEMPLATEPATH . '/functions/theme_functions.php'); 
require_once(TEMPLATEPATH . '/functions/admin_functions.php');

add_action( 'wp_head', 'add_apple_touch_icon' );

function add_apple_touch_icon(){
    printf(
        '<link rel="apple-touch-icon" href="%s" />',
        get_template_directory_uri().'/apple-touch-152.png'
    );
}

function sw_enqueue_scripts() {
	wp_enqueue_style( 'main-style',  get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'sw_enqueue_scripts', 25 );

/**
 * Keep Pull List Items Checked
 */
function mytheme_set_subscribed_comics($form)
{
	if (is_user_logged_in()) {
		global $current_user;
		$comics = array_merge(
			(array) $form->getValue('iphorm_1_1'),
			(array) $form->getValue('iphorm_1_2'),
			(array) $form->getValue('iphorm_1_3'),
			(array) $form->getValue('iphorm_1_4'),
			(array) $form->getValue('iphorm_1_5'),
			(array) $form->getValue('iphorm_1_6'),
			(array) $form->getValue('iphorm_1_7'),
			(array) $form->getValue('iphorm_1_8'),
			(array) $form->getValue('iphorm_1_9'),
			(array) $form->getValue('iphorm_1_10'),
			(array) $form->getValue('iphorm_1_11'),
			(array) $form->getValue('iphorm_1_12'),
			(array) $form->getValue('iphorm_1_13'),
			(array) $form->getValue('iphorm_1_14'),
			(array) $form->getValue('iphorm_1_15'),
			(array) $form->getValue('iphorm_1_16'),
			(array) $form->getValue('iphorm_1_17'),
			(array) $form->getValue('iphorm_1_18'),
			(array) $form->getValue('iphorm_1_19'),
			(array) $form->getValue('iphorm_1_20'),
			(array) $form->getValue('iphorm_1_21'),
			(array) $form->getValue('iphorm_1_22'),
			(array) $form->getValue('iphorm_1_23'),
			(array) $form->getValue('iphorm_1_24'),
			(array) $form->getValue('iphorm_1_25'),
			(array) $form->getValue('iphorm_1_26'),
			(array) $form->getValue('iphorm_1_27'),
			(array) $form->getValue('iphorm_1_28'),
			(array) $form->getValue('iphorm_1_29'),	
			(array) $form->getValue('iphorm_1_42'),
			(array) $form->getValue('iphorm_1_43')	
		);
		update_user_meta($current_user->ID, 'subscribed_comics', $comics);
	}
}
add_action('iphorm_post_process_1', 'mytheme_set_subscribed_comics');
function mytheme_get_subscribed_comics($value)
{
	if (is_user_logged_in()) {
		global $current_user;
		$value = get_user_meta($current_user->ID, 'subscribed_comics', true);
	}
	return $value;
}

add_action('iphorm_element_value_comics', 'mytheme_get_subscribed_comics');

/**
*End Save Pull List Items
*/


/**
 * Redirect to new page with Thank you
 */

function mytheme_save_form_data($form)
{
    $_SESSION['iphorm_1'] = $form->getValue(iphorm_1_1);
}
add_action('iphorm_post_process_1', 'mytheme_save_form_data');

/** End Thank You*/



/**Profile Additions*/


function modify_contact_methods($profile_fields) {

		// Add new fields
	$profile_fields['tel'] = 'Phone';
	$profile_fields['twitter'] = 'Twitter';
	$profile_fields['facebook'] = 'Facebook URL';
	$profile_fields['gplus'] = 'Google+ URL';
	
		// Remove old fields
	unset($profile_fields['aim']);
	unset($profile_fields['yim']);
	unset($profile_fields['jabber']);

	return $profile_fields;
}
add_filter('user_contactmethods', 'modify_contact_methods'); 

/**End Profile Additions*/

// Uncomment this to test your localization, make sure to enter the right language code.
// function test_localization( $locale ) {
// 	return "nl_NL";
// }
// add_filter('locale','test_localization');


/* add_theme_support( 'post-thumbnails' );

add_theme_support( 'post-formats', array(  'image', 'quote', 'video', 'audio' ) );

// add post-formats to post_type 'page'
add_post_type_support( 'page', 'post-formats' );

// add post-formats to post_type 'post'
add_post_type_support( 'post', 'post-formats' );

*/


/**
 * Redirect '/wp-login' to theme's login page
 * @see http://www.inkthemes.com/how-to-redirecting-wordpress-default-login-into-a-custom-login-page/
 */
function goto_login_page() {
	global $page_id;
	$login_page = home_url( '/log-in/' );
	$page = basename($_SERVER['REQUEST_URI']);

	// Redirect to custom login page if user is trying to access the admin area and they're not logged in
	if( !is_user_logged_in() && ($page == "wp-admin.php" || $page == 'wp-admin' ) && $_SERVER['REQUEST_METHOD'] == 'GET' ) {
		wp_redirect($login_page);
		exit;
	}

	// Redirect to custom login page from default WordPress login page
	if( ($page == "wp-login.php" || $page == 'wp-login' ) && $_SERVER['REQUEST_METHOD'] == 'GET') {
		wp_redirect($login_page);
		exit;
	}
}
add_action('init','goto_login_page');

?>