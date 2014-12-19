<?php get_header(); ?>

	<div class="pagecontainer">
		<!--PAGE CONTENT -->
		<div class="lfloat" style="width:626px;margin:0px 46px 0px 31px;">
			<div id="splashFlash">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/images/splash_noFlash.jpg" alt="blinds and window treatment" width="626" height="346" border="0">
			</div>
			<br>

			<div style="margin:25px 0px 10px 26px;float:left;width:600px;">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<div style="width:600px;margin:10px 0px 0px 0px;">
					<?php the_content(); ?>
				</div>

				<?php endwhile; else: ?>
					<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
				<?php endif; ?>
			</div>
		</div>

		<div class="lfloat" style="width:264px;margin:0px 0px 0px 0px;">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/images/home_pix1.jpg" width="234" height="86" alt="window treatments with blinds">
			<div class="brownhead">
				<a href="http://www.hdwfg.com/site.aspx?d=6983aea3-ae2d-4096-8b07-1af419424e5c&m1=HunterDouglas&m2=DealerLocator&d1="
				   onclick="openThis(this.href,1024,768);return false;">Hunter Douglas Gallery</a>
			</div>
			Discover the latest trends in Window Fashions online and at our Gallery Showroom in Hopkins.
			<br>
			<br>

			<img src="<?php bloginfo('stylesheet_directory'); ?>/images/home_pix2.jpg" width="234" height="77" alt="window treatments with blinds hopkins">
			<div class="brownhead">
				<a href="http://www.shuttersnshades.com/" onclick="openThis(this.href,1024,768);return false;">Shutters N Shades</a>
			</div>
			Our sister company provides exterior shade solutions, motorization options and more...
			<br>
			<br>

			<a href="/misc/gallery.asp"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/residential_shutters.gif" width="234" height="81" alt="blinds and window treatment hopkins"></a>
			<div class="brownhead">
				<a href="/misc/gallery.asp">LBS Past Work Gallery</a>
			</div>
			See some interior and exterior shutters from past installations by Little Blind Spot.
			<br>
			<br>

			<div style="float: left; padding: 4px 8px 0px 0px;"><a href="/residential/residential.asp"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/residential_blinds3.jpg" width="81" height="81" alt="residential window treatments" /></a></div>


			<div style="float: left; width:150px;" class="brownhead">
				<a href="/residential/residential.asp">Residential Window Specialists</a>
			</div>
			Create the perfect, personalized scene with the help of our residential window covering experts.<br>
			<br>

		</div>


		<div style="margin:475px 0 0 265px;;text-align:right;position:absolute;">
			<a title="Click for the Business Review of Little Blind Spot, a Window Shades in Hopkins MN"
			   href="http://www.bbb.org/minnesota/business-reviews/window-shades/little-blind-spot-in-hopkins-mn-96011495#sealclick">
				<img alt="Little Blind Spot is a BBB Accredited Business. Click for the BBB Business Review of this Window Shades in Hopkins MN"
					 style="border:0;padding:0;margin:0 0 20px 0;" src="http://seal-minnesota.bbb.org/seals/blue-seal-200-42-littleblindspot-96011495.png" /></a>




			<script type="text/javascript" src="http://www.angieslist.com/webbadge/insertwebbadge.js?bid=513c0d4bc726ef97ca2b91a8bc366c2a"></script><script type="text/javascript">if (BADGEBOX) BADGEBOX.PlaceBadge();</script><noscript><div id="ssanslnk"><a href="http://www.angieslist.com/companylist/us/mn/hopkins/little-blind-spot-reviews-141377.aspx" title="Angie's List Super Service Award winner">TWIN CITIES window treatments</a></div></noscript>

		</div>

		<br clear="all">
		<br>

		<?php get_footer(); ?>


