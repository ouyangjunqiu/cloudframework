<?php
/**
 * TOP API: taobao.huabao.channel.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_HuabaoChannelGet extends TopLinker_Request_Abstract
{
    /**
     * 频道Id
     **/
    public $channelId;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->channelId, "channelId");
    }
}
