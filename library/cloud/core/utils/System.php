<?php

namespace cloud\core\utils;

use CApplicationComponent;

class System extends CApplicationComponent {

    /**
     * 单例应用对象
     * @var object 
     */
    private static $_instances = array();

    /**
     * 单例化api
     * @param string $className
     * @return System
     */
    public static function getInstance( $className = __CLASS__ ) {
        if ( isset( self::$_instances[$className] ) ) {
            return self::$_instances[$className];
        } else {
            $instance = self::$_instances[$className] = new $className();
            return $instance;
        }
    }

}
