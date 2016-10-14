<?php
/**
 * 引擎驱动抽象父类,初始化程序配置文件，提供IO与初始化配置接口给子类扩展
 * 
 * @package cloud.core.components
 * @author oshine <oshine.ouyang@da-mai.com>
 * @version $Id$
 */

namespace cloud\core\components;

use cloud\core\engines\Local;

abstract class Engine {

    /**
     * 当前引擎处理过后的配置文件
     * @var array 
     */
    protected $_config;


    private static $instance = null;

    public static function factory(){

        if(self::$instance !== null && self::$instance instanceof Engine)
            return self::$instance;

        if(file_exists(PATH_DATA."/deploy")){
            defined( 'DEBUG' ) or define( 'DEBUG', false );

            $config = require_once PATH_DATA.DIRECTORY_SEPARATOR."production".DIRECTORY_SEPARATOR."config.php";
            self::$instance = new Local($config);

        }else{
            defined( 'DEBUG' ) or define( 'DEBUG', true );
            error_reporting( E_ALL | E_STRICT );

            $config = require_once PATH_DATA.DIRECTORY_SEPARATOR."development".DIRECTORY_SEPARATOR."config.php";
            self::$instance = new Local($config);
        }

        defined( 'YII_DEBUG' ) or define( 'YII_DEBUG', DEBUG );

        // 错误等级
        define( 'YII_TRACE_LEVEL', DEBUG ? 3 : 0  );

        return self::$instance;
    }

    /**
     * @param array $config 程序配置数组
     */
    public function __construct( $config ) {

        $this->setConfig($config);
        $this->init();
    }


    /**
     * 获取当前引擎处理过后的配置文件
     * @return array
     */
    public function getConfig() {
        return (array) $this->_config;
    }

    /**
     * 开始配置前的预处理，子类应重新实现该方法
     *
     * @return void
     */
    protected function init() {
        
    }

    /**
     * @param $config
     * @return mixed
     */
    public function setConfig( $config ){
        $this->_config = $config;
    }

    /**
     * io 接口
     */
    abstract public function io();
}
