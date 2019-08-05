<?php

/**
 * Plugin Name: WP Override Translations
 * Plugin URI: https://wordpress-plugins.luongovincenzo.it/#wp-override-translations
 * Description: Thanks to this plugin you can translate all the strings of your portal through the admin panel.
 * Donate URI: https://wordpress-plugins.luongovincenzo.it/#donate
 * Version: 1.0.0
 * Author: Vincenzo Luongo
 * Author URI: https://wordpress-plugins.luongovincenzo.it/
 * License: GPLv2 or later
 * Text Domain: wp-override-translations
 */
define('WP_OVERRIDE_TRANSLATIONS', 'wp_override_translations_options');
define('WP_OVERRIDE_TRANSLATIONS_LINES', 'wp_override_translations_options_lines');

define('WP_OVERRIDE_TRANSLATIONS_PLUGIN_URL', plugin_dir_url(__FILE__));
define('WP_OVERRIDE_TRANSLATIONS_PLUGIN_DIR', plugin_dir_path(__FILE__));

class WP_Override_Translations_Init {

    public function __construct() {
        if (!is_admin()) {
            require_once('php/frontend.php');
            $WP_Override_Translations = new WP_Override_Translations();
        }

        if (is_admin()) {
            require_once('php/admin.php');
            $WP_Override_Translations_Admin = new WP_Override_Translations_Admin();
        }
    }

}

$WP_Override_Translations_Init = new WP_Override_Translations_Init();
?>
