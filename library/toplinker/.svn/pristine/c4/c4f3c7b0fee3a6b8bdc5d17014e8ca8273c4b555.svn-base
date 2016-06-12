<?php
/**
 * TOP API: taobao.wlb.item.consignment.page.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_WlbItemConsignmentPageGet extends TopLinker_Request_Abstract
{
    /**
     * 代销商宝贝id
     **/
    public $icItemId;

    /**
     * 供应商商品id
     **/
    public $ownerItemId;

    /**
     * 供应商用户昵称
     **/
    public $ownerUserNick;

    public function setIcItemId($icItemId)
    {
        $this->icItemId = $icItemId;
        $this->apiParas["ic_item_id"] = $icItemId;
    }

    public function getIcItemId()
    {
        return $this->icItemId;
    }

    public function setOwnerItemId($ownerItemId)
    {
        $this->ownerItemId = $ownerItemId;
        $this->apiParas["owner_item_id"] = $ownerItemId;
    }

    public function getOwnerItemId()
    {
        return $this->ownerItemId;
    }

    public function setOwnerUserNick($ownerUserNick)
    {
        $this->ownerUserNick = $ownerUserNick;
        $this->apiParas["owner_user_nick"] = $ownerUserNick;
    }

    public function getOwnerUserNick()
    {
        return $this->ownerUserNick;
    }

    public function rules()
    {
        return array();
    }
}
