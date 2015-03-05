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
			<?php include( '/css/revlocal.php' ); ?>
			<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<!--[if lt IE 7]>
				<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->
		<div class="top_stripe">
			<?php get_template_part( 'block', 'secondary-nav' ); ?>
		</div><!-- .top_stripe -->
		<div id="top-content" class="container">
			<div class="row">
				<div class="col-xs-12 col-md-3">
					<a href="<?php echo home_url(); ?>">
						<img src="<?php the_field( 'logo', 'option' ); ?>" class="logo" />
					</a>
				</div><!-- #logo -->
				<div class="col-md-6 address_phone">
					<div class="address">
						<a href="<?php the_field( 'map_url', 'option' ); ?>" class="address_link" target="_blank" >
							<?php the_field( 'street_address', 'option' ); ?>, <?php the_field( 'city', 'option' ); ?>, <?php the_field( 'state', 'option' ); ?> <?php the_field( 'zip', 'option' ); ?>
						</a>
					</div><!-- .address -->
					<a href="<?php the_field( 'phone_number_url', 'option' ); ?>" class="phone">
						<i class="fa fa-phone"></i> <?php the_field( 'phone_number', 'option' ); ?>
					</a>
				</div><!-- .col-md-5 -->
				<div id="dealer-logo" class="col-md-3">
					<?php
						if( get_field('multlock_dealer', 'option') )
							{
								echo '<a href="http://www.mul-t-lockusa.com/en-us/" target="_blank"><img src="' . get_stylesheet_directory_uri() . '/img/multlock-authorized-dealer-logo.png" /></a>';
							}

						else{}
					?>
				</div><!-- #dealer-logo -->
			</div><!-- .row -->
		</div><!-- #top-content -->
		<div class="container">
			<header id="header">
				<?php get_template_part( 'block', 'top-nav' ); ?>
			</header>
		</div><!-- .container -->