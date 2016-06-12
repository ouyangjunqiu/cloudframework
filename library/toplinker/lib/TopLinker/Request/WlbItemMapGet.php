<?php
/**
 * TOP API: taobao.wlb.item.map.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_WlbItemMapGet extends TopLinker_Request_Abstract
{
    /**
     * 要查询映射关系的物流宝商品id
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
