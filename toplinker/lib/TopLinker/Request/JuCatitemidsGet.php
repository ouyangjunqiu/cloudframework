<?php
/**
 * TOP API: taobao.ju.catitemids.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_JuCatitemidsGet extends TopLinker_Request_Abstract
{
    /**
     * 商品子类目ID。男装:100001,女装:100002。更多类目信息获取可以联系聚划算PD保义
     **/
    public $childCategoryid;

    /**
     * 分页获取商品信息页序号，代表第几页
     **/
    public $pageNo;

    /**
     * 每次获取商品列表的数量
     **/
    public $pageSize;

    /**
     * 商品父类目ID。服装:100000,保险:1000000。更多类目信息获取可以联系聚划算PD保义
     **/
    public $parentCategoryid;

    /**
     * 平台ID。搜狗:1008,聚划算:1001,商城:1002,无线WAP:1007,支付宝:1003,淘宝天下:1004,嗨淘:1006
     **/
    public $platformId;

    /**
     * IPHONE,WAP,ANDROID,SINA,163 各种终端类型
     **/
    public $terminalType;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->pageNo, "pageNo");
        //RequestCheckUtil::checkMinValue($this->pageNo, 0, "pageNo");
        //RequestCheckUtil::checkNotNull($this->pageSize, "pageSize");
        //RequestCheckUtil::checkMaxValue($this->pageSize, 100, "pageSize");
        //RequestCheckUtil::checkMinValue($this->pageSize, 1, "pageSize");
        //RequestCheckUtil::checkNotNull($this->parentCategoryid, "parentCategoryid");
    }
}
