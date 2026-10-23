<?php
defined('ABSPATH') || exit;
/**
 * Standalone page template. Intentionally does NOT call the theme header or cart scripts:
 * the internal BFCM review is static and cannot create orders or change Woo cart state.
 * Do not connect Woo/Bolt until campaign eligibility has been approved and tested.
 */
$preview = plugin_dir_path(__DIR__) . 'assets/bfcm-preview.html';
if (!is_readable($preview)) {
    status_header(503);
    echo 'TTF preview asset unavailable.';
    exit;
}
nocache_headers();
header('X-Robots-Tag: noindex, nofollow', true);
readfile($preview);
exit;
