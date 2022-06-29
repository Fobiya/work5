<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

get_header(); 

defined( 'ABSPATH' ) || exit;

// Note: `wc_get_gallery_image_html` was added in WC 3.3.2 and did not exist prior. This check protects against theme overrides being used on older versions of WC.
if ( ! function_exists( 'wc_get_gallery_image_html' ) ) {
    return;
}

global $product;

$attachment_ids = $product->get_gallery_image_ids();  

if(0){

    global $product;

    /**
     * Hook: woocommerce_before_single_product.
     *
     * @hooked woocommerce_output_all_notices - 10
     */
    do_action( 'woocommerce_before_single_product' );

    if ( post_password_required() ) {
        echo get_the_password_form(); // WPCS: XSS ok.
        return;
    }
    ?>
    <div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>

        <?php
        /**
         * Hook: woocommerce_before_single_product_summary.
         *
         * @hooked woocommerce_show_product_sale_flash - 10
         * @hooked woocommerce_show_product_images - 20
         */
        do_action( 'woocommerce_before_single_product_summary' );
        ?>

        <div class="summary entry-summary">
            <?php
            /**
             * Hook: woocommerce_single_product_summary.
             *
             * @hooked woocommerce_template_single_title - 5
             * @hooked woocommerce_template_single_rating - 10
             * @hooked woocommerce_template_single_price - 10
             * @hooked woocommerce_template_single_excerpt - 20
             * @hooked woocommerce_template_single_add_to_cart - 30
             * @hooked woocommerce_template_single_meta - 40
             * @hooked woocommerce_template_single_sharing - 50
             * @hooked WC_Structured_Data::generate_product_data() - 60
             */
            do_action( 'woocommerce_single_product_summary' );
            ?>
        </div>

        <?php
        /**
         * Hook: woocommerce_after_single_product_summary.
         *
         * @hooked woocommerce_output_product_data_tabs - 10
         * @hooked woocommerce_upsell_display - 15
         * @hooked woocommerce_output_related_products - 20
         */
        do_action( 'woocommerce_after_single_product_summary' );
        ?>
    </div>

    <?php do_action( 'woocommerce_after_single_product' ); 

 }

global $woocommerce;
global $product;

$order = wc_get_order( $order_id );

//foreach ( $order->get_items() as $item_id => $item ) {
//   $product_id = $item->get_product_id();
//   $variation_id = $item->get_variation_id();
//   $product = $item->get_product();
//   $name = $item->get_name();
//   $quantity = $item->get_quantity();
//   $subtotal = $item->get_subtotal();
//   $total = $item->get_total();
//   $tax = $item->get_subtotal_tax();
//   $taxclass = $item->get_tax_class();
//   $taxstat = $item->get_tax_status();
//   $allmeta = $item->get_meta_data();
//   $somemeta = $item->get_meta( '_whatever', true );
//   $type = $item->get_type();
//}  ?>
    
    
    
    <section class="section__ single__1">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l12 xl12">
           
              <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
            
          </div>
        </div>
        <div class="row">
          <div class="col m12 s12 l6 xl6">
           
              <?php  $product = new WC_Product( get_the_ID() );
                      $attachment_ids = $product->get_gallery_image_ids();  ?>

           
            <div class="block_big">
             
             <div class="box__arrow"><a class="prev__" href="javascript:;"></a><a class="next__" href="javascript:;"></a></div>
              
              <div class="single__slider">

                  <?php if ( $attachment_ids && $product->get_image_id() ) {
                          foreach ( $attachment_ids as $attachment_id ) {
                            $image_url = wp_get_attachment_url( $attachment_id, 'slider-big' );  ?>
                          <div><img src="<?php echo $image_url; ?>" alt="%s" /></div>

                   <?php }
                  }else if(get_the_post_thumbnail_url()) {  ?>

                       <div><img src="<?php echo get_the_post_thumbnail_url($loop->post->ID); ?>" alt="%s" /></div>
                       
                  <?php }else {  ?>
                  
             <div><img src="/wp-content/uploads/woocommerce-placeholder-600x600.png" src="<?= get_template_directory_uri(); ?>/img/" alt="demo" /></div>
             
         <?php  } ?> 

                


              </div>
            </div>
            <div class="block_smoll">
              <div class="single__smoll_slider">

                	<?php if ( $attachment_ids && $product->get_image_id() ) { 
                            foreach ( $attachment_ids as $attachment_id ) {
                              $image_url = wp_get_attachment_url( $attachment_id, 'slider-smoll' );  ?>
                              
                            <div class="block__img"><img src="<?php echo $image_url; ?>" alt="%s" /></div>
                            
                    <?php }
                    } ?>

              </div>
            </div>
            
            
            
          </div>
          <div class="col m12 s12 l6 xl6">
            <?php if (get_the_title()) { ?>
              <h1 class="title__"><?php the_title(); ?></h1>
            <?php } ?>
            
            <?php echo apply_filters( 'woocommerce_short_description', $product->get_short_description() ); ?>
            
            
            <div class="price"><?php echo $product->get_price_html(); ?></div>
            
            <div class="block_button">
              <a class="orange" href="/checkout/">Checkout</a> 

               <form id="<?php echo get_the_ID(); ?>"  method='POST' action='javascript:void(null);'>

                  <input type="hidden" id="product-quantity" name="quantity" value="1" min="1">


                  <?php wp_nonce_field( 'addcart_post', 'addcart_post_nonce' );?>
                  <input type="hidden" name="postid" value="<?php echo get_the_ID(); ?>">
                  <input type="hidden" name="action" value="addcart_prod">

                   <a type="submit" name="add" class="border_orange" data-form="<?php echo get_the_ID(); ?>">Add to Cart</a>

               </form>

            </div>
            

             <?php $product_categories = get_the_terms( $post->ID, 'product_cat' ); ?>
             
            <div class="box__catalog">
             <span class="name">Categories:</span>
               <div class="catalog__list">
             
             <?php if (!empty($product_categories)) :
                foreach ($product_categories as $key=>$product_category) :  ?>
                
                <a href="<?php echo get_term_link($product_category); ?>">
                  <?php echo esc_attr($product_category->name); ?>
                </a>
                  <?php if ($key+1 < count($product_categories)) echo ',';?>
                <?php endforeach; ?>
                
              </div>
            </div>
                
              <?php endif; ?>    


          </div>
        </div>
      </div>
      
      

      
            <div class="container">
            
              <?php // check if the flexible content field has rows of data
                  if( have_rows('shop_pages') ):
                       // loop through the rows of data
                      while ( have_rows('shop_pages') ) : the_row(); ?>
                      <?php if( get_row_layout() == 'section_1' ): ?> 
             
              <div class="row">
                <div class="col m12 s12 l12 xl8">

                     <?php if( get_sub_field('title')): ?><!-- if under__the -->
                      <h2 class="title"><?php the_sub_field('title'); ?></h2>
                     <?php endif; ?>

                     <?php if( get_sub_field('content')): ?><!-- if under__the -->
                        <div class="bloclk_content">
                          <p><?php the_sub_field('content'); ?></p>
                        </div>
                     <?php endif; ?>

                </div>
                <div class="col m12 s12 l12 xl4">

                  <?php $image = get_sub_field('images'); ?>

                  <?php if( !empty( $image ) ): ?>
                    <div class="block__img">
                      <img class="logo__img" src="<?php echo esc_url($image['url']); ?>"  alt="<?php echo esc_attr($image['alt']); ?>">
                    </div>
                  <?php endif; ?>     


                </div>
              </div>
              
           <?php elseif( get_row_layout() == 'section_2' ): ?>
              
              <div class="row">
                <div class="col m12 s12 l12 xl12">
                  
                   <?php if( get_sub_field('title')): ?><!-- if under__the -->
                      <h2 class="sub__title"><?php the_sub_field('title'); ?></h2>
                   <?php endif; ?>
                     
                </div>
                

              <?php if( have_rows('box_list') ): ?>

                  <?php while( have_rows('box_list') ): the_row();
                      // vars
                      $image1 = get_sub_field('image1'); 
                    //  $title = get_sub_field('title');
                    //  $paragraph = get_sub_field('paragraph');
                    //  $link = get_sub_field('link');  ?>

                          <div class="col m6 s12 l3 xl3 box__">
                           
                           
                              <?php if( !empty( $image1 ) ): ?>
                                <div class="box__img">
                                  <img class="images" src="<?php echo esc_url($image1['url']); ?>"  alt="<?php echo esc_attr($image1['alt']); ?>">
                                </div>
                              <?php endif; ?>    

                            
                             <?php if( get_sub_field('title')): ?><!-- if under__the -->
                               <h3 class="title"><?php the_sub_field('title'); ?></h3>
                             <?php endif; ?>
                            
                             <?php if( get_sub_field('paragraph')): ?><!-- if under__the -->
                               <p><?php the_sub_field('paragraph'); ?></p>
                             <?php endif; ?>                            
                          </div>


                    <?php endwhile; ?>

                <?php endif; ?>
         
                
              </div>
              
           <?php elseif( get_row_layout() == 'section_3' ): ?>
              
              <div class="row">
                <div class="col m12 s12 l12 xl4">
                 
                  <?php $image = get_sub_field('image1'); ?>

                  <?php if( !empty( $image ) ): ?>
                    <div class="block__img">
                      <img class="logo__img" src="<?php echo esc_url($image['url']); ?>"  alt="<?php echo esc_attr($image['alt']); ?>">
                    </div>
                  <?php endif; ?>     

                    
                </div>
                <div class="col m12 s12 l12 xl7 offset-xl1">
                
                 <?php if( get_sub_field('title')): ?><!-- if under__the -->
                   <h3 class="title"><?php the_sub_field('title'); ?></h3>
                 <?php endif; ?>

                 <?php if( get_sub_field('content')): ?><!-- if under__the -->
                    <div class="bloclk_content">
                      <p><?php the_sub_field('content'); ?></p>
                    </div>
                 <?php endif; ?>

                  
                  
                </div>
              </div>
              
       <?php endif;
        endwhile;
    endif; ?>
              
            </div>


      
      
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l12 xl12">
            <h2 class="title">Testimonials</h2>
          </div>
        </div>
      </div>
    </section>
    
    <section class="section__ single__2">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l12 xl12">
            <div class="testimonials_slider">
              <div>
                <div class="block__">
                  <div class="box_img"><img class="logo__img" src="<?= get_template_directory_uri(); ?>/img/single__2_slider.png" alt="face"></div>
                  <div class="box_content">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo.</p>
                    <p class="author">- Name and Surname</p>
                  </div>
                </div>
              </div>
              <div>
                <div class="block__">
                  <div class="box_img"><img class="logo__img" src="<?= get_template_directory_uri(); ?>/img/single__2_slider.png" alt="face"></div>
                  <div class="box_content">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo.</p>
                    <p class="author">- Name and Surname</p>
                  </div>
                </div>
              </div>
              <div>
                <div class="block__">
                  <div class="box_img"><img class="logo__img" src="<?= get_template_directory_uri(); ?>/img/single__2_slider.png" alt="face"></div>
                  <div class="box_content">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo.</p>
                    <p class="author">- Name and Surname</p>
                  </div>
                </div>
              </div>
              <div>
                <div class="block__">
                  <div class="box_img"><img class="logo__img" src="<?= get_template_directory_uri(); ?>/img/single__2_slider.png" alt="face"></div>
                  <div class="box_content">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo.</p>
                    <p class="author">- Name and Surname</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section class="section__ single__3">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l12 xl12">
            <h4 class="sub_title">Similar Products</h4>
          </div>
        </div>
        <div class="row">
         
          <?php $args = array(
                  'order' => 'DESC', // order filter  last post
                  'post_type'  => 'product', // Post type category BLOG
                  'posts_per_page' => 3, // echo show three post 
              );
              // The Query
              $the_query = new WP_Query( $args );

              // The Loop
              if ( $the_query->have_posts() ) {

                  while ( $the_query->have_posts() ) {
                      $the_query->the_post(); 

                      global $woocommerce;
                      global $product;

                      $order = wc_get_order( $order_id ); ?>

                        <div class="col m6 s12 l4 xl4">
                          <div class="block__catygory">
                           
                            <div class="catygory__img">
                            
                             <a href="<?php echo get_the_permalink(); ?>">

                               <?php if(get_the_post_thumbnail_url()){ ?>
                                <img src="<?= get_the_post_thumbnail_url( get_the_ID(), 'singel-products' ); ?>" alt="face">
                               <?php }else{ ?>
                                <img src="<?= get_template_directory_uri(); ?>/img/shop__1_category_1.png" alt="logo_w">
                               <?php } ?>

                             </a>
                            </div>
                            
                            <div class="catygory__content">
                             
                              <h3 class="title__catygory" title="<?php echo  get_the_title(); ?>">
                              <?php  $rtextthe_title = strip_tags( get_the_title()); echo mb_substr( $rtextthe_title, 0, 23);  ?></h3><span class="prise"><?php echo $product->get_price_html(); ?></span>
                              
                               <?php $short_description = apply_filters( 'woocommerce_short_description', $post->post_excerpt ); ?>
                               
                               
                             <?php if($short_description){ ?> 
                                <p><?php $rtextthe_ertitle = strip_tags( $short_description); echo mb_substr( $rtextthe_ertitle, 0, 180); echo '...'; // echo $short_description; // WPCS: XSS ok. ?></p>
                             <?php }else{  ?>
                               <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Lorem ipsum dolor sit amet elit sit amet elit.</p>
                             <?php } ?>

                              <a class="border_orange" href="<?php echo get_the_permalink(); ?>">View Item</a>
                            </div>
                          </div>
                        </div>

                  <?php }

              } else {
                  echo '<p>no posts found</p>';
              }
              /* Restore original Post Data */
              wp_reset_postdata();
            ?>


          

        </div>
      </div>
      
      
      
      
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l12 xl12">
            <h4 class="sub_title">Our Courses</h4>
          </div>

        <?php  $args = array(
            'order' => 'DESC', // order filter  last post
            'post_type'  => 'sfwd-courses', // Post type category BLOG
            'posts_per_page' => 2, // echo show three post 
        );
        // The Query
        $the_query = new WP_Query( $args );

        // The Loop
        if ( $the_query->have_posts() ) {

            while ( $the_query->have_posts() ) {
                $the_query->the_post(); 
          
                global $woocommerce;
                global $product;

                $order = wc_get_order( $order_id ); ?>
                
                
                <div class="col m12 s6 l6 xl6">
                  <div class="box__post">
                    <div class="block__img">
                      <a href="<?php echo get_the_permalink(); ?>">
                       
                       
                       <?php if(get_the_post_thumbnail_url()){ ?>
                        <img class="logo__img" src="<?= get_the_post_thumbnail_url( get_the_ID(), 'singel-courses' ); ?>" alt="face">
                       <?php }else{ ?>
                        <img class="logo__img none" src="<?= get_template_directory_uri(); ?>/img/face.svg" alt="face">
                       <?php } ?>
                        
                      </a>
                    </div>
                    <div class="block__content">
                      <h3 class="title"><?php  $ert_title = strip_tags( get_the_title()); echo mb_substr( $ert_title, 0, 17); echo '...'; ?></h3>
                      <span class="price">$0.00</span>
                      
                       <p><?php  $rtextthe_title = strip_tags( get_the_content()); echo mb_substr( $rtextthe_title, 0, 120 ); echo '...'; ?></p> 
                      
                      <a class="border_orange" href="<?php echo get_the_permalink(); ?>">View Item</a>
                    </div>
                  </div>
                </div>

            <?php }

        } else {
            echo '<p>no posts found</p>';
        }
        /* Restore original Post Data */
        wp_reset_postdata(); ?>
          

          
          
        </div>
      </div>
    </section>
    

    