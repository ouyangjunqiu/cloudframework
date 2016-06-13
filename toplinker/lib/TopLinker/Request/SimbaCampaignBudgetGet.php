<?php

class TopLinker_Request_SimbaCampaignBudgetGet extends TopLinker_Request_Abstract
{
    /**
     * 推广计划Id
     **/
    public $campaign_id;

    /**
     * 主人昵称
     **/
    public $nick;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->campaignId, "campaignId");
    }
}
