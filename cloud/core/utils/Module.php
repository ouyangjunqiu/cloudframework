<?php

namespace cloud\core\utils;

/**
 * Class Module
 * @package cloud\core\utils
 * @author oShine <oshine.ouyang@da-mai.com>
 */
class Module
{
    /**
     * 获取所有可用的模块
     * @return array
     */
    public static function fetchAllModuleByCache()
    {
        $module = Cache::get('module');
        if ($module == false) {
            $module = self::fetchAllModule();
            Cache::set('module', $module);
        }
        return $module;
    }

    /**
     * @return array
     */
    public static function fetchAllModule(){
        $module = array();
        $modulePath = PATH_SYSTEM."/modules";
        if ($dh = opendir($modulePath)) {
            while (($file = readdir($dh)) !== false) {
                if (is_dir($modulePath . "/" . $file) && $file != "." && $file != ".." && file_exists($modulePath . "/" . $file . "/install/config.php")) {
                    $module[$file] = require_once $modulePath . "/" . $file . "/install/config.php";
                }
            }
            closedir($dh);
        }
        return $module;
    }

}