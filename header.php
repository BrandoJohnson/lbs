<?php
/*
Theme Name: Little Blind Spot
Theme URI: http://www.brandojohnson.com
Description: A theme built by Brandon Johnson
Author: Brandon Johnson
Author URI: http://www.brandojohnson.com
Version: 1.0
Tags: responsive, white, bootstrap

License: Attribution-ShareAlike 3.0 Unported (CC BY-SA 3.0)
License URI: http://creativecommons.org/licenses/by-sa/3.0/
*/

?>

<!DOCTYPE html>

<html>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <meta name="DESCRIPTION" content="<?php bloginfo('description'); ?>">
    <!-- Styles -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

    <script type="text/javascript" src="js/RAA_FlashWriter.js"></script>
    <script type="text/vbscript" src="js/RAA_FlashWriter.vbs"></script>
    <script type="text/javascript" src="js/swfobject.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>


    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>

</head>


<body <?php body_class(); ?>>

<div class="maincontainer">
    <div class="toptabbar">
        <div class="toptabs">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/toptabs.gif" width="526" height="28" alt="custom vertical blinds mn" usemap="#toptabs">
            <br>
        </div>

        <div class="topphone">
            Phone: 952-935-4353
            <br clear="all">
        </div>
    </div>

    <map name="toptabs">
        <area coords="2,2,151,28" alt="Little Blind Spot" title="Little Blind Spot" href="/">
        <area coords="167,-1,319,28" alt="Shutters N shades" title="Shutters N shades" href="http://www.shuttersnshades.com/"
              onclick="openThis(this.href,1024,768);return false;">
        <area coords="335,0,521,35" alt="US Automated Shade" title="US Automated Shade" href="http://shop.usautomated.com"
              onclick="openThis(this.href,1024,768);return false;">
    </map>

    <div class="toppagebar">
        <div class="toppagelogo">
            <a title="Little Blind Spot" href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/littleblindspotlogo.jpg" width="325" height="111" alt="custom vertical blinds"></a><br>
        </div>

        <div class="toppageright">
            <div class="topnavbox">
                <div class="inline">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'header-menu',
                        'container' => '',
                    ));
                    ?>
                </div>
            </div>
        </div>
    </div>

