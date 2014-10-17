<?php

/*
** Template Name: Home
*/
?>

<?php get_header(); ?>

<div>

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
		<p class="lead text-center">Kitchen N Things is Ballard's best spot for Kitchen Things. </p>
	</div>
</div>

<div class="row home-hero-margin">
	<!-- Upcoming Events -->
	<div class="col-md-12">
		<div class="red-background content-area">
		<?php dynamic_sidebar('events_widget'); ?>
		</div>
	</div>
</div>
<div class="row">
	<h1 class="text-center headline-text">In Our Store</h1>
	<!-- New to the Store -->
	<div class="col-md-6">
		<div class="yellow-background content-area module-area">
				<h1>New Products</h1>
				<?php if( get_field('new_items_image') ): ?>
					<img src="<?php the_field('new_items_image'); ?>" class="home-image" />
				<?php endif; ?>
				<div class="pull-right product-content">
					<?php dynamic_sidebar('new_product_widget'); ?>
				</div>
		</div>
	</div>
	<!--Staff Picks-->
	<div class="col-md-6">
			<div class="green-background content-area module-area">
				<h1> Staff Pick </h1>
				<?php if( get_field('featured_product_image') ): ?>
					<img src="<?php the_field('featured_product_image'); ?>" />
				<?php endif; ?>
				<div class="pull-right product-content">
				  	<?php dynamic_sidebar('featured_widget'); ?>
				</div>
				<h3>1</h3>
	  		</div>
	</div>
</div><!-- end grid -->

<div class="row">
	<h1 class="text-center headline-text">In The Kitchen with Kitchen N Things</h1>
	<!-- Newest Recipe -->
	<div class="col-md-4">
		<div class="tan-background content-area">
			<?php dynamic_sidebar('recipes_widget'); ?>
		</div>
	</div>
	<!-- 101 Series -->
	<div class="col-md-4">
		<div class="tan-background content-area">
			<?php dynamic_sidebar('101_widget'); ?>
		</div>
	</div>
	<!-- Featured Chef Recipe -->
	<div class="col-md-4">
		<div class="tan-background content-area">
			<?php dynamic_sidebar('101_widget'); ?>
		</div>
	</div>
</div>



</main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>
