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

                $get_the_post_thumbnail_url = get_the_post_thumbnail_url();
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
