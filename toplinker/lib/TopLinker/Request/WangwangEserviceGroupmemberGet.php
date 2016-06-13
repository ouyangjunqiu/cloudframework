<?php
/**
 * TOP API: taobao.wangwang.eservice.groupmember.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_WangwangEserviceGroupmemberGet extends TopLinker_Request_Abstract
{
    /**
     * 被查询用户组管理员ID：cntaobao+淘宝nick，例如cntaobaotest
     **/
    public $managerId;

    public function setManagerId($managerId)
    {
        $this->managerId = $managerId;
        $this->apiParas["manager_id"] = $managerId;
    }

    public function getManagerId()
    {
        return $this->managerId;
    }

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->managerId, "managerId");
        //RequestCheckUtil::checkMaxLength($this->managerId, 128, "managerId");
    }
}
