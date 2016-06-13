<?php
/**
 * TOP API: taobao.trade.receivetime.delay request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_TradeReceivetimeDelay extends TopLinker_Request_Abstract
{
    /**
     * 延长收货的天数，可选值为：3, 5, 7, 10。
     **/
    public $days;

    /**
     * 主订单号
     **/
    public $tid;

    public function setDays($days)
    {
        $this->days = $days;
        $this->apiParas["days"] = $days;
    }

    public function getDays()
    {
        return $this->days;
    }

    public function setTid($tid)
    {
        $this->tid = $tid;
        $this->apiParas["tid"] = $tid;
    }

    public function getTid()
    {
        return $this->tid;
    }

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->days, "days");
        //RequestCheckUtil::checkMaxValue($this->days, 10, "days");
        //RequestCheckUtil::checkMinValue($this->days, 3, "days");
        //RequestCheckUtil::checkNotNull($this->tid, "tid");
    }
}
