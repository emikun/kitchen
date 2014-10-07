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
			<h3>Events</h3>
			<?php get_calendar(); ?>
		</div>
	</div>
	<!-- Featured Product -->
	<div class="col-md-5">
		<div class="green-background content-area">
  			<h3>Featured Product</h3>
  		</div>
	</div>
</div><!-- end grid -->

<div class="row">
	<!-- Newest Recipe -->
	<div class="col-md-4">
		<h3>Newest Recipe</h3>
		<?php
			global $post;
			$args = array( 'posts_per_page' => 3 );
			$myposts = get_posts( $args );
			foreach( $myposts as $post ) :	
				setup_postdata($post); ?>
			<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a><br />
		<?php endforeach; ?>
	</div>
	
	<!-- Other Title-->
	<div class="col-md-4">
			<h3>Title</h3>
	</div>
	<div class="col-md-4">
			<h3>Title</h3>
	</div>
</div><!-- end grid --></div>

</main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>
