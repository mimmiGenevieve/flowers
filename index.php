<?php get_header(); 
$checkout = WC()->checkout;
?>

<div class="wrapper">
<form name="checkout" method="post" class="checkout woocommerce-checkout row" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">
        <?php if ( $checkout->get_checkout_fields() ) : ?>
            <div class="cust-detail col-lg-6" id="customer_details">
              
              <?php do_action( 'woocommerce_checkout_before_customer_details' );
                    do_action( 'woocommerce_checkout_billing' );
                    do_action( 'woocommerce_checkout_after_customer_details' ); ?>

            </div>
        <?php endif; ?>
        <div class="review col-lg-5">

        <?php do_action( 'woocommerce_checkout_shipping' ); ?>
            <h3 id="order_review_heading"><?php _e( 'Din beställning', 'woocommerce' ); ?></h3>
              
            <?php do_action( 'woocommerce_checkout_before_order_review' ); ?>
          
            <div id="order_review" class="woocommerce-checkout-review-order">
                <?php do_action( 'woocommerce_checkout_order_review' ); ?>
            </div>

            <?php do_action( 'woocommerce_checkout_after_order_review' ); ?>
        </div>
</form>
</div>

<?php get_footer();