<?php

/*
Template Name: Services
*/

get_header(); ?>


<div class="pagecontainer">

	<div class="lfloat" style="width:580px;margin:0px 0px 0px 100px;">
		<div style="margin:0px 0px 0px 0px;">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<?php the_content(); ?>

			<?php endwhile; else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
			<br/>
		</div>
	</div>

	<div class="lfloat" style="width:218px;margin:0px 0px 0px 40px;">
		<img src="<?php bloginfo('stylesheet_directory'); ?>/images/boxrighttop2.jpg" width="218" height="106" alt="vertical blinds installation mn" /><br />
		<div class="boxright">
			<div style="margin:0px 10px 10px 22px;">
				1. Call for a <a href="/free-in-home-consultation/"><strong>FREE In-Home Consultation</strong></a>. We bring the samples and do the measuring for you.
				<br /><br />
				2. Stop by one of our <a href="/locations/"><strong>Designer Showrooms</strong></a> to see what's new and to experience firsthand the various operating systems available on each window covering product.
				<br /><br />
				3. Take advantage of our <a href="/services/"><strong>in-house professional installers</strong></a> who can install your new blinds for you.
				<br /><br /><br /><br />
			</div>
		</div>
	</div>


	<?php get_footer(); ?>


