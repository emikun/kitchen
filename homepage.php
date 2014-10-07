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
	<div class="border-top"></div>

	<?php if( get_field('hero_image') ): ?>
	<a href="http://www.elizayoungdesign.com/kitchen-n-things/event/cooking-with-basil/" title="Cooking with Basil"><img src="<?php the_field('hero_image');?>" class="hero";/></a>
      	<div class="border-bottom"></div>

  </div>
</div>
  	<?php endif; ?>
</section>

<section class="demo1">
<div class="grid">
      <div class="unit three-fifths">
        <!--<h3>Upcoming Events</h3>-->
        <h3><?php the_field('top_left_module_title'); ?></h3>
        <?php get_calendar(); ?>
      </div>
      <div class="unit two-fifths">
          <h3><?php the_field ('top_right_module_title'); ?></h3>
      </div>
    </div>
</section>


<section class="demo2">

	<div class="grid">
		<div class="unit one-third otherstuff">
			
			<h3><?php the_field ('middle_left_module_title'); ?></h3>
			<?php
global $post;
$args = array( 'posts_per_page' => 3 );
$myposts = get_posts( $args );
foreach( $myposts as $post ) :	setup_postdata($post); ?>
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a><br />
<?php endforeach; ?>
	
	</div>

		<div class="unit one-third moreotherstuff">
			<h3><?php the_field ('middle_middle_module_title'); ?></h3>
	</div>
		<div class="unit one-third moremoreotherstuff">

			<h3><?php the_field ('middle_right_module_title'); ?></h3>
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
