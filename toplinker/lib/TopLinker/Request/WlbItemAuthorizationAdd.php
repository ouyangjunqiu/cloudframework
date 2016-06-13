<?php
/**
 * TOP API: taobao.wlb.item.authorization.add request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_WlbItemAuthorizationAdd extends TopLinker_Request_Abstract
{
    /**
     * 授权类型：1=全量授权，0=部分授权
    当部分授权时，需要指定授权数量quantity
     **/
    public $authType;

    /**
     * 授权结束时间
     **/
    public $authorizeEndTime;

    /**
     * 授权开始时间
     **/
    public $authorizeStartTime;

    /**
     * 被授权人用户id
     **/
    public $consignUserNick;

    /**
     * 商品id列表，以英文逗号,分隔，最多可放入50个商品ID。
     **/
    public $itemIdList;

    /**
     * 规则名称
     **/
    public $name;

    /**
     * 授权数量
     **/
    public $quantity;

    /**
     * 授权规则：目前只有GRANT_FIX，按照数量授权
     **/
    public $ruleCode;

    public function setAuthType($authType)
    {
        $this->authType = $authType;
        $this->apiParas["auth_type"] = $authType;
    }

    public function getAuthType()
    {
        return $this->authType;
    }

    public function setAuthorizeEndTime($authorizeEndTime)
    {
        $this->authorizeEndTime = $authorizeEndTime;
        $this->apiParas["authorize_end_time"] = $authorizeEndTime;
    }

    public function getAuthorizeEndTime()
    {
        return $this->authorizeEndTime;
    }

    public function setAuthorizeStartTime($authorizeStartTime)
    {
        $this->authorizeStartTime = $authorizeStartTime;
        $this->apiParas["authorize_start_time"] = $authorizeStartTime;
    }

    public function getAuthorizeStartTime()
    {
        return $this->authorizeStartTime;
    }

    public function setConsignUserNick($consignUserNick)
    {
        $this->consignUserNick = $consignUserNick;
        $this->apiParas["consign_user_nick"] = $consignUserNick;
    }

    public function getConsignUserNick()
    {
        return $this->consignUserNick;
    }

    public function setItemIdList($itemIdList)
    {
        $this->itemIdList = $itemIdList;
        $this->apiParas["item_id_list"] = $itemIdList;
    }

    public function getItemIdList()
    {
        return $this->itemIdList;
    }

    public function setName($name)
    {
        $this->name = $name;
        $this->apiParas["name"] = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        $this->apiParas["quantity"] = $quantity;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setRuleCode($ruleCode)
    {
        $this->ruleCode = $ruleCode;
        $this->apiParas["rule_code"] = $ruleCode;
    }

    public function getRuleCode()
    {
        return $this->ruleCode;
    }

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->authType, "authType");
        //RequestCheckUtil::checkNotNull($this->authorizeEndTime, "authorizeEndTime");
        //RequestCheckUtil::checkNotNull($this->authorizeStartTime, "authorizeStartTime");
        //RequestCheckUtil::checkNotNull($this->consignUserNick, "consignUserNick");
        //RequestCheckUtil::checkNotNull($this->itemIdList, "itemIdList");
        //RequestCheckUtil::checkNotNull($this->name, "name");
        //RequestCheckUtil::checkMaxLength($this->name, 255, "name");
        //RequestCheckUtil::checkNotNull($this->ruleCode, "ruleCode");
    }
}
