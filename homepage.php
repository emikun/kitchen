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
	<!-- Featured Product -->
	<div class="col-md-5">
		<div class="green-background content-area">
			  			<?php dynamic_sidebar('featured_widget'); ?>
			  			  		<h3>1</h3>
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
	
	<!-- Other Title-->
	<div class="col-md-4">
		<div class="orange-background content-area">
			<?php dynamic_sidebar('new_product_widget'); ?>
			<h3><font color= "#FBC468">1</font></h3>
	</div>
</div>
	<div class="col-md-4">
		<div class="tan-background content-area">
			<?php dynamic_sidebar('101_widget'); ?>
		</div>
	</div>
</div><!-- end grid --></div>

</main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>
