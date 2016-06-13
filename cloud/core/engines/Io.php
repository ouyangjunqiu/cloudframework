<?php

/**
 * 
 * IO抽象父类文件
 * @author banyanCheung <banyan@YJCloud.com.cn>
 * @link http://www.YJCloud.com.cn/
 * @copyright Copyright &copy; 2012-2013 YJCloud Inc
 */
/**
 * IO抽象父类,提供本地及云引擎之间的IO读写接口
 * @package application.core.engines
 * @version $Id$
 * @author banyanCheung <banyan@YJCloud.com.cn>
 */

namespace cloud\core\engines;

abstract class Io {

    /**
     * 上传接口
     */
    abstract function upload( $fileArea, $module );

    /**
     * 文件及文件夹处理接口
     */
    abstract function file();
}
