=== Jump to - Post Edit ===
Contributors: linkedbinary900
Donate link: http://www.runwalkweb.com/wordpress-plugins/wp-jump-to-post-edit/
Tags: post, edit, admin
Requires at least: 3.3
Tested up to: 3.5.1
Stable tag: 1.0.6
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Gives the "Edit Post" screen the ability to jump from one post to another.


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

02/12/2013:  Stable with WordPress v 3.5.1

01/25/2012:  Version 1.0.5 - Changed a bit in the CSS file, `jump-to-post-edit.css` which will allow for a scrolling post-list, and moves the list out of the way a bit from the `UPDATE` button in the post-edit screen.

12/19/2012:  Version 1.0.4 - Fixed conditional php statement in `jump-to-post-edit.php` for `post_type` so that this feature only appears on your Edit Post screen.

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

Latest updates will be found at [http://www.runwalkweb.com/wordpress-plugins/wp-jump-to-post-edit/]
(http://www.runwalkweb.com/wordpress-plugins/wp-jump-to-post-edit/)
