<div class="primary_nav_wrap">
	<div class="container">
		<div id="et-top-navigation">
			<nav id="top-menu-nav">
				<?php
					$menuClass = 'nav';
					if ( 'on' == et_get_option( 'divi_disable_toptier' ) ) $menuClass .= ' et_disable_top_tier';
					$primaryNav = '';
					$primaryNav = wp_nav_menu( array( 'theme_location' => 'primary-menu', 'container' => '', 'fallback_cb' => '', 'menu_class' => $menuClass, 'menu_id' => 'top-menu', 'echo' => false ) );
					if ( '' == $primaryNav ) :
				?>
					<ul id="top-menu" class="<?php echo esc_attr( $menuClass ); ?>">
						<?php if ( 'on' == et_get_option( 'divi_home_link' ) ) { ?>
							<li <?php if ( is_home() ) echo( 'class="current_page_item"' ); ?>><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'Divi' ); ?></a></li>
						<?php }; ?>
						<?php show_page_menu( $menuClass, false, false ); ?>
						<?php show_categories_menu( $menuClass, false ); ?>
					</ul>
				<?php
					else :
						echo( $primaryNav );
					endif;
				?>
			</nav>
			<?php
				if ( ! $et_top_info_defined ) {
					et_show_cart_total( array(
						'no_text' => true,
					) );
				}
			?>
			<?php if ( false !== et_get_option( 'show_search_icon', true ) ) : ?>
			<div id="et_top_search">
				<span id="et_search_icon"></span>
				<form role="search" method="get" class="et-search-form et-hidden" action="<?php echo esc_url( home_url( '/' ) ); ?>">
				<?php
					printf( '<input type="search" class="et-search-field" placeholder="%1$s" value="%2$s" name="s" title="%3$s" />',
						esc_attr_x( 'Search &hellip;', 'placeholder', 'Divi' ),
						get_search_query(),
						esc_attr_x( 'Search for:', 'label', 'Divi' )
					);
				?>
				</form>
			</div><!-- #et_top_search -->
			<?php endif; // true === et_get_option( 'show_search_icon', false ) ?>
			<?php do_action( 'et_header_top' ); ?>
		</div><!-- #et-top-navigation -->
	</div><!-- .container -->
</div><!-- .primary_nav_wrap -->