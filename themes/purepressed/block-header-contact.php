<div class="col-md-6 address_phone">
	<?php 
	// Header Addresses
	?>
	<?php if( have_rows('primary_address', 'option') ): ?>
			<?php while ( have_rows('primary_address', 'option') ) : the_row(); ?>
				<div class="header_address">
					<a href="<?php echo the_sub_field( 'google_maps_link' ); ?>" class="header_address" target="_blank">
						<?php the_sub_field( 'street' ); ?>, <?php the_sub_field( 'city' ); ?>, <?php the_sub_field( 'state' ); ?> <?php the_sub_field( 'zip' ); ?>
					</a>
				</div><!-- .header_address -->
			<?php endwhile;
			else : ?>
				<div class="header_address">
					<a href="/wp-admin/admin.php?page=revlocal-settings&message=1" target="_blank" class="header_address">
						Add an Address
					</a>
				</div><!-- .header_address -->
			<?php endif; ?>

	<?php 
	// Header Phone Numbers
	?>
	<?php if( have_rows('primary_numbers', 'option') ):
		while ( have_rows('primary_numbers', 'option') ) : the_row(); ?>
			<a href="tel:<?php echo the_sub_field( 'primary_number' ); ?>" class="phone">
				<i class="fa fa-phone"></i> <?php the_sub_field( 'number_label' ); ?> <?php the_sub_field( 'primary_number' ); ?>
			</a>
			<br />
		<?php endwhile;
		else : ?>
			<a href="/wp-admin/admin.php?page=revlocal-settings&message=1" class="phone" target="_blank">
				<i class="fa fa-phone"></i> Add a Contact Number
			</a>
	<?php endif; ?>
</div><!-- .col-md-6 -->