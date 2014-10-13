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

<?php dynamic_sidebar('staffpicks_widget'); ?>

<?php dynamic_sidebar('newitems_widget'); ?>

<?php get_footer(); ?>
