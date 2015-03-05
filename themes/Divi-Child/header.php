<?php if ( ! isset( $_SESSION ) ) session_start(); ?>
<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php elegant_titles(); ?></title>
	<?php elegant_description(); ?>
	<?php elegant_keywords(); ?>
	<?php elegant_canonical(); ?>
	<?php do_action( 'et_head_meta' ); ?>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php $template_directory_uri = get_template_directory_uri(); ?>
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( $template_directory_uri . '/js/html5.js"' ); ?>" type="text/javascript"></script>
	<![endif]-->
	<script type="text/javascript">
		document.documentElement.className = 'js';
	</script>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="page-container">
<?php
	if ( is_page_template( 'page-template-blank.php' ) ) {
		return;
	}
	$et_secondary_nav_items = et_divi_get_top_nav_items();
	$et_phone_number = $et_secondary_nav_items->phone_number;
	$et_email = $et_secondary_nav_items->email;
	$et_contact_info_defined = $et_secondary_nav_items->contact_info_defined;
	$show_header_social_icons = $et_secondary_nav_items->show_header_social_icons;
	$et_secondary_nav = $et_secondary_nav_items->secondary_nav;
	$primary_nav_class = 'et_nav_text_color_' . et_get_option( 'primary_nav_text_color', 'dark' );
	$secondary_nav_class = 'et_nav_text_color_' . et_get_option( 'secondary_nav_text_color', 'light' );
	$et_top_info_defined = $et_secondary_nav_items->top_info_defined;
?>
	<?php if ( $et_top_info_defined ) : ?>
		<div id="top-header" class="<?php echo esc_attr( $secondary_nav_class ); ?>">
			<div class="container clearfix">
			<?php if ( $et_contact_info_defined ) : ?>
				<div id="et-info">
				<?php if ( '' !== ( $et_phone_number = et_get_option( 'phone_number' ) ) ) : ?>
					<span id="et-info-phone"><?php echo esc_html( $et_phone_number ); ?></span>
				<?php endif; ?>
				<?php if ( '' !== ( $et_email = et_get_option( 'header_email' ) ) ) : ?>
					<a href="<?php echo esc_attr( 'mailto:' . $et_email ); ?>"><span id="et-info-email"><?php echo esc_html( $et_email ); ?></span></a>
				<?php endif; ?>
				<?php
				if ( true === $show_header_social_icons ) {
					get_template_part( 'includes/social_icons', 'header' );
				} ?>
				</div> <!-- #et-info -->
			<?php endif; // true === $et_contact_info_defined ?>
				<div id="et-secondary-menu">
				<?php
					if ( ! $et_contact_info_defined && true === $show_header_social_icons ) {
						get_template_part( 'includes/social_icons', 'header' );
					} else if ( $et_contact_info_defined && true === $show_header_social_icons ) {
						ob_start();
						get_template_part( 'includes/social_icons', 'header' );
						$duplicate_social_icons = ob_get_contents();
						ob_end_clean();
						printf(
							'<div class="et_duplicate_social_icons">
								%1$s
							</div>',
							$duplicate_social_icons
						);
					}
					if ( '' !== $et_secondary_nav ) {
						echo $et_secondary_nav;
					}
					et_show_cart_total();
				?>
				</div> <!-- #et-secondary-menu -->
			</div> <!-- .container -->
		</div> <!-- #top-header -->
	<?php endif; // true ==== $et_top_info_defined ?>
		<header id="main-header" class="<?php echo esc_attr( $primary_nav_class ); ?>">
			<div class="container clearfix">
				<a href="<?php echo home_url(); ?>">
					<img src="<?php the_field('logo', 'option'); ?>" class="logo" />
				</a>
				<div class="header_right">
					<?php get_template_part('block', 'nap-address'); ?>
					<hr>
					<?php get_template_part('block', 'nap-phone'); ?>
				</div><!-- .header_right -->
			</div> <!-- .container -->
			<div class="clear"></div><!-- .clear -->
			<?php get_template_part('block', 'primary-nav'); ?>
		</header> <!-- #main-header -->
		<div id="et-main-area">