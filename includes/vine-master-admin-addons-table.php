<?php
if(!class_exists('WP_List_Table')){
	require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
}
class vine_master_admin_addons_table extends WP_List_Table {
	/**
	 * Display the rows of records in the table
	 * @return string, echo the markup of the rows
	 */
	function display() {
	$plugin_master_name = constant('VINE_MASTER_NAME');
	$path = ABSPATH . 'wp-content/plugins/vine-master-addons/';
	if ( is_plugin_active( 'vine-master-addons/vine-master-addons.php' ) && file_exists($path) ) {
		$vine_master_addon = "yes";
		$vine_master_addon_get = '<b>All add-ons Installed</b>';
	}
	else{
		$vine_master_addon = "no";
		$vine_master_addon_get = '<a class="button-primary" href="https://wordpress.techgasp.com/vine-master/" target="_blank" title="Get all Add-ons" style="float:left;">Get all Add-ons pack for peanuts</a>';
	}
?>
<table class="widefat" cellspacing="0">
	<thead>
		<tr>
			<th colspan="3"><?php echo $vine_master_addon_get; ?></th>
		</tr>
		<tr>
			<th><h2><img src="<?php echo plugins_url('images/techgasp-minilogo-16.png', dirname(__FILE__)); ?>" style="float:left; height:18px; vertical-align:middle;" /><?php _e('&nbsp;Screenshot', 'vine_master'); ?></h2></th>
			<th><h2><img src="<?php echo plugins_url('images/techgasp-minilogo-16.png', dirname(__FILE__)); ?>" style="float:left; height:18px; vertical-align:middle;" /><?php _e('&nbsp;Description', 'vine_master'); ?></h2></th>
			<th><h2><img src="<?php echo plugins_url('images/techgasp-minilogo-16.png', dirname(__FILE__)); ?>" style="float:left; height:18px; vertical-align:middle;" /><?php _e('&nbsp;Installed', 'vine_master'); ?></h2></th>
		</tr>
	</thead>

	<tfoot>
		<tr>
			<th><?php echo $vine_master_addon_get; ?></th>
			<th></th>
			<th></th>
		</tr>
	</tfoot>

	<tbody>
		<tr class="alternate">
			<td style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-vinemaster-admin-addons-widget-viral.png', dirname(__FILE__)); ?>" alt="<?php echo $plugin_master_name ?>" align="left" width="300px" height="139px" style="padding:5px;"/></td>
			<td style="vertical-align:middle"><h3>Vine Advanced Viral Buttons Widget</h3><p>The Advanced Viral Twitter Follow and Tweet buttons will make your website and videos "virulent". Watch those wordpress visits explode!.</p><p>Looks great when published under the player widget, remember you can always hide the widget title to get the button closer to your video.</p><p>Navigate to your wordpress widgets page and start using it.</p></td>
			<td style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-check-yes.png', dirname(__FILE__)); ?>" alt="<?php echo $plugin_master_name ?>" align="left" width="200px" height="121px" style="padding:5px;"/></td>
		</tr>
		<tr>
			<td style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-vinemaster-admin-addons-widget-player.png', dirname(__FILE__)); ?>" alt="<?php echo $plugin_master_name ?>" align="left" width="300px" height="139px" style="padding:5px;"/></td>
			<td style="vertical-align:middle"><h3>Vine Advanced Responsive Player Widget</h3><p>This "Top of the Line" Advanced Responsive Video Player let's you integrate the exciting twitter Vine Videos into any Wordpress widget position. Bombastic!!! Makes <b>NO USE</b> of nasty Javascipt or Ajax.</p><p>Beautiful Adaptive Player in html5 and CSS gives full control over the video appearance, <b>simple with overlay</b> or <b>postcard</b>.</p><p>Navigate to your wordpress widgets page and start using it.</p></td>
			<td style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-check-'.$vine_master_addon.'.png', dirname(__FILE__)); ?>" alt="<?php echo $plugin_master_name ?>" align="left" width="200px" height="121px" style="padding:5px;"/></td>
		</tr>
		<tr class="alternate">
			<td style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-vinemaster-admin-addons-widget-feed.png', dirname(__FILE__)); ?>" alt="<?php echo $plugin_master_name ?>" align="left" width="300px" height="139px" style="padding:5px;"/></td>
			<td style="vertical-align:middle"><h3>Vine Advanced Responsive Feed Widget</h3><p>Amazing Vine Videos Feed in any Wordpress widget position. Makes <b>NO USE</b> of nasty Javascipt or Ajax.</p><p><b>Automatically</b> displays your last vine videos.</p><p>Navigate to your wordpress widgets page and start using it.</p></td>
			<td style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-check-'.$vine_master_addon.'.png', dirname(__FILE__)); ?>" alt="<?php echo $plugin_master_name ?>" align="left" width="200px" height="121px" style="padding:5px;"/></td>
		</tr>
		<tr>
			<td style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-vinemaster-admin-addons-shortcode-in.png', dirname(__FILE__)); ?>" alt="<?php echo $plugin_master_name ?>" align="left" width="300px" height="139px" style="padding:5px;"/></td>
			<td style="vertical-align:middle"><h3>Individual Shortcode</h3><p>Vine Master uses TechGasp Wordpress Framework. The <b>Individual Shortcode</b> allows you to have a different customized vine buttons in each page or post. Easy to use it can be found in the plugin <b>Individual Shortcodes menu</b> or when you edit a page or a post under the wordpress text editor. Once you have created your shortcode, Just insert the shortcode <b>[vine-master]</b> anywhere inside that text.</p></td>
			<td style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-check-'.$vine_master_addon.'.png', dirname(__FILE__)); ?>" alt="<?php echo $plugin_master_name ?>" align="left" width="200px" height="121px" style="padding:5px;"/></td>
		</tr>
		<tr class="alternate">
			<td style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-vinemaster-admin-addons-shortcode-un.png', dirname(__FILE__)); ?>" alt="<?php echo $plugin_master_name ?>" align="left" width="300px" height="139px" style="padding:5px;"/></td>
			<td style="vertical-align:middle"><h3>Universal Shortcode</h3><p>Vine Master uses TechGasp Wordpress Framework. The <b>Universal Shortcode</b> allows you to have the same vine buttons across different pages or posts. Easy to use it can be found right here under the <b>Universal Shortcodes menu</b>. Once you have created your shortcode, Just insert the shortcode <b>[vine-master-un]</b> anywhere inside the text of your pages or posts.</p></td>
			<td style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-check-'.$vine_master_addon.'.png', dirname(__FILE__)); ?>" alt="<?php echo $plugin_master_name ?>" align="left" width="200px" height="121px" style="padding:5px;"/></td>
		</tr>
		<tr>
			<td style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-vinemaster-admin-addons-updater.png', dirname(__FILE__)); ?>" alt="<?php echo $plugin_master_name ?>" align="left" width="300px" height="139px" style="padding:5px;"/></td>
			<td style="vertical-align:middle"><h3>Advanced Updater</h3><p>The Advanced Updater allows you to easily Update / Upgrade your Advanced Plugin. You can instantly update your plugin after we release a new version with more goodies without having to wait for the nightly native wordpress updater that runs every 24/48 hours. Get it fresh, get it fast.</p></td>
			<td style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-check-'.$vine_master_addon.'.png', dirname(__FILE__)); ?>" alt="<?php echo $plugin_master_name ?>" align="left" width="200px" height="121px" style="padding:5px;"/></td>
		</tr>
		<tr class="alternate">
			<td style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-vinemaster-admin-addons-support.png', dirname(__FILE__)); ?>" alt="<?php echo $plugin_master_name ?>" align="left" width="300px" height="139px" style="padding:5px;"/></td>
			<td style="vertical-align:middle"><h3>Award Winning Professional Support</h3><p>Need professional help deploying this plugin? TechGasp provides award winning professional wordpress support for all advanced version costumers and wordpress professionals. Support Us and we will Support You.</p></td>
			<td style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-check-'.$vine_master_addon.'.png', dirname(__FILE__)); ?>" alt="<?php echo $plugin_master_name ?>" align="left" width="200px" height="121px" style="padding:5px;"/></td>
		</tr>
	</tbody>
</table>
<?php
		}
}
