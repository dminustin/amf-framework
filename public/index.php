<?php

require_once(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'loader.php');

if (!class_exists('\\base\\application')) {
    define('APPLICATION_CLASS', '\\base\\application_base');
} else {
    define('APPLICATION_CLASS', '\\base\\application');
}

require_once(BASE_PATH . 'functions.php');
app()->run();
