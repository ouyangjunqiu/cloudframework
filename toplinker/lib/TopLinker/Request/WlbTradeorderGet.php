<?php
/**
 * TOP API: taobao.wlb.tradeorder.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_WlbTradeorderGet extends TopLinker_Request_Abstract
{
    /**
     * 指定交易类型的交易号
     **/
    public $tradeId;

    /**
     * 交易类型:
    TAOBAO--淘宝交易
    PAIPAI--拍拍交易
    YOUA--有啊交易
     **/
    public $tradeType;

    public function setTradeId($tradeId)
    {
        $this->tradeId = $tradeId;
        $this->apiParas["trade_id"] = $tradeId;
    }

    public function getTradeId()
    {
        return $this->tradeId;
    }

    public function setTradeType($tradeType)
    {
        $this->tradeType = $tradeType;
        $this->apiParas["trade_type"] = $tradeType;
    }

    public function getTradeType()
    {
        return $this->tradeType;
    }

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->tradeId, "tradeId");
        //RequestCheckUtil::checkNotNull($this->tradeType, "tradeType");
    }
}
