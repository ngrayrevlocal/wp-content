<!DOCTYPE html>
	<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
	<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
	<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
	<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php wp_title(); ?></title>
		<meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<meta name="viewport" content="width=device-width">
		<?php if( have_rows('header_scripts', 'option') ): ?>
			<?php while ( have_rows('header_scripts', 'option') ) : the_row(); ?>
				<?php the_sub_field('script'); ?>
			<?php endwhile; ?>
			<?php else : ?>
		<?php endif; ?>
		<?php wp_head(); ?>
	</head>
	<link rel="icon" type="image/png" href="<?php the_field('favicon', 'option'); ?>">
	<body <?php body_class(); ?>>
		<!--[if lt IE 7]>
				<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->
		<header id="header">
			<div class="container">
				<div class="col-md-3 spacer logo_social">
					<?php get_template_part('block', 'header-social'); ?>
				</div><!-- .col-md-3 -->
				<div class="col-md-6">
					<a href="<?php echo home_url(); ?>" class="logo_link">
						<?php if( get_field('logo', 'option') ) { ?>
							<img src="<?php the_field('logo', 'option'); ?>" class="logo_img" title="<?php echo bloginfo('name'); ?> | <?php echo bloginfo('description'); ?>" alt="<?php echo bloginfo('name'); ?> | <?php echo bloginfo('description'); ?>" />
							<img src="<?php the_field('mobile_logo', 'option'); ?>" class="mobile_logo" title="<?php echo bloginfo('name'); ?> | <?php echo bloginfo('description'); ?>" alt="<?php echo bloginfo('name'); ?> | <?php echo bloginfo('description'); ?>" />
						<?php } else { ?>
						<?php } ?>
					</a>

						<?php if( get_field('display_site_title', 'option') ) { ?>
							<h1 class="logo_alt">
								<?php the_field('site_title', 'option'); ?>
							</h1>
						<?php } else { ?>
						<?php } ?>
					</a>
				</div><!-- .col-md-6 -->
				<div class="col-md-3">
					<?php if( have_rows('nap_addresses', 'option') ):
						while ( have_rows('nap_addresses', 'option') ) : the_row(); ?>
							<div class="header_nap_wrap">
								<a href="<?php the_sub_field('map_url'); ?>" target="_blank">
									<?php the_sub_field('street'); ?>
									<br />
									<?php the_sub_field('city'); ?>, <?php the_sub_field('state'); ?> <?php the_sub_field('zip'); ?>
								</a>
								<br />
								<?php if( have_rows('nap_numbers', 'option') ): ?>
									<?php while ( have_rows('nap_numbers', 'option') ) : the_row(); ?>
										<a href="tel:<?php the_sub_field('number'); ?>" class="phone header_phone">
											<i class="fa fa-phone"></i> <?php the_sub_field('number'); ?>
										</a>
									<?php endwhile;	?>

									<?php else : ?>
								<?php endif; ?>
							</div><!-- .header_nap_wrap -->
						<?php endwhile;	?>
						<?php else : ?>
					<?php endif; ?>
					<ul id="menu-secondary-menu" class="secondary_menu ">
						<?php global $woocommerce; ?>
						<li class="first">
							<a class="cart-contents" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>">
								<i class="fa fa-shopping-cart"></i>
							</a>
						</li>
						<li class="last">
							<?php if ( is_user_logged_in() ) { ?>
								<a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('my account','woothemes'); ?>" class="account">
									<?php _e('my account','woothemes'); ?>
								</a>
							<?php } else { ?>
								<a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('log in','woothemes'); ?>"class="account">
									<?php _e('log in','woothemes'); ?>
								</a>
							<?php } ?>
						</li>
					</ul>
				</div><!-- .col-md-3 -->
			</div><!-- .container -->
			<?php get_template_part('block', 'main-nav'); ?>
		</header>
		<div class="container no_pad">