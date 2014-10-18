<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package kitchen
 */
?>

	</div><!-- #content -->

<footer id="colophon" class="site-footer footer" role="contentinfo">
	<div class="row footer-row">
		<div class="col-md-4 footer-col">
			<h3>Hours of Operation</h3>
			<table>
				<tbody>
					<tr>
						<td>Sunday</td>
						<td>11AM – 5PM</td>
					</tr>
					<tr>
						<td>Monday</td>
						<td>10AM – 6PM</td>
					</tr>
					<tr>
						<td>Tuesday</td>
						<td>10AM – 6PM</td>
					</tr>
					<tr>
						<td>Wednesday</td>
						<td>10AM – 6PM</td>
					</tr>
					<tr>
						<td>Thursday</td>
						<td>10AM – 6PM</td>
					</tr>
					<tr>
						<td>Friday</td>
						<td>10AM – 6PM</td>
					</tr>
					<tr>
						<td>Saturday</td>
						<td>10AM – 6PM</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="col-md-2 footer-col">
			<h3>Location</h3>
			<address>
				<strong>Kitchen N Things</strong><br>
				2322 NW Market Street<br>
				Seattle, WA 98107<br>
				Phone: <a href="tel:206-784-8717">206-784-8717</a><br>
				Fax: <a href="tel:206-319-4449">206-319-4449</a><br>
			</address>

		</div>
		<div class="col-md-6 footer-col">
			<h3>Stay In Touch</h3>
			<p>Want to learn more about Kitchen N Things' new products, events, and sales? Sign up for our email newsletter for monthly updates and exclusive recipes delivered fresh to your inbox.*</p>
			<form>
				<input type="text" placeholder="Email address">
				<input type="submit" value="Sign me up!">
			</form>
			<p class="disclaimer-text">*We hate spam as much as you do, so your email stays safe with us.</p>
		</div>
	</div>
<div class="row footer-row content-center colophon">
	<div class="pull-left">
		<p class="copyright">&copy;  <?php echo get_bloginfo('name') . ' ' . date('Y') ?></p>
	</div>
	<div class="pull-right">
		<!-- Pinterest -->	
		<a href="<?php the_field('pinterest');?>">
			<span class="fa-stack fa-lg">
  				<i class="fa fa-circle fa-stack-2x"></i>
  				<i class="fa fa-pinterest fa-stack-1x fa-inverse"></i>
			</span>
		</a>
		<!-- Facebook -->	
		<a href="<?php the_field('facebook');?>" class="blue-text">
			<span class="fa-stack fa-lg">
  				<i class="fa fa-circle fa-stack-2x"></i>
  				<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
			</span>
		</a>
		<!-- Twitter -->	
		<a href="<?php the_field('twitter');?>">
			<span class="fa-stack fa-lg">
  				<i class="fa fa-circle fa-stack-2x"></i>
  				<i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
			</span>
		</a>
		<!-- YouTube -->	
		<a href="<?php $youtube = get_field('youtube', contact); echo $youtube;?>">
			<span class="fa-stack fa-lg">
  				<i class="fa fa-circle fa-stack-2x"></i>
  				<i class="fa fa-youtube fa-stack-1x fa-inverse"></i>
			</span>
		</a>
	</div>
</div>
</footer>		

</div><!-- #page -->

<script>
	$(function() {
    	$('.footer-col, .kitchen-home-latest, .category-staffpicks, .category-newitems').matchHeight();
	});
</script>
<?php wp_footer(); ?>

</body>
</html>
