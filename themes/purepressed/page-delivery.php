<?php
/*
Template Name: Delivery Page
*/
?>
<?php get_header(); ?>
<div class="container no-pad">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; else: ?>
			<p>
				Sorry.  Nothing to see here.
			</p>
			<div class="clear"></div><!-- .clear -->
		<?php endif; ?>

<?php get_footer(); ?>