<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015-10-10
 * Time: 11:15
 */

namespace cloud\core\model;

use cloud\core\utils\Cache;

class LocalModule
{
    /**
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