<?php

$tabs = array( 
  'general' => array( 'label' => 'General', 'settings' => 'spp-player-general' ), 
  'defaults' => array( 'label' => 'Player Defaults', 'settings' => 'spp-player-defaults' ),
  'news' => array( 'label' => 'Email Integration', 'settings' => 'spp-player-email' ),
  'sticky' => array( 'label' => 'Sticky Player', 'settings' => 'spp-player-sticky' ),
  'advanced' => array( 'label' => 'Advanced', 'settings' => 'spp-player-advanced'),
);


$current_tab = isset( $_GET['tab'] ) && array_key_exists( $_GET['tab'], $tabs ) ? $_GET['tab'] : 'general';

?>
<div class="wrap settings-<?php echo $current_tab; ?> smart-podcast-player-settings">
	<?php
	if( ! SPP_Core::is_paid_version() ) {
	?>
		<div class="error">
			<p style="line-height: 30px;"><?php _e( 'Please enter your Smart Podcast Player license key to get updates and support! <a href="' . SPP_SETTINGS_URL . '" class="button" style="float: right;">Go to Settings</a>', 'smart-podcast-player' ); ?></p>
		</div>
	<?php } ?>
	
	<div class="notice notice-info">
		<p>The recent enactment of the European Union's General Data Protection Regulation (GDPR) has prompted us to make changes to our Email Integration feature and you may need to update your settings. Read about the changes here: <a href="https://support.smartpodcastplayer.com/article/157-email-capture" target="_blank">https://support.smartpodcastplayer.com/article/157-email-capture</a></p>
	</div>

  <h2><?php echo esc_html( get_admin_page_title() ); ?></h2>

  <div class="nav-tabs">
    <h2 class="nav-tab-wrapper">
    <?php foreach( $tabs as $key => $tab ) : ?>
          <a href="<?php echo SPP_SETTINGS_URL; ?>&tab=<?php echo $key; ?>" class="<?php echo $current_tab == $key ? 'nav-tab nav-tab-active' : 'nav-tab'; ?>"><?php echo $tab['label']; ?></a>    
    <?php endforeach; ?>
    </h2>
  </div>
   
  <?php if( isset( $tabs[ $current_tab ] ) ) {
  
	  // "Advanced" and "General" have special actions.
	  // "General": we need to do an extra action on submit,
	  if( $current_tab == 'advanced' ) { ?>
		<?php $redirect = urlencode( $_SERVER['REQUEST_URI'] ); ?>
		<form method="POST" action="<?php echo admin_url( 'admin-post.php' ); ?>">
		  <?php if( isset( $_GET["spp_cache"] ) && $_GET["spp_cache"] == 'cleared' ) { ?>
			<div class="updated">
			  <p>Smart Podcast Player cache cleared.</p>
			</div>
		  <?php } ?>
		  <input type="hidden" name="action" value="clear_spp_cache">
		  <?php wp_nonce_field( "clear_spp_cache", "clear_spp_cache_nonce", FALSE ); ?>
		  <input type="hidden" name="_wp_http_referer" value="<?php echo $redirect; ?>">
		  <table class="form-table">
			<tr>
			  <th scope="row">Clear SPP Cache: </th>
			  <td>
				<input type="submit" name="submit" id="submit" class="button button-secondary" value="Clear Cache">
			  </td>
			</tr>
		  </table>
		</form>
		
	  <?php } else if ( $current_tab == 'general' ) { ?>
	  
			<form method="POST" action="<?php echo admin_url( 'admin-post.php' ); ?>">
			<input type="hidden" name="action" value="spp_set_license_key">
			<?php wp_nonce_field( "spp_set_license_key", "spp_set_license_key_nonce", FALSE ); ?>
			<input type="hidden" name="_wp_http_referer" value="<?php echo urlencode( $_SERVER['REQUEST_URI'] ); ?>">
			
	  <?php }
	  
	  // All tabs: regular actions.  The newer tabs (news and sticky) have dedicated settings
	  // pages, while the old tabs use the WP settings API
	  if( $current_tab == 'news' || $current_tab == 'sticky') { ?>

		<form method="POST" action="options.php">
			<?php settings_fields( $tabs[ $current_tab ]['settings'] ); ?>
			<?php include ($current_tab == 'news' ? 'settings_news.php' : 'settings_sticky.php') ?>
			<?php submit_button(); ?>
		</form>
		<?php
	  
	  } else {

		if( $current_tab !== 'general' ) { ?>
			<form method="POST" action="options.php">
			<?php settings_fields( $tabs[ $current_tab ]['settings'] );
		}

		do_settings_sections( $tabs[ $current_tab ]['settings'] );
		submit_button();
		
		}
	
  }?>

  </form>

</div>
