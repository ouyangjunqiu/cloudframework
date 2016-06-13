<?php
/**
 * TOP API: taobao.poster.channel.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_PosterChannelGet extends TopLinker_Request_Abstract
{
    /**
     * 根据频道ID获取频道信息
     **/
    public $channelId;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->channelId, "channelId");
    }
}
