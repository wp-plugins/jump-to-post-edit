<?php
/*
Plugin Name: Jump to - Post Edit
Plugin URI: http://www.runwalkweb.com/wordpress-plugins/wp-jump-to-post-edit/
Description: Adds an option to the "Edit Post" screen, allowing the user to easily choose another post to edit by clicking a link to that post's edit screen.
Version: 1.0.6
Author: zach_rww
Author URI: http://www.runwalkweb.com/wp
License: GPL2
*/

/*  Copyright 2012  zach_rww  (email : zach@runwalkweb.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


add_action( 'post_submitbox_misc_actions', 'jump_to_post_edit_option' );
function jump_to_post_edit_option()
{

if ( get_post_type() == 'post' ) {

    ?>

<link rel='stylesheet' href='<?php echo plugins_url( 'jump-to-post-edit/jump-to-post-edit.css' ); ?>' type='text/css' media='all' />
    

<div id="jump-to-post-edit-div">
<p>

<div id="jump-to-post-edit-title"><label for="jump_to_post_edit"><strong>Jump to - Post Edit</strong>:</label><br />
<div id="jump-to-post-edit-list">
<font style="font-size: 9pt; color: #555;"><em>published posts noted by:</em> &#10003</font><br>
<?php $args = array(
	'numberposts'     => -1,
	'offset'          => 0,
	'orderby'         => 'post_date',
	'order'           => 'DESC',
	'post_type'       => 'post',
	'post_status'     => 'any',
	'suppress_filters' => true );
	
$jumptoposts = get_posts($args); 
$blog_home = home_url();
	foreach ( $jumptoposts as $jumptopost ) {
		$post_title_value = substr($jumptopost->post_title,0,26).'...';
		$postlink = '<a href="' . $blog_home . '/wp-admin/post.php?post=' . $jumptopost->ID . '&action=edit" title="' .$jumptopost->post_title.' (post ID: ' .$jumptopost->ID. ')">';
			if ( $jumptopost->post_status == 'publish' ) {
				$postlink .= '&#10003; ';
			}
			else {
				$postlink .= '[' . $jumptopost->post_status . '] ';
			}
		$postlink .= $post_title_value;
		$postlink .= '</a>';
		echo '<span class="jump-to-post-edit-option">' .$postlink. '</span>';
	}
wp_reset_query();
?>
</div>
</div>

</p>
</div>
	<?php
}

}
?>