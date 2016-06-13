<?php
/**
 * TOP API: taobao.wlb.notify.message.confirm request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_WlbNotifyMessageConfirm extends TopLinker_Request_Abstract
{
    /**
     * 物流宝通知消息的id，通过taobao.wlb.notify.message.page.get接口得到的WlbMessage数据结构中的id字段
     **/
    public $messageId;

    public function setMessageId($messageId)
    {
        $this->messageId = $messageId;
        $this->apiParas["message_id"] = $messageId;
    }

    public function getMessageId()
    {
        return $this->messageId;
    }

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->messageId, "messageId");
    }
}
