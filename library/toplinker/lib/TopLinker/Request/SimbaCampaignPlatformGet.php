<?php
/**
 * TOP API: taobao.simba.campaign.platform.get
 */
class TopLinker_Request_SimbaCampaignPlatformGet extends TopLinker_Request_Abstract
{
    /**
     * 主人昵称
     **/
    public $nick;

    /**
     * 推广计划ID
     **/
    public $campaign_id;

    public function rules()
    {
        return array();
    }
}
