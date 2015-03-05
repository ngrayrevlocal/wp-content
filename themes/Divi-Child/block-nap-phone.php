<?php if( have_rows('primary_numbers', 'option') ): ?>
	<?php while ( have_rows('primary_numbers', 'option') ) : the_row(); ?>
		<div class="header_nap_phone_wrap">
			<a href="tel:<?php the_sub_field('primary_number'); ?>" class="header_phone_link">
				<i class="fa fa-phone red"></i> <?php the_sub_field('primary_number'); ?>
			</a>
		</div><!-- .header_nap_wrap -->
	<?php endwhile; ?>
	<?php else : ?>
<?php endif; ?>