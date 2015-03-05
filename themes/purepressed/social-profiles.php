<?php
	if( get_field('display_facebook', 'option') )
		{
			echo '<li><a href="' . get_field('facebook_profile_url', 'option') . '" target="_blank"><i class="fa fa-facebook"></i></a></li>';
		}
	else{}

	$posts = get_posts(array(
		'meta_query' => array(
			array(
				'key' => 'field_name',
				'value' => '1',
				'compare' => '=='
			)
		)
	));
	if( $posts )
	{
		foreach( $posts as $post )
		{
			setup_postdata( $post );
		}
		wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly
	}
?>

<?php
	if( get_field('display_google_plus', 'option') )
		{
			echo '<li><a href="' . get_field('google_plus_profile_url', 'option') . '" target="_blank"><i class="fa fa-google-plus"></i></a></li>';
		}
	else{}
	$posts = get_posts(array(
		'meta_query' => array(
			array(
				'key' => 'field_name',
				'value' => '1',
				'compare' => '=='
			)
		)
	));
	if( $posts )
	{
		foreach( $posts as $post )
		{
			setup_postdata( $post );
		}
		wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly
	}
?>

<?php
	if( get_field('display_twitter', 'option') )
		{
			echo '<li><a href="' . get_field('twitter_profile_url', 'option') . '" target="_blank"><i class="fa fa-twitter"></i></a></li>';
		}
	else{}
	$posts = get_posts(array(
		'meta_query' => array(
			array(
				'key' => 'field_name',
				'value' => '1',
				'compare' => '=='
			)
		)
	));
	if( $posts )
	{
		foreach( $posts as $post )
		{
			setup_postdata( $post );
		}
		wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly
	}
?>