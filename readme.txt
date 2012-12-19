=== Jump to - Post Edit ===
Contributors: linkedbinary900
Donate link: 
Tags: post, edit, admin
Requires at least: 3.3
Tested up to: 3.4.2
Stable tag: 1.0.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Adds an option to the "Edit Post" screen, allowing the user to easily choose another post to edit by clicking a link to that post's edit screen.


== Description ==

Adds an option to the "Edit Post" screen, allowing the user to easily choose another post to edit by clicking a link to that post's edit screen.


== Installation ==

1. Upload this plugin to the `/wp-content/plugins/` directory and unzip it, or simply upload the zip file within your wordpress installation.

2. Activate the plugin through the 'Plugins' menu in WordPress


== Frequently asked questions ==

No FAQ with this release... so far.


== Screenshots ==

1. [The "Jump to - Post Edit" area will be added to the "Publish" section of your Edit Post screen.]

2. [Moving the pointer over the "Jump to - Post Edit" area reveals the List of Posts.]


== Changelog ==

12/19/2012:  Version 1.0.3 - Added condition to `jump-to-post-edit.php` for `post_type` so that this feature only appears on your Edit Post screen.

12/18/2012:  Version 1.0.2 - Instead of creating a new custom meta box to perform this action, this plugin now adds a section to the "Publish" area of the "Edit Post" screen.
			~ This update fixes the problems occurring with use of the previous versions (custom meta data and permalink information, etc. is now read/write accessible again)
			~ There is now a Stylesheet file included with this plugin, `jump-to-post-edit.css`.  Feel free to customize the color-scheme, etc. to your liking!

11/28/2012:  Version 1.0.1 - Updated plugin to fix problems occurring upon Posts being saved.
			~ Custom Meta info was being altered.
			~ My apologies.
			~ "Jump to - Post Edit" will use a Custom Meta Field, jump_to_post_edit.
			~ Because the selection of an option from the "Jump to - Post Edit" list does not actually require data to be saved to the current Post, the value of the Custom Meta Key 'jump_to_post_edit' does not need to be altered.
			
11/24/2012:  Version 1.0 submission to WordPress.org


== Upgrade notice ==

Latest updates will be found at [http://www.runwalkweb.com/wp/?page_id=30]
(http://www.runwalkweb.com/wp/?page_id=30)
