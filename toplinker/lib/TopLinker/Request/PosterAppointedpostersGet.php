<?php
/**
 * TOP API: taobao.poster.appointedposters.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_PosterAppointedpostersGet extends TopLinker_Request_Abstract
{
    /**
     * HOT(热门），RECOMMEND（推荐）
     **/
    public $appointedType;

    /**
     * 频道ID列表
     **/
    public $channelIds;

    /**
     * 请求返回的记录数，默认10条，最多20条，如果请求超过20或者小于等于0，则按10条返回
     **/
    public $reNum;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->appointedType, "appointedType");
        //RequestCheckUtil::checkNotNull($this->channelIds, "channelIds");
        //RequestCheckUtil::checkMaxListSize($this->channelIds, 15, "channelIds");
    }
}
