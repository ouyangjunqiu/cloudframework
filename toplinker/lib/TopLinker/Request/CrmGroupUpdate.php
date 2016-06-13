<?php
/**
 * TOP API: taobao.crm.group.update request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_CrmGroupUpdate extends TopLinker_Request_Abstract
{
    /**
     * 分组的id
     **/
    public $groupId;

    /**
     * 新的分组名，分组名称不能包含|或者：
     **/
    public $newGroupName;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->groupId, "groupId");
        //RequestCheckUtil::checkMinValue($this->groupId, 1, "groupId");
        //RequestCheckUtil::checkNotNull($this->newGroupName, "newGroupName");
        //RequestCheckUtil::checkMaxLength($this->newGroupName, 15, "newGroupName");
    }
}
