<style>
.nut_facts_wrap {

}

.nut_facts_wrap ul {
	list-style-type: none;
}

.nut_facts_wrap ul li {
	display: block;
	padding: 5px 0px;
}

img.product_archive_modal_img {
	width: 60%;
	height: auto;
	margin: 50px auto 0px auto;
	display: block;
}
</style>

<div class="col-md-6">
	<?php the_post_thumbnail('post-thumbnail', array( 'class' => "product_archive_modal_img attachment-post-thumbnail")); ?>
</div><!-- .col-md-6 -->

<div class="col-md-6">

	<div class="col-md-12 nut_facts_wrap">
		<h4 class="nut_facts">
			Nutrition Facts
		</h4>
		<ul>
			<li>
				<strong>Serving size</strong> <em><?php the_field('serving_size'); ?></em>
				<span class="pull-right">
				<strong>Servings per container</strong> <em><?php the_field('servings_per_container'); ?></em>
				</span>
			</li>
		</ul>
		<ul>
			<li>
				
				<strong>Total Fat</strong>
				<em><?php the_field('total_fat_amount'); ?></em>
				<span class="badge green_bg pull-right"><?php the_field('total_fat_daily_value'); ?></span>
				<ul>
					<li>
						<strong>Saturated Fat</strong>
						<em><?php the_field('saturated_fat_amount'); ?></em>
						<span class="badge green_bg pull-right"><?php the_field('saturated_fat_daily_value'); ?></span>
					</li>
					<li>
						<strong>Trans Fat</strong>
						<em><?php the_field('trans_fat_amount'); ?></em>
						<span class="badge green_bg pull-right"><?php the_field('trans_fat_daily_value'); ?></span>
					</li>
					<li>
						<strong>Cholesterol</strong>
						<em><?php the_field('cholesterol_amount'); ?></em>
						<span class="badge green_bg pull-right"><?php the_field('cholesterol_daily_value'); ?></span>
					</li>
				</ul>
			</li>
		</ul>
		<ul>
			<li>
				<strong>Sodium</strong>
				<em><?php the_field('sodium_amount'); ?></em>
				<span class="badge green_bg pull-right"><?php the_field('sodium_daily_value'); ?></span>
			</li>
		</ul>
		<ul>
			<li>
				<strong>Total Carbohydrate</strong>
				<em><?php the_field('total_carbohydrate_amount'); ?></em>
				<span class="badge green_bg pull-right"><?php the_field('total_carbohydrate_daily_value'); ?></span>
				<ul>
					<li>
						<strong>Dietary Fiber</strong>
						<em><?php the_field('dietary_fiber_amount'); ?></em>
						<span class="badge green_bg pull-right"><?php the_field('dietary_fiber_daily_value'); ?></span>
					</li>
					<li>
						<strong>Sugars</strong>
						<em><?php the_field('sugars_amount'); ?></em>
					</li>
				</ul>
			</li>
		</ul>
		<ul>
			<li>
				<strong>Protein</strong>
				<em><?php the_field('protein_amount'); ?></em>
			</li>
		</ul>
		<div class="well">
			<span><strong>Vitamin A <?php the_field('vitamin_a_daily_value'); ?></strong></span> <span class="pull-right"><strong>Vitamin C <?php the_field('vitamin_c_daily_value'); ?></strong></span>
			<br />
			<span><strong>Calcium <?php the_field('calcium_daily_value'); ?></strong></span> <span class="pull-right"><strong>Iron <?php the_field('iron_daily_value'); ?></strong></span>
		</div>
		<small><em><?php the_field('diet_calories'); ?></em></small>
	</div><!-- .col-md-12 -->
	<div class="clear"></div>
</div><!-- .col-md-6 -->