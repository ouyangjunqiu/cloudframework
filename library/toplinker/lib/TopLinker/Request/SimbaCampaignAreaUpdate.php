<?php
/**
 * TOP API: taobao.simba.campaign.area.update request
 *
 * @author auto create
 * @since 1.0, 2012-08-03 12:42:38
 */
class TopLinker_Request_SimbaCampaignAreaUpdate extends TopLinker_Request_Abstract
{
    /**
     * 值为：“all”；或者用“,”分割的数字，数字必须是直通车全国省市列表的AreaID；
     **/
    public $area;

    /**
     * 推广计划Id
     **/
    public $campaignId;

    /**
     * 主人昵称
     **/
    public $nick;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->area, "area");
        //RequestCheckUtil::checkNotNull($this->campaignId, "campaignId");
    }
}
