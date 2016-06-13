<?php
/**
 * TOP API: taobao.crm.group.delete request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_CrmGroupDelete extends TopLinker_Request_Abstract
{
    /**
     * 要删除的分组id
     **/
    public $groupId;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->groupId, "groupId");
        //RequestCheckUtil::checkMinValue($this->groupId, 1, "groupId");
    }
}
