<?php
/**
 * TOP API: taobao.refund.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_RefundGet extends TopLinker_Request_Abstract
{
    /**
     * 需要返回的字段。目前支持有：refund_id, alipay_no, tid, oid, buyer_nick, seller_nick, total_fee, status, created, refund_fee, good_status, has_good_return, payment, reason, desc, num_iid, title, price, num, good_return_time, company_name, sid, address, shipping_type, refund_remind_timeout
     **/
    public $fields;

    /**
     * 退款单号
     **/
    public $refundId;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->fields, "fields");
        //RequestCheckUtil::checkNotNull($this->refundId, "refundId");
        //RequestCheckUtil::checkMaxValue($this->refundId, 9223372036854775807, "refundId");
        //RequestCheckUtil::checkMinValue($this->refundId, 1, "refundId");
    }
}
