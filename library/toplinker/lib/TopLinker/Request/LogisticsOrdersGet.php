<?php
/**
 * TOP API: taobao.logistics.orders.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_LogisticsOrdersGet extends TopLinker_Request_Abstract
{
    /**
     * 买家昵称
     **/
    public $buyerNick;

    /**
     * 创建时间结束
     **/
    public $endCreated;

    /**
     * 需返回的字段列表.可选值:Shipping 物流数据结构中的以下字段:
    tid,seller_nick,buyer_nick,delivery_start, delivery_end,out_sid,item_title,receiver_name, created,modified,status,type,freight_payer,seller_confirm,company_name；多个字段之间用","分隔。如tid,seller_nick,buyer_nick,delivery_start。
     **/
    public $fields;

    /**
     * 谁承担运费.可选值:buyer(买家),seller(卖家).如:buyer
     **/
    public $freightPayer;

    /**
     * 页码.该字段没传 或 值<1 ,则默认page_no为1
     **/
    public $pageNo;

    /**
     * 每页条数.该字段没传 或 值<1 ,则默认page_size为40
     **/
    public $pageSize;

    /**
     * 收货人姓名
     **/
    public $receiverName;

    /**
     * 卖家是否发货.可选值:yes(是),no(否).如:yes
     **/
    public $sellerConfirm;

    /**
     * 创建时间开始
     **/
    public $startCreated;

    /**
     * 物流状态.查看数据结构 Shipping 中的status字段.
     **/
    public $status;

    /**
     * 交易ID.如果加入tid参数的话,不用传其他的参数,但是仅会返回一条物流订单信息.
     **/
    public $tid;

    /**
     * 物流方式.可选值:post(平邮),express(快递),ems(EMS).如:post
     **/
    public $type;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->fields, "fields");
        //RequestCheckUtil::checkMaxValue($this->pageSize, 100, "pageSize");
    }
}
