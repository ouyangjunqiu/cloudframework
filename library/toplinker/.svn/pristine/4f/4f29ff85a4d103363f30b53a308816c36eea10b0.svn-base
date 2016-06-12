<?php
/**
 * TOP API: taobao.trade.amount.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_TradeAmountGet extends TopLinker_Request_Abstract
{
    /**
     * 订单帐务详情需要返回的字段信息，可选值如下：
    1. TradeAmount中可指定的fields：
    tid,alipay_no,created,pay_time,end_time,total_fee,payment,post_fee,cod_fee,commission_fee,buyer_obtain_point_fee
    2. OrderAmount中可指定的fields：order_amounts.oid,order_amounts.title,order_amounts.num_iid,
    order_amounts.sku_properties_name,order_amounts.sku_id,order_amounts.num,order_amounts.price,order_amounts.discount_fee,order_amounts.adjust_fee,order_amounts.payment,order_amounts.promotion_name
    3. order_amounts(返回OrderAmount的所有内容)
    4. promotion_details(指定该值会返回主订单的promotion_details中除id之外的所有字段)
     **/
    public $fields;

    /**
     * 订单交易编号
     **/
    public $tid;

    public function setFields($fields)
    {
        $this->fields = $fields;
        $this->apiParas["fields"] = $fields;
    }

    public function getFields()
    {
        return $this->fields;
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
        //RequestCheckUtil::checkNotNull($this->fields, "fields");
        //RequestCheckUtil::checkNotNull($this->tid, "tid");
        //RequestCheckUtil::checkMaxValue($this->tid, 9223372036854775807, "tid");
        //RequestCheckUtil::checkMinValue($this->tid, -9223372036854775808, "tid");
    }
}
