		<div class="clear"></div><!-- .clear -->
		</div>
		</div><!-- .container .no_pad -->
		<?php get_template_part('block', 'footer-subscribe'); ?>
		<footer id="footer">
			<div class="container">
				<?php if( have_rows('footer_widgets', 'option') ):
					while ( have_rows('footer_widgets', 'option') ) : the_row(); ?>
						<div class="col-md-3">
							<div class="footer_widget">
								<div class="footer_widget_wrap">
									<p class="widget_title">
										<?php the_sub_field('widget_title'); ?>
									</p>
									<div class="widget_content">
										<?php the_sub_field('footer_widget'); ?>
									</div><!-- .widget_content -->
								</div><!-- .footer_widget_wrap -->
							</div><!-- .footer_widget -->
						</div><!-- .col-md-3 -->
						<div class="footer_line"></div>
					<?php endwhile;	?>
					<?php else : ?>
				<?php endif; ?>
			</div><!-- .container -->
		</footer>
		<div class="container">
			<p class="footer_legal">
				&copy; <?php echo date('Y'); ?> <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>. All Rights Reserved. Webdesign and Hosting by <a href="http://revlocal.com" title="You're in the right place.">Revlocal</a>. <a href="http://revlocal.com/privacy/">Privacy Policy</a> | <a href="/sitemap/">Sitemap</a>
			</p>
		</div><!-- .container -->
		<?php wp_footer(); ?>
		<?php if( have_rows('footer_scripts', 'option') ): ?>
			<?php while ( have_rows('footer_scripts', 'option') ) : the_row(); ?>
				<?php the_sub_field('script'); ?>
			<?php endwhile; ?>
			<?php else : ?>
		<?php endif; ?>
	</body>
</html>