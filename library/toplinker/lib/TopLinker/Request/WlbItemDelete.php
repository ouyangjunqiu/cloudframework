<?php
/**
 * TOP API: taobao.wlb.item.delete request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_WlbItemDelete extends TopLinker_Request_Abstract
{
    /**
     * 商品ID
     **/
    public $itemId;

    /**
     * 商品所有人淘宝nick
     **/
    public $userNick;

    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
        $this->apiParas["item_id"] = $itemId;
    }

    public function getItemId()
    {
        return $this->itemId;
    }

    public function setUserNick($userNick)
    {
        $this->userNick = $userNick;
        $this->apiParas["user_nick"] = $userNick;
    }

    public function getUserNick()
    {
        return $this->userNick;
    }

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->itemId, "itemId");
        //RequestCheckUtil::checkNotNull($this->userNick, "userNick");
    }
}
