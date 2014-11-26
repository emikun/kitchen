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

<div class="row products-page">
		
		<div class="row">
		<h3 class="text-center headline-text" style="font-size:3em;">Staff Picks</h3>
		<?php dynamic_sidebar('staffpicks_widget'); ?></div>
		<h3 class="text-center headline-text" style="font-size:3em;">New Items</h3>
		<div class="row"><?php dynamic_sidebar('newitems_widget'); ?></div>
</div>

<?php get_footer(); ?>
