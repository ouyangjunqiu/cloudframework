<?php
/**
 * TOP API: taobao.trades.sold.get request
 *
 * @author auto create
 * @since 1.0, 2012-12-23 16:43:51
 */
class TopLinker_Request_TradesSoldGet extends TopLinker_Request_Abstract
{
    /**
     * 买家昵称
     **/
    public $buyer_nick;

    /**
     * 查询交易创建时间结束。格式:yyyy-MM-dd HH:mm:ss
     **/
    public $end_created;

    /**
     * 可选值有ershou(二手市场的订单）,service（商城服务子订单）mark（双十一大促活动异常订单）作为扩展类型筛选只能做单个ext_type查询，不能全部查询所有的ext_type类型
     **/
    public $ext_type;

    /**
     * 需要返回的字段。目前支持有：<br>
    1. Trade中可以指定返回的fields:<br>
    seller_nick, buyer_nick, title, type, created,  tid, seller_rate, buyer_rate, status, payment, discount_fee, adjust_fee, post_fee, total_fee, pay_time, end_time, modified, consign_time, buyer_obtain_point_fee, point_fee, real_point_fee, received_payment,  pic_path, num_iid, num, price, cod_fee, cod_status, shipping_type, receiver_name, receiver_state, receiver_city, receiver_district, receiver_address, receiver_zip, receiver_mobile, receiver_phone,seller_flag,alipay_id,alipay_no,is_lgtype,is_force_wlb,is_brand_sale,buyer_area,has_buyer_message, credit_card_fee, lg_aging_type, lg_aging, step_trade_status,step_paid_fee,mark_desc,has_yfx,yfx_fee,yfx_id,yfx_type,trade_source<br>
    2. Order中可以指定返回fields：orders.title, orders.pic_path, orders.price, orders.num, orders.num_iid, orders.sku_id, orders.refund_status, orders.status, orders.oid, orders.total_fee, orders.payment, orders.discount_fee, orders.adjust_fee, orders.sku_properties_name, orders.item_meal_name, orders.buyer_rate, orders.seller_rate, orders.outer_iid, orders.outer_sku_id, orders.refund_id, orders.seller_type, orders.end_time,orders.order_from<br>
    3. fields：orders（返回2中Order的所有内容）
    4.fields:service_orders(返回service_order中所有内容)
     **/
    public $fields;

    /**
     * 默认值为false，表示按正常方式查询订单；如果设置为true则查询到的是模糊后的订单列表，可通过模糊订单列表中的buyer_nick/buyer_id字段与流量数据进行关联。如果没有使用流量数据接口请忽略本字段。
     **/
    public $is_acookie;

    /**
     * 页码。取值范围:大于零的整数; 默认值:1
     **/
    public $page_no;

    /**
     * 每页条数。取值范围:大于零的整数; 默认值:40;最大值:100
     **/
    public $page_size;

    /**
     * 评价状态，默认查询所有评价状态的数据，除了默认值外每次只能查询一种状态。<br>
    可选值：
    RATE_UNBUYER(买家未评)
    RATE_UNSELLER(卖家未评)
    RATE_BUYER_UNSELLER(买家已评，卖家未评)
    RATE_UNBUYER_SELLER(买家未评，卖家已评)
     **/
    public $rate_status;

    /**
     * 查询三个月内交易创建时间开始。格式:yyyy-MM-dd HH:mm:ss
     **/
    public $start_created;

    /**
     * 交易状态，默认查询所有交易状态的数据，除了默认值外每次只能查询一种状态。
    可选值：
    TRADE_NO_CREATE_PAY(没有创建支付宝交易)
    WAIT_BUYER_PAY(等待买家付款)
    WAIT_SELLER_SEND_GOODS(等待卖家发货,即:买家已付款)
    WAIT_BUYER_CONFIRM_GOODS(等待买家确认收货,即:卖家已发货)
    TRADE_BUYER_SIGNED(买家已签收,货到付款专用)
    TRADE_FINISHED(交易成功)
    TRADE_CLOSED(交易关闭)
    TRADE_CLOSED_BY_TAOBAO(交易被淘宝关闭)
    ALL_WAIT_PAY(包含：WAIT_BUYER_PAY、TRADE_NO_CREATE_PAY)
    ALL_CLOSED(包含：TRADE_CLOSED、TRADE_CLOSED_BY_TAOBAO)
     **/
    public $status;

    /**
     * 卖家对交易的自定义分组标签，目前可选值为：time_card（点卡软件代充），fee_card（话费软件代充）
     **/
    public $tag;

    /**
     * 交易类型列表，同时查询多种交易类型可用逗号分隔。<span style="color:red;font-weight: bold;">默认同时查询guarantee_trade, auto_delivery, ec, cod,step的5种交易类型的数据；查询所有交易类型的数据，需要设置下面全部可选值。</span>
    可选值：
    fixed(一口价)
    auction(拍卖)
    guarantee_trade(一口价、拍卖)
    step(分阶段付款，万人团，阶梯团订单）
    independent_simple_trade(旺店入门版交易)
    independent_shop_trade(旺店标准版交易)
    auto_delivery(自动发货)
    ec(直冲)
    cod(货到付款)
    game_equipment(游戏装备)
    shopex_trade(ShopEX交易)
    netcn_trade(万网交易)
    external_trade(统一外部交易)
    instant_trade (即时到账)
    b2c_cod(大商家货到付款)
    hotel_trade(酒店类型交易)
    super_market_trade(商超交易)
    super_market_cod_trade(商超货到付款交易)
    taohua(淘花网交易类型）
    waimai(外卖交易类型）
    nopaid（即时到帐/趣味猜交易类型）
    step (万人团) eticket(电子凭证) ;
    注：guarantee_trade是一个组合查询条件，并不是一种交易类型，获取批量或单个订单中不会返回此种类型的订单。
     **/
    public $type;

    /**
     * 是否启用has_next的分页方式，如果指定true,则返回的结果中不包含总记录数，但是会新增一个是否存在下一页的的字段，通过此种方式获取增量交易，接口调用成功率在原有的基础上有所提升。
     **/
    public $use_has_next;

    public function rules()
    {
        return array();
    }
}