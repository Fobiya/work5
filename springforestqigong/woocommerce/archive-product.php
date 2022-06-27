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

    <section class="section__ catalog__1">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l6 xl6"><img class="images" src="<?= get_template_directory_uri(); ?>/img/catalog__1_img.png" alt="logo_w"></div>
          <div class="col m12 s12 l6 xl6">
            <h1 class="title"><?php echo  single_cat_title( '', false ); ?></h1>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh. </p>
          </div>
        </div>
        <div class="row">
          <div class="col m12 s12 l12 xl12">
            <h2 class="title">Explore different variety of courses, books, and gifts</h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
          </div>
        </div>
        <div class="row">
          
              
     <?php  
      $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];                            
                                  
                                  
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
                $the_query->the_post(); ?>
          
          
          <div class="col m6 s12 l3 xl3">
            <div class="block__post">
              <h3 class="title"><?php echo get_the_title(); ?></h3>
              <p>Everything in the universe is a form of energy, including every cell in your body, and this is the fundamental principle of Spring Forest Qigong. Your body's energy is constantly in the process of transforming. </p>
              <a href="<?php echo get_the_permalink(); ?>">
                <img class="images" src="<?= get_template_directory_uri(); ?>/img/single__2_catalog_img_1.png" alt="logo_w">
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
        <div class="row">
          <div class="col m12 s12 l12 xl6">
            <h1 class="title">Lorem ipsum dolor sit amet, dolor</h1>
            <p class="sub">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p><a class="orange" href="javascript:;">Buy Now</a>
          </div>
          <div class="col m12 s12 l12 xl6">
            <div class="block__img"><img src="<?= get_template_directory_uri(); ?>/img/shop__1_img.png" alt="logo_w"></div>
            <div class="block__right">
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh   euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. vulputate velit esse accumsan et iusto odio dignissim qui </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col m12 s12 l12 xl12">
            <h4 class="sub_title">Best Selling Products</h4>
          </div>
        </div>
        <div class="row">
          <div class="col m6 s12 l4 xl4">
            <div class="block__catygory">
              <div class="catygory__img"><img src="<?= get_template_directory_uri(); ?>/img/shop__1_category_1.png" alt="logo_w"></div>
              <div class="catygory__content">
                <h3 class="title__catygory">Name of the Product</h3><span class="prise">$0.00</span>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p><a class="border_orange" href="javascript:;">View Item</a>
              </div>
            </div>
          </div>
          <div class="col m6 s12 l4 xl4">
            <div class="block__catygory">
              <div class="catygory__img"><img src="<?= get_template_directory_uri(); ?>/img/shop__1_category_2.png" alt="logo_w"></div>
              <div class="catygory__content">
                <h3 class="title__catygory">Name of the Product</h3><span class="prise">$0.00</span>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p><a class="border_orange" href="javascript:;">View Item</a>
              </div>
            </div>
          </div>
          <div class="col m6 s12 l4 xl4">
            <div class="block__catygory">
              <div class="catygory__img"><img src="<?= get_template_directory_uri(); ?>/img/shop__1_category_3.png" alt="logo_w"></div>
              <div class="catygory__content">
                <h3 class="title__catygory">Name of the Product</h3><span class="prise">$0.00</span>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p><a class="border_orange" href="javascript:;">View Item</a>
              </div>
            </div>
          </div>
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
        $categories = get_terms( ['taxonomy' => 'product_cat'] );

        // Getting a visual raw output
      //  echo '<pre>'; print_r( $categories ); echo '</pre>';

        foreach ($categories as $categorie) {  ?>
                
                
                   <?php if( $categorie->name == 'Default'){  continue;  } ?>
                   <?php if( $categorie->name == 'Uncategorized'){  continue;  } ?>


              
                <li><a class="" href="<?php echo get_term_link($categorie); ?>" data-cat-id = "<?php echo   $categorie->term_id; ?>"><?php echo   $categorie->name; ?></a></li>
                
              
      <?php } ?>

              </ul>
            </div>
          </div> 
          <div class="col m12 s12 l8 xl8">
            <div class="block__post">
              
              
              
              
             <?php  
               $args = array(
                    'order' => 'DESC', // order filter  last post
                    'post_type'  => 'product', // Post type category BLOG
                    'posts_per_page' => 20, // echo show three post 
                );
                // The Query
                $the_query = new WP_Query( $args );

                // The Loop
                if ( $the_query->have_posts() ) {

                    while ( $the_query->have_posts() ) {
                        $the_query->the_post(); ?>

                      <div class="post__">
                        <div class="block__img__"><a class="title_link" href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></div>
                      </div>

                   <?php }

                } else {
                    // no posts found
                }
                /* Restore original Post Data */
                wp_reset_postdata();
              ?>


            </div>
          </div>
        </div>
      </div>
    </section>

  <?php } ?>  
<?php get_footer();