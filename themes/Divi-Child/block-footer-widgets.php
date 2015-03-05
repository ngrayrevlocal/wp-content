<?php if( have_rows('footer_widgets', 'option') ): ?>
	<?php while ( have_rows('footer_widgets', 'option') ) : the_row(); ?>
		<div class="col-md-4">
			<?php the_sub_field('footer_widget'); ?>
		</div><!-- .col-md-4 -->
	<?php endwhile; ?>
	<?php else : ?>
<?php endif; ?>