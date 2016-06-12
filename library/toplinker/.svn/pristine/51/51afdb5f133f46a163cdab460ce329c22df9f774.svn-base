<?php
/**
 * TOP API: taobao.taohua.staffrecitems.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_TaohuaStaffrecitemsGet extends TopLinker_Request_Abstract
{
    /**
     * 推荐的商品类型:
    1. free:获取推荐的免费商品
    2. charges:获取推荐的收费商品
     **/
    public $itemType;

    /**
     * 当前页数，大于0的整数，默认值1，代表第一页
     **/
    public $pageNo;

    /**
     * 每页显示最大条数，要求：大于0的整数。默认为5，代表每页显示5条
     **/
    public $pageSize;

    public function setItemType($itemType)
    {
        $this->itemType = $itemType;
        $this->apiParas["item_type"] = $itemType;
    }

    public function getItemType()
    {
        return $this->itemType;
    }

    public function setPageNo($pageNo)
    {
        $this->pageNo = $pageNo;
        $this->apiParas["page_no"] = $pageNo;
    }

    public function getPageNo()
    {
        return $this->pageNo;
    }

    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
        $this->apiParas["page_size"] = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->itemType, "itemType");
    }
}
