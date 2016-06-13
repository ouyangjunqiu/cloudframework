<?php
/**
 * TOP API: taobao.huabao.specialposters.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_HuabaoSpecialpostersGet extends TopLinker_Request_Abstract
{
    /**
     * 频道Id
     **/
    public $channelIds;

    /**
     * 返回的记录数，默认10条，最多20条，如果请求超过20或者小于等于10，则按10条返回 type为NEW时该参数无效,返回为指定频道的最新的一条记录
     **/
    public $number;

    /**
     * 类型可选：HOT(热门），RECOMMEND（推荐），NEW（最新）
     **/
    public $type;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->channelIds, "channelIds");
        //RequestCheckUtil::checkMaxListSize($this->channelIds, 15, "channelIds");
        //RequestCheckUtil::checkNotNull($this->type, "type");
    }
}
