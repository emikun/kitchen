<?php

/**
Template Name: Products
*/
?>


<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package kitchen
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="grid">
				<div class="unit two-thirds staffpicks">
					<h3>Staff Picks</h3>
				</div>
			</div>

			<section class="demo2">

	<div class="grid">
		<div class="unit one-third staffpicks">

<?php 

$image = get_field('staff_pick_one');

if( !empty($image) ): ?>

	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>
	</div>

		<div class="unit one-third staffpicks">

<?php 

$image = get_field('staff_pick_two');

if( !empty($image) ): ?>

	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>
	</div>


<?php 

$image = get_field('staff_pick_three');

if( !empty($image) ): ?>

	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>
	</div>

		
	</div>
</section>


			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>


			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
