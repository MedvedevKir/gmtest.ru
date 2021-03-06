<?php if(wpsc_cart_item_count() > 0): ?>
    <div class="shoppingcart">
	<table>
		<thead>
			<tr>
				<th colspan='2'><?php _e('Product', 'sp'); ?></th>
				<th><?php _e('Qty', 'sp'); ?></th>
				<th><?php _e('Price', 'sp'); ?></th>
	            <th>&nbsp;</th>
			</tr>
		</thead>
		<tbody>
		<?php while(wpsc_have_cart_items()): wpsc_the_cart_item(); ?>
			<tr>
					<td colspan='2' class='product-name'><a href="<?php echo wpsc_cart_item_url(); ?>"><?php echo wpsc_cart_item_name(); ?></a></td>
					<td><?php echo wpsc_cart_item_quantity(); ?></td>
					<td><?php echo wpsc_cart_item_price(); ?></td>
                    <td class="cart-widget-remove"><form action="#" method="post" class="adjustform">
					<input type="hidden" name="quantity" value="0" />
					<input type="hidden" name="key" value="<?php echo wpsc_the_cart_item_key(); ?>" />
					<input type="hidden" name="wpsc_update_quantity" value="true" />
					<input class="remove_button" type="submit" />
				</form></td>
			</tr>	
		<?php endwhile; ?>
		</tbody>
		<tfoot>
        	<tr>
            <td colspan="5">
            <?php if(isset($cart_messages) && count($cart_messages) > 0) { ?>
	<?php foreach((array)$cart_messages as $cart_message) { ?>
	  <span class="cart_message"><?php echo $cart_message; ?></span>
	<?php } ?>
<?php } ?>
			</td></tr>
			<tr class="cart-widget-total">
				<td class="cart-widget-count">
					<?php printf( _n('%d item', '%d items', wpsc_cart_item_count(), 'sp'), wpsc_cart_item_count() ); ?>
				</td>
				<td class="pricedisplay checkout-total" colspan='4'>
					<?php _e('Total', 'sp'); ?>: <?php echo wpsc_cart_total_widget(false,false,false); ?>
				</td>
			</tr>
			<?php if(wpsc_cart_show_plus_postage()) : ?>
			<tr>
				<td class="pluspostagetax" colspan='5'>
					+ <?php _e('Postage &amp; Tax ', 'sp'); ?>
				</td>
			</tr>
			<?php endif; ?>
			<tr>
				<td colspan="5" class="checkout">
					<a target="_parent" href="<?php echo get_option('shopping_cart_url'); ?>" title="Checkout" class="gocheckout"><span><?php _e('Checkout', 'sp'); ?></span></a>
					<form action="#" method="post" class="wpsc_empty_the_cart">
						<input type="hidden" name="wpsc_ajax_action" value="empty_cart" />
							<a target="_parent" href="<?php echo esc_url( add_query_arg( 'wpsc_ajax_action', 'empty_cart', remove_query_arg( 'ajax' ) ) ); ?>" class="emptycart_ajax" title="Empty Your Cart"><?php _e('Clear cart', 'sp'); ?></a>                                                                                    
					</form>
				</td>
			</tr>
		</tfoot>
	</table>
	<?php 
    if (array_search("google",(array)get_option('custom_gateway_options')) !== false ) { ?>
    <div class="google-checkout">
    <?php wpsc_google_checkout(); ?>
    </div><!--close google-checkout-->
    <?php } ?>   
    <div class="group"></div> 
    
	</div><!--close shoppingcart-->		
<?php else: ?>
	<p class="empty">
		<?php _e('Your shopping cart is empty', 'sp'); ?><br />
		<a target="_parent" href="<?php echo get_option('product_list_url'); ?>" class="visitshop" title="<?php _e('Visit the shop', 'sp'); ?>"><?php _e('Visit the shop', 'sp'); ?></a>	
	</p>
<?php endif; ?>