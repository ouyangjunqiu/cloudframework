<?php
/**
 * TOP API: taobao.wlb.item.synchronize.delete request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_WlbItemSynchronizeDelete extends TopLinker_Request_Abstract
{
    /**
     * 外部实体ID
     **/
    public $extEntityId;

    /**
     * 外部实体类型.存如下值 IC_ITEM --表示IC商品; IC_SKU --表示IC最小单位商品;若输入其他值，则按IC_ITEM处理
     **/
    public $extEntityType;

    /**
     * 物流宝商品ID
     **/
    public $itemId;

    public function setExtEntityId($extEntityId)
    {
        $this->extEntityId = $extEntityId;
        $this->apiParas["ext_entity_id"] = $extEntityId;
    }

    public function getExtEntityId()
    {
        return $this->extEntityId;
    }

    public function setExtEntityType($extEntityType)
    {
        $this->extEntityType = $extEntityType;
        $this->apiParas["ext_entity_type"] = $extEntityType;
    }

    public function getExtEntityType()
    {
        return $this->extEntityType;
    }

    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
        $this->apiParas["item_id"] = $itemId;
    }

    public function getItemId()
    {
        return $this->itemId;
    }

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->extEntityId, "extEntityId");
        //RequestCheckUtil::checkNotNull($this->extEntityType, "extEntityType");
        //RequestCheckUtil::checkNotNull($this->itemId, "itemId");
    }
}
