<?php

/**
 * YJCloud本地环境引擎
 *
 * @package application.core.engines
 * @author banyanCheung <banyan@YJCloud.com.cn>
 * @version $Id: local.php 3049 2014-04-09 01:19:23Z zhangrong $
 */

namespace cloud\core\engines;

use cloud\Cloud;
use cloud\core\components\Engine;
use cloud\core\engines\local\LocalIo;
use CMap;

class Local extends Engine {

    /**
     * 本地引擎初始化配置方法
     * @param array $appConfig 程序配置
     * @param array $mainConfig 安装配置
     * @return array 处理后的配置
     */
    public function initConfig( $appConfig, $mainConfig ) {
        // 本地环境使用安装时配置的数据库信息
        $databases = isset($mainConfig["databases"]) && is_array($mainConfig["databases"])?$mainConfig["databases"]:array();

        $components = array();
        foreach($databases as $key => $value){
            $connectionString = "mysql:host={$value['host']};port={$value['port']};dbname={$value['dbname']}";
            $components[$key] = array(
                'class' => '\CDbConnection',
                'connectionString' => $connectionString,
                'username' => $value['username'],
                'password' => $value['password'],
                'tablePrefix' => $value['tableprefix'],
                'charset' => $value['charset']
            );
        }
        $config = array(
            'runtimePath' => PATH_ROOT . DIRECTORY_SEPARATOR . 'data/runtime',
            'language' => $mainConfig['env']['language'],
            'theme' => $mainConfig['env']['theme'],
            'components' => $components
        );
        unset($mainConfig['databases']);
        unset($mainConfig['env']);
        return CMap::mergeArray( $appConfig, $config ,$mainConfig);
    }

    /**
     * 获取 IO 接口
     * @staticvar null $io
     * @return \cloud\core\engines\local\LocalIo
     */
    public function io() {
        static $io = null;
        if ( $io == null ) {
            $io = new LocalIo();
        }
        return $io;
    }

    /**
     * 设置别名，加载驱动路径
     * @return void
     */
    protected function init() {
        // 设置data别名
        Cloud::setPathOfAlias( 'data', PATH_ROOT . DIRECTORY_SEPARATOR . 'data' );
        // 设置引擎驱动别名
        Cloud::setPathOfAlias( 'engineDriver', Cloud::getPathOfAlias( 'cloud.core.engines.local' ) );
    }

}
