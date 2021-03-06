<?php
/**
 * Product quantity inputs
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>
<div class="quantity sd-quantity">
	<div class="sd-minus-button sd-quantity-button">-</div>	
	<input type="text"  name="<?php echo esc_attr( $input_name ); ?>" value="<?php echo esc_attr( $input_value ); ?>" title="<?php _ex( 'Qty', 'Product quantity input tooltip', 'woocommerce' ) ?>" class="input-text qty text sd-quantity-input" size="4" />
	<div class="sd-plus-button sd-quantity-button">+</div>
</div>
