<?php
/**
 * TOP API: taobao.wlb.orderschedulerule.delete request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_WlbOrderscheduleruleDelete extends TopLinker_Request_Abstract
{
    /**
     * 订单调度规则ID
     **/
    public $id;

    /**
     * 商品userNick
     **/
    public $userNick;

    public function setId($id)
    {
        $this->id = $id;
        $this->apiParas["id"] = $id;
    }

    public function getId()
    {
        return $this->id;
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
        //RequestCheckUtil::checkNotNull($this->id, "id");
        //RequestCheckUtil::checkNotNull($this->userNick, "userNick");
        //RequestCheckUtil::checkMaxLength($this->userNick, 64, "userNick");
    }
}
