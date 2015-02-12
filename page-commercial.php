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
				<a href="/category/com-blinds/">Blinds</a>
				<a href="/category/com-shades/">Shades</a>
				<a href="/category/com-shutters/">Shutters</a>
				<a href="/category/com-fabric-solutions/">Fabric Solutions</a>
				<a href="/category/com-motorization-options/">Motorization Options</a>
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

	</div>

	<div class="lfloat" style="width:646px;margin:0px 0px 0px 40px;">
		<img src="<?php bloginfo('stylesheet_directory'); ?>/images/commercial_picture.jpg" width="646" height="246" alt="Residential Window Blinds">
		<br>
		<br>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
			<?php the_content(); ?>
			<div style="margin-left:80px;margin-bottom:2em;">
				<table border="0">
					<tr>
						<td><img src="<?php bloginfo('stylesheet_directory'); ?>/images/vendors/bali_logo_lg.gif" alt="custom vertical blinds mn"></td>
						<td><img src="<?php bloginfo('stylesheet_directory'); ?>/images/vendors/mecho_logo.gif" alt="custom vertical blinds" /></td>
					</tr>
					<tr>
						<td height="36"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/vendors/hd_contract.gif" alt="vertical blinds installation hopkins mn" /></td>
						<td><img src="<?php bloginfo('stylesheet_directory'); ?>/images/vendors/logo_SWFcontract_lg2.gif" alt="custom vertical blinds hopkins mn"></td>
					</tr>
				</table>
			</div>

		<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>

	</div>

<?php get_footer(); ?>


