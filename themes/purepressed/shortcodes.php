<?php 
// -----------------------------------------------------------------------------
// Shortcode for Phone Number Link - Pulls from ACF
// -----------------------------------------------------------------------------
add_shortcode('phone', function () {
	return '
		<a href="tel:' . get_field('phone_number', 'option') . '">' . get_field('phone_number', 'option') . '</a>';
	});

// -----------------------------------------------------------------------------
// Shortcode for Address - Pulls from ACF
// -----------------------------------------------------------------------------
add_shortcode('address', function () {
	return '
		<div class="address1">
			<a href="' . get_field('map_url', 'option') . '" target="_blank">'
				. get_field('street_address', 'option') . '</br>'
				. get_field('city', 'option') . ',' 
				. get_field('state', 'option')
				. get_field('zip', 'option') .
			'</a>
		</div><!-- .address1 -->';
	});

// -----------------------------------------------------------------------------
// Shortcode for default link style Address - Pulls from ACF
// -----------------------------------------------------------------------------
add_shortcode('address2', function () {
	return '
		<div class="address2">
			<a href="' . get_field('map_url', 'option') . '" target="_blank">'
				. get_field('street_address', 'option') . '</br>'
				. get_field('city', 'option') . ',' 
				. get_field('state', 'option')
				. get_field('zip', 'option') .
			'</a>
		</div><!-- .address2 -->';
	});
	
// -----------------------------------------------------------------------------
// Shortcode for Email Link - Pulls from ACF
// -----------------------------------------------------------------------------
add_shortcode('email', function () {
	return '
		<a href="mailto:' . get_field('email_address', 'option') . '" class="email">' . get_field('email_address', 'option') . '</a>';
	});
?>