<?php
/**
 * Single Product Sale Flash
 */

global $post, $product;
?>
<?php if ($product->is_on_sale()) : ?>
	
	<?php echo apply_filters('woocommerce_sale_flash', '<span class="sale">'.__('Sale!', 'sp').'</span>', $post, $product); ?>
	
<?php endif; ?>