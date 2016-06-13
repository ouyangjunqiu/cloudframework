<?php
/**
 * TOP API: taobao.hotel.orders.search request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_HotelOrdersSearch extends TopLinker_Request_Abstract
{
    /**
     * 入住时间查询结束时间，格式为：yyyy-MM-dd。不能早于checkin_date_start，间隔不能大于30
     **/
    public $checkinDateEnd;

    /**
     * 入住时间查询起始时间，格式为：yyyy-MM-dd
     **/
    public $checkinDateStart;

    /**
     * 离店时间查询结束时间，格式为：yyyy-MM-dd。不能早于checkout_date_start，间隔不能大于30
     **/
    public $checkoutDateEnd;

    /**
     * 离店时间查询起始时间，格式为：yyyy-MM-dd
     **/
    public $checkoutDateStart;

    /**
     * 订单创建时间查询结束时间，格式为：yyyy-MM-dd。不能早于created_start，间隔不能大于30
     **/
    public $createdEnd;

    /**
     * 订单创建时间查询起始时间，格式为：yyyy-MM-dd
     **/
    public $createdStart;

    /**
     * 商品gid列表，多个gid用英文逗号隔开，一次不超过5个
     **/
    public $gids;

    /**
     * 酒店hid列表，多个hid用英文逗号隔开，一次不超过5个
     **/
    public $hids;

    /**
     * 是否需要返回该订单的入住人列表。可选值：true，false。
     **/
    public $needGuest;

    /**
     * 酒店订单oids列表，多个oid用英文逗号隔开，一次不超过20个。oids，tids，hids，rids，gids，（checkin_date_start，checkin_date_end），（checkout_date_start，checkout_date_end），（created_start，created_end）必须传入一项，括号表示需同时存在才做为查询条件。
    oids，tids，hids，rids，gids同时出现时，优先级按此顺序由高到低只取一项。其他同时出现时，并列使用。
     **/
    public $oids;

    /**
     * 分页页码。取值范围，大于零的整数，默认值1，即返回第一页的数据。页面大小为20
     **/
    public $pageNo;

    /**
     * 房型rid列表，多个rid用英文逗号隔开，一次不超过5个
     **/
    public $rids;

    /**
     * 订单状态。A：等待买家付款。B：买家已付款待卖家发货。C：卖家已发货待买家确认。D：交易成功。E：交易关闭
     **/
    public $status;

    /**
     * 淘宝订单tid列表，多个tid用英文逗号隔开，一次不超过20个。
     **/
    public $tids;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkMaxLength($this->status, 1, "status");
    }
}
