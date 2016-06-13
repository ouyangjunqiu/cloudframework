<?php

/**
 * 全局授权认证组件文件
 *
 * @author banyanCheung <banyan@YJCloud.com.cn>
 * @link http://www.YJCloud.com.cn/
 * @copyright Copyright &copy; 2012-2014 YJCloud Inc
 */
/**
 * 全局授权认证组件管理类,继承自CDbAuthManager。
 *
 * @package cloud.core.components
 * @author oshine <oshine.ouyang@da-mai.com>
 */

namespace cloud\core\components;

use CDbAuthManager;

class AuthManager extends CDbAuthManager {

    /**
     * @var string 存储认证项目的表
     */
    public $itemTable = '{{auth_item}}';

    /**
     * @var string the name of the table storing authorization item hierarchy.
     */
    public $itemChildTable = '{{auth_item_child}}';

    /**
     * @var string the name of the table storing authorization item assignments. 
     */
    public $assignmentTable = '{{auth_assignment}}';

}
