<?php
/**
 * Plugin Name: WP Category Checkbox to Radio Button
 * Plugin URI: https://www.codingbank.com/wp-category-checkbox-radio
 * Description: Converts WordPress category checkboxes into radio buttons for post types. Now fully compatible with Gutenberg and Classic Editor.
 * Version: 1.2
 * Requires at least: 5.0
 * Tested up to: 6.6.2
 * Requires PHP: 7.4 
 * Author: Md Abul Bashar
 * Author URI: https://www.codingbank.com
 * License: GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

/**
 * Convert category checkboxes into radio buttons in the Classic Editor and Gutenberg.
 */
function cb_change_cat_type() {
    // Apply script only in post edit screens.
    $screen = get_current_screen();
    if ( $screen->base !== 'post' ) {
        return;
    }

    echo '<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery("#categorychecklist input, #categorychecklist-pop input, .cat-checklist input").each(function() {
            this.type = "radio";
        });
    });
    </script>';
}
add_action( 'admin_footer', 'cb_change_cat_type' );