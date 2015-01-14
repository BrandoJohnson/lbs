<?php

function wpbootstrap_scripts_with_jquery()
{
    // Register the script like this for a theme:
    wp_register_script( 'custom-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array( 'jquery' ) );
    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );



function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ),
            'footer-menu' => __( 'Footer Menu' )
        )
    );
}
add_action( 'init', 'register_my_menus' );


add_action('wp_enqueue_styles', 'my_styles');
function my_styles(){
    wp_enqueue_style('twitter', 'css/bootstrap.css');
    wp_enqueue_style('theme-css', get_stylesheet_uri(), 'twitter');
}

/*****************************************/
/* Add theme support for post thumbnails */
/*****************************************/

if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(646, 246);
}


/**************************************************/
/*  Add Meta Boxes to the Posts */
/**************************************************/

add_action('add_meta_boxes', 'custom_add_meta_box');

function custom_add_meta_box() {
    add_meta_box(
        'portfolio_details',  // ID
        'portfolio_entry_details', // Title
        'custom_display_meta_box', // Callback
        'post',                    // Targeted Post Type
        'normal'                   // Position
    );
}

function custom_display_meta_box($post) {
    $portfolio_description = get_post_meta($post->ID, 'portfolio_description', true);
    $portfolio_link = get_post_meta($post->ID, 'portfolio_link', true);
    $portfolio_quote = get_post_meta($post->ID, 'portfolio_quote', true);
    $portfolio_quote_author = get_post_meta($post->ID, 'portfolio_quote_author', true);

    // Security check
    wp_nonce_field('portfolio_meta_nonce', 'portfolio_nonce');

    // Display fields
    ?>

    <p>
        <label for="portfolio_description">Project Description:</label>
        <textarea class="widefat" name="portfolio_description" id="portfolio_description" cols="30" rows="10"><?php echo $portfolio_description; ?></textarea>
    </p>
    <p>
        <label for="portfolio_link">Link:</label><br />
        <input type="text" name="portfolio_link" id="portfolio_link" value="<?php echo $portfolio_link; ?>" />
    </p>
    <p>
        <label for="portfolio_quote">Quote:</label>
        <textarea class="widefat" name="portfolio_quote" id="portfolio_quote" cols="30" rows="10"><?php echo $portfolio_quote; ?></textarea>
    </p>
    <p>
        <label for="portfolio_quote_author">Quote Author:</label><br />
        <input type="text" name="portfolio_quote_author" id="portfolio_quote_author" value="<?php echo $portfolio_quote_author; ?>" />
    </p>

<?php
}

add_action('save_post', 'custom_save_portfolio_details');

function custom_save_portfolio_details($post_id) {
    // If we're using an autosave, return
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

    // If nonce is not present or invalid, return
    if (!isset($_POST['portfolio_nonce']) || !wp_verify_nonce($_POST['portfolio_nonce'], 'portfolio_meta_nonce')) return;

    // Save/Update Data
    if(isset($_POST['portfolio_description']) && $_POST['portfolio_description'] != '') {
        update_post_meta($post_id, 'portfolio_description', esc_html($_POST['portfolio_description']));
    }
    if(isset($_POST['portfolio_link']) && $_POST['portfolio_link'] != '') {
        update_post_meta($post_id, 'portfolio_link', esc_url($_POST['portfolio_link']));
    }
    if(isset($_POST['portfolio_quote']) && $_POST['portfolio_quote'] != '') {
        update_post_meta($post_id, 'portfolio_quote', esc_html($_POST['portfolio_quote']));
    }
    if(isset($_POST['portfolio_quote_author']) && $_POST['portfolio_quote_author'] != '') {
        update_post_meta($post_id, 'portfolio_quote_author', esc_html($_POST['portfolio_quote_author']));
    }
}

/**************************************************/
/* link all Post Thumbnails to the Post Permalink */
/**************************************************/

add_filter( 'post_thumbnail_html', 'my_post_image_html', 10, 3 );

function my_post_image_html( $html, $post_id, $post_image_id ) {
    $html = '<a href="' . get_permalink( $post_id ) . '" title="' . esc_attr( get_the_title( $post_id ) ) . '">' . $html . '</a>';
    return $html;
}