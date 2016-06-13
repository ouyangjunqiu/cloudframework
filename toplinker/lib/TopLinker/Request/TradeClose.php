<?php
/**
 * TOP API: taobao.trade.close request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_TradeClose extends TopLinker_Request_Abstract
{
    /**
     * 交易关闭原因。
     **/
    public $closeReason;

    /**
     * 主订单或子订单编号。
     **/
    public $tid;

    public function setCloseReason($closeReason)
    {
        $this->closeReason = $closeReason;
        $this->apiParas["close_reason"] = $closeReason;
    }

    public function getCloseReason()
    {
        return $this->closeReason;
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
        //RequestCheckUtil::checkNotNull($this->closeReason, "closeReason");
        //RequestCheckUtil::checkNotNull($this->tid, "tid");
    }
}
