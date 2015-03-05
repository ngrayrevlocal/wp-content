<?php if( have_rows('footer_widgets', 'option') ):
	while ( have_rows('footer_widgets', 'option') ) : the_row(); ?>
		<div class="col-md-3">
			<div class="spacer">
				<?php the_sub_field('footer_widget_content_left'); ?>
			</div><!-- .spacer -->
		</div><!-- .col-md-3 -->

		<div class="col-md-6">
			<div class="spacer">
				<?php the_sub_field('footer_widget_content_center'); ?>
			</div><!-- .spacer -->
		</div><!-- .col-md-6 -->

		<div class="col-md-3">
			<div class="spacer">
				<?php the_sub_field('footer_widget_content_right'); ?>
			</div><!-- .spacer -->
		</div><!-- .col-md-3 -->
	<?php endwhile;
	else : ?>
		<div class="clear"></div><!-- .clear -->
<?php endif; ?>