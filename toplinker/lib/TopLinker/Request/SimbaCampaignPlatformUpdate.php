<?php
/**
 * TOP API: taobao.simba.campaign.platform.update request
 *
 * @author auto create
 * @since 1.0, 2012-12-23 16:43:51
 */
class TopLinker_Request_SimbaCampaignPlatformUpdate extends TopLinker_Request_Abstract
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
     * 非搜索投放频道代码数组，频道代码必须是直通车非搜索类频道列表中的值。
     **/
    public $nonsearchChannels;

    /**
     * 溢价的百分比，必须是大于等于 1小于等于200的整数
     **/
    public $outsideDiscount;

    /**
     * 搜索投放频道代码数组，频道代码必须是直通车搜索类频道列表中的值，必须包含淘宝内网。
     **/
    public $searchChannels;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->campaignId, "campaignId");
        //RequestCheckUtil::checkMaxListSize($this->nonsearchChannels, 10, "nonsearchChannels");
        //RequestCheckUtil::checkNotNull($this->outsideDiscount, "outsideDiscount");
        //RequestCheckUtil::checkMaxValue($this->outsideDiscount, 200, "outsideDiscount");
        //RequestCheckUtil::checkMinValue($this->outsideDiscount, 1, "outsideDiscount");
        //RequestCheckUtil::checkNotNull($this->searchChannels, "searchChannels");
        //RequestCheckUtil::checkMaxListSize($this->searchChannels, 10, "searchChannels");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
