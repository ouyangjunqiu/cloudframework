<?php

namespace cloud;

class Autoloader
{
    /**
     * @param string $className
     * @return bool
     */
    public static function autoload($className)
    {
        if(false === ($firstNsPos = stripos($className, '\\'))){
            return false;
        }

        $namespace = substr($className, 0, $firstNsPos);
        if(strtolower($namespace) != "cloud"){
            return false;
        }

        $includePath = dirname(dirname(__FILE__));
        $fileName = $includePath.DIRECTORY_SEPARATOR.str_replace('\\', DIRECTORY_SEPARATOR, $className). '.php';

        if (file_exists($fileName)) {
            require $fileName;
            return true;
        } else {
            return false;
        }
    }

    public static function register()
    {
        spl_autoload_register(array("cloud\\Autoloader", 'autoload'));
    }

}
