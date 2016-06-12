<?php

/**
 * YJCloud本地IO文件
 *
 * @author banyanCheung <banyan@YJCloud.com.cn>
 * @link http://www.YJCloud.com.cn/
 * @copyright Copyright &copy; 2012-2013 YJCloud Inc
 */
/**
 * 本地IO,实现IO接口
 * 
 * @package ext.enginedriver.local
 * @author banyanCheung <banyan@YJCloud.com.cn>
 * @version $Id: LocalIO.php 3557 2014-06-04 07:54:57Z zhangrong $
 */

namespace cloud\core\engines\local;

use cloud\core\components\Upload;
use cloud\core\engines\Io;

class LocalIo extends Io {

    /**
     * 本地IO上传接口
     * @param array $fileArea 文件上传域
     * @param string $module 对应的模块
     * @return Upload
     */
    public function upload( $fileArea, $module ) {
        return new Upload( $fileArea, $module );
    }

    /**
     * 本地IO文件操作接口
     * @return object
     */
    public function file() {
        return LocalFile::getInstance();
    }

}
