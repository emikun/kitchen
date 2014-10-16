<?php

/*
** Template Name: Home
*/
?>

<?php get_header(); ?>

<div id="primary" class="content-area">

<main id="main" class="site-main" role="main">


<!-- Hero Unit -->
<div class="hero-unit">
	<div class="border-top"></div>
	<?php if( get_field('hero_image') ): ?>
		<a href="http://www.elizayoungdesign.com/kitchen-n-things/event/cooking-with-basil/" title="Cooking with Basil"><img src="<?php the_field('hero_image');?>" class="hero" alt="<?php the_field('hero_image_title');?>"></a>
    <?php endif; ?>
    <div class="border-bottom"></div>
</div><!-- End Hero Unit -->

<div class="row">
	<div class="col-md-8 center-block">

	</div>
</div><!-- end grid -->

<div class="row">
	<!-- Upcoming Events -->
	<div class="col-md-7">
		<div class="red-background content-area">
		<?php dynamic_sidebar('events_widget'); ?>
		</div>
	</div>
	<!-- 101 Series -->

	<div class="col-md-5">
		<div class="tan-background content-area">
			<?php dynamic_sidebar('101_widget'); ?>
		</div>
	</div>
</div><!-- end grid -->

<div class="row">
	<!-- Newest Recipe -->
	<div class="col-md-4">
		<div class="cream-background content-area">
					<?php dynamic_sidebar('recipes_widget'); ?>

	</div>
</div>
	
	<!-- New to the Store-->
	<div class="col-md-4">
		<div class="orange-background content-area">
			<h1>New to the Store</h1>
			<?php if( get_field('new_items_image') ): ?>

	<img src="<?php the_field('new_items_image'); ?>" />

<?php endif; ?>
			<?php dynamic_sidebar('new_product_widget'); ?>
			<h3><font color= "#FBC468">1</font></h3>
	</div>
</div>
<!--Staff Picks-->
<div class="col-md-4">
		<div class="green-background content-area">
			<h1> Staff Pick </h1>
			<?php if( get_field('featured_product_image') ): ?>

	<img src="<?php the_field('featured_product_image'); ?>" />

<?php endif; ?>
						<div class="creature_feature">
			  			<?php dynamic_sidebar('featured_widget'); ?>
			  		</div>
			  			  		<h3>1</h3>
  		</div>
	</div>
</div><!-- end grid --></div>

<div class="row">
	<!-- Upcoming Events -->
	<div class="col-md-7">
		<div class="red-background content-area">
		</div>
	</div>
	<!-- Featured Product -->
	<div class="col-md-5">
		<div class="green-background content-area">
			  			  		<h3>1</h3>
  		</div>
	</div>
</div><!-- end grid -->

</main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>
