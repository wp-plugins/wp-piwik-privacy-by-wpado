<?php
/**
 * Plugin Name: WP-Piwik Privacy by WPADO
 * Plugin URI: http://www.wp-agentur-do.de/referenzen-eintrag/wp-piwik-privacy-by-wpado/
 * Description: Erstellt den Shortcode <code>[wpado_piwik_privacy]</code> um das Tracking von dem Analyse-Tool Piwik (http://piwik.org/) zu deaktivieren.
 * Version: 1.0.3
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

			$PiwikUrl			=	get_option('wp-piwik_global-piwik_url');
			$PiwikSiteID	=	get_option('wp-piwik-site_id');

			if( empty( $PiwikUrl ) ) {

				return;

			} else {

				if ( function_exists('icl_object_id') ) {

					$lang = ICL_LANGUAGE_CODE;

				} else {

					$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

				}

				$PiwikUrl = esc_url($PiwikUrl . '?module=CustomOptOut&action=optOut&idSite=' . $PiwikSiteID . '&language=' . $lang);

			}

			$out .= '<iframe id="wpado_piwik_privacy" src="' . $PiwikUrl . '" height="220" width="100%" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe>';

			return $out;

		}

	}

}

new wpado_piwik_privacy();