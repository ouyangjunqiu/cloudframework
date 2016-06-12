<?php
/**
 * TOP API: taobao.hotel.sold.orders.increment.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_HotelSoldOrdersIncrementGet extends TopLinker_Request_Abstract
{
    /**
     * 查询修改结束时间，必须大于修改开始时间（修改时间跨度不能大于1天）。格式：yyyy-MM-dd HH:mm:ss。
     **/
    public $endModified;

    /**
     * 是否需要返回该订单的入住人列表。可选值：true，false。
     **/
    public $needGuest;

    /**
     * 分页页码。取值范围，大于零的整数，默认值1，即返回第一页的数据。
     **/
    public $pageNo;

    /**
     * 页面大小，取值范围1-100，默认大小20。
     **/
    public $pageSize;

    /**
     * 查询修改开始时间（修改时间跨度不能大于1天）。格式：yyyy-MM-dd HH:mm:ss
     **/
    public $startModified;

    /**
     * 交易状态，默认查询所有交易状态的数据，除了默认值外每次只能查询一种状态。可选值：A：等待买家付款。B：买家已付款待卖家发货。C：卖家已发货待买家确认。D：交易成功。E：交易关闭
     **/
    public $status;

    /**
     * 是否使用has_next的分页方式，如果指定true，则返回的结果中不包含总记录数，但是会新增一个是否存在下一页的字段，效率比总记录数高
     **/
    public $useHasNext;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->endModified, "endModified");
        //RequestCheckUtil::checkNotNull($this->startModified, "startModified");
        //RequestCheckUtil::checkMaxLength($this->status, 1, "status");
    }
}
