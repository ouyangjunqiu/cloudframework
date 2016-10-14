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
