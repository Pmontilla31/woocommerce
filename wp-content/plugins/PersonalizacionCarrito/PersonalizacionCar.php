<?php

//* Personalización de la página de carrito de WooCommerce
add_action( 'after_setup_theme', 'publio_custom_cart' );

function publio_custom_cart() {
	 
	//remove_action( 'woocommerce_cart_collaterals', 'woocommerce_cross_sell_display' );
	//remove_action( 'woocommerce_cart_collaterals', 'woocommerce_cart_totals', 10 );
	//remove_action( 'woocommerce_proceed_to_checkout', 'woocommerce_button_proceed_to_checkout', 20 );


	

	add_action( 'woocommerce_before_cart', 'function_woocommerce_before_cart' );
	function function_woocommerce_before_cart() {
		echo ('<div class="woocommerce-info">woocommerce_before_cart</div>');
	}
	
	add_action( 'woocommerce_before_cart_table', 'function_woocommerce_before_cart_table' );
	function function_woocommerce_before_cart_table() {
		echo ('<div class="woocommerce-info">woocommerce_before_cart_table</div>');
	}
	
	add_action( 'woocommerce_before_cart_contents', 'function_woocommerce_before_cart_contents' );
	function function_woocommerce_before_cart_contents() {
		echo ('<div class="woocommerce-info">woocommerce_before_cart_contents</div>');
	}
	
	add_action( 'woocommerce_cart_contents', 'function_woocommerce_cart_contents' );
	function function_woocommerce_cart_contents() {
		echo ('<div class="woocommerce-info">woocommerce_cart_contents</div>');
	}
	
	add_action( 'woocommerce_cart_coupon', 'function_woocommerce_cart_coupon' );
	function function_woocommerce_cart_coupon() {
		echo ('<div class="woocommerce-info">woocommerce_cart_coupon</div>');
	}
	
	add_action( 'woocommerce_cart_actions', 'function_woocommerce_cart_actions' );
	function function_woocommerce_cart_actions() {
		echo ('<div class="woocommerce-info">woocommerce_cart_actions</div>');
	}
	
	add_action( 'woocommerce_after_cart_contents', 'function_woocommerce_after_cart_contents' );
	function function_woocommerce_after_cart_contents() {
		echo ('<div class="woocommerce-info">woocommerce_after_cart_contents</div>');
	}
	
	add_action( 'woocommerce_after_cart_table', 'function_woocommerce_after_cart_table' );
	function function_woocommerce_after_cart_table() {
		echo ('<div class="woocommerce-info">woocommerce_after_cart_table</div>');
	}
	
	add_action( 'woocommerce_cart_collaterals', 'function_woocommerce_cart_collaterals' );
	function function_woocommerce_cart_collaterals() {
		echo ('<div class="woocommerce-info">woocommerce_cart_collaterals</div>');
	}
	
	add_action( 'woocommerce_before_cart_totals', 'function_woocommerce_before_cart_totals' );
	function function_woocommerce_before_cart_totals() {
		echo ('<div class="woocommerce-info">woocommerce_before_cart_total</div>s');
	}
	
	add_action( 'woocommerce_cart_totals_before_shipping', 'function_woocommerce_cart_totals_before_shipping' );
	function function_woocommerce_cart_totals_before_shipping() {
		echo ('<div class="woocommerce-info">woocommerce_cart_totals_before_shipping</div>');
	}
	
	add_action( 'woocommerce_after_shipping_rate', 'function_woocommerce_after_shipping_rate' );
	function function_woocommerce_after_shipping_rate() {
		echo ('<div class="woocommerce-info">woocommerce_after_shipping_rate</div>');
	}
	
	add_action( 'woocommerce_before_shipping_calculator', 'function_woocommerce_before_shipping_calculator' );
	function function_woocommerce_before_shipping_calculator() {
		echo ('<div class="woocommerce-info">woocommerce_before_shipping_calculator</div>');
	}
	
	add_action( 'woocommerce_after_shipping_calculator', 'function_woocommerce_after_shipping_calculator' );
	function function_woocommerce_after_shipping_calculator() {
		echo ('<div class="woocommerce-info">woocommerce_after_shipping_calculator</div>');
	}
	
	add_action( 'woocommerce_cart_totals_after_shipping', 'function_woocommerce_cart_totals_after_shipping' );
	function function_woocommerce_cart_totals_after_shipping() {
		echo ('<div class="woocommerce-info">woocommerce_cart_totals_after_shipping</div>');
	}
	
	add_action( 'woocommerce_cart_totals_before_order_total', 'function_woocommerce_cart_totals_before_order_total' );
	function function_woocommerce_cart_totals_before_order_total() {
		echo ('<div class="woocommerce-info">woocommerce_cart_totals_before_order_total</div>');
	}
	
	add_action( 'woocommerce_cart_totals_after_order_total', 'function_woocommerce_cart_totals_after_order_total' );
	function function_woocommerce_cart_totals_after_order_total() {
		echo ('<div class="woocommerce-info">woocommerce_cart_totals_after_order_total</div>');
	}
	
	add_action( 'woocommerce_proceed_to_checkout', 'function_woocommerce_proceed_to_checkout' );
	function function_woocommerce_proceed_to_checkout() {
		echo ('<div class="woocommerce-info">woocommerce_proceed_to_checkout</div>');
	}
	
	add_action( 'woocommerce_after_cart_totals', 'function_woocommerce_after_cart_totals' );
	function function_woocommerce_after_cart_totals() {
		echo ('<div class="woocommerce-info">woocommerce_after_cart_totals</div>');
	}
	
	add_action( 'woocommerce_after_cart', 'function_woocommerce_after_cart' );
	function function_woocommerce_after_cart() {
		echo ('<div class="woocommerce-info">woocommerce_after_cart</div>');
	}
	
	add_action( 'woocommerce_cart_is_empty', 'function_woocommerce_cart_is_empty' );
	function function_woocommerce_cart_is_empty() {
		echo ('<div class="woocommerce-info">woocommerce_cart_is_empty</div>');
	}	