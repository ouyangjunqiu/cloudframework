<?php

/**
 * 缓存工具类，提供AppCloud缓存组件的简短写法及系统缓存方法封装
 * @package cloud.core.utils
 * @version $Id: cache.php -1   $
 */

namespace cloud\core\utils;

use CEvent;
use cloud\Cloud;

class Cache {

    const CACHE_ALIAS = 'cloud.core.cache.provider'; // 更新缓存目录别名

    /**
     * 检查缓存组件
     * @return string
     */

    public static function check() {
        return Cloud::app()->cache->getIsInitialized();
    }

    /**
     * 设置一个缓存值
     * @param string $key 缓存的key
     * @param mixed $value 缓存的值
     * @param mixed $ttl 缓存的有效期
     * @return boolean
     */
    public static function set( $key, $value, $ttl = null ) {
        return Cloud::app()->cache->set( $key, $value, $ttl );
    }

    /**
     * 根据$id获取一个缓存值
     * @param string $key 缓存的key
     * @return boolean
     */
    public static function get( $key ) {
        return Cloud::app()->cache->get( $key );
    }

    /**
     * 根据$key移除一个缓存值
     * @param string $key 缓存的key
     * @return boolean
     */
    public static function rm( $key ) {
        return Cloud::app()->cache->rm( $key );
    }

    /**
     * 清空缓存接口
     * @return boolean
     */
    public static function clear() {
        return Cloud::app()->cache->clear();
    }

    /**
     * 更新缓存
     * @param mixed $cacheName 可以是字符串，也可以是数组
     * @return mixed
     */
    public static function update( $cacheName = '' ) {
        $nameSpace = str_replace( '.', '\\', self::CACHE_ALIAS );
        $updateList = empty( $cacheName ) ? array() : (is_array( $cacheName ) ? $cacheName : array( $cacheName ));
        if ( !$updateList ) {
            // 更新所有缓存
            $cacheDir = Cloud::getPathOfAlias( self::CACHE_ALIAS );
            $cacheDirHandle = dir( $cacheDir );
            while ( $entry = $cacheDirHandle->read() ) {
                $isProviderFile = preg_match( "/^([\_\w]+)\.php$/", $entry, $matches ) && substr( $entry, -4 ) == '.php' && is_file( $cacheDir . '/' . $entry );
                if ( !in_array( $entry, array( '.', '..' ) ) && $isProviderFile ) {
                    $class = $nameSpace . '\\' . basename( $matches[0], '.php' );
                    if ( class_exists( $class ) ) {
                        Cloud::app()->attachBehavior( 'onUpdateCache', array( 'class' => $class ) );
                    }
                }
            }
        } else {
            // 更新指定缓存
            foreach ( $updateList as $entry ) {
                $owner = $nameSpace . '\\' . ucfirst( $entry );
                if ( class_exists( $owner ) ) {
                    Cloud::app()->attachBehavior( 'onUpdateCache', array( 'class' => $owner ) );
                }
            }
        }
        // 发起更新缓存行为
        if ( Cloud::app()->hasEventHandler( 'onUpdateCache' ) ) {
            Cloud::app()->raiseEvent( 'onUpdateCache', new CEvent( Cloud::app() ) );
        }
    }

}
