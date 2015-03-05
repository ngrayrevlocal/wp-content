<?php
/*
Template Name: Menu Page
*/
get_header(); ?>

<div class="container no-pad">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>


<style>
.test {
	display: none;
}

.cat_prod_wrap {
	text-align: center;
}

.cat_prod_wrap:hover {
	background: rgba(102, 153, 0, .3);
}

.cat_prod_wrap:hover .test {
	display: block;
}

img.cat_prod_img {
	display: block;
	width: 150px;
	height: 250px;
	margin-left: auto;
	margin-right: auto;
}

.size_toggle {
	text-align: center;
	background: #231F20;
	color: #fff;
	padding: 4px 0;
}
</style>

<div class="col-md-4 no_h_pad">

	<div class="cat_prod_wrap">


		<div class="col-md-6">
			<?php if( have_rows('juices') ): ?>
				<?php while ( have_rows('juices') ) : the_row(); ?>
					<img src="<?php the_sub_field('image'); ?>" class="cat_prod_img" />
				<?php endwhile; else : ?>
			<?php endif; ?>
		</div><!-- .col-md-6 -->

		<div class="col-md-6">
			<div class="test">
			<?php if( have_rows('juices') ): ?>
				<?php while ( have_rows('juices') ) : the_row(); ?>
					<?php the_sub_field('details'); ?>
				<?php endwhile; else : ?>
			<?php endif; ?>
			</div>
		</div><!-- .col-md-6 -->

		<div class="clear"></div><!-- .clear -->

		<div class="size_toggle">
			Pick a Size
		</div><!-- .col-md-6 -->


	</div><!-- .cat_prod_wrap -->


</div><!-- .col-md-4 -->



<div class="clear"></div><!-- .clear -->


		<?php endwhile; else: ?>
			<p>
				Sorry.  Nothing to see here.
			</p>
			<div class="clear"></div><!-- .clear -->
		<?php endif; ?>


<?php get_footer(); ?>