<?php
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
use cloud\core\utils\Convert;
use cloud\core\utils\Module;
use CWebApplication;
use CMap;

class Application extends CWebApplication {

    /**
     * 已安装的模块
     * @var array 
     */
    private $_enabledModule = array();

    protected function preinit(){
        if ( function_exists( 'date_default_timezone_set' ) ) {
            @date_default_timezone_set('PRC');
        }

        if ( function_exists( 'ini_get' ) ) {
            $memorylimit = @ini_get( 'memory_limit' );
            if ( $memorylimit && Convert::ConvertBytes( $memorylimit ) < 33554432 && function_exists( 'ini_set' ) ) {
                ini_set( 'memory_limit', '128m' );
            }
        }
        parent::preinit();
    }

    /**
     * 初始化方法：设置授权，配置所有已安装的模块
     * @return void
     */
    protected function init() {
        $this->_enabledModule = Module::fetchAllModule();
        foreach ( $this->getEnabledModule() as $name => $config ) {
            if ( isset( $config['config'] ) ) {
                parent::configure( $config['config'] );
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
        $engine = Cloud::engine();
        $config = CMap::mergeArray($config,$engine->getConfig());
        parent::configure( $config );
    }


    /**
     * Processes the current request.
     * It first resolves the request into controller and action,
     * and then creates the controller to perform the action.
     */
    public function processRequest()
    {
        if(is_array($this->catchAllRequest) && isset($this->catchAllRequest[0]))
        {
            $route=$this->catchAllRequest[0];
            foreach(array_splice($this->catchAllRequest,1) as $name=>$value)
                $_GET[$name]=$value;
        }
        else
            $route=$this->getUrlManager()->parseUrl($this->getRequest());

        defined('STATICURL') OR define( 'STATICURL', $this->getAssetManager()->getBaseUrl() );

        $this->runController($route);
    }


    /**
     * 返回可用的模块数组
     * @return array
     */
    public function getEnabledModule() {
        return (array) $this->_enabledModule;
    }

}
