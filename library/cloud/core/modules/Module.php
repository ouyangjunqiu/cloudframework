<?php

namespace cloud\core\modules;

use CEvent;
use cloud\Cloud;
use CWebModule;

class Module extends CWebModule {
	protected $__MODULE__;
	private $_tips = '&#x6A21;&#x5757;&#x9519;&#x8BEF;&#xFF01;&#x7248;&#x672C;&#x4E0D;&#x7B26;&#x5408;&#x8981;&#x6C42;&#x3002;';
	
	protected function preinit() {
		parent::preinit();
        $this->__MODULE__ =  $this->getId();
	}
    /**
     * 模块初始化方法，重写控制器的命名空间，2执行所有模块注册的初始化行为
     */
    final protected function init() {
		if (empty($this->__MODULE__)) {	exit($this->_tips);	}
        $this->controllerNamespace = 'application\modules\\' . $this->__MODULE__ . '\controllers';
        if ( Cloud::app()->hasEventHandler( 'onInitModule' ) ) {
            Cloud::app()->onInitModule( new CEvent( Cloud::app() ) );
        }
        parent::init();
    }
	
}
