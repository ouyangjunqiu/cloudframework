<?php
/**
 * TOP API: taobao.wlb.item.combination.delete request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_WlbItemCombinationDelete extends TopLinker_Request_Abstract
{
    /**
     * 组合商品的id列表
     **/
    public $destItemList;

    /**
     * 组合关系的商品id
     **/
    public $itemId;

    public function setDestItemList($destItemList)
    {
        $this->destItemList = $destItemList;
        $this->apiParas["dest_item_list"] = $destItemList;
    }

    public function getDestItemList()
    {
        return $this->destItemList;
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
        //RequestCheckUtil::checkNotNull($this->destItemList, "destItemList");
        //RequestCheckUtil::checkNotNull($this->itemId, "itemId");
    }
}
