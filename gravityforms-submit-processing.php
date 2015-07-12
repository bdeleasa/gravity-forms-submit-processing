<?php
/**
 * Plugin Name:       Gravity Forms Submit Processing
 * Plugin URI:        https://github.com/bdeleasa/gravityforms-submit-processing
 * Description:       Disables the submit button upon submitting a Gravity Forms form to help prevent multiple submissions.
 * Version:           2.0.0
 * Author:            Brianna Deleasa
 * Author URI:        http://briannadeleasa.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       gfsp
 * Domain Path:       /languages
 *
 * Gravity Forms Submit Processing
 * Copyright (C) 2014 Brianna Deleasa
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
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