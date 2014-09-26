<?php

/**
Template Name: Home
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

<section class="demo">
  <div class="grid">
    <div class="whole">
    	<h3>Learn how to cook with basil</h3>
    	<p>Kitchen N Things and Seattle restauranteur Tom Douglas' favorite summer recipes. Test!</p>
    	<p>Emilie's test</p>
  </div>
</div>
</section>

<section class="demo1">
<div class="grid">
      <div class="unit three-fifths">
        <h3>Upcoming Events</h3>
      </div>
      <div class="unit two-fifths">
          <h3>New Products</h3>
      </div>
    </div>
</section>


<section class="demo2">

	<div class="grid">
		<div class="unit one-third">
			<div class="otherstuff">
			
			<h3>Other Stuff</h3>
		</div>
	</div>

		<div class="unit one-third">
			<div class="moreotherstuff">
			<h3>More other stuff</h3>
		</div>
	</div>
		<div class="unit one-third">
		<div class="moremoreotherstuff">

			<h3>More more other stuff</h3>
		</div>
	</div>
	</div>
</section>

</div>



			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>


			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
