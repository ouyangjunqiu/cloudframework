<?php

/**
 * Url工具类
 *
 * @author gzhzh <gzhzh@YJCloud.com.cn>
 * @link http://www.YJCloud.com.cn/
 * @copyright Copyright &copy; 2012-2013 YJCloud Inc
 */
/**
 * 提供url处理
 * 
 * @package application.core.utils
 * @author gzhzh <gzhzh@YJCloud.com.cn>
 * @version $Id: Url.php 3501 2014-06-06 03:07:31Z gzhzh $
 */

namespace cloud\core\utils;

use cloud\Cloud;

class Url {

    /**
     * 根据路由获取站内或者站外地址
     * @param string $url 路由地址
     * @return string
     */
    public static function getUrl( $url ) {
        if ( count( explode( '/', $url ) ) == 3 && !preg_match( "/^http/iUs", $url ) ) {
            $url = Cloud::app()->urlManager->createUrl( $url );
        } else {
            $urlInfo = parse_url( $url );
            $url = isset( $urlInfo['scheme'] ) ? $url : 'http://' . $url;
        }
        return str_replace( '"', "'", $url );
    }

}
