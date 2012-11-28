<?php
/*
Plugin Name: Jump to - Post Edit
Plugin URI: http://www.runwalkweb.com/wp/?page_id=30
Description: Adds an option to the "Edit Post" screen, allowing the user to easily choose another post to edit without leaving the "Edit Post" screen.
Version: 1.0.1
Author: zach_rww
Author URI: http://www.runwalkweb.com
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

add_action('admin_menu', 'jump_to_post_edit_box');

	function jump_to_post_edit_box() {
		add_meta_box('post_info', 'Jump to - Post Edit', 'jump_to_post_edit_info', 'post', 'side', 'high');
	}

	//Adds the actual option box
	function jump_to_post_edit_info() {
		global $post;
		?>
<fieldset id="jump_to_post_edit-div">
<div>
<p>

<label for="jump_to_post_edit">Choose Post:</label><br />
<select name="jump_to_post_edit" onchange='document.location.href=this.options[this.selectedIndex].value;'>
<option<?php selected( get_post_meta($post->ID, 'jump_to_post_edit', true), 'none' ); ?>><?php echo esc_attr( __( 'Select post' ) ); ?></option>
<?php $args = array(
	'numberposts'     => -1,
	'offset'          => 0,
/*    'category'        => , */
	'orderby'         => 'post_date',
	'order'           => 'DESC',
/*    'include'         => , */
/*    'exclude'         => , */
/*    'meta_key'        => , */
/*    'meta_value'      => , */
	'post_type'       => 'post',
/*    'post_mime_type'  => , */
/*    'post_parent'     => , */
	'post_status'     => 'any',
	'suppress_filters' => true );
	
$posts = get_posts($args); 
$blog_home = home_url();
	foreach ( $posts as $post ) {
		$post_title_value = substr($post->post_title,0,18).'...';
		$option = '<option value="' . $blog_home . '/wp-admin/post.php?post=' . $post->ID . '&action=edit">';
			if ( $post->post_status == 'publish' ) {
				$option .= '&#10003; ';
			}
			else {
				$option .= '[' . $post->post_status . '] ';
			}
		$option .= $post_title_value;
		$option .= '</option>';
		echo $option;
	}
?>
</select><br />

</p>
</div>
</fieldset>
		<?php }

add_action('save_post', 'jtposti_save');
	function jtposti_save($postID){
	// called after a post or page is saved
		if($parent_id = wp_is_post_revision($postID)) {
			$postID = $parent_id;
		}

	if ($_POST['jump_to_post_edit']) {
		update_jtposti_meta($postID, $_POST['jump_to_post_edit'], 'jump_to_post_edit');
	}
}

	function update_jtposti_meta($postID, $newvalue, $field_name) {
	// To create new meta
		if(!get_post_meta($postID, $field_name)){
			add_post_meta($postID, $field_name, $newvalue);
		}else{
	// or to update existing meta
		update_post_meta($postID, $field_name, $newvalue);
		}
	}