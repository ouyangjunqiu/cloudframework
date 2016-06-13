<?php
/**
 * TOP API: taobao.refund.messages.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_RefundMessagesGet extends TopLinker_Request_Abstract
{
    /**
     * 需返回的字段列表。可选值：RefundMessage结构体中的所有字段，以半角逗号(,)分隔。
     **/
    public $fields;

    /**
     * 页码。取值范围:大于零的整数; 默认值:1
     **/
    public $pageNo;

    /**
     * 每页条数。取值范围:大于零的整数; 默认值:40;最大值:200
     **/
    public $pageSize;

    /**
     * 退款单号
     **/
    public $refundId;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->fields, "fields");
        //RequestCheckUtil::checkNotNull($this->refundId, "refundId");
    }
}
