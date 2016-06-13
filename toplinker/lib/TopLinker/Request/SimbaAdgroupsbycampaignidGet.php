<?php
/**
 * TOP API: taobao.simba.adgroupsbycampaignid.get request
 *
 * @author auto create
 * @since 1.0, 2013-03-06 16:37:15
 */
class TopLinker_Request_SimbaAdgroupsbycampaignidGet extends TopLinker_Request_Abstract
{
    /**
     * 推广计划Id
     **/
    public $campaign_id;

    /**
     * 主人昵称
     **/
    public $nick;

    /**
     * 页码，从1开始
     **/
    public $page_no;

    /**
     * 页尺寸，最大200，如果入参adgroup_ids有传入值，则page_size和page_no值不起作用。如果adgrpup_ids为空而campaign_id有值，此时page_size和page_no值才是返回的页数据大小和页码
     **/
    public $page_size;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->pageNo, "pageNo");
        //RequestCheckUtil::checkMinValue($this->pageNo, 1, "pageNo");
        //RequestCheckUtil::checkNotNull($this->pageSize, "pageSize");
        //RequestCheckUtil::checkMaxValue($this->pageSize, 200, "pageSize");
        //RequestCheckUtil::checkMinValue($this->pageSize, 1, "pageSize");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
