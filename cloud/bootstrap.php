<?php
if ( version_compare( PHP_VERSION, '5.3.0', '<' ) ) {
    die( 'require PHP > 5.3.0 !' );
}

defined('PATH_ROOT') or define( 'PATH_ROOT', dirname(dirname(dirname( __FILE__ ))) );
$cloud = PATH_ROOT . '/library/cloud/composer.php';
require_once ( $cloud );

$phpexcel = PATH_ROOT . '/library/phpexcel/PHPExcel.php';
require_once ( $phpexcel );

$toplinker = PATH_ROOT . '/library/toplinker/lib/composer.php';
require_once ( $toplinker );

$defines = PATH_ROOT . '/library/cloud/defines.php';
$yii = PATH_ROOT . '/library/yii/yii.php';
$config = PATH_ROOT . '/library/cloud/config/common.php';
require_once ( $defines );
require_once ( $yii );

Yii::setPathOfAlias( 'application', PATH_ROOT . DIRECTORY_SEPARATOR . 'system' );



