<?php
/**
 * @file UrlManager.php
 * @author ouyangjunqiu
 * @version Created by 16/6/2 16:57
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