=== WP Override String Translations ===
Contributors: vluongo
Donate link: https://wordpress-plugins.luongovincenzo.it/#donate
Tags: gettext, ngettext, string translations, override translation, woocommerce translate
Requires at least: 4.9.0
Tested up to: 5.3
Requires PHP: 5.6
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Thanks to this plugin you can translate all the strings of your portal through the admin panel.

== Description ==

Lets you override default texts from your admin panel.<br>
The plugin trades both the Woocommerce texts and the well written Wordpress core texts and its plugins or widgets.
<br>
The plugin also allows you to replace strings with text composed of HTML.<br />
It will translate all _e('') or __('') string calls, so check the PHP sourcecode of the plugin or theme you need to translate.
<br>
It will NOT translate any dynamic strings like %s or %d, so "%s has been added to your cart." is not translatable.

== Installation ==

1. Upload directory `WP Override String Translations` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Click settings in your plugin list (or visit Settings submenu)
4. Done!

== Frequently Asked Questions ==

= How does this plugin work? =
It uses a gettext and ngettext WordPress filter


== Changelog ==

= 1.1.0 =
* Compatible with Wordpress 5.3
* bug fix

= 1.0.0 =
* First public release


== Screenshots ==

1. Original frontend string
2. Overwrite string from backend
3. Overwritten string
4. Original Woocommerce frontend string
5. Overwrite string from backend
6. Overwritten Woocommerce string with HTML
