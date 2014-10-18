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
	<div class="hero-section">
		<?php if( get_field('hero_image') ): ?>
				<img src="<?php the_field('hero_image');?>" class="hero" alt="<?php the_field('hero_image_title');?>">
				<h2 class="hero-title"><?php the_field('hero_title');?></h2>
				<p class="hero-subtitle"><?php the_field('hero_subtitle');?> </p>
				<a class="hero-link" href="<?php the_field('hero_link'); ?>" title="<?php the_field('hero_title');?>"> Read More &raquo;</a>
	    <?php endif; ?>
    </div>
    <div class="border-bottom"></div>
</div><!-- End Hero Unit -->

<div class="row">
	<div class="col-md-12">
		<p class="lead text-center">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
			<?php endwhile; // end of the loop. ?>
		</p>
	</div>
</div>

<div class="row">
	<!-- Upcoming Events -->
	<div class="col-md-12">
		<div class="content-area">
		<?php dynamic_sidebar('events_widget'); ?>
		</div>
	</div>
</div>
<div class="row">
	<h1 class="text-center headline-text">In Our Store</h1>
	<!-- New to the Store -->
	<div class="col-sm-6">
		<div class="content-area module-area product-area">
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
	<div class="col-sm-6">
			<div class="content-area module-area product-area">
				<h1> Staff Pick </h1>
				<?php if( get_field('featured_product_image') ): ?>
					<img src="<?php the_field('featured_product_image'); ?>" />
				<?php endif; ?>
				<div class="pull-right product-content">
				  	<?php dynamic_sidebar('featured_widget'); ?>
				</div>
	  		</div>
	</div>
</div><!-- end grid -->

<div class="row">
	<h1 class="text-center headline-text">In The Kitchen with Kitchen N Things</h1>
	<!-- Newest Recipe -->
	<div class="col-md-4 col-sm-4">
		<div class="row content-area kitchen-home-latest">
			<h3>Newest Recipe</h3>
			<img src="<?php bloginfo('template_url'); ?>/img/zucchini.jpg" alt="Zucchini"class="recipe-image">
			<?php dynamic_sidebar('recipes_widget'); ?>
		</div>
	</div>
	<!-- 101 Series -->
	<div class="col-md-4 col-sm-4">
		<div class="row content-area kitchen-home-latest">
			<h3>101 Series</h3>
			<img src="<?php bloginfo('template_url'); ?>/img/salmon.jpg" alt="Salmon" class="recipe-image">
			<?php dynamic_sidebar('101_widget'); ?>
		</div>
	</div>
	<!-- Featured Chef Recipe -->
	<div class="col-md-4 col-sm-4">
		<div class="row content-area kitchen-home-latest">
			<h3>La Vita</h3>
			<img src="<?php bloginfo('template_url'); ?>/img/julep.jpg" alt="Julep"class="recipe-image">
			<?php dynamic_sidebar('vita_widget'); ?>
		</div>
	</div>
</div>



</main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>
