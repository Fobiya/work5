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
//}

?>

    
   <section class="section__ single__1">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l12 xl12">

<?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
            
          </div>
        </div>
        <div class="row">
          <div class="col m12 s12 l6 xl6">
            <div class="block_big">
              <div class="single__slider">
                <div><img src="<?= get_template_directory_uri(); ?>/img/single__1_slider.png" alt="logo_w"></div>
                <div><img src="<?= get_template_directory_uri(); ?>/img/single__1_slider.png" alt="logo_w"></div>
                <div><img src="<?= get_template_directory_uri(); ?>/img/single__1_slider.png" alt="logo_w"></div>
                <div><img src="<?= get_template_directory_uri(); ?>/img/single__1_slider.png" alt="logo_w"></div>
                <div><img src="<?= get_template_directory_uri(); ?>/img/single__1_slider.png" alt="logo_w"></div>
                <div><img src="<?= get_template_directory_uri(); ?>/img/single__1_slider.png" alt="logo_w"></div>
              </div>
            </div>
            <div class="block_smoll">
              <div class="single__smoll_slider">
                <div>
                  <div class="block__img"><img src="<?= get_template_directory_uri(); ?>/img/single__1_smoll_1.png" alt="logo_w"></div>
                </div>
                <div>
                  <div class="block__img"><img src="<?= get_template_directory_uri(); ?>/img/single__1_smoll_2.png" alt="logo_w"></div>
                </div>
                <div>
                  <div class="block__img"><img src="<?= get_template_directory_uri(); ?>/img/single__1_smoll_3.png" alt="logo_w"></div>
                </div>
                <div>
                  <div class="block__img"><img src="<?= get_template_directory_uri(); ?>/img/single__1_smoll_1.png" alt="logo_w"></div>
                </div>
                <div>
                  <div class="block__img"><img src="<?= get_template_directory_uri(); ?>/img/single__1_smoll_2.png" alt="logo_w"></div>
                </div>
                <div>
                  <div class="block__img"><img src="<?= get_template_directory_uri(); ?>/img/single__1_smoll_3.png" alt="logo_w"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col m12 s12 l6 xl6">
           <?php if (get_the_title()) { ?>
              <h1 class="title__"><?php the_title(); ?></h1>
            <?php } ?>
            <p class="sub__title">Title of the Product</p>
            <p class="sub">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
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
                <?php if(0){ ?>
                    <a class="border_orange none" href="/?add-to-cart=<?php echo get_the_ID(); ?>&quantity=1<?php // echo do_shortcode('[add_to_cart_url id="'.get_the_ID().'"]'); ?>">Add to Cart</a>
                 <?php } ?>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l12 xl8">
            <h2 class="title">Why this Product?</h2>
            <div class="bloclk_content">
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan feugait nulla facilisi.</p>
            </div>
          </div>
          <div class="col m12 s12 l12 xl4">
            <div class="block__img"><img class="logo__img" src="<?= get_template_directory_uri(); ?>/img/single__1_block_img.png" alt="face"></div>
          </div>
        </div>
        <div class="row">
          <div class="col m12 s12 l12 xl12">
            <h2 class="sub__title">How to use</h2>
          </div>
          <div class="col m6 s12 l3 xl3 box__">
            <div class="box__img"><img class="images" src="<?= get_template_directory_uri(); ?>/img/home__2_icon_1.svg" alt="home__2_icon_1"></div>
            <h3 class="title">Instruction 1</h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh</p>
          </div>
          <div class="col m6 s12 l3 xl3 box__">
            <div class="box__img"><img class="images" src="<?= get_template_directory_uri(); ?>/img/home__2_icon_2.svg" alt="home__2_icon_2"></div>
            <h3 class="title">Instruction 1</h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh</p>
          </div>
          <div class="col m6 s12 l3 xl3 box__">
            <div class="box__img"><img class="images" src="<?= get_template_directory_uri(); ?>/img/home__2_icon_3.svg" alt="home__2_icon_3"></div>
            <h3 class="title">Instruction 1</h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh</p>
          </div>
          <div class="col m6 s12 l3 xl3 box__">
            <div class="box__img"><img class="images" src="<?= get_template_directory_uri(); ?>/img/home__2_icon_3.svg" alt="home__2_icon_3"></div>
            <h3 class="title">Instruction 1</h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh</p>
          </div>
        </div>
        <div class="row">
          <div class="col m12 s12 l12 xl4">
            <div class="block__img"><img class="logo__img" src="<?= get_template_directory_uri(); ?>/img/single__1_block_img.png" alt="face"></div>
          </div>
          <div class="col m12 s12 l12 xl7 offset-xl1">
            <h2 class="title">More Information</h2>
            <div class="bloclk_content">
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan feugait nulla facilisi.</p>
            </div>
          </div>
        </div>
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
          <div class="col m12 s12 l4 xl4">
            <div class="block__catygory">
              <div class="catygory__img"><img src="<?= get_template_directory_uri(); ?>/img/shop__1_category_1.png" alt="logo_w"></div>
              <div class="catygory__content">
                <h3 class="title__catygory">Name of the Product</h3><span class="prise">$0.00</span>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p><a class="border_orange" href="javascript:;">View Item</a>
              </div>
            </div>
          </div>
          <div class="col m12 s12 l4 xl4">
            <div class="block__catygory">
              <div class="catygory__img"><img src="<?= get_template_directory_uri(); ?>/img/shop__1_category_2.png" alt="logo_w"></div>
              <div class="catygory__content">
                <h3 class="title__catygory">Name of the Product</h3><span class="prise">$0.00</span>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p><a class="border_orange" href="javascript:;">View Item</a>
              </div>
            </div>
          </div>
          <div class="col m12 s12 l4 xl4">
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
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l12 xl12">
            <h4 class="sub_title">Our Courses</h4>
          </div>
          <div class="col m6 s12 l6 xl6">
            <div class="box__post">
              <div class="block__img"><img class="logo__img none" src="<?= get_template_directory_uri(); ?>/img/face.svg" alt="face"></div>
              <div class="block__content">
                <h3 class="title">Online Study</h3><span class="price">$0.00</span>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p><a class="border_orange" href="javascript:;">Add to Cart</a>
              </div>
            </div>
          </div>
          <div class="col m6 s12 l6 xl6">
            <div class="box__post">
              <div class="block__img"><img class="logo__img none" src="<?= get_template_directory_uri(); ?>/img/face.svg" alt="face"></div>
              <div class="block__content">
                <h3 class="title">Online Study</h3><span class="price">$0.00</span>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p><a class="border_orange" href="javascript:;">Add to Cart</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    