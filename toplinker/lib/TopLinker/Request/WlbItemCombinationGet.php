<?php
/**
 * TOP API: taobao.wlb.item.combination.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_WlbItemCombinationGet extends TopLinker_Request_Abstract
{
    /**
     * 要查询的组合商品id
     **/
    public $itemId;

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
        //RequestCheckUtil::checkNotNull($this->itemId, "itemId");
    }
}
