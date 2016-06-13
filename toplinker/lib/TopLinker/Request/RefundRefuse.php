<?php
/**
 * TOP API: taobao.refund.refuse request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_RefundRefuse extends TopLinker_Request_Abstract
{
    /**
     * 退款记录对应的交易子订单号
     **/
    public $oid;

    /**
     * 退款单号
     **/
    public $refundId;

    /**
     * 拒绝退款时的说明信息，长度2-200
     **/
    public $refuseMessage;

    /**
     * 拒绝退款时的退款凭证，一般是卖家拒绝退款时使用的发货凭证，最大长度130000字节，支持的图片格式：GIF, JPG, PNG
     **/
    public $refuseProof;

    /**
     * 退款记录对应的交易订单号
     **/
    public $tid;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->oid, "oid");
        //RequestCheckUtil::checkNotNull($this->refundId, "refundId");
        //RequestCheckUtil::checkNotNull($this->refuseMessage, "refuseMessage");
        //RequestCheckUtil::checkMaxLength($this->refuseMessage, 200, "refuseMessage");
        //RequestCheckUtil::checkNotNull($this->tid, "tid");
    }
}
