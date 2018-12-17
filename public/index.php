<?php

require_once(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'loader.php');


define('APPLICATION_CLASS', '\\base\\application_base');

require_once(BASE_PATH . 'functions.php');
app()->run();
