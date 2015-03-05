<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div><!-- .navbar-header -->
		<?php
			wp_nav_menu( array(
				'menu'              => 'primary',
				'theme_location'    => 'primary',
				'depth'             => 2,
				'items_wrap'      	=> '<a class="navbar-brand" href="#">Brand</a><ul id="%1$s" class="nav navbar-nav navbar-left %2$s">%3$s</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="nav-right">
						<a href="/cart/"><i class="fa fa-shopping-cart"></i> View Cart</a>
					</li>
					<li class="nav-right">
						<a href="/checkout/"><i class="fa fa-sign-in"></i> Checkout</a>
					</li>
				</ul>',
				'container'         => 'div',
				'container_class'   => 'collapse navbar-collapse',
				'container_id'      => 'navbar-collapse-1',
				'menu_class'        => 'nav navbar-nav',
				'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
				'walker'            => new wp_bootstrap_navwalker())
			);
		?>
	</div><!-- .container-fluid -->
</nav>