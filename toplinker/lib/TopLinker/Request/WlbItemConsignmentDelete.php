<?php
/**
 * TOP API: taobao.wlb.item.consignment.delete request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_WlbItemConsignmentDelete extends TopLinker_Request_Abstract
{
    /**
     * 代销商前台宝贝ID
     **/
    public $icItemId;

    /**
     * 货主的物流宝商品ID
     **/
    public $ownerItemId;

    /**
     * 授权关系id
     **/
    public $ruleId;

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
        //RequestCheckUtil::checkNotNull($this->icItemId, "icItemId");
        //RequestCheckUtil::checkNotNull($this->ownerItemId, "ownerItemId");
        //RequestCheckUtil::checkNotNull($this->ruleId, "ruleId");
    }
}
