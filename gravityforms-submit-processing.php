<?php
/**
 * Plugin Name:       Gravity Forms Submit Processing
 * Plugin URI:        http://chooserethink.com
 * Description:       Disables the submit button upon submitting a Gravity Forms form.
 * Version:           2.0.0
 * Author:            Brianna Deleasa @ re:think
 * Author URI:        http://chooserethink.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       gfsp
 * Domain Path:       /languages
 */


add_action( 'gform_enqueue_scripts', 'gfsp_enqueue_scripts', 10, 2 );
/**
 * Outputs the scripts needed for this plugin to work.
 *
 * @param none
 * @return none
 *
 * @since 1.0.0
 */
function gfsp_enqueue_scripts( $form, $is_ajax ) {

    wp_enqueue_style( 'gfsp-css', plugins_url('css/gravityforms-submit-processing.css', __FILE__), false, null );
    wp_enqueue_script( 'gfsp-js', plugins_url('js/gravityforms-submit-processing.js', __FILE__) , array('jquery'), null, true );

}