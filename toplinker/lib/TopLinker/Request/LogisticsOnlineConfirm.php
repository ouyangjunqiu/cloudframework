<?php
/**
 * TOP API: taobao.logistics.online.confirm request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_LogisticsOnlineConfirm extends TopLinker_Request_Abstract
{
    /**
     * 运单号.具体一个物流公司的真实运单号码。淘宝官方物流会校验，请谨慎传入；若company_code中传入的代码非淘宝官方物流合作公司，此处运单号不校验。<br>
     **/
    public $outSid;

    /**
     * 淘宝交易ID
     **/
    public $tid;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->outSid, "outSid");
        //RequestCheckUtil::checkNotNull($this->tid, "tid");
    }
}
