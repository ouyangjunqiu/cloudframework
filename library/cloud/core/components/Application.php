<?php

/**
 * Cloud 应用程序组件
 *
 * @author banyanCheung <banyan@YJCloud.com.cn>
 * @link http://www.YJCloud.com.cn/
 * @copyright Copyright &copy; 2012-2014 YJCloud Inc
 */
/**
 * Application,模块及分发控制器
 * @package cloud.core.components
 * @author oShine <oshine.ouyang@da-mai.com>
 */

namespace cloud\core\components;

use CAction;
use CController;
use CEvent;
use cloud\Cloud;
use cloud\core\utils\Module;
use CWebApplication;

class Application extends CWebApplication {

    /**
     * 已安装的模块
     * @var array 
     */
    private $_enabledModule = array();

    /**
     * 初始化方法：设置授权，配置所有已安装的模块
     * @return void
     */
    protected function init() {
        if ( !defined( 'IN_DEBUG' ) ) {
            $this->_enabledModule = Module::fetchAllModule();
            foreach ( $this->getEnabledModule() as $name => $config ) {
                if ( isset( $config['behaviors'] ) ) {
                    $this->attachBehaviors( $config['behaviors'] );
                }
                if ( isset( $config['config'] ) ) {
                    parent::configure( $config['config'] );
                }
            }
        }
        parent::init();
    }

    /**
     * 重写配置方法实现平台引擎驱动
     * @param array $config
     */
    public function configure( $config ) {
        // 初始化ENGINE定义的引擎驱动
        $engineClass = 'cloud\core\engines\\' . ( ucfirst( strtolower( ENGINE ) ) );
        $engine = new $engineClass( $config );
        Cloud::setEngine( $engine );
        parent::configure( $engine->getEngineConfig() );
    }

    /**
     * 当模块完成配置时发起一个事件
     * @param CEvent $event 事件参数
     * @return void 
     */
    public function onInitModule( $event ) {
        $this->raiseEvent( 'onInitModule', $event );
    }

    /**
     * 当更新缓存时发起一个事件
     * @param CEvent $event 事件参数
     * @return void
     */
    public function onUpdateCache( $event ) {
        $this->raiseEvent( 'onUpdateCache', $event );
    }

    /**
     * 返回可用的模块数组
     * @return array
     */
    public function getEnabledModule() {
        return (array) $this->_enabledModule;
    }

}
