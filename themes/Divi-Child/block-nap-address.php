<?php if( have_rows('primary_address', 'option') ): ?>
	<?php while ( have_rows('primary_address', 'option') ) : the_row(); ?>
		<div class="header_nap_wrap">
			<a href="<?php the_sub_field('google_maps_link'); ?>" target="_blank" class="header_address_link">
				<p class="header_address">
					<i class="fa fa-map-marker red"></i> <?php the_sub_field('street'); ?>
				</p>
				<p class="header_address">
					<?php the_sub_field('city'); ?>, <?php the_sub_field('state'); ?> <?php the_sub_field('zip'); ?>
				</p>
			</a>
		</div><!-- .header_nap_wrap -->
	<?php endwhile; ?>
	<?php else : ?>
<?php endif; ?>