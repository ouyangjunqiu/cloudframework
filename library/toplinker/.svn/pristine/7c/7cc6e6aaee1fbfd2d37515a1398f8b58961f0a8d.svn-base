<?php
/**
 * TOP API: taobao.wlb.item.map.get.by.extentity request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_WlbItemMapGetByExtentity extends TopLinker_Request_Abstract
{
    /**
     * 外部实体类型对应的商品id
     **/
    public $extEntityId;

    /**
     * 外部实体类型： IC_ITEM--ic商品 IC_SKU--ic销售单元
     **/
    public $extEntityType;

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

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->extEntityId, "extEntityId");
        //RequestCheckUtil::checkNotNull($this->extEntityType, "extEntityType");
    }
}
