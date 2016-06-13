<?php
/**
 * TOP API: taobao.crm.rule.group.set request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_CrmRuleGroupSet extends TopLinker_Request_Abstract
{
    /**
     * 需要添加到规则的分组
     **/
    public $addGroups;

    /**
     * 需要删除的分组
     **/
    public $deleteGroups;

    /**
     * 规则id
     **/
    public $ruleId;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkMaxListSize($this->addGroups, 10, "addGroups");
        //RequestCheckUtil::checkMaxListSize($this->deleteGroups, 10, "deleteGroups");
        //RequestCheckUtil::checkNotNull($this->ruleId, "ruleId");
        //RequestCheckUtil::checkMinValue($this->ruleId, 1, "ruleId");
    }
}
