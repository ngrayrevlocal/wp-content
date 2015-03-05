<?php if( have_rows('header_social_links', 'option') ): ?>
	<div class="header_social_wrap">
		<ul>
			<?php while ( have_rows('header_social_links', 'option') ) : the_row(); ?>
				<li>
					<a href="<?php the_sub_field('social_link'); ?>" target="_blank" style="background: <?php the_sub_field('icon_background_color'); ?>;">
						<i class="fa fa-<?php the_sub_field('icon'); ?>"></i>
					</a>
				</li>
			<?php endwhile; ?>
		</ul>
	</div><!-- .header_social_wrap -->
	<?php else : ?>
<?php endif; ?>