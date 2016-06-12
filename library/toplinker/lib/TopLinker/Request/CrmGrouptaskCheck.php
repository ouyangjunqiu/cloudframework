<?php
/**
 * TOP API: taobao.crm.grouptask.check request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_CrmGrouptaskCheck extends TopLinker_Request_Abstract
{
    /**
     * 分组id
     **/
    public $groupId;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->groupId, "groupId");
    }
}
