<?php get_header(); ?>






<div class="container">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="entry">
			<?php the_content(); ?>
		</div><!-- .entry -->
		<?php endwhile; else : ?>
		<p><?php _e( 'Sorry, nothing to see here.' ); ?></p>
	<?php endif; ?>

	<?php if( have_rows('full_width_boxes') ): ?>
		<?php while ( have_rows('full_width_boxes') ) : the_row(); ?>
			<div class="box_wrap">
				<a href="<?php the_sub_field('box_link'); ?>" class="box_link">
					<div class="box_label">
						<p>
							<?php the_sub_field('box_label'); ?>
							<i class="fa fa-long-arrow-right pull-right"></i>
						</p>
					</div><!-- .box_label -->
					<div class="col-md-6">
						<img src="<?php the_sub_field('box_image'); ?>" class="img-responsive" />
					</div><!-- .col-md-6 -->
					<div class="col-md-6 box_content">
						<?php the_sub_field('box_content'); ?>
					</div><!-- .col-md-6 -->
				</a>
				<div class="clear"></div><!-- .clear -->
			</div><!-- .box_wrap -->
			<div class="clear"></div><!-- .clear -->
		<?php endwhile; ?>
		<?php else : ?>
	<?php endif; ?>






<?php if( have_rows('half_width_boxes') ): ?>
	<?php while ( have_rows('half_width_boxes') ) : the_row(); ?>
		<div class="col-md-6">
			<div class="box_wrap">
				<a href="<?php the_sub_field('box_link'); ?>" class="box_link">
					<div class="box_label">
						<p>
							<?php the_sub_field('box_label'); ?>
							<i class="fa fa-long-arrow-right pull-right"></i>
						</p>
					</div><!-- .box_label -->
					<div class="">
						<img src="<?php the_sub_field('box_image'); ?>" class="img-responsive" />
					</div><!-- .col-md-6 -->
					<div class=" box_content">
						<?php the_sub_field('box_content'); ?>
					</div><!-- .col-md-6 -->
				</a>
				<div class="clear"></div><!-- .clear -->
			</div><!-- .box_wrap -->
		</div><!-- .col-md-6 -->
	<?php endwhile; ?>
	<?php else : ?>
<?php endif; ?>







</div><!-- .container -->










<?php get_footer(); ?>