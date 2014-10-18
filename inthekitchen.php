<?php

/**
Template Name: In the Kitchen Page
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

<div class="row">
	<div class="inthekitchen_content col-md-8">
		<?php dynamic_sidebar('blog_widget'); ?>
	</div>
	<div class="col-md-4">
		<?php get_sidebar(); ?>
	</div>
</div>


<?php get_footer(); ?>
