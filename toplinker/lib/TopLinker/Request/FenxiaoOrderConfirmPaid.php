<?php
/**
 * TOP API: taobao.fenxiao.order.confirm.paid request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_FenxiaoOrderConfirmPaid extends TopLinker_Request_Abstract
{
    /**
     * 确认支付信息（字数小于100）
     **/
    public $confirmRemark;

    /**
     * 采购单编号。
     **/
    public $purchaseOrderId;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->purchaseOrderId, "purchaseOrderId");
    }
}
