<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout.
if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
	echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) ) );
	return;
}

?>

<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">

        <div class="row">
          <div class="col m12 s12 l6 x6">
            <ul class="box__bat">
              
	<?php if ( $checkout->get_checkout_fields() ) : ?>

		<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>
              
              <li class="open"><a class="title" href="javascript:;">Shipping info</a>
                <div class="tab__info">
                  <div class="block">
                    <div class="box__content">

 	<?php do_action( 'woocommerce_checkout_billing' ); ?>
                      
                    </div>
                  </div>
                </div>
                        <div class="block__bot">
                          <a class="border_orange"  data-next='1' href="javascript:;">Return</a>
                          <a class="orange" data-next='2' href="javascript:;">Continue</a>
                        </div>
                
                
              </li>
              
              
              <li><a class="title" href="javascript:;">Shipping method</a>
                <div class="tab__info">
                  <div class="block">
                    <div class="box__content">

			<?php do_action( 'woocommerce_checkout_shipping' ); ?>
                      
                    </div>
                  </div>
                </div>
                <div class="block__bot">
                  <a class="border_orange"  data-next='1' href="javascript:;">Return</a>
                  <a class="orange"  data-next='3' href="javascript:;">Continue</a>
                </div>
                
              </li>
              
		<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

	<?php endif; ?>
	
	<?php do_action( 'woocommerce_checkout_before_order_review_heading' ); ?>
              
   	<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>           
              
              <li><a class="title" href="javascript:;" id="order_review_heading">
               Payment method
               <?php // esc_html_e( 'Your order', 'woocommerce' ); ?></a>
                <div class="tab__info">
                  <div class="">
                    <div class="box__content">

                        <div id="order_review" class="woocommerce-checkout-review-order">
                            <?php do_action( 'woocommerce_checkout_order_review' ); ?>
                        </div>
 
                    </div>
                  </div>
                </div>

                
              </li>
              
   	<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>
              
            </ul>
          </div>
          <div class="col m12 s12 l6 x6">
           
           
           
            <div class="block__product">
              <ul class="list">
               
							
                  <?php  global $woocommerce;
                    foreach ($woocommerce->cart->get_cart() as $cart_item_key => $item): ?>
                          
                          <?php  
                          $_product = apply_filters( 'woocommerce_cart_item_product', $item['data'], $cart_item, $item_key );
                          $iditems = $item['product_id'];  
                          ?>

                <li>
                  <div class="box__img">
                    <span class="caun"><?php echo $item['quantity']; ?></span>
                    
                  <?php if(get_the_post_thumbnail_url($iditems)){ ?>
                      <a href="<?php echo get_the_permalink( $iditems ); ?>">
                    <img class="images" src="<?php echo get_the_post_thumbnail_url( $iditems ); ?>" data-src="<?php echo get_the_post_thumbnail_url( $iditems ); ?>" alt="" class="loaded" data-was-processed="true">
                       </a>
                  <?php }else{ ?>
                        <a href="<?php echo get_the_permalink( $iditems ); ?>">
                    <img class="images" src="<?= get_template_directory_uri(); ?>/img/images_chek.svg" alt="images_1">
                       </a>
                  <?php } ?>
                    
                    </div>
                  <div class="info">
                    <h4 class="title"><?php echo get_the_title( $iditems ); ?></h4>
                    <p class="catygory">Title of the Product </p>
                  </div>
                  <div class="price"> 
                    <?php //echo get_post_meta( $iditems, '_price', true); ?>

                <?php echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.  ?>
              </div>
                  <div class="remove"><?php
                                  echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                                      'woocommerce_cart_item_remove_link',
                                      sprintf(
                                          '<a href="%s" class="remove delete__" aria-label="%s" data-product_id="%s" data-product_sku="%s">х</a>',
                                          esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
                                          esc_html__( 'Remove this item', 'woocommerce' ),
                                          esc_attr( $iditems ),
                                          esc_attr( $_product->get_sku() )
                                      ),
                                      $cart_item_key
                                  ); ?></div>
                </li>


                 <?php
                    endforeach; ?>
               


                
                
              </ul>
              <ul class="shipping">
                <li><span class="title">Amount</span><span class="num"><?php echo WC()->cart->get_cart_contents_count(); ?></span></li>
                <li><span class="title">Discount</span><span class="num">%</span></li>
                <li><span class="title">Subtotal</span><span class="num"><?php echo  wc_cart_totals_subtotal_html(); ?></span></li>
              </ul>
              <ul class="total">
                <li><span class="title">Total</span><span class="num"><?php echo  wc_cart_totals_subtotal_html(); ?></span></li>
              </ul>
            </div>
            
            
            
          </div>
        </div>


<!--
		<div class="col2-set" id="customer_details">
			<div class="col-1">
			
			</div>

			<div class="col-2">

				</div>
		</div>
-->

</form>

<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
