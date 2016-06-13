<?php
/**
 * TOP API: taobao.vas.subscribe.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_VasSubscribeGet extends TopLinker_Request_Abstract
{
    /**
     * 应用收费代码，从合作伙伴后台（my.open.taobao.com）-收费管理-收费项目列表 能够获得该应用的收费代码
     **/
    public $article_code;

    /**
     * 淘宝会员名
     **/
    public $nick;

}
