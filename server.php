<?php
define('WEB_FOLDER', __DIR__ . '/public/');

$request = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);

if (file_exists(WEB_FOLDER . $request)) {
    return false; // serve the requested resource as-is.
} else {
    include WEB_FOLDER . 'index.php';
}