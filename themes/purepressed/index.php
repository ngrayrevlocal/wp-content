<?php get_header(); ?>

<div class="container">

	<div class="col-md-9">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="media">
				<?php if ( has_post_thumbnail() ) : ?>
					<div class="media-left media-middle">
						<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
							<?php the_post_thumbnail('post-thumbnail', array( 'class' => "featured_image_blog attachment-post-thumbnail")); ?>
						</a>
					</div><!-- .media-left -->
				<?php endif; ?>
				<div class="media-body">
					<h4 class="media-heading">
						<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
							<?php the_title(); ?>
						</a>
					</h4>
					<div class="entry">
						<?php the_excerpt(); ?>
					</div><!-- .entry -->

					<p class="postmetadata">
						<small>
							<?php _e( 'Posted in' ); ?> <?php the_category( ', ' ); ?>
						</small>
					</p>
				</div><!-- .media-body -->
			</div><!-- .media -->
		<?php endwhile; else : ?>
			<p>
				<small>
					<?php _e( 'Sorry, nothing to see here.' ); ?>
				</small>
			</p>
		<?php endif; ?>
	</div><!-- .col-md-9 -->

	<div class="col-md-3">
		<?php get_template_part( 'sidebar', 'right'); ?>
	</div><!-- .col-md-3 -->

</div><!-- .container -->

<?php get_footer(); ?>