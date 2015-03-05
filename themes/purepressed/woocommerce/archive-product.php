<style>
.archive_single {
	min-height: 383px !important;
}
</style>

<?php get_header(); ?>
<div class="container no_pad">
	<div id="content" class="no_pad">
		<div id="main" class="col-md-9 no_pad" role="main">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="col-md-4 no_pad archive_single">
					<div id="product-<?php the_ID(); ?>" class="archive_product">

						<?php if ( has_post_thumbnail() ) : ?>
							<div class="product_img_wrap" data-toggle="modal" data-target="#modal-<?php the_ID(); ?>">
								<?php the_post_thumbnail('post-thumbnail', array( 'class' => "product_archive_img attachment-post-thumbnail")); ?>
							</div><!-- .product_img_wrap -->
						<?php endif; ?>

						<h4 class="product_title">
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="price">
							<?php the_title(); ?>
						</a>
						</h4>

						<?php if ( $price_html = $product->get_price_html() ) : ?>
							<p class="product_price">
								<?php echo $price_html; ?>
							</p>
						<?php endif; ?>

						<?php if ( $product->is_in_stock() ) : ?>
							<?php do_action( 'woocommerce_before_add_to_cart_form' ); ?>
							<form class="cart" method="post" enctype='multipart/form-data'>
								<?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>
								<input type="hidden" name="add-to-cart" value="<?php echo esc_attr( $product->id ); ?>" />
								<button type="submit" class="single_add_to_cart_button button alt">
									<?php echo $product->single_add_to_cart_text(); ?>
								</button>
								<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
							</form>
							<?php do_action( 'woocommerce_after_add_to_cart_form' ); ?>
						<?php endif; ?>

					</div><!-- .archive_product -->
				</div><!-- .col-md-3 -->

				<div class="modal fade" id="modal-<?php the_ID(); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title">
									<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="price">
										<?php the_title(); ?>
									</a>
								</h4>
							</div><!-- .modal-header -->
							<div class="modal-body">
								<?php if ( has_post_thumbnail() ) : ?>
									<div class="product_img_wrap" data-toggle="modal" data-target="#modal-<?php the_ID(); ?>">
										<?php the_post_thumbnail('post-thumbnail', array( 'class' => "product_archive_img attachment-post-thumbnail")); ?>
									</div><!-- .product_img_wrap -->
								<?php endif; ?>
							</div><!-- .modal-body -->
							<div class="modal-footer">
								<?php if ( $price_html = $product->get_price_html() ) : ?>
									<p class="product_price">
										<?php echo $price_html; ?>
									</p>
								<?php endif; ?>

								<?php if ( $product->is_in_stock() ) : ?>
									<?php do_action( 'woocommerce_before_add_to_cart_form' ); ?>
									<form class="cart" method="post" enctype='multipart/form-data'>
										<?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>
										<input type="hidden" name="add-to-cart" value="<?php echo esc_attr( $product->id ); ?>" />
										<button type="submit" class="single_add_to_cart_button button alt">
											<?php echo $product->single_add_to_cart_text(); ?>
										</button>
										<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
									</form>
									<?php do_action( 'woocommerce_after_add_to_cart_form' ); ?>
								<?php endif; ?>
							</div><!-- .modal-footer -->
						</div><!-- .modal-content -->
					</div><!-- .modal-dialog -->
				</div><!-- .modal -->

			<?php endwhile; ?>
			<div class="clear"></div><!-- .clear -->
			<?php else : ?>
			<?php endif; ?>

			<?php do_action( 'woocommerce_after_shop_loop' ); ?>

		</div><!-- .col-md-9 -->

		<div class="col-md-3">
			<?php get_template_part( 'sidebar', 'right'); ?>
			<?php get_template_part('sidebar', 'social-links'); ?>
		</div><!-- .col-md-3 -->
	</div><!-- #content -->
	</div>
	
<?php get_footer(); ?>