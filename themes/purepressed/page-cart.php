<?php
/*
Template Name: Cart Page Template
*/
?>
<?php get_header(); ?>
<div class="container no-pad">
	<div class="col-md-8">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<h2>
				<?php the_title(); ?>
			</h2>
			<?php the_content(); ?>
		<?php endwhile; else: ?>
			<p>
				Sorry.  Nothing to see here.
			</p>
			<div class="clear"></div><!-- .clear -->
		<?php endif; ?>
	</div><!-- .col-md-8 -->

	<div class="col-md-4">
		<?php dynamic_sidebar('shop-sidebar'); ?>
	</div><!-- .col-md-4 -->

<?php get_footer(); ?>