<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       plugin_name.com/team
 * @since      1.0.0
 *
 * @package    PluginName
 * @subpackage PluginName/admin/partials
 */
if ( ! defined( 'ABSPATH' ) ) exit;
?>
<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<div class="wrap" id="upsy-setting-wrapper">
	<div id="upsy-banner-section">
		<img alt="Upsy shopping helper banner image" src="<?php echo isset($plugin_dir_url) ? esc_url($plugin_dir_url . "/assets/images/upsy-banner-logo.png") : ''; ?>" />
	</div>
	<div id="icon-themes" class="icon32"></div>  
	<div id="upsy-setting-section">
		<h2 class="title" >Upsy Customer Settings</h2>
		<p class="description">
			Upsy is designed for SMEs webshop owners and optimised for mobile shoppers, offering smart navigation, AI recommendations, promotions, automated customer service, and insights
			that will help you grow online sales smartly.
			Turn your webshop visitors into buyers!
			<a class="link" href="https://upsyshopping.com/" target="_blank" >Visit Upsy shopping helper &rarr;</a>
		</p> 
			<!--NEED THE settings_errors below so that the errors/success messages are shown after submission - wasn't working once we started using add_menu_page and stopped using add_options_page so needed this-->
		<?php settings_errors(); ?>  
		<hr />
		<div class="max-w-760">
			<?php 
				if(empty(get_option('upsy_settings_customer_id'))){
					?>
					<div id="upsy_wc_auth_block">
							<p class="authorization-text">Upsy needs to be authorized before it can be used. Click “Authorize Upsy” to give it read-only access to your store’s product catalog</p>
							<button type='button' name='submit' class='authorization-button' id="upsy_wc_auth_connection">
								Authorize Upsy
							</button>
						</div>
					<?php
				} 
			?>	
			<div class="form-wrapper">
				<form method="POST" action="options.php">  
					<?php 
						settings_fields( 'upsy_customer_general_settings' );
						do_settings_sections( 'upsy_customer_general_settings' ); 
					?>             
					<?php submit_button(); ?>  
				</form> 
			</div>
		</div>
	</div>
		
</div>