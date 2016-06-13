<?php
/**
 * TOP API: taobao.wlb.item.consignment.create request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_WlbItemConsignmentCreate extends TopLinker_Request_Abstract
{
    /**
     * 商品id
     **/
    public $itemId;

    /**
     * 代销数量
     **/
    public $number;

    /**
     * 货主商品id
     **/
    public $ownerItemId;

    /**
     * 货主id
     **/
    public $ownerUserId;

    /**
     * 通过taobao.wlb.item.authorization.add接口创建后得到的rule_id，规则中设定了代销商可以代销的商品数量
     **/
    public $ruleId;

    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
        $this->apiParas["item_id"] = $itemId;
    }

    public function getItemId()
    {
        return $this->itemId;
    }

    public function setNumber($number)
    {
        $this->number = $number;
        $this->apiParas["number"] = $number;
    }

    public function getNumber()
    {
        return $this->number;
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

    public function setOwnerUserId($ownerUserId)
    {
        $this->ownerUserId = $ownerUserId;
        $this->apiParas["owner_user_id"] = $ownerUserId;
    }

    public function getOwnerUserId()
    {
        return $this->ownerUserId;
    }

    public function setRuleId($ruleId)
    {
        $this->ruleId = $ruleId;
        $this->apiParas["rule_id"] = $ruleId;
    }

    public function getRuleId()
    {
        return $this->ruleId;
    }

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->itemId, "itemId");
        //RequestCheckUtil::checkNotNull($this->number, "number");
        //RequestCheckUtil::checkNotNull($this->ownerItemId, "ownerItemId");
        //RequestCheckUtil::checkNotNull($this->ownerUserId, "ownerUserId");
        //RequestCheckUtil::checkNotNull($this->ruleId, "ruleId");
    }
}
