<?php

/**
Template Name: Contact Page
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

			<section class="events">
<div class="grid">
      <div class="unit three-quarters">
        <h3>Contact Us</h3>
        
      </div>
 </div>
</section>

<div class="grid">
	<div class="unit three-quarters">
		<h3><?php the_field('hoursofoperation_text'); ?></h3>
	</div>
</div>


</div>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>


			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
