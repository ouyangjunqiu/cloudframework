<?php
/**
 * TOP API: taobao.wlb.item.query request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_WlbItemQuery extends TopLinker_Request_Abstract
{
    /**
     * 是否是最小库存单元，只有最小库存单元的商品才可以有库存,值只能给"true","false"来表示;
    若值不在范围内，则按true处理
     **/
    public $isSku;

    /**
     * 商家编码
     **/
    public $itemCode;

    /**
     * ITEM类型(只允许输入以下英文或空)
    NORMAL  0:普通商品;
    COMBINE  1:是否是组合商品
    DISTRIBUTION  2:是否是分销商品(货主是别人)
    若值不在范围内，则按NORMAL处理
     **/
    public $itemType;

    /**
     * 商品名称
     **/
    public $name;

    /**
     * 当前页
     **/
    public $pageNo;

    /**
     * 分页记录个数，如果用户输入的记录数大于50，则一页显示50条记录
     **/
    public $pageSize;

    /**
     * 父ID,只有is_sku=1时才能有父ID，商品也可以没有付商品
     **/
    public $parentId;

    /**
     * 只能输入以下值或空：
    ITEM_STATUS_VALID -- 1 表示 有效；
    ITEM_STATUS_LOCK  -- 2 表示锁住。
    若值不在范围内，按ITEM_STATUS_VALID处理
     **/
    public $status;

    /**
     * 商品前台销售名字
     **/
    public $title;

    public function setIsSku($isSku)
    {
        $this->isSku = $isSku;
        $this->apiParas["is_sku"] = $isSku;
    }

    public function getIsSku()
    {
        return $this->isSku;
    }

    public function setItemCode($itemCode)
    {
        $this->itemCode = $itemCode;
        $this->apiParas["item_code"] = $itemCode;
    }

    public function getItemCode()
    {
        return $this->itemCode;
    }

    public function setItemType($itemType)
    {
        $this->itemType = $itemType;
        $this->apiParas["item_type"] = $itemType;
    }

    public function getItemType()
    {
        return $this->itemType;
    }

    public function setName($name)
    {
        $this->name = $name;
        $this->apiParas["name"] = $name;
    }

    public function getName()
    {
        return $this->name;
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

    public function setParentId($parentId)
    {
        $this->parentId = $parentId;
        $this->apiParas["parent_id"] = $parentId;
    }

    public function getParentId()
    {
        return $this->parentId;
    }

    public function setStatus($status)
    {
        $this->status = $status;
        $this->apiParas["status"] = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setTitle($title)
    {
        $this->title = $title;
        $this->apiParas["title"] = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkMaxLength($this->itemCode, 64, "itemCode");
        //RequestCheckUtil::checkMinValue($this->pageNo, 1, "pageNo");
        //RequestCheckUtil::checkMaxValue($this->pageSize, 50, "pageSize");
        //RequestCheckUtil::checkMinValue($this->pageSize, 1, "pageSize");
        //RequestCheckUtil::checkMaxLength($this->title, 255, "title");
    }
}
