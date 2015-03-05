<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>
<div class="container">
	<div id="content" class="row">
		<div id="main" class="col-md-9" role="main">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="page-header">
				<h1 class="page-title" itemprop="headline">
					<?php the_title(); ?>
				</h1>
			</div><!-- .page-header -->
			<article class="post_wrap">
				<?php the_content(); ?>
			</article>
			<div class="row">
				<div class="col-md-12">
				<div class="col-md-8">
						<div id="contact-map" class="acf-map2">
							<?php get_template_part('block', 'contact-map'); ?>
						</div><!-- #contact-map -->

				</div><!-- .col-md-8 -->
					<div class="col-md-4">

					<?php get_template_part('block', 'contact-page-locations'); ?>

					</div><!-- .col-md-4 -->
					<hr>
				</div><!-- .col-md-12 -->
				<hr>
			</div><!-- .row -->
			<div class="row">
				<div class="col-md-12">
					<h2>
						How can we help you?
					</h2>
					<?php echo do_shortcode( '[gravityforms id=2 title=false]' ); ?>
				</div><!-- .col-md-12 -->
			</div><!--.row -->
			<?php endwhile; ?>
			<?php else : ?>
			<?php endif; ?>
		</div><!-- #main -->
		<div class="col-md-3">
			<?php get_template_part( 'sidebar', 'right'); ?>
			<?php get_template_part('sidebar', 'social-links'); ?>
		</div><!-- .col-md-3 -->
	</div><!-- #content -->
	
<?php get_footer(); ?>