<?php
/**
 * TOP API: taobao.refunds.receive.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_RefundsReceiveGet extends TopLinker_Request_Abstract
{
    /**
     * 买家昵称
     **/
    public $buyer_nick;

    /**
     * 查询修改时间结束。格式: yyyy-MM-dd HH:mm:ss
     **/
    public $end_modified;

    /**
     * 需要返回的字段。目前支持有：refund_id, tid, title, buyer_nick, seller_nick, total_fee, status, created, refund_fee, oid, good_status, company_name, sid, payment, reason, desc, has_good_return, modified, order_status
     **/
    public $fields;

    /**
     * 页码。取值范围:大于零的整数; 默认值:1
     **/
    public $page_no;

    /**
     * 每页条数。取值范围:大于零的整数; 默认值:40;最大值:100
     **/
    public $page_size;

    /**
     * 查询修改时间开始。格式: yyyy-MM-dd HH:mm:ss
     **/
    public $start_modified;

    /**
     * 退款状态，默认查询所有退款状态的数据，除了默认值外每次只能查询一种状态。
    WAIT_SELLER_AGREE(买家已经申请退款，等待卖家同意)
    WAIT_BUYER_RETURN_GOODS(卖家已经同意退款，等待买家退货)
    WAIT_SELLER_CONFIRM_GOODS(买家已经退货，等待卖家确认收货)
    SELLER_REFUSE_BUYER(卖家拒绝退款)
    CLOSED(退款关闭)
    SUCCESS(退款成功)
     **/
    public $status;

    /**
     * 交易类型列表，一次查询多种类型可用半角逗号分隔，默认同时查询guarantee_trade, auto_delivery的2种类型的数据。
    fixed(一口价)
    auction(拍卖)
    guarantee_trade(一口价、拍卖)
    independent_simple_trade(旺店入门版交易)
    independent_shop_trade(旺店标准版交易)
    auto_delivery(自动发货)
    ec(直冲)
    cod(货到付款)
    fenxiao(分销)
    game_equipment(游戏装备)
    shopex_trade(ShopEX交易)
    netcn_trade(万网交易)
    external_trade(统一外部交易)
     **/
    public $type;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->fields, "fields");
    }
}
