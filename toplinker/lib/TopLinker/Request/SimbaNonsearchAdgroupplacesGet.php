<?php
/**
 * TOP API: taobao.simba.nonsearch.adgroupplaces.get request
 *
 * @author auto create
 * @since 1.0, 2012-12-08 12:40:34
 */
class TopLinker_Request_SimbaNonsearchAdgroupplacesGet extends TopLinker_Request_Abstract
{
    /**
     * 推广组ID数组
     **/
    public $adgroup_ids;

    /**
     * 推广计划ID
     **/
    public $campaign_id;

    /**
     * 主人昵称
     **/
    public $nick;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->adgroupIds, "adgroupIds");
        //RequestCheckUtil::checkMaxListSize($this->adgroupIds, 200, "adgroupIds");
        //RequestCheckUtil::checkNotNull($this->campaignId, "campaignId");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
