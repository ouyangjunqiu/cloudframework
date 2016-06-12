<?php
/**
 * TOP API: taobao.trade.confirmfee.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_TradeConfirmfeeGet extends TopLinker_Request_Abstract
{
    /**
     * 是否是子订单。可选值:IS_FATHER(父订单),IS_CHILD(子订单)
     **/
    public $isDetail;

    /**
     * 交易编号，或子订单编号
     **/
    public $tid;

    public function setIsDetail($isDetail)
    {
        $this->isDetail = $isDetail;
        $this->apiParas["is_detail"] = $isDetail;
    }

    public function getIsDetail()
    {
        return $this->isDetail;
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
        //RequestCheckUtil::checkNotNull($this->isDetail, "isDetail");
        //RequestCheckUtil::checkNotNull($this->tid, "tid");
    }
}
