<?php

/**
 * 
 * @package cloud.core.components
 * @author oShine <oshine.ouyang@da-mai.com>
 */

namespace cloud\core\components;

use cloud\Cloud;
use cloud\core\utils\File;
use CException;

abstract class Attach {

    /**
     * 上传对象
     * @var object 
     */
    protected $upload;

    /**
     * 初始化上传域
     * @param string $fileArea
     * @param string $module
     * @throws CException
     */

    public function __construct( $fileArea = 'Filedata', $module = 'temp' ) {
        $file = $_FILES[$fileArea];
        if ( $file['error'] ) {
            throw new CException( Cloud::lang( 'File is too big', 'error' ) );
        } else {
            $upload = File::getUpload( $file, $module );
            $this->upload = $upload;
        }
    }

    abstract public function upload();
}
