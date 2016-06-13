<?php
/**
 * TOP API: taobao.crm.members.groups.batchdelete request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_CrmMembersGroupsBatchdelete extends TopLinker_Request_Abstract
{
    /**
     * 买家的Id集合
     **/
    public $buyerIds;

    /**
     * 会员需要删除的分组
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
