<?php
/**
 * 本地环境上传类
 * @file LocalUpload.php
 * @author ouyangjunqiu
 * @version Created by 16/6/15 09:27
 */

namespace cloud\core\engines\local;

use cloud\Cloud;
use cloud\core\utils\File;
use cloud\core\utils\String;

class LocalUpload {

    /**
     * 附件信息数组
     * @var array
     */
    private $_attach = array();

    /**
     * 错误代码
     * @var integer
     */
    private $_errorCode = 0;

    /**
     * 初始化文件上传域
     * @param array $attach $_FILES数组
     * @param string $module 模块名
     */
    public final function __construct( $attach, $module = 'temp' ) {
        if ( !is_array( $attach ) || empty( $attach ) || !$this->isUploadFile( $attach['tmp_name'] ) || trim( $attach['name'] ) == '' || $attach['size'] == 0 ) {
            $this->_attach = array();
            $this->_errorCode = -1;
            return false;
        } else {
            $attach['type'] = $this->checkDirType( $module );
            $attach['size'] = intval( $attach['size'] );
            $attach['name'] = trim( $attach['name'] );
            $attach['thumb'] = '';
            $attach['ext'] = String::getFileExt( $attach['name'] );
            $attach['name'] = String::ihtmlSpecialChars( $attach['name'], ENT_QUOTES );
            if ( strlen( $attach['name'] ) > 90 ) {
                $attach['name'] = String::cutStr( $attach['name'], 80, '' ) . '.' . $attach['ext'];
            }
            $attach['isimage'] = $this->isImageExt( $attach['ext'] );
            $attach['attachdir'] = $this->getTargetDir( $attach['type'] );
            $attach['attachname'] = $this->getTargetFileName() . '.' . $attach['ext'];
            $attach['attachment'] = $attach['attachdir'] . $attach['attachname'];
            $attach['target'] = $attach['type'] . '/' . $attach['attachment'];
            $attach['md5'] = md5_file($attach['tmp_name']);
            $this->_attach = & $attach;
            $this->_errorCode = 0;
            return true;
        }
    }

    /**
     * 公共方法：获取attach数组
     * @return array
     */
    public function getAttach() {
        return $this->_attach;
    }

    /**
     * 获取错误代码
     * @return integer
     */
    public function getError() {
        return $this->_errorCode;
    }

    /**
     * 通用保存附件方法
     * @return boolean
     */
    public function save() {
        if ( !$this->saveToLocal( $this->_attach['tmp_name'], File::getAttachUrl()."/".$this->_attach['target'] ) ) {
            $this->_errorCode = -103;
            return false;
        } else {
            $this->_errorCode = 0;
            return true;
        }
    }

    /**
     * 本地保存文件方法
     * @param string $source
     * @param string $target
     * @return boolean
     */
    protected function saveToLocal( $source, $target ) {
        //todo: 如果这里几个if都跳过了，就会提示500，因为succeed没有定义，问题是还是没有解决根本的文件上传失败的问题，起码提示就没有
        $succeed = false;
        if ( !$this->isUploadFile( $source ) ) {
            $succeed = false;
        } elseif ( @copy( $source, $target ) ) {
            $succeed = true;
        } elseif ( function_exists( 'move_uploaded_file' ) && @move_uploaded_file( $source, $target ) ) {
            $succeed = true;
        } elseif ( @is_readable( $source ) && (@$fp_s = fopen( $source, 'rb' )) && (@$fp_t = fopen( $target, 'wb' )) ) {
            while ( !feof( $fp_s ) ) {
                $s = @fread( $fp_s, 1024 * 512 );
                @fwrite( $fp_t, $s );
            }
            fclose( $fp_s );
            fclose( $fp_t );
            $succeed = true;
        }
        if ( $succeed ) {
            $this->_errorCode = 0;
            @chmod( $target, 0644 );
            @unlink( $source );
        } else {
            $this->_errorCode = 0;
        }

        return $succeed;
    }

    /**
     * 检查是否已存在模块目录
     * @param string $module 模块名称
     * @return boolean
     */
    protected function checkDirType( $module ) {
        $modules = Cloud::app()->getEnabledModule();
        return !array_key_exists( $module, $modules ) ? 'temp' : $module;
    }

    /**
     * 检查是否上传文件
     * @param string $source 目标文件
     * @return boolean
     */
    protected function isUploadFile( $source ) {
        return $source && ($source != 'none') && (is_uploaded_file( $source ) || is_uploaded_file( str_replace( '\\\\', '\\', $source ) ));
    }

    /**
     * 检查是否图片格式后缀
     * @staticvar array $imgext 常用图片格式数组
     * @param string $ext 要检查的后缀
     * @return boolean
     */
    protected function isImageExt( $ext ) {
        static $imgext = array( 'jpg', 'jpeg', 'gif', 'png', 'bmp' );
        return in_array( $ext, $imgext ) ? 1 : 0;
    }

    /**
     * 获取目标文件夹，返回以 module/Ym/d/ 的目录形式
     * @param string $module 模块名
     * @return string
     */
    protected function getTargetDir( $module ) {
        $subDir = $ymDir = $dayDir = '';
        $ymDir = date( 'Ym' );
        $dayDir = date( 'd' );
        $subDir = $ymDir . '/' . $dayDir . '/';
        $this->checkDirExists( $module, $ymDir, $dayDir );
        return $subDir;
    }

    /**
     * 检查指定附件文件夹是否存在，适用于本地环境
     * @param string $module 模块名
     * @param string $ymDir 月份文件夹
     * @param string $dayDir 日文件夹
     * @return boolean 存在与否
     */
    protected function checkDirExists( $module, $ymDir, $dayDir ) {
        $type = $this->checkDirType( $module );
        $baseDir = File::getAttachUrl();
        $dirs = $baseDir . '/' . $type . '/' . $ymDir . '/' . $dayDir;
        $res = is_dir( $dirs );
        if ( !$res ) {
            $res = File::makeDirs( $dirs );
        }
        return $res;
    }

    /**
     * 获取随机文件名
     * @return string
     */
    protected function getTargetFileName() {
        return date( 'His' ) . strtolower( String::random( 16 ) );
    }

}