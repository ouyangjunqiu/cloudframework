<?php
/**
 * TOP API: taobao.trade.postage.update request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_TradePostageUpdate extends TopLinker_Request_Abstract
{
    /**
     * 邮费价格(邮费单位是元）
     **/
    public $postFee;

    /**
     * 主订单编号
     **/
    public $tid;

    public function setPostFee($postFee)
    {
        $this->postFee = $postFee;
        $this->apiParas["post_fee"] = $postFee;
    }

    public function getPostFee()
    {
        return $this->postFee;
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
        //RequestCheckUtil::checkNotNull($this->postFee, "postFee");
        //RequestCheckUtil::checkNotNull($this->tid, "tid");
    }
}
