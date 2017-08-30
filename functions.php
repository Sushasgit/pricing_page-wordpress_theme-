<?php

function wpt_theme_styles() {
wp_enqueue_style('main_css', get_template_directory_uri() . '/mystyle.css');

}

add_action('wp_enqueue_scripts', 'wpt_theme_styles');

define('WP_SCSS_ALWAYS_RECOMPILE', true);

function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');
function add_custom_script() {
    wp_register_script('custom_script', home_url() . '/wp-content/themes/pricingpage/js/index.js', array( 'jquery' ));
    wp_enqueue_script('custom_script');
}  
add_action( 'wp_enqueue_scripts', 'add_custom_script' );
?>