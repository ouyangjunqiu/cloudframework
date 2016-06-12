<?php
/**
 * TOP API: taobao.logistics.online.cancel request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_LogisticsOnlineCancel extends TopLinker_Request_Abstract
{
    /**
     * 淘宝交易ID
     **/
    public $tid;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->tid, "tid");
    }
}
