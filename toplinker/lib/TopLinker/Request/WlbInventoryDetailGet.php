<?php
/**
 * TOP API: taobao.wlb.inventory.detail.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_WlbInventoryDetailGet extends TopLinker_Request_Abstract
{
    /**
     * 库存类型列表，值包括：
    VENDIBLE--可销售库存
    FREEZE--冻结库存
    ONWAY--在途库存
    DEFECT--残次品库存
    ENGINE_DAMAGE--机损
    BOX_DAMAGE--箱损
     **/
    public $inventoryTypeList;

    /**
     * 商品ID
     **/
    public $itemId;

    /**
     * 仓库编码
     **/
    public $storeCode;

    public function setInventoryTypeList($inventoryTypeList)
    {
        $this->inventoryTypeList = $inventoryTypeList;
        $this->apiParas["inventory_type_list"] = $inventoryTypeList;
    }

    public function getInventoryTypeList()
    {
        return $this->inventoryTypeList;
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

    public function setStoreCode($storeCode)
    {
        $this->storeCode = $storeCode;
        $this->apiParas["store_code"] = $storeCode;
    }

    public function getStoreCode()
    {
        return $this->storeCode;
    }

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkMaxListSize($this->inventoryTypeList, 20, "inventoryTypeList");
        //RequestCheckUtil::checkNotNull($this->itemId, "itemId");
    }
}
