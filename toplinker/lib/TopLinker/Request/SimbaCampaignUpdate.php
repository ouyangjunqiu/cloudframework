<?php
/**
 * TOP API: taobao.simba.campaign.update request
 *
 * @author auto create
 * @since 1.0, 2012-09-03 16:41:15
 */
class TopLinker_Request_SimbaCampaignUpdate extends TopLinker_Request_Abstract
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
     * 用户设置的上下限状态；offline-下线；online-上线；
     **/
    public $online_status;

    /**
     * 推广计划名称，不能多余20个字符，不能和客户其他推广计划同名。
     **/
    public $title;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->campaignId, "campaignId");
        //RequestCheckUtil::checkNotNull($this->onlineStatus, "onlineStatus");
        //RequestCheckUtil::checkNotNull($this->title, "title");
        //RequestCheckUtil::checkMaxLength($this->title, 20, "title");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
