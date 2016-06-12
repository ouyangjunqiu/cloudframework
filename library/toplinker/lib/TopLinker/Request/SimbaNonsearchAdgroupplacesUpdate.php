<?php
/**
 * TOP API: taobao.simba.nonsearch.adgroupplaces.update request
 *
 * @author auto create
 * @since 1.0, 2012-12-08 12:40:34
 */
class TopLinker_Request_SimbaNonsearchAdgroupplacesUpdate extends TopLinker_Request_Abstract
{
    /**
     * 推广组id，投放位置id，出价，是否默认出价 json数组字符串，数组个数最多200个。是否默认出价不能为空, 出价以“分”为单位，不能小于5分，不能大于最高日限额，不能大于9999分。
    json数组中的key必须和对应实体AdGroupPlace中的属性字段保持一致，否则对应的实体对象属性获取不到相应的值
     **/
    public $adgroupPlacesJson;

    /**
     * 推广计划ID
     **/
    public $campaignId;

    /**
     * 主人昵称
     **/
    public $nick;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->adgroupPlacesJson, "adgroupPlacesJson");
        //RequestCheckUtil::checkNotNull($this->campaignId, "campaignId");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
