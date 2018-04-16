<?php

spl_autoload_register(function($name) {
    $path = explode('\\',$name);
    $name = array_pop($path);
    $parts = explode('_', $name);
    $type = end($parts);

    $filepath = APP_PATH . $type . DIRECTORY_SEPARATOR . $name . '.php';

    if (!file_exists($filepath)) {
        return false;
    }

    require($filepath);
});

chdir(__DIR__);
define('APP_PATH', __DIR__ . DIRECTORY_SEPARATOR . 'application' . DIRECTORY_SEPARATOR);



require_once('application.php');
$application = new application();