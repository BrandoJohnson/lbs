<?php

/*
Template Name: Commercial
*/

get_header(); ?>




<div class="pagecontainer">
	<!--PAGE CONTENT -->

	<div class="leftsidebox">
		<div class="leftnavbox">
			<div style="margin:20px 0px 0px 0px;">
				<a href="#">Blinds</a>
				<a href="#">Shades</a>
				<a href="#">Shutters</a>
				<a href="#">Fabric Solutions</a>
				<a href="#">Motorization Options</a>
			</div>
		</div>

		<div class="leftcontentbox_nav">
			<div class="grayhead" style="margin-top:20px;text-align:center;">
				&nbsp;
			</div>

			<div style="margin:60px 20px 0px 20px;" align="center" class="georgia">
				<i><strong>Call us at 952-935-4353</strong></i>
				<a href="#">click to set up an appointment</a>.
				<a href="#" class="btn btn-success btn-large"><i class="icon-white icon-heart"></i> Bootstrap Button Generator</a>
			</div>
		</div>

	</div>

	<div class="lfloat" style="width:646px;margin:0px 0px 0px 40px;">
		<img src="<?php bloginfo('stylesheet_directory'); ?>/images/commercial_picture.jpg" width="646" height="246" alt="Residential Window Blinds">
		<br>
		<br>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
			<?php the_content(); ?>

		<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>

	</div>

<?php get_footer(); ?>


