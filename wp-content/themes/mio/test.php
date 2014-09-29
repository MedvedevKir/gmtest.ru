<header class="group" id="header">
            <!--LOGO-->           
<?php $alt_text = sprintf( __( '%s', 'sp' ), sp_isset_option( 'logo_alt_text', 'value' ) ); ?>
            <a href="<?php echo home_url(); ?>" title="<?php echo $alt_text; ?>" id="logo">
            <?php if (sp_isset_option( 'site_logo_image_text', 'boolean', 'image' ) ) :
            			if (sp_isset_option( 'logo_image', 'isset' ) ) {
							$logo_url = sp_isset_option( 'logo_image', 'value' );
							if (is_ssl())
								$logo_url = str_replace('http', 'https', $logo_url); 
							echo '<img src="'.$logo_url.'" alt="'.sp_isset_option( 'logo_alt_text', 'value' ).'" />';
						} else {
							if (sp_isset_option( 'skins', 'boolean', '1')) {
								echo '<img src="'.get_template_directory_uri().'/images/logo.png" alt="'.sp_isset_option( 'logo_alt_text', 'value' ).'" />';
							} else {
								echo '<img src="'.get_template_directory_uri().'/skins/images/skin'.sp_isset_option( 'skins', 'value' ).'/logo.png" alt="'.sp_isset_option( 'logo_alt_text', 'value' ).'" />';
							}
						}
            	 elseif (sp_isset_option( 'site_logo_image_text', 'boolean', 'text' )) : 
                		if (sp_isset_option( 'site_logo_text_title', 'isset')) {
							echo stripslashes(sp_isset_option( 'site_logo_text_title', 'value' ));
						} else {
							_e('Your Logo Here','sp');	
						}
				
						endif; ?>
            </a>

            <!--END LOGO-->
<div style="float:right; margin-top:-45px;margin-right:0px;">
<!-- SmartResponder.ru subscribe form code (begin) -->
<p style="text-align:justify; margin-top:0px;">	<link href="https://imgs.smartresponder.ru/e1bbeb24091b44f1f4048bbc87edacd11278fd23/" rel="stylesheet" /></p>
<script type="text/javascript" src="https://imgs.smartresponder.ru/52568378bec6f68117c48f2f786db466014ee5a0/"></script> <script type="text/javascript">// <![CDATA[
_sr(function() {         _sr('form[name="SR_form_3_44"]').find('div#sr-preload_').prop('id', 'sr-preload_3_44');         _sr('#sr-preload_3_44').css({'width':parseInt(_sr('form[name="SR_form_3_44"]').width() + 'px'), 'height':parseInt(_sr('form[name="SR_form_3_44"]').height()) + 'px', 'line-height':parseInt(_sr('form[name="SR_form_3_44"]').height()) + 'px'}).show();         if(_sr('form[name="SR_form_3_44"]').find('input[name="script_url_3_44"]').length) {             _sr.ajax({                 url: _sr('input[name="script_url_3_44"]').val() + '/' + (typeof document.charset !== 'undefined' ? document.charset : document.characterSet),                 dataType: "script",                 success: function() {                     _sr('#sr-preload_3_44').hide();                 }             });         }     });
// ]]></script>

<style type="text/css"><!--
#sr-subscribe-text { color:#0dae59 !important } .sr-box-list li {padding: 2px 0px !important} #subscribe_text:focus{border:1px solid #0c9adc !important;box-shadow:0 0 3px #0c9adc !important;} 
#subscribe_button:hover {border:1px solid #0c9adc !important;}
#subscribe_button:active, #subscribe_button:focus { background: -moz-linear-gradient(top, rgba(180,180,180,1) 0%, rgba(195,195,195,0.4) 25%, rgba(240,240,240,1) 100%) !important;
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(180,180,180,1)), color-stop(25%,rgba(195,195,195,0.4)), color-stop(100%,rgba(240,240,240,1))) !important;
background: -webkit-linear-gradient(top, rgba(180,180,180,1) 0%,rgba(195,195,195,0.4) 25%,rgba(240,240,240,1) 100%) !important;
background: -o-linear-gradient(top, rgba(180,180,180,1) 0%,rgba(195,195,195,0.4) 25%,rgba(240,240,240,1) 100%) !important;
background: -ms-linear-gradient(top, rgba(180,180,180,1) 0%,rgba(195,195,195,0.4) 25%,rgba(240,240,240,1) 100%) !important;
background: linear-gradient(to bottom, rgba(180,180,180,1) 0%,rgba(195,195,195,0.4) 25%,rgba(240,240,240,1) 100%) !important;border:1px solid #cdcdcd; text-shadow: -1px 1px #fff;}
--></style>
<div id="outer_alignment" align="left"><form class="sr-box" style="width: 260px; border: 0px solid #bcbcbc; border-top-left-radius: 0px; border-top-right-radius: 0px; border-bottom-right-radius: 0px; border-bottom-left-radius: 0px;" action="https://smartresponder.ru/subscribe.html" method="post" name="SR_form_3_44">
<ul class="sr-box-list">
	<li class="sr-3_44" style="width: 260px;text-align: center; height: auto; border-top-left-radius: 0px; border-top-right-radius: 0px; border-bottom-right-radius: 0px; border-bottom-left-radius: 0px; border: 0px solid #000000;background-color: transparent;margin-left:0px;"><label style="margin-bottom: 0px; height: auto; line-height: auto; padding: 0px 0px; font-size: 13px; color: #333; font-family: Arial; font-weight: normal; font-style: normal;"> Подпишитесь на рассылку и получайте новости проекта + <span style="color:#343593; font-weight: bold;">программу проверки точности глюкометра</span> в подарок!</label><input style="font-family: Arial; color: #000000; font-size: 13px; font-style: normal; font-weight: normal; background-color: transparent; border: none; box-shadow: none;" type="hidden" name="element_header" value="" /></li>
	<li class="sr-3_44" style="border-top-left-radius: 0px; border-top-right-radius: 0px; border-bottom-right-radius: 0px; border-bottom-left-radius: 0px; height: auto; text-align: center; background-color: transparent; background-position: initial initial; background-repeat: initial initial;"><label class="remove_labels" style="font-family: Arial; color: #000000; font-size: 12px; font-style: normal; font-weight: normal; display: none;"></label>
<input class="sr-required" id="subscribe_text" style="margin-bottom: 5px; margin-top: 5px; background-image: none; font-family: Arial; color: #bdbdbd; font-size: 12px; background-color: #fff; border: 1px solid #bcbcbc; border-top-left-radius: 4px; border-top-right-radius: 4px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px; box-shadow: none; font-weight: normal; height: auto; font-style: normal;width:170px;" type="text" name="field_name_first" value="Ваше имя" placeholder="Ваше имя"/></li>
	<li class="sr-3_44" style="border-top-left-radius: 0px; border-top-right-radius: 0px; border-bottom-right-radius: 0px; border-bottom-left-radius: 0px; height: auto; text-align: center; background-color: transparent; background-position: initial initial; background-repeat: initial initial;"><label class="remove_labels" style="font-family: Arial; color: #000000; font-size: 12px; font-style: normal; font-weight: normal; display: none;"></label>
<input class="sr-required" id="subscribe_text" style="margin-bottom: 5px; margin-top: auto; background-image: none; font-family: Arial; color: #bdbdbd; font-size: 12px; background-color: #fff; border: 1px solid #bcbcbc; border-top-left-radius: 4px; border-top-right-radius: 4px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px; box-shadow: none; font-weight: normal; height: auto; font-style: normal;width:170px;" type="text" name="field_email" value="Ваш email"  placeholder="Ваш email"/></li>
	<li class="sr-3_44" style="border-top-left-radius: 4px; border-top-right-radius: 4px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px; text-align: center; background-color: transparent; border: 0px; height: auto; background-position: initial initial; background-repeat: initial initial;"><input id="subscribe_button" style="margin-bottom: 0px; font-family: Arial; color: #ed1c24; font-size: 14px; font-style: normal; font-weight: bold; border: 1px solid #b9b9b9; border-top-left-radius: 4px; border-top-right-radius: 4px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px; box-shadow: none; padding: 0px 10px; background: url('http://gmtest.ru/wp-content/themes/mio/images/nav_bg.png') repeat-x scroll top center #c3c3c3; height: 25px; text-shadow: -1px 1px #fff;" type="submit" name="subscribe" value="Подписаться!" /></li>
</ul>
<input type="hidden" name="uid" value="327640" />
<input type="hidden" name="did[]" value="419480" /><input type="hidden" name="tid" value="0" /><input type="hidden" name="lang" value="ru" /><input type="hidden" name="script_url_3_44" value="https://imgs.smartresponder.ru/on/0c4d3683566546252a6b5bdf26191bc2910c0cbb/3_44" />

</form></div>
<!-- SmartResponder.ru subscribe form code (end) -->
</div>

    <!--TAGLINE-->
            <?php if (sp_isset_option( 'tagline', 'boolean', 'true' )) : ?>
            <h1 id="tagline">
                <?php _e(bloginfo( 'description' ),'sp'); ?>
            </h1>
            <?php endif; ?>        
    <!--END TAGLINE-->
    <?php if ( class_exists( 'WP_eCommerce' ) || class_exists( 'woocommerce' ) ) { ?>
		<?php if(is_user_logged_in()) : ?>
        <div id="account_logout">
            <a href="<?php echo wp_logout_url( get_permalink() ); ?>" title="<?php _e('Logout', 'sp'); ?>"><?php _e('(Logout)', 'sp'); ?></a>
            <img title="Loading" alt="Loading" src="<?php echo get_template_directory_uri(); ?>/images/ajax-loader.gif" class="header-logout-loading" />
        </div><!--close account_logout-->
        <?php endif; ?>
		<?php if ( class_exists( 'woocommerce' ) ) {
            $checkout_url = get_permalink( get_option( 'woocommerce_cart_page_id', true ) );
        } else {
            $checkout_url = get_option('shopping_cart_url');
        } ?>            
    <div id="header_cart"><a href="<?php echo $checkout_url; ?>" title="<?php _e('Checkout','sp'); ?>" class="cart_icon">
            <em class="count">
            	<?php $item = ''; ?>
				<?php if (class_exists('WP_eCommerce')) { 
						  if (wpsc_cart_item_count() < 2) {
							  $item = "item";
						  } else {
							  $item = "items";	
						  }
						  if (wpsc_cart_item_count() == 0 || isset($_GET['sessionid'])) { 
							  echo "0";
						  } else { 
							  echo wpsc_cart_item_count(); 
						  } 
					} ?>
				<?php if (class_exists('woocommerce')) {
						if ($woocommerce->cart->cart_contents_count < 2) {
							$item = "item";
						} else {
							$item = "items";
						}
						if ($woocommerce->cart->cart_contents_count == 0) {
							echo "0";
						} else {
							echo $woocommerce->cart->cart_contents_count;
						}
                } ?>
                      
                    </em> <em class="item"><?php echo __($item,'sp'); ?></em> | <span class="icon"><?php _e( 'Cart', 'sp' ); ?></span><?php _e("Checkout",'sp'); ?><span class="shadow"></span></a>
	</div><!--close header_cart-->
	<?php if ( class_exists( 'woocommerce' ) ) {
        $account_url = get_permalink( get_option( 'woocommerce_myaccount_page_id', true ) );
    } else {
        $account_url = get_option('user_account_url');
    } ?>
    
	<div id="account">
        <a href="<?php echo $account_url; ?>" title="<?php _e('My Account','sp'); ?>" class="account_icon"><span class="icon"><?php _e( 'Account', 'sp' ); ?></span><?php _e("My Account",'sp'); ?><span class="shadow"></span></a>
    </div><!--close account-->
    <?php } ?>
		<?php /* if dynamic menu is not set, it fallbacks to wp_list_pages function */ ?>






      <nav style="margin-top: 30px;" id="main-nav">
	<ul id="menu-main-menu" role="navigation">
    <?php wp_nav_menu( array( 'container' => 'false', 'fallback_cb' => 'header_menu', 'theme_location' => 'header', 'link_before' => '<span>') ); ?>
   <?php get_search_form(); ?>
</ul>
        </nav> 
    <input type="hidden" value="<?php echo sp_isset_option( 'skins', 'value' ); ?>" id="skins" />        
</header>