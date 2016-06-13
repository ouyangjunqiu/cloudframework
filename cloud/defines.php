<?php

/**
 * 全局常量定义文件
 *
 * @author oShine
 */
define( 'PATH_SYSTEM', PATH_ROOT . DIRECTORY_SEPARATOR . 'system');
define( 'PATH_DATA', PATH_ROOT . DIRECTORY_SEPARATOR . 'data');
define( 'PATH_MODULES', PATH_SYSTEM . DIRECTORY_SEPARATOR . 'modules');

if(file_exists(PATH_DATA."/deploy")){
    defined( 'DEBUG' ) or define( 'DEBUG', false );
    defined( 'PATH_ENV_DATA' ) or define( 'PATH_ENV_DATA', PATH_DATA.DIRECTORY_SEPARATOR."production");

}else{
    defined( 'DEBUG' ) or define( 'DEBUG', true );
    defined( 'PATH_ENV_DATA' ) or define( 'PATH_ENV_DATA', PATH_DATA.DIRECTORY_SEPARATOR."development");
    error_reporting( E_ALL | E_STRICT );
}

defined( 'ENV_CONFIG' ) or define( 'ENV_CONFIG', PATH_ENV_DATA.DIRECTORY_SEPARATOR."config.php" );

defined( 'ENGINE' ) or define( 'ENGINE', 'LOCAL' );            // 引擎 默认为本地引擎

// 是否本地环境
define( 'LOCAL', strtolower( ENGINE ) === 'local' ? true : false  );
// 字符编码
define( 'CHARSET', 'utf-8' );
// 调试模式
defined( 'YII_DEBUG' ) or define( 'YII_DEBUG', DEBUG );
// 错误等级
define( 'YII_TRACE_LEVEL', DEBUG ? 3 : 0  );

define('VERSION', '1.0.1');

define('PAGE_SIZE',20);

$ExpStr = "Expires: " . gmdate("D, d M Y H:i:s", time() + 300) . " GMT";
defined('CACHE_EXPIRES') or define('CACHE_EXPIRES',$ExpStr);