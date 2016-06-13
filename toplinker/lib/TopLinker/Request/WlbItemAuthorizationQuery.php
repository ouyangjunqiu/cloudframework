<?php
/**
 * TOP API: taobao.wlb.item.authorization.query request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_WlbItemAuthorizationQuery extends TopLinker_Request_Abstract
{
    /**
     * 授权商品ID
     **/
    public $itemId;

    /**
     * 授权名称
     **/
    public $name;

    /**
     * 当前页
     **/
    public $pageNo;

    /**
     * 分页记录个数，如果用户输入的记录数大于50，则一页显示50条记录
     **/
    public $pageSize;

    /**
     * 授权编码
     **/
    public $ruleCode;

    /**
     * 状态： 只能输入如下值,范围外的默认按VALID处理;不选则查询所有;
    VALID -- 1 有效； INVALIDATION -- 2 失效
     **/
    public $status;

    /**
     * 类型：可由不同角色来查询，默认值OWNER,
    OWNER -- 授权人,
    ON_COMMISSION -- 被授权人
     **/
    public $type;

    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
        $this->apiParas["item_id"] = $itemId;
    }

    public function getItemId()
    {
        return $this->itemId;
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

    public function setPageNo($pageNo)
    {
        $this->pageNo = $pageNo;
        $this->apiParas["page_no"] = $pageNo;
    }

    public function getPageNo()
    {
        return $this->pageNo;
    }

    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
        $this->apiParas["page_size"] = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
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

    public function setStatus($status)
    {
        $this->status = $status;
        $this->apiParas["status"] = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setType($type)
    {
        $this->type = $type;
        $this->apiParas["type"] = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkMaxLength($this->name, 255, "name");
    }
}
