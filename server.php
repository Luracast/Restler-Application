<?php
define('WEB_FOLDER', __DIR__ . '/public/');

if (file_exists(WEB_FOLDER . $_SERVER['REQUEST_URI'])) {
    return false; // serve the requested resource as-is.
} else {
    include WEB_FOLDER . 'index.php';
}
