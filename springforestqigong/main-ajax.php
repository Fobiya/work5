<?php 

  function search_chang_post(){
      if ( empty($_POST) || ! wp_verify_nonce( $_POST['search_change_nonce'], 'search_change') ){
          print 'Sorry, the verification data does not match 1111.';
          exit;
      }else{



        if(sanitize_text_field($_POST['s']) !== ''){

            $options = array(
                'posts_per_page' => -1,
                'suppress_filters' => false, // important!
                'post_type' => 'post',
                'post_status' => 'publish',
                'orderby'     => 'title', 
                'order'       => 'ASC'  
            );
            $keyword = sanitize_text_field($_POST['s']);

            add_filter( 'posts_where', function ($where) use ($keyword) {
                global $wpdb;
                $where .= ' AND ' . $wpdb->posts . '.post_title LIKE \'%' . esc_sql( like_escape( $keyword ) ) . '%\'';
                return $where;
            });
            $posts = get_posts( $options );

              echo '<ul class="list open">';
              foreach( $posts as $post ){   ?>
                  <li><a href="<?php echo the_permalink($post); ?>"><?php echo get_the_title($post); ?></a></li>
                  <?php
              }
              echo '</ul>';
          }
      }
      die;
  }

add_action( 'wp_ajax_search_post_change', 'search_chang_post' );
add_action( 'wp_ajax_nopriv_search_post_change', 'search_chang_post' );






  function prod_addcart(){
    if ( empty($_POST) || ! wp_verify_nonce( $_POST['addcart_post_nonce'], 'addcart_post') ){
          print 'Sorry, the verification data does not match 1111.';
          exit;
      }else{
      
        global $woocommerce;
        $woocommerce->cart->add_to_cart( $product_id = sanitize_text_field($_POST['postid']), $quantity = sanitize_text_field($_POST['quantity']), $variation_id = 0, $variation = array(), $cart_item_data = array() );
        
        $pid = sanitize_text_field($_POST['postid']);
//echo get_price_html($product_id);
        
        
             $get_cart_contents_count =  WC()->cart->get_cart_contents_count(); 

             $get_cart_subtotalrrr = strip_tags(  WC()->cart->get_cart_subtotal() , '<ins><ins/>');

             $get_cart_subtotal = str_replace("&nbsp;&#107;&#114;", "", $get_cart_subtotalrrr);
        
        
        
         
         
          $items = $woocommerce->cart->get_cart();
          $total = $woocommerce->cart->get_cart_total();

        foreach ($items as $item => $values) {
            
                  $iditems = $values['product_id']; 
            
                            $rrrvalues = wc_get_product( $iditems );

                         $sum_regular_price = $rrrvalues->get_regular_price();
                   
                        $sum_quantity = $values['quantity'];
                   
                        $summm  =  $sum_regular_price * $sum_quantity;
                   
                   $sum+= $summm;
        }
           $notsale = number_format($sum , 2, ',', '.') . ' kr';
            
             
 
       $args = array(
           'post_type' => 'product',
            'p'         => $pid,
           'posts_per_page' => 1,
      
//             'post_type' => 'any'
        );
        // The Query
        $the_query = new WP_Query( $args );

        // The Loop
        if ( $the_query->have_posts() ) {

            while ( $the_query->have_posts() ) {
                $the_query->the_post();
              
              
              
              
              if(get_the_post_thumbnail_url()){
                   $get_the_post_thumbnail_url = get_the_post_thumbnail_url();
              }else{
                   $get_the_post_thumbnail_url = '//springfore1dev.wpengine.com/wp-content/uploads/woocommerce-placeholder-100x100.png';
              }

             
                $get_the_title = get_the_title();
                
                $content = get_the_content(); 
                $trimmed_content = wp_trim_words( $content, 10, '...' ); 
                
                global $product; 
                
                $price_html = $product->get_price_html();

                $code = '<div class="block__img"><img class="images" src="'. $get_the_post_thumbnail_url  .'"></div><p class="title">'. $get_the_title .'</p><span class="prise">'. $price_html .'</span><a class="sandy_brown" href="/cart/">Cart</a>';

               }

        } else {    
            // no posts found
        }
        /* Restore original Post Data */
        wp_reset_postdata();
           
            
           
        
            $return = array(
                'quantity'   => $get_cart_contents_count,
//                'total'        => $get_cart_subtotal .' kr',
                'code'        => $code,
//                'notsale'        =>  $notsale,
                
                
            );

            wp_send_json( $return );
        
 
      }
      die;
  }

add_action( 'wp_ajax_addcart_prod', 'prod_addcart' );
add_action( 'wp_ajax_nopriv_addcart_prod', 'prod_addcart' );

/**
	 * 
	 * Getting products for shop page
	 */


function my_ajax_get_posts(){
    if ( empty($_POST) || ! wp_verify_nonce( $_POST['spring_nonce'], 'spring_nonce') ){
          print 'Sorry, the verification data does not match 1111.';
          exit;
      }else{

//            die('Permission denied');

//          $category = $_POST['category'];
//            $response = $category;
      

  $category = $_POST['category'];
	$response = $category;


$args = array(
    'child_of' => $category
);
 
$terms = get_terms( 'product_cat', $args );
 
if ( $terms ) {
  foreach ( $terms as $term ) {  
             $image = get_field('category_images' , $term);

          $smoll__imgurl = $image['sizes']['testimonials']; ?>

          <div class="post__" style="background: #e55d45 url('<?php echo $smoll__imgurl; ?>')  no-repeat center; ">
      <div class="block__img__"><a class="title_link" href="<?php  echo get_term_link( $term ); ?>"><?php echo $term->slug; ?></a></div></div> 
   <?php  }
 
}
      

  else { 
$response = '';
  // WP Query
  $args = array(
      'post_type' => 'product',
      'tax_query' => array(
        array(
          'taxonomy' => 'product_cat',
         'field'    => 'term_id',
         'terms'     =>  array($category), 
        ),
      ),
      'posts_per_page' => -1,
    );
  
 
  // If category is not set, remove key from array and get all posts
  if( !$category ) {
    unset( $args['taxonomy'] );
  }

	 $query = new WP_query($args);
 
  if ( $query->have_posts() ) {
		 while ( $query->have_posts() ) : $query->the_post(); 
    
         $image = get_field('category_images' , $term);

          $smoll__imgurl = $image['sizes']['testimonials']; ?>

          <div class="post__" style="background: #e55d45 url('<?php echo $smoll__imgurl; ?>')  no-repeat center; ">
    
         <div class="block__img__"><a class="title_link" href="<?php  the_permalink(); ?>"><?php the_title(); ?></a></div></div> 
          
 
  <?php endwhile; ?>
  <?php } else {
		$response = '<h2>No posts found</h2>';
	}
//      

//      var_dump($terms);
      
 }   
      
      }
      
      die;
  }

add_action( 'wp_ajax_me_get_posts', 'my_ajax_get_posts' );
add_action( 'wp_ajax_nopriv_me_get_posts', 'my_ajax_get_posts' ); 


// Healers page filter
  
function my_ajax_get_healers(){

  if($_POST['search'] && $_POST['search'] == 'searchHealers'){
    $users_found = new WP_User_Query( array(
    'search'         => '*'.esc_attr( $_POST['searchString'] ).'*',
    'search_columns' => array(
        'user_nicename',
        'first_name',
        'last_name',
    ),
) );
$users = $users_found->get_results();
    if ($users){
      include( get_stylesheet_directory().'/template-parts/healers-list.php');
    } else {
      echo '<h2>No healers found</h2>';
    }
    die();
  }


  $tags = $_POST['eventType'];
  $locations = $_POST['eventLocation'];
  global $wpdb;

  $eventIds = $wpdb->get_results($wpdb->prepare( "SELECT `eventId` FROM `wp_amelia_events_tags` WHERE `name` = '$tags'", ARRAY_A));
  $events =  array_column($eventIds, 'eventId');
  $eventTxt = '('.implode(', ', $events).')';
 
  $healersByTags = $wpdb->get_results($wpdb->prepare( "SELECT `organizerId` FROM `wp_amelia_events` WHERE `id` IN $eventTxt GROUP BY `organizerId`", ARRAY_A));
  $orginizersByEventId = array_column($healersByTags, 'organizerId');

  $orginizersByLocationId = array();
  
  if($locations != ''){
    $locationIds = $wpdb->get_results($wpdb->prepare( "SELECT `id` FROM `wp_amelia_locations` WHERE `name` LIKE '%$locations%' ", ARRAY_A));
  

  $locationsTxt = '('.implode(', ', array_column($locationIds, 'id')).')';

  $healersByLocations = $wpdb->get_results($wpdb->prepare( "SELECT `userId` FROM `wp_amelia_providers_to_locations` WHERE `locationId` IN $locationsTxt ", ARRAY_A));
  $orginizersByLocationId = array_column($healersByLocations, 'userId');
};
  if ($tags != '' && $locations != ''){
    $ameliaUsers = array_intersect($orginizersByEventId, $orginizersByLocationId);
  } else {
    $ameliaUsers = array_unique(array_merge($orginizersByEventId,$orginizersByLocationId), SORT_REGULAR);
  };

  $ameliaUsersTxt = '('.implode(', ', $ameliaUsers).')';
  $userIds = $wpdb->get_results($wpdb->prepare( "SELECT `externalId` FROM `wp_amelia_users` WHERE `id` IN $ameliaUsersTxt ", ARRAY_A));

  $wpUsers = array_column($userIds, 'externalId'); 
  if($wpUsers){

  $args = array(
    'orderby' => 'user_nicename',
    'order'   => 'ASC',
    'include' => $wpUsers,
  );
  $users = get_users( $args );
 
  include( get_stylesheet_directory().'/template-parts/healers-list.php');
  
  } elseif ($tags == '' && $locations == '') {
    $args = array(
    'role'    => 'wpamelia-provider',
    'orderby' => 'user_nicename',
    'order'   => 'ASC',
  );
  $users = get_users( $args );

  include( get_stylesheet_directory().'/template-parts/healers-list.php');

  } else {

echo '<h2>No healers found</h2>';

  }
die;
}
add_action( 'wp_ajax_get_ajax_healers', 'my_ajax_get_healers' );
add_action( 'wp_ajax_nopriv_get_ajax_healers', 'my_ajax_get_healers' ); 