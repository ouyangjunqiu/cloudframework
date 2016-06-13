<?php
/**
 * TOP API: taobao.crm.members.group.batchadd request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_CrmMembersGroupBatchadd extends TopLinker_Request_Abstract
{
    /**
     * 会员的id
     **/
    public $buyerIds;

    /**
     * 分组id
     **/
    public $groupIds;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->buyerIds, "buyerIds");
        //RequestCheckUtil::checkMaxListSize($this->buyerIds, 10, "buyerIds");
        //RequestCheckUtil::checkNotNull($this->groupIds, "groupIds");
        //RequestCheckUtil::checkMaxListSize($this->groupIds, 10, "groupIds");
    }
}
