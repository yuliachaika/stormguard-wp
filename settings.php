<?php
/*
* Theme Settings page.
*/
function theme_settings_init(){
	register_setting( 'theme_settings', 'theme_settings' );
}

function add_settings_page() {
	add_menu_page( __( 'Theme Options' ), __( 'Theme Options' ), 'manage_options', 'settings', 'theme_settings_page', '', 24);
}

add_action( 'admin_init', 'theme_settings_init' );
add_action( 'admin_menu', 'add_settings_page' );

function theme_settings_page() { 
	global $select_options; if ( ! isset( $_REQUEST['settings-updated'] ) ) $_REQUEST['settings-updated'] = false;
	?>

	<div>
		<h2 id="title">Theme Settings</h2>
		<?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
			<div id="message" class="updated">
				<p><strong>Options saved</strong></p>
			</div>
		<?php endif; ?>
		<form method="post" action="options.php">
			<?php settings_fields( 'theme_settings' ); ?>
			<?php $options = get_option( 'theme_settings' ); ?>
			<table>

				<tr valign="top">
					<td>Logo</td>
					<td><input id="theme_settings[custom_logo]" type="text" name="theme_settings[custom_logo]" placeholder="e.g. /img/logo.svg" value="<?php esc_attr_e( $options['custom_logo'] ); ?>" /></td>
				</tr>

				<tr valign="top">
					<td>Footer link 1</td>
					<td><input id="theme_settings[footer_link_1]" type="url" name="theme_settings[footer_link_1]" placeholder="Customer Service" value="<?php esc_attr_e( $options['footer_link_1'] ); ?>" /></td>
					
				</tr>
				<tr valign="top">
					<td>Footer link 2</td>
					<td><input id="theme_settings[footer_link_2]" type="url" name="theme_settings[footer_link_2]" placeholder="Careers" value="<?php esc_attr_e( $options['footer_link_2'] ); ?>" /></td>
				</tr>
				<tr valign="top">
					<td>Footer link 3</td>
					<td><input id="theme_settings[footer_link_3]" type="url" name="theme_settings[footer_link_3]" placeholder="Terms &amp; Conditions" value="<?php esc_attr_e( $options['footer_link_3'] ); ?>" /></td>
				</tr>
				<tr valign="top">
					<td>Footer link 4</td>
					<td><input id="theme_settings[footer_link_4]" type="url" name="theme_settings[footer_link_4]" placeholder="Privacy Policy" value="<?php esc_attr_e( $options['footer_link_4'] ); ?>" /></td>
				</tr>
				<tr valign="top">
					<td>Footer link 5</td>
					<td><input id="theme_settings[footer_link_5]" type="url" name="theme_settings[footer_link_5]" placeholder="Sitemap" value="<?php esc_attr_e( $options['footer_link_5'] ); ?>" /></td>
				</tr>

				<tr valign="top">
					<td>Footer</td>
					<td><textarea id="theme_settings[footer]" placeholder="Footer copyright text." name="theme_settings[footer]" rows="5" cols="36"><?php esc_attr_e( $options['footer'] ); ?></textarea></td>
				</tr>



			</table>
			<p><input name="submit" id="submit" class="button button-primary" value="Save" type="submit"></p>
		</form>
	</div>
	<?php } 