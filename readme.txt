=== Plugin Name ===
Contributors: bdeleasa
Tags: forms, gravity forms
Requires at least: 3.0.1
Tested up to: 4.2.2
Stable tag: 2.1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Integrates with Gravity Forms to disable the submit button and shows a 'Processing' message to the user while the form is being processed.

== Description ==

This Wordpress plugin integrates with Gravity Forms.  When a user presses the submit button to submit a gravity form, this plugin temporarily disables the submit button and shows a 'Processing' message to the user.  This helps prevent the user from submitting the form multiple times while it's processing.  It's useful for long forms, or for websites that are on slower servers.

Without this plugin, if the form is taking a while to process, the user may get impatient and press the submit button multiple times.  This can cause multiple entries to be submitted.  Though this isn't necessarily the end of the world, some end users can find this rather annoying.  The Gravity Forms Submit Processing plugin will help prevent this from happening!

== Installation ==

1. Upload the `gravityforms-submit-processing` folder to the `/wp-content/plugins/` directory.
1. Activate the plugin through the 'Plugins' menu in WordPress
1. That's it! :)

== Frequently Asked Questions ==

None yet.  Have any questions? Please contact me!

== Changelog ==

= 2.1.0 =
* Making sure our scripts are outputted only when there is a gravity form on the current page.
* Renaming the functions to use the acronym (gfsp) instead of the old name (gravity_forms_submit_processing).
* Adding a changelog file.
* Adding a readme file.

= 2.0.0 =
* Renaming the plugin from gravity-forms-submit-processing to gravityforms-submit-processing.

= 1.0.0 =
* Initial working version of the plugin.