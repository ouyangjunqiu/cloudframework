<?php

/**
 * 分页工具类文件
 *
 * @author banyanCheung <banyan@YJCloud.com.cn>
 * @link http://www.YJCloud.com.cn/
 * @copyright Copyright &copy; 2012-2013 YJCloud Inc
 */
/**
 * 分页工具类,提供封装分页对象方法。
 * 
 * @package application.core.utils
 * @version $Id: Page.php 4064 2014-09-03 09:13:16Z zhangrong $
 * @author banyanCheung <banyan@YJCloud.com.cn>
 */

namespace cloud\core\utils;

use CDbCriteria;
use CPagination;

class Page extends CPagination {

    /**
     * 静态pagination实例
     * @var mixed 
     */
    private static $instance;

    /**
     * 静态调用单例模式
     * @return mixed
     */
    public static function getInstance() {
        if ( self::$instance == null ) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * 创建page对象以供调用
     * @param integer $count 记录数
     * @param integer $pageSize 每页显示条数
     * @param bool $usingDb
     * @return mixed
     */
    public static function create( $count, $pageSize = self::DEFAULT_PAGE_SIZE, $usingDb = true ) {
        self::getInstance()->setPageSize( $pageSize );
        self::getInstance()->setItemCount( $count );
        if ( $usingDb ) {
            $criteria = new CDbCriteria(
                    array( 'limit' => self::getInstance()->getLimit(), 'offset' => self::getInstance()->getOffset() )
            );
            self::getInstance()->applyLimit( $criteria );
        }
        return self::$instance;
    }

}
