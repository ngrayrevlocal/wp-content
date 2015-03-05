<?php
/*
Template Name: Solutions
*/
?>
<?php get_header(); ?>
<div class="container body_wrap no-pad">
	<div class="col-md-9">
	<?php get_template_part( 'block', 'home-slider' ); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
			<hr>
			<div class="clear"></div>
			<?php
				if( have_rows('featured_products') ): ?>
					<?php while ( have_rows('featured_products') ) : the_row(); ?>
						<div id="product-image" class="col-md-4 product_image2">
							<a href="<?php echo the_sub_field('link'); ?>">
								<img src="<?php echo the_sub_field('image'); ?>" />
							</a>
						</div><!-- #product-image -->

						<div class="col-md-8 product_excerpt">
							<p>
								<?php echo the_sub_field('content'); ?>
							</p>
							<a href="<?php echo the_sub_field('link'); ?>" class="button">
								Learn More and Buy
							</a>
						</div><!-- .product_excerpt -->

						<div class="clear"></div><!-- .clear -->
						<hr>
					<?php endwhile;
					else :
				endif;
			?>
			<div class="clearfix"></div><!-- .clearfix -->
		<?php endwhile; else: ?>
			<p>
				Sorry.  Nothing to see here.
			</p>
			<div class="clear"></div><!-- .clear -->
		<?php endif; ?>
	</div><!-- .col-md-9 -->

	<div class="col-md-3">
		<?php get_template_part( 'sidebar', 'right'); ?>
	</div><!-- .col-md-4 -->
</div><!-- .container -->
<div class="container">
<?php get_footer(); ?>