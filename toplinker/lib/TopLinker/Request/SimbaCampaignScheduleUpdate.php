<?php
/**
 * TOP API: taobao.simba.campaign.schedule.update request
 *
 * @author auto create
 * @since 1.0, 2012-08-03 12:42:38
 */
class TopLinker_Request_SimbaCampaignScheduleUpdate extends TopLinker_Request_Abstract
{
    /**
     * 推广计划Id
     **/
    public $campaignId;

    /**
     * 主人昵称
     **/
    public $nick;

    /**
     * 值为：“all”；或者用“;”分割的每天的设置字符串，该字符串为用“,”分割的时段折扣字符串，格式为：起始时间-结束时间:折扣，其中时间是24小时格式记录，折扣是1-150整数，表示折扣百分比；
     **/
    public $schedule;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->campaignId, "campaignId");
        //RequestCheckUtil::checkNotNull($this->schedule, "schedule");
    }
}
