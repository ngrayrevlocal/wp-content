<div class="container">
	<div class="nav_wrap">

		<div id="nav_inner" class="cf">
			<?php
				$defaults = array(
					'theme_location'  => 'primary2',
					'menu'            => 'primary2',
					'container'       => false,
					'container_class' => '',
					'container_id'    => '',
					'menu_class'      => '',
					'menu_id'         => '',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth'           => 0,
					'walker'          => ''
				);
				wp_nav_menu( $defaults );
			?>
		</div><!-- .nav_inner -->
	</div><!-- .nav_wrap -->
</div>
<div class="clear"></div>


