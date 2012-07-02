=== Gravity Forms - Placeholders add-on ===
Contributors: neojp
Tags: gravityforms, gravity, forms, placeholders, html5, jquery.placeholders.js
Requires at least: 3.0
Tested up to: 3.4.1
Stable tag: 1.2.1

Adds HTML5 placeholder support to Gravity Forms' fields with a Javascript fallback. Javascript & jQuery are required.


== Description ==

Adds HTML5 placeholder support to the Gravity Forms plugin copying the Field's label as the placeholder and hidding it. Javascript fallback is used for old browsers that don't support the HTML5 placeholder attribute.

You can find the source code at the GitHub repository, forks and pull requests are welcomed.
http://github.com/neojp/gravity-forms-placeholders/


== Installation ==

1. Upload all files to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in the WordPress Admin Panel
3. Add the CSS class `gplaceholder` to text fields or textareas as needed, you can also add it to the form itself to enable this feature to all fields within it.


== Changelog ==

= 1.2.1 =
* Fix IE7 member not found error

= 1.2 =
* Fix the enqueuing urls of Javascript files when using a Symlink as the plugins directory

= 1.1.1 =
* Rename variable url to jquery_placeholder_url

= 1.1 =
* Rename gf.placeholders.js.php to gf.placeholders.js
* Append a jquery.placeholder.js url as a js variable on the <head> tag instead of using php on gf.placeholders.js.php - improves performance by using static files
* Always request a cached version of jquery.placeholder-1.0.1.js
* Remove Modernizr support, use our simpler conditional - js performance improvement
* Improved input and textarea filtering, added support for new HTML5 input types, eg. email, url, tel
* Improved Javascript performance

= 1.0 =
* Initial version.


== GitHub source code ==

You can find the source code at the GitHub repository, forks and pull requests are welcomed.
http://github.com/neojp/gravity-forms-placeholders/