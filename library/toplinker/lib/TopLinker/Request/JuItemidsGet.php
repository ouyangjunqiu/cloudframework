<?php
/**
 * TOP API: taobao.ju.itemids.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_JuItemidsGet extends TopLinker_Request_Abstract
{
    /**
     * 分页获取商品信息页序号，代表第几页
     **/
    public $pageNo;

    /**
     * 每次获取商品列表的数量
     **/
    public $pageSize;

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
    }
}
