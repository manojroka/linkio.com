<?php
/*
Plugin Name: OptinChat
Plugin URI: http://optinchat.com
Description: Helps you to integrate OptinChat
Version: 1.0.0
Author: OptinChat
Author URI: http://optinchat.com
License: GPLv2 or later

jQuery Smooth Scroll

*/

/*
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

Credits: Anand Kumar(http://bit.ly/2mE79Jk)
*/

define('OPCT_PLUGIN_DIR',str_replace('\\','/',dirname(__FILE__)));

if ( !class_exists( 'OPCT' ) ) {
	
	class OPCT {

		function __construct() {
		
			add_action( 'init', array( &$this, 'init' ) );
			add_action( 'admin_init', array( &$this, 'admin_init' ) );
			add_action( 'admin_menu', array( &$this, 'admin_menu' ) );
			
			add_action( 'wp_footer', array( &$this, 'wp_footer' ) );
		
		}
		
	
		function init() {
			load_plugin_textdomain( 'opct-settings', false, dirname( plugin_basename ( __FILE__ ) ).'/lang' );
		}
	
		function admin_init() {
			register_setting( 'opct-settings', 'opct_insert_footer', 'trim' );
		

			/*foreach (array('post','page') as $type) 
			{
				add_meta_box('shfs_all_post_meta', 'Insert Script to &lt;head&gt;', 'shfs_meta_setup', $type, 'normal', 'high');
			}
			
			add_action('save_post','shfs_post_meta_save');*/
		}
	
		function admin_menu() {
			$page = add_submenu_page( 'options-general.php', 'OptinChat', 'OptinChat', 'manage_options', __FILE__, array( &$this, 'OptinChat_options_panel' ) );
			}
	
		function wp_footer() {
			if ( !is_feed() && !is_robots() && !is_trackback() ) {
				$text = get_option( 'opct_insert_footer', '' );
				$text = convert_smilies( $text );
				$text = do_shortcode( $text );
			
			if ( $text != '' ) {
				echo $text, "\n";
			}
			}
		}

			
		
		   
				
		function OptinChat_options_panel() { ?>

			<div id="shfs-wrap">
				<div class="wrap">
				<?php screen_icon(); ?>
					<h2>OptinChat</h2>
					
					
						<form name="dofollow" action="options.php" method="post">
						
						<?php settings_fields( 'opct-settings' ); ?>
                        	
				
                        
							<h3 class="OptinChat-labels footerlabel" for="opct_insert_footer">Paste the JS code here:</h3>
							<textarea rows="5" cols="57" id="opct_insert_footer" name="opct_insert_footer"><?php echo esc_html( get_option( 'opct_insert_footer' ) ); ?></textarea><br />
						

						<p class="submit">
							<input class="button button-primary" type="submit" name="Submit" value="Save settings" /> 
						</p>

						</form>
					</div>
					
					
					
				
				</div>
				</div>
				
				<!-- Place this tag after the last widget tag. -->
				
			
				<?php
		}
	}

	
	
	
$shfs_header_and_footer_scripts = new OPCT();

}


