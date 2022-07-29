<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package springforestqigong
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function springforestqigong_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'springforestqigong_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function springforestqigong_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'springforestqigong_pingback_header' );

/**
 * Get All Products Purchased by User
 */

 function sfgGetBouthProducts(){
	$current_user = wp_get_current_user();
                if ( 0 == $current_user->ID ) return;
              
                // GET USER ORDERS (COMPLETED + PROCESSING)
                $customer_orders = get_posts( array(
                    'numberposts' => -1,
                    'meta_key'    => '_customer_user',
                    'meta_value'  => $current_user->ID,
                    'post_type'   => wc_get_order_types(),
                    'post_status' => array_keys( wc_get_is_paid_statuses() ),
                ) );
              
                // LOOP THROUGH ORDERS AND GET PRODUCT IDS
                if ( ! $customer_orders ) return;
                $product_ids = array();
                foreach ( $customer_orders as $customer_order ) {
                    $order = wc_get_order( $customer_order->ID );
                    $items = $order->get_items();
                    foreach ( $items as $item ) {
                        $product_id = $item->get_product_id();
                        $product_ids[] = $product_id;
                    }
                }
                $product_ids = array_unique( $product_ids );
                $product_ids_str = implode( ",", $product_ids );
								return $product_ids;
 }

 /**
  * Registrations hook
  */

  add_action( 'user_register', 'sfg_woocommerce_register_form_action' );

/**
 * Sync  between new registered user and new Amelia customer.
 * 
 * @return void
 */
function sfg_woocommerce_register_form_action($user_id){

	if ( isset( $_POST['woocommerce-register-nonce'] ) &&  isset( $_POST['register'] )){
        $ameliaUser = explode('@',$_POST['email']);
        $ameliaUserName = $ameliaUser[0];
        $ameliaUserSurname = $ameliaUser[1];
        $ameliaArgs = array(
            'status'       => 'visible',
            'type'         => 'customer',
            'externalId'   => $user_id,
            'firstName'     => $ameliaUserName,
            'lastName'     => $ameliaUserSurname,
            'email'        => $_POST['email'],
        );

        global $wpdb;
        $wpdb->show_errors(); 
        $wpdb->insert( 'wp_amelia_users',$ameliaArgs);

        update_user_meta($user_id, 'wp_capabilities', serialize(
            array(
                'customer' => true,
                'wpamelia-customer' =>true,
                )
            ));

    }
    
}

/**
 * Add option page
 */

 if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	
}

/**
 * Get addresses
 */

 function getAddress($latitude, $longitude, $return)
{
  $key = get_field('google_map_api_key', 'option');;      
  //google map api url
        $url = "https://maps.google.com/maps/api/geocode/json?latlng=$latitude,$longitude&key=$key";

        // send http request
        $geocode = file_get_contents($url);
        $json = json_decode($geocode);
        $address = $json->results[0];
        switch ($return){
            case 'debug':
                return $json;
                break;

            case 'address':
                return $address;   
                break;
                
            case 'name':
                return $address->address_components[0]->long_name;   
                break;

            case 'city':
                return $address->address_components[2]->long_name;   
                break;

            case 'state':
                return $address->address_components[4]->long_name;   
                break;

            case 'state_short':
                return $address->address_components[4]->short_name;   
                break;

            case 'country':
                return $address->address_components[5]->long_name;   
                break;

            case 'country_short':
                return $address->address_components[5]->short_name;   
                break;

            case 'formatted':
                return $address->formatted_address;   
                break;
                
        }
        
};

/**
 * 
 * Add template for healer single page
 */

 add_action('init', function() {

  $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
  $urlParts = parse_url($url);
  $path = $urlParts['path'];
  $subdomain = explode('/', $path);
  
  if ( $subdomain[1] === 'healer' ) {
     // load the file if exists
     $load = locate_template('tpl-healers-overview.php', true);
     if ($load) {
        exit(); // just exit if template was found and loaded
     }
  }
});

add_action( 'woocommerce_add_to_cart', function ()
{
  return 'ggg';// your code here
});