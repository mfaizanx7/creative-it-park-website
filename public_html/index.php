<?php
/**
 * public_html/index.php
 * Root index — forwards all requests into the Laravel public/ folder
 */

$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?? '');

// Strip leading slash
$uri = ltrim($uri, '/');

// If the file exists directly inside public/, serve it (assets: css, js, images)
$publicPath = __DIR__ . '/public/' . $uri;
if ($uri !== '' && file_exists($publicPath) && !is_dir($publicPath)) {
    return false;
}

// Otherwise hand off to Laravel's public/index.php
require_once __DIR__ . '/public/index.php';