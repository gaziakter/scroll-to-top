<?php
/**
 * Plugin Name:       Scroll To Top
 * Plugin URI:        https://classysystem.com/plugin/wp-column/
 * Description:       WordPress data table usages
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Gazi Akter
 * Author URI:        https://gaziakter.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://classysystem.com/
 * Text Domain:       scroll-top
 * Domain Path:       /languages
 */

 

// Enqueue the JavaScript and CSS files
function scroll_to_top_enqueue_scripts_styles() {
    wp_enqueue_script('scroll-to-top-script', plugin_dir_url(__FILE__) . 'scroll-to-top.js', array('jquery'), '1.0', true);
    wp_enqueue_style('scroll-to-top-style', plugin_dir_url(__FILE__) . 'scroll-to-top.css');
}
add_action('wp_enqueue_scripts', 'scroll_to_top_enqueue_scripts_styles');

// Add the "Scroll to Top" button HTML
function scroll_to_top_button_html() {
    echo '<div id="scroll-to-top" class="scroll-to-top">↑</div>';
}
add_action('wp_footer', 'scroll_to_top_button_html');
?>