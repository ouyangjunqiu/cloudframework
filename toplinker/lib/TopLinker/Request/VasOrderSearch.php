<?php

/**
 * TOP API: taobao.vas.order.search request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_VasOrderSearch extends TopLinker_Request_Abstract
{
    /**
     * 应用收费代码，从合作伙伴后台（my.open.taobao.com）-收费管理-收费项目列表 能够获得该应用的收费代码
     **/
    public $article_code;

    /**
     * 订单号
     **/
    public $biz_order_id;

    /**
     * 订单类型，1=新订 2=续订 3=升级 4=后台赠送 5=后台自动续订 6=订单审核后生成订购关系（暂时用不到） 空=全部
     **/
    public $biz_type;

    /**
     * 订单创建时间（订购时间）结束值
     **/
    public $end_created;

    /**
     * 收费项目代码，从合作伙伴后台（my.open.taobao.com）-收费管理-收费项目列表 能够获得收费项目代码
     **/
    public $item_code;

    /**
     * 淘宝会员名
     **/
    public $nick;

    /**
     * 子订单号
     **/
    public $order_id;

    /**
     * 页码
     **/
    public $page_no;

    /**
     * 一页包含的记录数
     **/
    public $page_size;

    /**
     * 订单创建时间（订购时间）起始值（当start_created和end_created都不填写时，默认返回最近90天的数据）
     **/
    public $start_created;
}
