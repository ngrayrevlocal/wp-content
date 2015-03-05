<?php 

// check for rows (parent repeater)
if( have_rows('office_locations', 'option') ): ?>
	<?php 
	// loop through rows (parent repeater)
	while( have_rows('office_locations', 'option') ): the_row(); ?>
			<h4>
				<?php the_sub_field('location_label'); ?>
			</h4>
			<p class="cpl_address">
				<a href="<?php the_sub_field('location_map_link'); ?>" target="_blank" class="cpl_map">
					<?php the_sub_field('location_street'); ?>
					<br />
					<?php the_sub_field('location_city'); ?>,
					<?php the_sub_field('location_state'); ?>
					<?php the_sub_field('location_zip'); ?>
				</a>
			</p>
			
			<?php 

			// check for rows (sub repeater)
			if( have_rows('cpcns') ): ?>
				<hr>
				<?php while( have_rows('cpcns') ): the_row(); ?>
					<strong><?php the_sub_field('cpcn_label'); ?></strong>: <a href="tel:<?php the_sub_field('cpcn_number'); ?>"><?php the_sub_field('cpcn_number'); ?></a>
					<br />
				<?php endwhile; ?>
				<hr>
			<?php endif; //if( get_sub_field('items') ): ?>

			<?php 

			// check for rows (sub repeater)
			if( have_rows('cpeas') ): ?>

				<?php while( have_rows('cpeas') ): the_row(); ?>
					<a href="mailto:<?php the_sub_field('cpea'); ?>" class="small"><?php the_sub_field('cpea'); ?></a>
				<?php endwhile; ?>

			<?php endif; //if( get_sub_field('items') ): ?>
			<hr>
			<h4>
				Hours of Operation
			</h4>
			<?php the_sub_field('location_hours'); ?>
			<div class="clear"></div><!-- .clear -->

	<?php endwhile; // while( has_sub_field('office_locations', 'option') ): ?>
<?php endif; // if( get_field('office_locations', 'option') ): ?>