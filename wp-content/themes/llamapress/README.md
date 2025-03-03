# LlamaPress Theme
This is a basic, bare-bones block theme built to implement custom designs using the WordPress Site Editor. With no fancy patterns or style variations, this theme provides a clean and simple starting point for the majority of WordPress-based projects.

## Frequently Asked Questions

### How can I implement a custom design?
Use the WordPress Site Editor to impliment your custom designs (more info here https://wordpress.org/documentation/article/site-editor/).

### Can I add custom fonts?
Currently, the recommended method is to use the `wp_theme_json_data_theme` filter in your own plugin (more info here https://make.wordpress.org/core/2022/10/10/filters-for-theme-json-data/), or a third-party solution.

### Can I override theme.json settings?
It is likley that the setting you would like to change can be overridden in the Site Editor. If the setting is unavailable from the Site Editor, it is recommended that you use the `wp_theme_json_data_theme` filter in your own plugin (more info here https://make.wordpress.org/core/2022/10/10/filters-for-theme-json-data/).

## Changelog

### 1.1.0
March 08, 2023:
* First public release.