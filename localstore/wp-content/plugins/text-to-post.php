<?php
/**
 *  @wordpress-plugin
 *  Plugin Name: Text To Post Plugin
 */
 
/**
 * Adding Submenu under Settings Tab
 */
function text_to_post_add_menu() {
	add_submenu_page ( "options-general.php", "Text To Post Plugin", "Text To Post Plugin", "manage_options", "text-to-post-hello-world", "text_to_post_hello_world_page" );
}

add_action ( "admin_menu", "text_to_post_add_menu" );
 
/**
 * Setting Page Options
 */
function text_to_post_hello_world_page() {
	?>
<div class="wrap">
	<h1>
		Text To Post Plugin
	</h1>
 
	<form method="post" action="options.php" >
            <?php
	settings_fields ( "text-to-post_hello_world_config" );
	do_settings_sections ( "text-to-post-hello-world" );
	submit_button ();
	?>
         </form>
</div>
 
<?php
}
 
function text_to_post_hello_world_settings() {
	add_settings_section ( "text-to-post_hello_world_config", "", null, "text-to-post-hello-world" );
	add_settings_field ( "text-to-post-hello-world-text", "This is My Plugin", "text_to_post_hello_world_options", "text-to-post-hello-world", "text-to-post_hello_world_config" );
	register_setting ( "text-to-post_hello_world_config", "text-to-post-hello-world-text" );
}
add_action ( "admin_init", "text_to_post_hello_world_settings" );
 
/**
 * Add simple textfield value to setting page
 */
function text_to_post_hello_world_options() {
	?>
<div class="postbox" style="width: 65%; padding: 30px;">
	<input type="text" name="text-to-post-hello-world-text"
		value="<?php
	echo stripslashes_deep ( esc_attr ( get_option ( 'text-to-post-hello-world-text' ) ) );
	?>" /> Enter Some Text..<br />
</div>
<?php
}
 
/**
 * Append saved textfield value to each post
 */
add_filter ( 'the_content', 'text_to_post_com_content' );
function text_to_post_com_content($content) {
	return $content . stripslashes_deep ( esc_attr ( get_option ( 'text-to-post-hello-world-text' ) ) );
}