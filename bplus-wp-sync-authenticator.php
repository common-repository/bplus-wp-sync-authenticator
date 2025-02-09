<?php
/**
 * Plugin Name: b+ WP Sync Authenticator
 * Plugin URI: https://www.hampe.net/software/b-WPSync/
 * Description: Wir verbinden mit b+ WP Sync Ihren WooCommerce-Shop und die mircotech büro+ Warenwirtschaft. So entfesseln Sie die alle Möglichkeiten der Warenwirtschaft und des Onlinehandels für Ihr Unternehmen.
 * Version: 2.0.0
 * Requires at least: 6.0
 * Requires PHP:      7.4
 * Author: SYSTEMHAUS HAMPE
 * Author URI: https://www.hampe.net
 * License:     GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: bplus-wp-sync-authenticator
 */
 
 /*

/**
 * Copyright (C) 2023 SYSTEMHAUS HAMPE - Systemhaus und Agentur für E-Commerce und IT-Solutions
 */

function my_admin_menu()
{
        add_menu_page(
        __('b+ WP Sync Authenticator - SYSTEMHAUS HAMPE - Systemhaus und Agentur für E-Commerce und IT-Solutions', 'bplus-wp-sync'),
        __('b+ WP Sync ', 'bplus-wp-sync'),
        'manage_options',
        'bplus-wp-sync',
        'my_admin_page_contents',
        'dashicons-image-rotate',
        56
    );

    add_submenu_page('bplus-wp-sync',
        __('b+ WP Sync Authenticator - SYSTEMHAUS HAMPE - Systemhaus und Agentur für E-Commerce und IT-Solutions', 'bplus-wp-sync'),
        __('Auth-Code generieren', 'bplus-wp-sync'),
        'manage_options',
        'bplus-wp-sync-auth-code',
        'my_sub_menu_admin_page_contents_0');
}

add_action('admin_menu', 'my_admin_menu');

function my_admin_page_contents()
{
    ?>
    <h1>
        <?php esc_html_e('b+ WP Sync Authenticator - Verbinde WooCommerce mit microtech büro+', 'bplus-wp-sync-authenticator'); ?>
    </h1>
	<br> <br>
	<img src="<?php echo plugins_url( 'includes/images/banner-1.png' , __FILE__ );?>" style="width:850px; height:=250px;>
	</br> <br>
			<table>
  				<tr>
    			<th>
				<th>
				<p align="justify" style="color:black">
				<br> <br>
				<b>
				WooCommerce gehört zu den beliebtesten Onlineshopsystemen auf dem Markt. Für viele Anwender reichen die Funktionen des <a href="https://de.wordpress.org/plugins/woocommerce/" title="Wordpress Plugin WooCommerce" target="_blank">WordPress-Plugins</a> völlig aus. Aber in Sachen Automatisierung fehlt es an Optionen.
				<br> <br>
				Das ändern wir mit unserem <a href="https://www.hampe.net/software/b-WPSync/" title="b+ WP Sync" target="_blank">b+ WP Sync</a> Tool für <a href="https://www.hampe.net/software/woocommerce/" title="Wir helfen Ihnen bei der Einrichtung von WooCommerce" target="_blank">WooCommerce</a>. Wir verbinden mit diesem Tool Ihr Shopsystem und die <a href="https://www.microtech.de/loesungen/warenwirtschaft/" title="Wir helfen bei der Einrichtung von büro+ von microtech" target="_blank">mircotech büro+ Warenwirtschaft</a>. So entfesseln Sie die alle Möglichkeiten der Warenwirtschaft und des Onlinehandels für Ihr Unternehmen.
				</b>
				</th>
    			</th>
   				</tr>
			</table>
    <?php
}

function my_sub_menu_admin_page_contents_0()
{
    ?>
    <h1>
        <?php esc_html_e('b+ WP Sync Authenticator - Verbinde WooCommerce mit microtech büro+', 'bplus-wp-sync', 'bplus-wp-sync'); ?>
    </h1>
	<br> <br>
	<img src="<?php echo plugins_url( 'includes/images/banner-1.png' , __FILE__ );?>" style="width:850px; height:=250px;>
	</br> <br>
			<table>
  				<tr>
    			<th>
				<th>
				<p align="justify" style="color:black">
				<br> <br>
				<b>
				<p align="justify" style="color:red"><u>Hinweis zum Plugin-Auth-Code</u>:</p>
				<br>
				<p align="justify" style="color:black">			
				=> Bitte tragen Sie den <u>unten</u> erstellten Plugin-Auth-Code in b+ WP Sync im WooCoomerce-Benutzer ein.
				</p>
				</b>
				</th>
    			</th>
   				</tr>
			</table>
	</br> <br>
			<div>
			<?php
			$url = (empty($_SERVER['HTTPS'])) ? 'http://' : 'https://';
    			$url .= $_SERVER['HTTP_HOST'];
			?>

			<table>
  				<tr>
    				<th>
				<script language="JavaScript" type="text/javascript">function einblenden(div) {with(document.getElementById(div).style){if(display=="none"){display="inline";}else{display="none";}}}//</script>
				<input type="button" value="Auth-Code einblenden" style="background-color:#86b300; color:white; border-radius: 20px; height: 30px; width: 300px;" onclick="javascript:einblenden('auth-code-einblenden')"></input><br>
				<div id="auth-code-einblenden" style="display: none;">
					<br>
					<table>
  					<tr>
					<th>
					<button id="copy-button">Auth-Code in die Zwischenablage kopieren</button>
					</th>
					<th></th>
					<th>
					<textarea id="input" rows="1" cols="65" readonly="readonly"><?php echo md5("$url"); ?></textarea>
					</th>  		
					<th>
					</th>		
					</tr>
					</table>
					<br> <br>
			<script>
			var input = document.getElementById("input");
			var button = document.getElementById("copy-button");

			button.addEventListener("click", function (event) {
			 event.preventDefault();
			 input.select();
			 document.execCommand("copy");
			});
			</script>
				</div>
				</th>	
				</tr>
			</table>
			</div>
						
    <?php
}