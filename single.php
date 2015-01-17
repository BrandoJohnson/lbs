<?php get_header(); ?>


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
        <br>
        <br>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <?php
            $args = array(
                'post_type' => 'attachment',
                'numberposts' => -1,
                'post_status' => 'any',
                'post_parent' => $post->ID
            );

            $attachments = get_posts($args);
            if ($attachments) : ?>

                <ul class="portfolio-image-list">
                    <?php foreach($attachments as $attachment): ?>
                        <li class="box">
                            <figure>

                                <?php the_post_thumbnail(mycustomsize); ?>
                            </figure>
                        </li>

                        <h2><?php the_title(); ?></h2>

                        <?php
                        $portfolio_description = esc_html(get_post_meta($post->ID, 'portfolio_description', true));
                        $portfolio_link = esc_url(get_post_meta($post->ID, 'portfolio_link', true));
                        ?>

                        <?php
                        if ($portfolio_description != '') {
                            echo "<p>$portfolio_description</p>";
                        }
                        if ($portfolio_link != '') {
                            echo '<p><a href="'.$portfolio_link.'">'.$portfolio_link.'</a></p>';
                        } ?>

                        <hr class="alt" />

                        <?php if ($portfolio_quote != '') : ?>

                            <hr class="alt"/>
                        <?php endif; ?>



                    <?php endforeach; ?>
                </ul>
            <?php else : ?>
                <div class="box section-content align-center">
                    <p>No images found for this post.</p>
                </div>
            <?php endif; ?>

        <?php endwhile; else: ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>

    </div>

    <?php get_footer(); ?>


