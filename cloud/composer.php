<?php
/** cloud root directory */
if (!defined('CLOUD_ROOT')) {
    define('CLOUD_ROOT', dirname(__FILE__) . '/');
    require(CLOUD_ROOT . 'Autoloader.php');

    cloud\Autoloader::register();
}