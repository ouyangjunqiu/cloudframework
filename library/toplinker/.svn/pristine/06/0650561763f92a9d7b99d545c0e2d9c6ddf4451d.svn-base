<?php
/**
 * TOP API: taobao.promotion.coupons.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_PromotionCouponsGet extends TopLinker_Request_Abstract
{
    /**
     * 优惠券的id，唯一标识这个优惠券
     **/
    public $couponId;

    /**
     * 优惠券的面额，必须是3，5，10，20，50,100
     **/
    public $denominations;

    /**
     * 优惠券的截止日期
     **/
    public $endTime;

    /**
     * 查询的页号，结果集是分页返回的，每页20条
     **/
    public $pageNo;

    /**
     * 每页条数
     **/
    public $pageSize;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkMaxValue($this->denominations, 100, "denominations");
        //RequestCheckUtil::checkMinValue($this->denominations, 3, "denominations");
        //RequestCheckUtil::checkMinValue($this->pageNo, 1, "pageNo");
    }
}
