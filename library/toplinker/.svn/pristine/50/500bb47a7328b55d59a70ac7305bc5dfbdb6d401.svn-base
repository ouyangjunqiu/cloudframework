<?php
/**
 * TOP API: taobao.ump.promotion.get request
 *
 * @author auto create
 * @since 1.0, 2013-06-14 12:49:03
 */
class TopLinker_Request_UmpPromotionGet extends TopLinker_Request_Abstract
{
    /**
     * 商品id
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

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
