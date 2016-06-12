<?php

/**
 * 规则表文件Regular
 *
 * @link http://www.YJCloud.com.cn/
 * @copyright Copyright &copy; 2008-2013 YJCloud Inc
 * @author gzhzh <gzhzh@YJCloud.com.cn>
 */
/**
 * 规则表的模型处理类------  resume_contact表的数据层操作类，继承ICModel
 * @package cloud.core.model
 * @version $Id: ResumeContact.php 1500 2013-10-12 10:39:49Z gzhzh $
 * @author gzhzh <gzhzh@YJCloud.com.cn>
 */

namespace cloud\core\model;

use cloud\core\utils\Convert;

class Regular extends model {

    /**
     * @param string $className
     * @return Regular
     */
    public static function model( $className = __CLASS__ ) {
        return parent::model( $className );
    }

    /**
     * @return string
     */
    public function tableName() {
        return '{{regular}}';
    }

    /**
     * 
     * @param string $type 所要对应的验证类型
     * @return array 返回符合条件的一条验证规则
     */
    public function fetchFieldRuleByType( $type ) {
        $regular = $this->findByAttributes( array( 'type' => $type ) );
        return $regular;
    }

    /**
     * 获取所有验证规则的类型
     * @return array 返回一个所有验证规则类型的一维数组
     */
    public function fetchAllFieldRuleType() {
        $allFieldRule = $this->fetchAll( array( 'select' => 'type' ) );
        $allFieldRuletype = Convert::getSubByKey( $allFieldRule, 'type' );
        return $allFieldRuletype;
    }

}
