<?php

if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))) {

  // Все что связано с woocommerce
  function maskers_add_woocommerce_support(){
      add_theme_support('woocommerce');
  }

  add_action('after_setup_theme', 'maskers_add_woocommerce_support');
}

//Отключить Хлебные крошки
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);


/**
 * Персонализируем хлебные крошки
 */
//add_filter( 'woocommerce_breadcrumb_defaults', 'wcc_change_breadcrumb_delimiter' );
//function wcc_change_breadcrumb_delimiter( $defaults ) {
//	// Change the breadcrumb delimeter from '/' to '>'
//	$defaults['delimiter'] = '  &nbsp;/&nbsp;  ';
//	$defaults['wrap_before'] = '<ul><li><a> ';
//	$defaults['wrap_after'] = ' </a></li></ul>';
//	return $defaults;
//
//}


//Отключить Sidebar
//remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);

//add_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 5);




//Фильтр добавления класса табуляции в моем аккаунте 
add_filter('woocommerce_account_menu_item_classes' , 'estore_account_menu_item_classes' , 10, 2 );
function estore_account_menu_item_classes($classes, $endpoint){

  global $wp;

  $current = isset( $wp->query_vars[$endpoint] );
  if( 'dashboard' === $endpoint && ( isset ($wp->query_vars['page']) ||  empty($wp->query_vars))){
    $current = true;
  }
  if($current) {
      $classes[] = 'actives';
  }
  return $classes;
}



add_filter('woocommerce_account_menu_items' , 'estore_account_menu_items' , 10, 1 );
function estore_account_menu_items($items){

  unset( $items['downloads'] );
  return $items;
}


