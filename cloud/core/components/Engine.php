<?php

/**
 * Cloud引擎驱动文件
 *
 * @author oshine <oshine.ouyang@da-mai.com>
 * @copyright Copyright &copy; 2012-2014 YJCloud Inc
 */
/**
 * 引擎驱动抽象父类,初始化程序配置文件，提供IO与初始化配置接口给子类扩展
 * 
 * @package cloud.core.components
 * @author oshine <oshine.ouyang@da-mai.com>
 * @version $Id$
 */

namespace cloud\core\components;

abstract class Engine {

    /**
     * 当前引擎处理过后的配置文件
     * @var array 
     */
    private $_engineConfig;

    /**
     * 主配置文件数组
     * @var array 
     */
    private $_mainConfig;

    /**
     * 构造方法，初始化安装config与程序config,调用子类特定的引擎配置方法
     * @param array $appConfig 程序配置数组
     */
    final function __construct( $appConfig ) {
        $mainConfig = require_once ( ENV_CONFIG );
        $this->_mainConfig = $mainConfig;
        $this->_engineConfig = $this->initConfig( $appConfig, $mainConfig );
        $this->init();
    }

    /**
     * 主配置文件：即安装程序生成的配置文件
     * @return array
     */
    public function getMainConfig() {
        return (array) $this->_mainConfig;
    }

    /**
     * 获取当前引擎处理过后的配置文件
     * @return array
     */
    public function getEngineConfig() {
        return (array) $this->_engineConfig;
    }

    /**
     * 开始配置前的预处理，子类应重新实现该方法
     * @return void
     */
    protected function init() {
        
    }

    /**
     * 子类应实现初始化各自引擎的配置文件方法
     */
    abstract protected function initConfig( $appConfig, $mainConfig );

    /**
     * io 接口
     */
    abstract public function io();
}
