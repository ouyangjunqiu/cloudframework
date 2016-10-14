<?php

/**
 * 程序启动配置文件
 *
 * @author oshine <oyjqdlp@126.com>
 */
return array(
    // 程序根目录
    'basePath' => PATH_ROOT . DIRECTORY_SEPARATOR . 'system',
    // 程序名称
    'name' => '云项目平台',
    // 默认控制器 - 主模块下的index
    'defaultController' => 'main/default/index',
    // 框架核心语言
    'sourceLanguage' => 'zh_cn',
    'charset' => CHARSET,
    // 定义所用组件
    'components' => array(
        // --------- 全局与系统组件 ---------
        // 浏览器组件，检测用户浏览器版本及信息
        'browser' => array( 'class' => 'cloud\core\components\Browser' ),

		'request'=>array( 'class'=>'cloud\core\components\Request' ),
        // 基础数据库配置，详细的会在engine配置
        'db' => array(
            'enableProfiling' => YII_DEBUG,
            'emulatePrepare' => true
        ),
        'urlManager' => array(
            'class'=> 'cloud\core\components\UrlManager'
        ),
        // 日志记录组件
        'log' => array(
            'class' => '\CLogRouter',
            'routes' => array(
                array(
                    'class' => '\CFileLogRoute',
                    'levels' => 'error',
                    'logFile'=>'application.'.date("Ymd").'.log'
                ),
            ),
        ),

        // 主题管理组件
        'themeManager' => array(
            'basePath' => PATH_ROOT . DIRECTORY_SEPARATOR . 'system/theme',
            'class' => 'cloud\core\components\ThemeManager',
        ),
        // 资源管理组件
        'assetManager' => array( 'class' => 'cloud\core\components\AssetManager' ),

        //语言包基本目录和扩展目录配置
        'messages' => array(
            'class' => 'cloud\core\components\MessageSource',
            'basePath' => PATH_ROOT . DIRECTORY_SEPARATOR . 'system/language'
        ),

        //Setting
        'setting' => array(
            'class' => 'cloud\core\components\Setting'
        ),
        // 性能检测组件，部署模式可删除掉这行
        'performance' => array(
            'class' => 'cloud\core\components\PerformanceMeasurement'
        ),

        // 全局缓存组件
        'cache' => array(
            'class' => 'cloud\core\components\Cache',
            'options' => array(
                'type' => '', // 数据缓存类型,支持:file|db|apc|memcache|shmop|sqlite|xcache|apachenote|eaccelerator,默认为file
                'prefix' => '',
                'subdir' => true,
                'time' => 0,
                'compress' => true,
                'check' => false,
                'level' => 1,
            )
        ),

    ),
    'params' => array(
        // Yii版本
        'yiiVersion' => '1.1.13',
        'supportedLanguages' => array(
            'en' => 'English',
            'cn' => 'zh-cn',
        ),
        // 默认翻每页的页数
        'basePerPage' => 10,
        // 等待跳转时间
        'timeout' => 3,
    ),
    'preload' => array(
        'cache', 'log'
    ),
);
