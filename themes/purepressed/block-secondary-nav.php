<div class="container ">
	<nav>
		<div class="row">
			<div class="container">
				<ul id="menu-secondary-menu" class="secondary_menu ">
					<li>
						<?php global $woocommerce; ?>
						<a class="cart-contents" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>">
							<i class="fa fa-shopping-cart"></i> <?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?> - <?php echo $woocommerce->cart->get_cart_total(); ?>
						</a>
					</li>
					<li>
						<?php if ( is_user_logged_in() ) { ?>
							<a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('My Account','woothemes'); ?>"><i class="fa fa-user"></i> <?php _e('My Account','woothemes'); ?></a>
						<?php } 
						else { ?>
							<a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('Login','woothemes'); ?>"><i class="fa fa-user"></i> <?php _e('Login','woothemes'); ?></a>
						<?php } ?>
					</li>
				</ul>
			</div><!-- .container -->
		</div><!-- .row -->
	</nav>
</div><!-- .container -->