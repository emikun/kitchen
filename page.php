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
			<div class="row" id="normal-page">
			<h3 class="text-center headline-text" style="font-size:3em;"><?php the_title();?></h3>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>
			</div>
	</div><!-- #primary -->

<?php get_footer(); ?>
