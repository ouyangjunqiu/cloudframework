<?php
/**
 * TOP API: taobao.wlb.orderstatus.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_WlbOrderstatusGet extends TopLinker_Request_Abstract
{
    /**
     * 物流宝订单编码
     **/
    public $orderCode;

    public function setOrderCode($orderCode)
    {
        $this->orderCode = $orderCode;
        $this->apiParas["order_code"] = $orderCode;
    }

    public function getOrderCode()
    {
        return $this->orderCode;
    }

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->orderCode, "orderCode");
    }
}
