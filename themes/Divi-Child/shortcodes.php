<?php 
// -----------------------------------------------------------------------------
// Shortcode for Phone Number Link - Pulls from ACF
// -----------------------------------------------------------------------------
add_shortcode('phone', function () {
	return '
		<a href="tel:' . get_field('primary_number', 'option') . '" class="primary_phone">' . get_field('primary_number', 'option') . '</a>';
	});

// -----------------------------------------------------------------------------
// Shortcode for Address - Pulls from ACF
// -----------------------------------------------------------------------------
add_shortcode('address', function () {
	return 
		get_field('address', 'option');
	});
	
// -----------------------------------------------------------------------------
// Shortcode for Email Link - Pulls from ACF
// -----------------------------------------------------------------------------
add_shortcode('email', function () {
	return '
		<a href="mailto:' . get_field('email', 'option') . '" target="_blank">' . get_field('email', 'option') . '</a>';
	});

// -----------------------------------------------------------------------------
// Shortcode for Office Hours - Pulls from ACF
// -----------------------------------------------------------------------------
add_shortcode('hours', function () {
	return '
		<div class="hours_wrap">' . get_field('office_hours', 'option') . '</div><!-- .hours_wrap -->';
	});
?>