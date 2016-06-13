<?php
/**
 * TOP API: taobao.crm.group.move request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_CrmGroupMove extends TopLinker_Request_Abstract
{
    /**
     * 需要移动的分组
     **/
    public $fromGroupId;

    /**
     * 目的分组
     **/
    public $toGroupId;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->fromGroupId, "fromGroupId");
        //RequestCheckUtil::checkMinValue($this->fromGroupId, 1, "fromGroupId");
        //RequestCheckUtil::checkNotNull($this->toGroupId, "toGroupId");
        //RequestCheckUtil::checkMinValue($this->toGroupId, 1, "toGroupId");
    }
}
