<?php
/**
 * 重写UrlManager
 * @package cloud.core.components
 * @author oshine <oshine.ouyang@da-mai.com>
 */

namespace cloud\core\components;


class UrlManager extends \CUrlManager
{
    public function createUrl($route,$params=array(),$ampersand='&')
    {
        if(!isset($params["_t"])){
            $params["_t"] = time();
        }
        return parent::createUrl($route,$params,$ampersand);
    }

}