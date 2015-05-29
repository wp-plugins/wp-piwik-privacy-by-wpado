<?php
/**
 * Plugin Name: WP-Piwik Privacy by WPADO
 * Plugin URI: http://www.wp-agentur-do.de/referenzen-eintrag/wp-piwik-privacy-by-wpado/
 * Description: Erstellt den Shortcode <code>[wpado_piwik_privacy]</code> um das Tracking von dem Analyse-Tool Piwik (http://piwik.org/) zu deaktivieren.
 * Version: 1.0.0
 * Author: WP Agentur Dortmund
 * Author URI: http://www.wp-agentur-do.de
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

if( ! class_exists( 'wpado_piwik_privacy' ) ) {

	class wpado_piwik_privacy {

		function wpado_piwik_privacy() {

			self::__construct();

		}

		function __construct() {

			add_shortcode('wpado_piwik_privacy', array(
				$this,
				'wpado_piwik_privacy_shortcode'
			));

		}

		function wpado_piwik_privacy_shortcode() {

			if( ! class_exists( 'wp_piwik' ) ) {

				return;

			}

			$PiwikUrl = get_option('wp-piwik_global-piwik_url');

			if( empty( $PiwikUrl ) ) {

				return;

			} else {

				$PiwikUrl = esc_url($PiwikUrl . '?module=CoreAdminHome&amp;action=optOut&amp;language=de');

			}

			$out .= '<iframe id="nwpado_piwik_privacy" src="' . $PiwikUrl . '" height="220" width="100%" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="width:100%; height:auto; background:none repeat scroll 0 0 transparent;"></iframe>';

			return $out;

		}

	}

}

new wpado_piwik_privacy();