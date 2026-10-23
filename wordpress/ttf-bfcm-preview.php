<?php
/**
 * Plugin Name: TTF BFCM Landing Preview
 * Description: Isolated, review-only BFCM landing page; does not change checkout or WooCommerce settings.
 * Version: 0.1.0
 * Requires PHP: 7.4
 * Text Domain: ttf-bfcm-preview
 */
defined('ABSPATH') || exit;
add_filter('theme_page_templates', static function ($templates) {
    $templates['ttf-bfcm-preview-template.php'] = 'TTF BFCM Landing (review only)';
    return $templates;
});
add_filter('template_include', static function ($template) {
    if (is_singular('page') && get_page_template_slug(get_queried_object_id()) === 'ttf-bfcm-preview-template.php') {
        return plugin_dir_path(__FILE__) . 'templates/ttf-bfcm-template.php';
    }
    return $template;
}, 99);
