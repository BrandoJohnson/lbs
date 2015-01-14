<?php

/*
Template Name: Residential
*/

get_header(); ?>




<div class="pagecontainer">
	<!--PAGE CONTENT -->

	<div class="leftsidebox">
		<div class="leftnavbox">
			<div style="margin:20px 0px 0px 0px;">
				<a href="/residential/res-blinds.asp">Blinds</a>
				<a href="/residential/res-shades.asp">Shades</a>
				<a href="/residential/res-shutters.asp">Shutters</a>
				<a href="/misc/fabrics.asp">Fabric Solutions</a>
				<a href="/misc/motorization.asp">Motorization Options</a>
			</div>
		</div>

		<div class="leftcontentbox_nav">
			<div class="grayhead" style="margin-top:20px;text-align:center;">
				&nbsp;
			</div>

			<div style="margin:60px 20px 0px 20px;" align="center" class="georgia">
				<i><strong>Call us at 952-935-4353</strong></i><br/>
				<br/><a href="#" class="btn btn-success btn-medium"><i class="icon-white icon-heart"></i> Set Up Appointment</a>
			</div>
		</div>

		<div class="grayhead" style="margin:0;height:132px;width:217px;">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/images/testimonial_res.gif" alt="Testimonial">
			<br>
			<br>
			<img src="<?php bloginfo('stylesheet_directory'); ?>/images/testim_2_res.gif" alt="Testimonial">
		</div>
	</div>

	<div class="lfloat" style="width:646px;margin:0px 0px 0px 40px;">
		<img src="<?php bloginfo('stylesheet_directory'); ?>/images/res_picture.jpg" width="646" height="246" alt="Residential Window Blinds">
		<br>
		<br>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<h1><?php the_title(); ?></h1>
			<?php the_excerpt(); ?>
			<?php the_post_thumbnail(); ?>

		<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>




	</div>

<?php get_footer(); ?>


