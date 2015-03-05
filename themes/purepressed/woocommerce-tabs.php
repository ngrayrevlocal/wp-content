<?php

/**
 * Features Tabs for Product display
 * 
 * Outputs an extra tab to the default set of info tabs on the single product page.
 */
function features_tab_options_tab() {
?>
	<li class="features_tab"><a href="#features_tab_data"><?php _e('Features Tab', 'woothemes'); ?></a></li>
<?php
}
add_action('woocommerce_product_write_panel_tabs', 'features_tab_options_tab'); 


/**
 * Features Tab Options
 * 
 * Provides the input fields and add/remove buttons for custom tabs on the single product page.
 */
function features_tab_options() {
	global $post;
	
	$features_tab_options = array(
		'title' => get_post_meta($post->ID, 'features_tab_title', true),
		'content' => get_post_meta($post->ID, 'features_tab_content', true),
	);
	
?>
	<div id="features_tab_data" class="panel woocommerce_options_panel">
		<div class="options_group">
			<p class="form-field">
				<?php woocommerce_wp_checkbox( array( 'id' => 'features_tab_enabled', 'label' => __('Enable Features Tab?', 'woothemes'), 'description' => __('Enable this option to enable the custom tab on the frontend.', 'woothemes') ) ); ?>
			</p>
		</div>
		
		<div class="options_group features_tab_options">                								
			<p class="form-field">
				<label><?php _e('Features Tab Title:', 'woothemes'); ?></label>
				<input type="text" size="5" name="features_tab_title" value="<?php echo @$features_tab_options['title']; ?>" placeholder="<?php _e('Enter your custom tab title', 'woothemes'); ?>" />
			</p>
			
			<p class="form-field">
				<?php _e('Features Tab Content:', 'woothemes'); ?>
           	</p>
			
			<table class="form-table">
				<tr>
					<td>
						<textarea class="theEditor" rows="10" cols="40" name="features_tab_content" placeholder="<?php _e('Enter your custom tab content', 'woothemes'); ?>"><?php echo @$features_tab_options['content']; ?></textarea>
					</td>
				</tr>   
			</table>
        </div>	
	</div>
<?php
}
add_action('woocommerce_product_write_panels', 'features_tab_options');


/**
 * Process meta
 * 
 * Processes the custom tab options when a post is saved
 */
function process_product_meta_features_tab( $post_id ) {
	update_post_meta( $post_id, 'features_tab_enabled', ( isset($_POST['features_tab_enabled']) && $_POST['features_tab_enabled'] ) ? 'yes' : 'no' );
	update_post_meta( $post_id, 'features_tab_title', $_POST['features_tab_title']);
	update_post_meta( $post_id, 'features_tab_content', $_POST['features_tab_content']);
}
add_action('woocommerce_process_product_meta', 'process_product_meta_features_tab');


/** Add extra tabs to front end product page **/
if (!function_exists('woocommerce_product_features_tab')) {
	function woocommerce_product_features_tab() {
		global $post;
		
		$features_tab_options = array(
			'enabled' => get_post_meta($post->ID, 'features_tab_enabled', true),
			'title' => get_post_meta($post->ID, 'features_tab_title', true),
		);
		
		if ( $features_tab_options['enabled'] != 'yes' )
			return false;
		
?>
		<li><a href="#tab-models"><?php echo $features_tab_options['title']; ?></a></li>
<?php
	}
}
add_action( 'woocommerce_product_tabs', 'woocommerce_product_features_tab', 11 );


if (!function_exists('woocommerce_product_custom_panel')) {
	function woocommerce_product_custom_panel() {
		global $post;
		
		$features_tab_options = array(
			'title' => get_post_meta($post->ID, 'features_tab_title', true),
			'content' => get_post_meta($post->ID, 'features_tab_content', true),
		);
		
?>
		<div class="panel" id="tab-models">			
			<?php echo $features_tab_options['content']; ?>
		</div>
<?php
	}
}
add_action( 'woocommerce_product_tab_panels', 'woocommerce_product_custom_panel', 11 );

?>