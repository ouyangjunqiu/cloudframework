<?php
/**
 * TOP API: taobao.wlb.inventory.sync request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_WlbInventorySync extends TopLinker_Request_Abstract
{
    /**
     * 商品ID
     **/
    public $itemId;

    /**
     * 外部实体类型.存如下值
    IC_ITEM --表示IC商品;
    IC_SKU --表示IC最小单位商品;
    WLB_ITEM  --表示WLB商品.
    若值不在范围内，则按WLB_ITEM处理
     **/
    public $itemType;

    /**
     * 库存数量
     **/
    public $quantity;

    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
        $this->apiParas["item_id"] = $itemId;
    }

    public function getItemId()
    {
        return $this->itemId;
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

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        $this->apiParas["quantity"] = $quantity;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->itemId, "itemId");
        //RequestCheckUtil::checkNotNull($this->itemType, "itemType");
        //RequestCheckUtil::checkNotNull($this->quantity, "quantity");
    }
}
