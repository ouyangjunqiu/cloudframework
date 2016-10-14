<?php

namespace cloud\core\modules;

use CEvent;
use CWebModule;

class Module extends CWebModule {

    /**
     * 模块初始化方法，重写控制器的命名空间，2执行所有模块注册的初始化行为
     */
    final protected function init() {
        $this->controllerNamespace = 'application\modules\\' . $this->getId() . '\controllers';
        parent::init();
    }
	
}
