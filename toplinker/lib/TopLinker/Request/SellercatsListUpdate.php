<?php
/**
 * TOP API: taobao.sellercats.list.update request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_SellercatsListUpdate extends TopLinker_Request_Abstract
{
    /**
     * 卖家自定义类目编号
     **/
    public $cid;

    /**
     * 卖家自定义类目名称。不超过20个字符
     **/
    public $name;

    /**
     * 链接图片URL地址
     **/
    public $pictUrl;

    /**
     * 该类目在页面上的排序位置,取值范围:大于零的整数
     **/
    public $sortOrder;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->cid, "cid");
    }
}
