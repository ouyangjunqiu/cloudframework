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

use CException;
use cloud\Cloud;
use cloud\core\engines\Io;

class LocalIo extends Io {

    /**
     * @param $fileArea
     * @param $module
     * @return LocalUpload
     * @throws CException
     */
    public function upload( $fileArea, $module ) {
        if(empty($_FILES[$fileArea])){
            throw new CException(Cloud::lang( 'File area empty', 'error' ) );
        }

        return new LocalUpload( $_FILES[$fileArea], $module );
    }

    /**
     * 本地IO文件操作接口
     * @return object
     */
    public function file() {
        return LocalFile::getInstance();
    }

    /**
     * @return string
     */
    function getBasePath()
    {
        // TODO: Implement getBasePath() method.
        return PATH_DATA.DIRECTORY_SEPARATOR."attach";
    }
}
