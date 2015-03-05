		<?php if ( 'on' == et_get_option( 'divi_back_to_top', 'false' ) ) : ?>

			<span class="et_pb_scroll_top et-pb-icon"></span>

		<?php endif;
			if ( ! is_page_template( 'page-template-blank.php' ) ) : ?>
				<footer>
					<div class="container">
						<?php get_template_part('block', 'footer-widgets'); ?>
					</div><!-- .container -->
					<div class="clear"></div><!-- .clear -->
					<div class="container">
						<hr>
						&copy; <?php echo date('Y');?> <?php echo get_bloginfo ( 'name' );  ?>. All Rights Reserved. Webdesign and Hosting by <a href="http://revlocal.com" title="You're in the right place.">Revlocal</a>. <a href="http://revlocal.com/privacy/">Privacy Policy</a> | <a href="/sitemap/">Sitemap</a>
					</div><!-- .container -->
				</footer>
			</div><!-- #et-main-area -->
			<?php endif; // ! is_page_template( 'page-template-blank.php' ) ?>
		</div><!-- #page-container -->
		<?php wp_footer(); ?>
	</body>
</html>