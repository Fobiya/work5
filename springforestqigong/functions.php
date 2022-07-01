<?php
/**
 * springforestqigong functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package springforestqigong
 */

// OFF NEW REDACTOR

// add_filter('use_block_editor_for_post', '__return_false');
// add_filter('use_block_editor_for_page', '__return_false'); 

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */


function springforestqigong_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on springforestqigong, use a find and replace
		* to change 'springforestqigong' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'springforestqigong', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'springforestqigong' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'springforestqigong_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'springforestqigong_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function springforestqigong_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'springforestqigong_content_width', 640 );
}
add_action( 'after_setup_theme', 'springforestqigong_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function springforestqigong_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'springforestqigong' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'springforestqigong' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'springforestqigong_widgets_init' );

//wp_enqueue_script('jquery');


/**
 * Enqueue scripts and styles.
 */
function springforestqigong_scripts() {
	wp_enqueue_style( 'springforestqigong-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'springforestqigong-style', 'rtl', 'replace' );
  
  
    wp_enqueue_style('min', get_template_directory_uri() . '/css/min.css');
		wp_enqueue_style('customize', get_template_directory_uri() . '/css/customize.css');
  
    wp_enqueue_script( 'main-ajax-new', get_stylesheet_directory_uri() .'/js/main-ajax.js?v13', array(), '1.0', true );
    // wp_localize_script( 'main-ajax-js-new', 'php_vars_new', array('ajax_url_new' => admin_url("admin-ajax.php") ,  'nonce_new' => wp_create_nonce('ajax-nonce'))    );
  
		 

	function ajax_filter_products_scripts() {
  // Enqueue script
  wp_register_script('spring_products_script', get_template_directory_uri() . '/js/ajax-filter-products.js', false, null, false);
  wp_enqueue_script('spring_products_script');
 
	wp_localize_script( 'spring_products_script', 'spring_vars', array(
        'spring_nonce' => wp_create_nonce( 'spring_nonce' ), // Create nonce which we later will use to verify AJAX request
        'spring_ajax_url' => admin_url( 'admin-ajax.php' ),
      )
  );
  // wp_localize_script( 'afp_script', 'afp_vars', array(
  //       'afp_nonce' => wp_create_nonce( 'afp_nonce' ), // Create nonce which we later will use to verify AJAX request
  //       'afp_ajax_url' => admin_url( 'admin-ajax.php' ),
  //     )
  // );
}
add_action('wp_enqueue_scripts', 'ajax_filter_products_scripts', 100);


   wp_enqueue_script('main.min.js', get_template_directory_uri() . '/js/main.min.js?v13.001',  array(), '1.0', true );
  
  wp_enqueue_script('fansy-box', get_template_directory_uri() . '/js/jquery.fancybox.js', array('jquery'), null, true);
	wp_enqueue_script( 'springforestqigong-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'springforestqigong_scripts' );

require_once 'main-ajax.php';



/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if (class_exists('WooCommerce')) {
	require get_template_directory() . '/inc/woocommerce.php';
}

/**
 * DROP woocommerce_enqueue_styles.
 */
add_filter( 'woocommerce_enqueue_styles', '__return_false' ); 

/**
 * register Google maps API for ACF 
 */

 
function my_acf_init() {
	
	acf_update_setting('google_api_key', 'AIzaSyCiJatC7yb5TKWSKiPZKLOdLymPRY-gKsA');
}

add_action('acf/init', 'my_acf_init');



 include (get_template_directory() .'/inc/shortcodes.php');


 include (get_template_directory() .'/inc/breadcrumbs.php');



 /**
 * Include custom post types
 */
  include (get_template_directory() .'/inc/custom-post-types.php');

	/**
	 * Redirect after logout
	 */

	add_filter( 'logout_redirect', function() {
			return esc_url( home_url() );
	} ); 

	

add_image_size( 'testimonials', 420, 340, true );


add_image_size( 'singel-products', 413, 276, true );
add_image_size( 'singel-courses', 240, 240, true );


add_image_size( 'slider-big', 600, 600, true );
add_image_size( 'slider-smoll', 180, 120, true );


add_image_size( 'product-img', 240, 260, true );
add_image_size( 'product-category', 613, 586, true );

add_image_size( 'checkout', 94, 98, true );


add_action( 'wp_footer', 'cart_update_qty_script' );
function cart_update_qty_script() {
  if (is_cart()) :
   ?>
    <script>
        jQuery('div.woocommerce').on('change', '.qty', function(){
           jQuery("[name='update_cart']").removeAttr('disabled');
           jQuery("[name='update_cart']").trigger("click"); 
        });
   </script>
<?php
endif;
}


// Add this to your theme's functions.php
function kia_add_script_to_footer(){
    if( ! is_admin() ) { ?>
    <script>
    jQuery(document).ready(function($){
    $('.quantity').on('click', '.plus', function(e) {
        $input = $(this).prev('input.qty');
        var val = parseInt($input.val());
        var step = $input.attr('step');
        step = 'undefined' !== typeof(step) ? parseInt(step) : 1;
        $input.val( val + step ).change();
    });

    $('.quantity').on('click', '.minus', 
        function(e) {
        $input = $(this).next('input.qty');
        var val = parseInt($input.val());
        var step = $input.attr('step');
        step = 'undefined' !== typeof(step) ? parseInt(step) : 1;
        if (val > 0) {
            $input.val( val - step ).change();
        } 
    });
});
</script>
<?php }
}
add_action( 'wp_footer', 'kia_add_script_to_footer' );



add_filter('woocommerce_billing_fields','wpb_custom_billing_fields');
// remove some fields from billing form
// ref - https://docs.woothemes.com/document/tutorial-customising-checkout-fields-using-actions-and-filters/
function wpb_custom_billing_fields( $fields = array() ) {

	unset($fields['billing_company']);
//	unset($fields['billing_address_1']);
	unset($fields['billing_address_2']);
//	unset($fields['billing_state']);
//	unset($fields['billing_city']);
//	unset($fields['billing_phone']);
//	unset($fields['billing_postcode']);
//	unset($fields['billing_country']);

	return $fields;
}


//add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields_ek', 99 );
//// Remove some fields from billing form
//// Our hooked in function - $fields is passed via the filter!
//// Get all the fields - https://docs.woothemes.com/document/tutorial-customising-checkout-fields-using-actions-and-filters/
//function custom_override_checkout_fields_ek( $fields ) {
//     unset($fields['billing']['billing_company']);
//     unset($fields['billing']['billing_address_1']);
//     unset($fields['billing']['billing_postcode']);
//     unset($fields['billing']['billing_state']);
//
//     return $fields;
//}
