<?php
/**
 * @author oshine <oyjqdlp@126.com>
 */
namespace cloud;

use CException;

class Cloud extends \Yii
{
    /**
     * 当前平台引擎
     * @var mixed
     */
    private static $_engine;

    /**
     * 默认加载的全局语言包
     * @var array
     */
    private static $globalLangSource = array( 'default', 'message', 'error' );

    /**
     * 翻译语言
     * @param string $message 翻译内容<br/>
     * 当eg：'test_language' 当前模块默认语言包找test_language翻译<br/>
     * 当eg：'error/test_language' 当前模块的error语言包中找test_language翻译<br/>
     * 当eg：'article/default/test_language' 在article模块的default语言包中找test_language翻译。
     * @param string $category 指定目录名，为空则遵循以上规则查找
     * @param array $params 语言变量替换数组
     * @param string $source 语言文件
     * @param string $language 目标语言
     * @return string
     * @author Ring
     */
    public static function lang( $message, $category = '', $params = array(), $source = null, $language = null ) {
        if ( empty( $category ) ) {
            $messagePart = explode( '/', $message );
            $currentModule = (string) self::getCurrentModuleName() . '.';
            switch ( count( $messagePart ) ) {
                case 1:
                    list($message) = $messagePart;
                    $category = $currentModule . 'default';
                    break;
                case 2:
                    list($file, $message) = $messagePart;
                    $category = $currentModule . $file;
                    break;
                case 3:
                    list($module, $file, $message) = $messagePart;
                    $category = $module . '.' . $file;
                    break;
                default:
                    $category = 'default';
                    break;
            }
        }
        $translation = self::t( trim( $category, '.' ), $message, $params, $source, $language );
        return $translation;
    }

    /**
     * 获取当前运行模块的名字
     * @return mixed
     * @author Ring
     */
    public static function getCurrentModuleName() {
        return self::app()->setting->get( 'module' );
    }

    /**
     * 加载多个语言文件，为空则加载全局$globalLangSource指定的语言文件,有多个则合并
     * @param array $langSource 要加载的语言包文件
     * @return array 合并后的语言数组
     */
    public static function getLangSources( $langSource = array() ) {
        if ( self::getCurrentModuleName() ) {
            $langSource[] = self::getCurrentModuleName() . '.' . 'default';
        }
        $lang = array();
        foreach ( array_unique( array_merge( self::$globalLangSource, $langSource ) ) as $source ) {
            $sourceLang = self::getLangSource( $source );
            $lang = array_merge( $lang, (array) $sourceLang );
        }
        return $lang;
    }

    /**
     * 加载当前模块下指定文件的语言包。返回语言包数组
     * @param string $file 语言包文件名
     * @return array 语言包数组
     */
    public static function getLangSource( $file ) {
        static $langs = array();
        if ( !isset( $langs[$file] ) ) {
            $langs[$file] = self::app()->getMessages()->loadMessages( $file, self::app()->getLanguage() );
        }
        return (array) $langs[$file];
    }

    /**
     * 返回当前平台引擎
     * @return mixed
     */
    public static function engine() {
        return self::$_engine;
    }

    /**
     * 设置当前平台引擎,如果已经设置或为空会抛出一个异常
     * @param object $engine
     * @throws CException
     */
    public static function setEngine( $engine ) {
        if ( self::$_engine === null || $engine === null ) {
            self::$_engine = $engine;
        } else {
            throw new CException( self::lang( 'YJCloud engine can only be created once.', 'error' ) );
        }
    }
}