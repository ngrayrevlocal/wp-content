<?php 
global $cats;
	/* get all items */
	$url = 'https://connect.squareup.com/v1/me/items?permissions=ITEMS_READ';
	$ch = curl_init(); 
            curl_setopt($ch, CURLOPT_URL, $url); 
            curl_setopt($ch, CURLOPT_HEADER, FALSE); 
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET'); 
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Bearer '. get_option("square_api_key"),'Accept: application/json')); 
            $head = curl_exec($ch); 
            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE); 
            curl_close($ch);
	
			$response = json_decode($head);
	
	/* get Inventory of all items */
	$url1 = 'https://connect.squareup.com/v1/me/inventory?permissions=ITEMS_READ';
	$ch1 = curl_init(); 
            curl_setopt($ch1, CURLOPT_URL, $url1); 
            curl_setopt($ch1, CURLOPT_HEADER, FALSE); 
            curl_setopt($ch1, CURLOPT_RETURNTRANSFER, 1); 
            curl_setopt($ch1, CURLOPT_CUSTOMREQUEST, 'GET'); 
            curl_setopt($ch1, CURLOPT_HTTPHEADER, array('Authorization: Bearer '. get_option('square_api_key'),'Accept: application/json')); 
            $head1 = curl_exec($ch1); 
            $httpCode1 = curl_getinfo($ch1, CURLINFO_HTTP_CODE); 
            curl_close($ch1);
			
			$response1 = json_decode($head1);
			
			// pre($response1);
			
			
			
			
			$product_categories = get_terms( 'product_cat','hide_empty=0');
			
			foreach($product_categories as $category){
				$cats[] = $category->name;
			}
			
			if($response){
				foreach($response as $product){
					wpsd_insert_product_term($product->category->name);
					wpsd_insert_product($product,$response1);
				}
			}
			// pre($response	);
?>