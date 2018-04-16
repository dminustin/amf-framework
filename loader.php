<?php

spl_autoload_register(function($name) {
    $filepath = APP_PATH . str_replace('\\', DIRECTORY_SEPARATOR, $name) . '.php';
    if (!file_exists($filepath)) {
        return false;
    }

    require($filepath);
});

chdir(__DIR__);
define('APP_PATH', __DIR__ . DIRECTORY_SEPARATOR . 'application' . DIRECTORY_SEPARATOR);
require('vendor/autoload.php');
