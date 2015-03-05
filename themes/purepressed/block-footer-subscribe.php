<style>
.footer_quote {
	font-size: 24px;
	padding: 50px 55px;
	position: relative;
}
em.before {
	left: 23px;
	position: absolute;
	top: 77px;
	font-family: times new roman;
	font-size: 48px;
	font-style: normal;
	font-weight: bold;
	line-height: 0;
}

span.byline {
	display: block;
	font-size: 14px;
	margin-top: 15px;
	text-transform: uppercase;
}
</style>

<div class="top_footer">
	<div class="container">

	<div class="col-md-3 footer_subscribe">
		<h5 class="subscribe_head">
			<?php if( get_field('footer_newsletter_title', 'option') ) { ?>
				<?php the_field('footer_newsletter_title', 'option'); ?>
			<?php } else { ?>
				Newsletter
			<?php } ?>
		</h5>
		<p class="subscribe_subhead">
			<?php if( get_field('footer_newsletter_text', 'option') ) { ?>
				<?php the_field('footer_newsletter_text', 'option'); ?>
			<?php } else { ?>
				Signup to get the latest info on news, events, and special offers.
			<?php } ?>
		</p>
		<?php echo do_shortcode( '[gravityform id="1" title="false" description="false"]' ); ?>
	</div><!-- .col-md-3 -->

	<div class="col-md-9">

		<div class="footer_quote">
			<p>
				<em class="before">“</em>
				<?php if( get_field('footer_testimonial', 'option') ) { ?>
					<?php the_field('footer_testimonial', 'option'); ?> 
				<?php } else { ?>
					<a href="/wp-admin/admin.php?page=revlocal-settings" target="_blank" style="color: #000;">
						This area if for customer testimonials.  You can add one by clicking here.
					</a>
				<?php } ?>
				<span class="byline">
					<?php if( get_field('footer_testimonial_source', 'option') ) { ?>
						- <?php the_field('footer_testimonial_source', 'option'); ?> 
					<?php } else { ?>
						- <a href="/wp-admin/admin.php?page=revlocal-settings" target="_blank" style="color: #000;">
							Add a Source
						</a>
					<?php } ?>
				</span>
			</p>
		</div><!-- .footer_quote -->

	</div><!-- .col-md-9 -->



	</div><!-- .container -->
</div><!-- .top_footer -->