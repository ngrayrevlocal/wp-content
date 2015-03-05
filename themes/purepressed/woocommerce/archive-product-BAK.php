<style>
a.add_to_cart_btn {
	display: block;
	width: 100%;
	color: #fff;
	background: #000;
	text-align: center;
	text-align: center;
	padding: 8px 0px;
	text-transform: uppercase;
	text-decoration: none !important;
}

a.add_to_cart_btn:hover {
	background: #669900;
	color: #fff;
}

.archive_product {

}

.archive_product a.product_archive_img_link {
	text-decoration: none;
}

.archive_product a.product_archive_img_link:hover {
	text-decoration: none;
}

.archive_product img.product_archive_img {

}

h4.modal-title {
	text-transform: uppercase;
	text-align: center;
	color: #669900;
	font-weight: 800;
}

h4.nut_facts {
	text-transform: uppercase;
}

.price {
	display: block;
	text-align: center;
	font-size: 1.6em;
	font-weight: 600;
}

.green_bg {
	background: #669900 !important;
}

.product_details {
	width: 50% !important;
}
</style>



<?php get_header(); ?>
<div class="container">
	<div id="content" class="row">
		<div id="main" class="col-md-9" role="main">

		<?php $postNumber = 1; ?>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article id="<?php the_ID(); ?>" class="archive_product">
				<div class="col-md-6">
					<?php if ( has_post_thumbnail() ) : ?>
						<a href="#" title="<?php the_title_attribute(); ?>" class="product_archive_img_link" data-toggle="modal" data-target="#product-<?php the_ID(); ?>">
							<?php the_post_thumbnail('post-thumbnail', array( 'class' => "product_archive_img attachment-post-thumbnail")); ?>
						</a>
					<?php endif; ?>
					<br />
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="product_archive_prod_title">
						<?php the_title(); ?>
					</a>
				</div><!-- .col-md-6 -->

				<div class="modal fade" id="product-<?php the_ID(); ?>" tabindex="-1" role="dialog" aria-labelledby="<?php the_title(); ?>" aria-hidden="true">
					<div class="modal-dialog product_details">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
								<h4 class="modal-title" id="<?php the_title(); ?>">
									<?php the_title(); ?>
								</h4>
							</div><!-- .modal-header -->
							<div class="modal-body">
								<?php get_template_part('block', 'nutrition-facts'); ?>
								<?php if ( $price_html = $product->get_price_html() ) : ?>
									<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="price">
										<?php echo $price_html; ?>
									</a>
								<?php endif; ?>
							</div><!-- .modal-body -->
							<div class="modal-footer">
								<?php
									echo apply_filters( 'woocommerce_loop_add_to_cart_link',
										sprintf( '<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" data-quantity="%s" class="add_to_cart_btn %s product_type_%s">%s</a>',
											esc_url( $product->add_to_cart_url() ),
											esc_attr( $product->id ),
											esc_attr( $product->get_sku() ),
											esc_attr( isset( $quantity ) ? $quantity : 1 ),
											$product->is_purchasable() && $product->is_in_stock() ? 'add_to_cart_button' : '',
											esc_attr( $product->product_type ),
											esc_html( $product->add_to_cart_text() )
										),
									$product );
								?>
							</div><!-- .modal-footer -->
						</div><!-- .modal-content -->
					</div><!-- .modal-dialog -->
				</div><!-- .modal -->


			</article>
			<?php endwhile; ?>
			<?php else : ?>
			<?php endif; ?>
		</div><!-- #main -->
		<div class="col-md-3">
			<?php get_template_part( 'sidebar', 'right'); ?>
			<?php get_template_part('sidebar', 'social-links'); ?>
		</div><!-- .col-md-3 -->
	</div><!-- #content -->
	</div>
	
<?php get_footer(); ?>