<?php

/**
 * YJCloud本地文件 处理类
 *
 * @author banyanCheung <banyan@YJCloud.com.cn>
 * @link http://www.YJCloud.com.cn/
 * @copyright Copyright &copy; 2012-2013 YJCloud Inc
 */
/**
 * 本地文件处理类，基本上就是php文件函数的封装,实现IO接口
 * 
 * @package ext.enginedriver.local
 * @author banyanCheung <banyan@YJCloud.com.cn>
 * @version $Id: file.php 3934 2014-08-11 09:32:26Z gzhzh $
 */

namespace cloud\core\engines\local;


class LocalFile {

	private static $_instance;

	/**
	 * 扫描文件夹时忽略的文件夹
	 * @var array 
	 */
	public $excludeFiles = array( '.svn', '.gitignore', '.', '..' );

	public static function getInstance() {
		if ( self::$_instance == null ) {
			self::$_instance = new self;
		}
		return self::$_instance;
	}

	/**
	 * 本地data文件夹文件的文件存在检测
	 * 对应云平台的storage目录
	 * @param string $file 文件名
	 * @return boolean
	 */
	public function fileExists( $file ) {
		return file_exists( $file );
	}

	/**
	 * 本地data文件夹的写操作
	 * 对应云平台的storage目录
	 * @param string $fileName
	 * @param mixed $content
	 * @return int|false
	 */
	public function createFile( $fileName, $content ) {
		return file_put_contents( $fileName, $content );
	}

	/**
	 * 本地data文件夹的删除操作
	 * 对应云平台的storage目录
	 * @param string $fileName
	 * @return boolean
	 */
	public function deleteFile( $fileName ) {
		return @unlink( $fileName );
	}

	/**
	 * 本地文件名读取操作
	 * @param string $fileName
	 * @return string
	 */
	public function fileName( $fileName ) {
		return sprintf( '%s', $fileName );
	}

	/**
	 * 本地读取文件内容函数
	 * @param string $fileName
	 * @return string
	 */
	public function readFile( $fileName ) {
		return file_get_contents( $fileName );
	}

	/**
	 * 本地环境文件大小：直接调用filesize
	 * @param string $file 文件名
	 * @return integer 文件大小字节数
	 */
	public function fileSize( $file ) {
		return sprintf( '%u', filesize( $file ) );
	}

	/**
	 * 本地环境图像尺寸获取：直接调用getimagesize
	 * @param string $image 图像地址
	 * @return mixed
	 */
	public function imageSize( $image ) {
		if ( filesize( $image ) ) {
			return getimagesize( $image );
		} else {
			return false;
		}
	}

	/**
	 * 本地环境获取临时目录：返回data/temp目录
	 * @return string
	 */
	public function getTempPath() {
		return sprintf( '%s', 'data/temp' );
	}

	/**
	 * 清空目录下文件
	 * @param string $dir 目录名
	 * @return void
	 */
	public function clearDir( $dir ) {
		$directory = @dir( $dir );
		if ( is_object( $directory ) ) {
			while ( $entry = $directory->read() ) {
				$file = $dir . DIRECTORY_SEPARATOR . $entry;
				if ( is_file( $file ) ) {
					@unlink( $file );
				}
			}
			$directory->close();
			@touch( $dir . '/index.htm' );
		}
	}

	/**
	 * 递归清空目录包括目录本身
	 * @param string $srcDir 目标文件夹路径
	 */
	public function clearDirs( $srcDir ) {
		$dir = @opendir( $srcDir );
		while ( $entry = @readdir( $dir ) ) {
			$file = $srcDir . DIRECTORY_SEPARATOR . $entry;
			if ( !in_array( $entry, $this->excludeFiles ) ) {
				if ( is_dir( $file ) ) {
					$this->clearDirs( $file . DIRECTORY_SEPARATOR );
				} else {
					@unlink( $file );
				}
			}
		}
		closedir( $dir );
		@rmdir( $srcDir );
	}

}
