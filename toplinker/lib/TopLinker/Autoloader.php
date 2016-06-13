<?php
define('TOPLINKER_PATH', dirname(dirname(__FILE__)));

class TopLinker_Autoloader
{
    /**
     * @param string $className
     */
    public static function autoload($className)
    {
        $fileName = TOPLINKER_PATH . DIRECTORY_SEPARATOR . str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';
        if (file_exists($fileName)) {
            require $fileName;
            return true;
        }
        return false;
    }

    public static function register()
    {
        spl_autoload_register(array('TopLinker_Autoloader', 'autoload'));
    }
}
