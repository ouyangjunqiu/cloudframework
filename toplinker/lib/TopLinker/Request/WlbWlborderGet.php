<?php
/**
 * TOP API: taobao.wlb.wlborder.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_WlbWlborderGet extends TopLinker_Request_Abstract
{
    /**
     * 物流宝订单编码
     **/
    public $wlbOrderCode;

    public function setWlbOrderCode($wlbOrderCode)
    {
        $this->wlbOrderCode = $wlbOrderCode;
        $this->apiParas["wlb_order_code"] = $wlbOrderCode;
    }

    public function getWlbOrderCode()
    {
        return $this->wlbOrderCode;
    }

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->wlbOrderCode, "wlbOrderCode");
    }
}
