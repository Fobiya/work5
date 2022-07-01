<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

get_header(); 

defined( 'ABSPATH' ) || exit;  




if(0){ 

    get_header( 'shop' );

    /**
     * Hook: woocommerce_before_main_content.
     *
     * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
     * @hooked woocommerce_breadcrumb - 20
     * @hooked WC_Structured_Data::generate_website_data() - 30
     */
    do_action( 'woocommerce_before_main_content' );

    ?>
    <header class="woocommerce-products-header">
        <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
            <h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
        <?php endif; ?>

        <?php
        /**
         * Hook: woocommerce_archive_description.
         *
         * @hooked woocommerce_taxonomy_archive_description - 10
         * @hooked woocommerce_product_archive_description - 10
         */
        do_action( 'woocommerce_archive_description' );
        ?>
    </header>
    <?php
    if ( woocommerce_product_loop() ) {

        /**
         * Hook: woocommerce_before_shop_loop.
         *
         * @hooked woocommerce_output_all_notices - 10
         * @hooked woocommerce_result_count - 20
         * @hooked woocommerce_catalog_ordering - 30
         */
        do_action( 'woocommerce_before_shop_loop' );

        woocommerce_product_loop_start();

        if ( wc_get_loop_prop( 'total' ) ) {
            while ( have_posts() ) {
                the_post();

                /**
                 * Hook: woocommerce_shop_loop.
                 */
                do_action( 'woocommerce_shop_loop' );

                wc_get_template_part( 'content', 'product' );
            }
        }

        woocommerce_product_loop_end();

        /**
         * Hook: woocommerce_after_shop_loop.
         *
         * @hooked woocommerce_pagination - 10
         */
        do_action( 'woocommerce_after_shop_loop' );
    } else {
        /**
         * Hook: woocommerce_no_products_found.
         *
         * @hooked wc_no_products_found - 10
         */
        do_action( 'woocommerce_no_products_found' );
    }

    /**
     * Hook: woocommerce_after_main_content.
     *
     * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
     */
    do_action( 'woocommerce_after_main_content' );

    /**
     * Hook: woocommerce_sidebar.
     *
     * @hooked woocommerce_get_sidebar - 10
     */
    do_action( 'woocommerce_sidebar' );

    get_footer( 'shop' );
  
  } ?>
    

<?php if (is_product_category()) { ?>
   
   
<?php  
  
//    $terms_post = get_the_terms( $post->tag_ID , 'product_cat' );
//
//    $ids_cats = $terms_post[0]->term_id; 
//  print_r($terms_post); 

  $term = get_queried_object(); ?>
    
    
    <section class="section__ catalog__1">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l6 xl6">

            <?php if(get_field('category_images', $term) ){ ?>
            <!-- 1 -->
              <?php $image = get_field('category_images', $term); ?>
              <img class="images"  src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            <?php }else{ ?>
            <!-- 2 -->
              <img class="images" src="<?= get_template_directory_uri(); ?>/img/catalog__1_img.png" alt="logo_w">
            <?php } ?>

          </div>
          <div class="col m12 s12 l6 xl6">
            <h1 class="title"><?php echo  single_cat_title( '', false ); ?></h1>

            <?php if(get_field('discription_', $term) ){ ?>
           
              <p><?php the_field('discription_', $term); ?></p>
            <?php } ?>


          </div>
        </div>
        <div class="row">
          <div class="col m12 s12 l12 xl12">
            
            <?php if(get_field('title_cat_', $term) ){ ?>
           
              <h2 class="title"><?php the_field('title_cat_', $term); ?></h2>
            <?php } ?>

            <?php if(get_field('sub_discription_', $term) ){ ?>
           
              <p><?php the_field('sub_discription_', $term); ?></p>
            <?php } ?>


          </div>
        </div>
        <div class="row">
         
  
              
     <?php  $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];                
       $args = array(
            'order' => 'DESC', // order filter  last post
            'post_type'  => 'product', // Post type category BLOG
            'posts_per_page' => 12, // echo show three post 
        );
        // The Query
        $the_query = new WP_Query( $args );

        // The Loop
        if ( $the_query->have_posts() ) {

            while ( $the_query->have_posts() ) {
                $the_query->the_post(); 
              
            global $post;  ?>
          
          
          <div class="col m6 s12 l3 xl3">
            <div class="block__post">
              <h3 class="title" title="<?php echo  get_the_title(); ?>"><?php echo get_the_title(); ?></h3>
               <?php $short_description = apply_filters( 'woocommerce_short_description', $post->post_excerpt ); ?>
                     <?php if($short_description){ ?> 
                        <p><?php $rtextthe_ertitle = strip_tags( $short_description, '...'); echo mb_substr( $rtextthe_ertitle, 0, 180); // echo $short_description; // WPCS: XSS ok. ?></p>
                     <?php }else{  ?>
                       <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Lorem ipsum dolor sit amet elit sit amet elit.</p>
                     <?php } ?>

              <a href="<?php echo get_the_permalink(); ?>">
                
                 <?php if(get_the_post_thumbnail_url()){ ?>
                  <img class="images" src="<?= get_the_post_thumbnail_url( get_the_ID(), 'product-img' ); ?>" alt="face">
                 <?php }else{ ?>
                  <img class="images" src="<?= get_template_directory_uri(); ?>/img/single__2_catalog_img_1.png" alt="logo_w">
                 <?php } ?>

              </a>
              <div class="bottom">
                
                     <form id="<?php echo get_the_ID(); ?>"  method='POST' action='javascript:void(null);'>
       
                          <input type="hidden" id="product-quantity" name="quantity" value="1" min="1">

                        
                          <?php wp_nonce_field( 'addcart_post', 'addcart_post_nonce' );?>
                          <input type="hidden" name="postid" value="<?php echo get_the_ID(); ?>">
                          <input type="hidden" name="action" value="addcart_prod">

                           <a type="submit" name="add" class="crayola" data-form="<?php echo get_the_ID(); ?>">Add to Cart</a>

                   </form>
   
                <a class="border_crayola" href="<?php echo get_the_permalink(); ?>">View Item</a></div>
            </div>
          </div>
          
              
           <?php }

        } else {
            // no posts found
        }
        /* Restore original Post Data */
        wp_reset_postdata();
      ?>

          
          
        </div>
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
    <section class="section__ catalog__3"></section>


  <?php } else {  ?>  
    
    <section class="section__ shop__1">
      <div class="container">
      
    <?php   
      function get_random_post() {
    if ( !isset( $_SESSION['random'] ) ) {
        $_SESSION['random'] = rand();
    }
    return $_SESSION['random']; } ?>
       
     <?php $argsrand = array(
            'post_status' => 'publish',
            'post_type'  => 'product', // Post type category BLOG
//            'orderby' => 'rand',
             'posts_per_page' => 1,
           //'orderby'        => 'rand(' . get_random_post() . ')',
              'orderby' => 'rand',
              
        );
        // The Query
        $the_queryrand = new WP_Query( $argsrand );

        // The Loop
        if ( $the_queryrand->have_posts() ) {

            while ( $the_queryrand->have_posts() ) {
                $the_queryrand->the_post();   
        
                global $woocommerce;
                global $product;

                $order = wc_get_order( $order_id );   ?>

                  <div class="row">
                    <div class="col m12 s12 l12 xl6">
                      <h1 class="title"><?php echo get_the_title(); ?></h1>
                      <?php $short_description = apply_filters( 'woocommerce_short_description', $post->post_excerpt ); ?>
                      <?php if($short_description){ ?>
                        <p class="sub"><?php echo $short_description; ?></p>
                      <?php } ?>
                      
                      
               <form id="<?php echo get_the_ID(); ?>"  method='POST' action='javascript:void(null);'>

                  <input type="hidden" id="product-quantity" name="quantity" value="1" min="1">


                  <?php wp_nonce_field( 'addcart_post', 'addcart_post_nonce' );?>
                  <input type="hidden" name="postid" value="<?php echo get_the_ID(); ?>">
                  <input type="hidden" name="action" value="addcart_prod">

                   <a type="submit" name="add" class="orange" data-form="<?php echo get_the_ID(); ?>"><?php echo $product->get_price_html(); ?>  Buy Now</a>

               </form>
                      
                 
                    </div>
                    <div class="col m12 s12 l12 xl6">
                      <div class="block__img">

                        <?php if(get_the_post_thumbnail_url()) {  ?>

                           <img src="<?php echo get_the_post_thumbnail_url($loop->post->ID); ?>" alt="%s" />

                        <?php }else {  ?>

                           <img src="/wp-content/uploads/woocommerce-placeholder-600x600.png" src="<?= get_template_directory_uri(); ?>/img/" alt="demo" />

                       <?php  } ?> 

                      
                      
                      </div>
                      <div class="block__right">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh   euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. vulputate velit esse accumsan et iusto odio dignissim qui </p>
                      </div>
                    </div>
                  </div>

    
             <?php }

        } else {
            // no posts found
        }
        /* Restore original Post Data */
        wp_reset_postdata();
      ?>
       

        
        
        <div class="row">
          <div class="col m12 s12 l12 xl12">
            <h4 class="sub_title">Best Selling Products</h4>
          </div>
        </div>
        
        
        <div class="row">
         
           <?php  
             $args = array(
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

                      $order = wc_get_order( $order_id );   ?>

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
                  echo '<p>Not posts found </p>';
              }
              /* Restore original Post Data */
              wp_reset_postdata();
            ?>

        </div>
        
        
        
      </div>
    </section>
    <section class="section__ shop__2">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l12 xl12">
            <h3 class="title">If you believe it, it works. If you don't believe it, it still works. If you believe it will work, it often works faster. Either way, it works, because Qi knows what to do.</h3><a class="author" href="javascript:;">- Chunyi Lin, Qigong Master</a>
          </div>
        </div>
      </div>
    </section>
    <section class="section__ shop__3">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l4 xl4">
            <div class="block_menu">
              <ul>

              <?php 
                
        // Get Woocommerce product categories WP_Term objects
        $categories = get_terms( array(
          'taxonomy' => 'product_cat',
          'parent'=> 0
          ) );

        // Getting a visual raw output
      
        
        foreach ($categories as $categorie) {  ?>
                
                
                   <?php if( $categorie->name == 'Default'){  continue;  } ?>
                   <?php if( $categorie->name == 'Uncategorized'){  continue;  } ?>

         

              
                <li><a class="" href="<?php echo get_term_link($categorie); ?>" data-cat-id = "<?php echo   $categorie->term_id; ?>"><?php echo   $categorie->name; ?></a></li>
                
              
      <?php } 
      
      wp_reset_postdata(); ?>
                
              
                
              </ul>
            </div>
          </div>
          <div class="col m12 s12 l8 xl8">
            <div class="block__post">
          <?php //print_r($categories); ?>
         
             <?php 
             $args = array(
                  //'child_of' => $categories[0]->term_id
                  'child_of' => 829
              );
              
              $terms = get_terms( 'product_cat', $args );
              
              if ( $terms ) {
                foreach ( $terms as $term ) {   
                   
                               
                   $image = get_field('category_images' , $term);
              
                    $smoll__imgurl = $image['sizes']['testimonials']; ?>

                    <div class="post__" style="background: #e55d45 url('<?php echo $smoll__imgurl; ?>')  no-repeat center; "><div class="block__img__"><a class="title_link" href="<?php  echo get_term_link( $term ); ?>"><?php echo $term->slug; ?></a></div></div> 
                <?php  }
              
              }

                 ?>

            </div>
          </div>
        </div>
      </div>
    </section>
    

  <?php } ?>  
<?php get_footer();