<?php
/**
 * TOP API: taobao.promotion.coupon.buyer.search request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_PromotionCouponBuyerSearch extends TopLinker_Request_Abstract
{
    /**
     * 查询有效期晚于查询日期的所有优惠券
     **/
    public $endTime;

    /**
     * 第几页
     **/
    public $pageNo;

    /**
     * 每页条数
     **/
    public $pageSize;

    /**
     * 店铺的名称，就是卖家的昵称
     **/
    public $sellerNick;

    /**
     * unused：未使用，using：使用中,used,已经使用，overdue：已经过期，transfered：已经转发
     **/
    public $status;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkMinValue($this->pageNo, 1, "pageNo");
        //RequestCheckUtil::checkMaxValue($this->pageSize, 20, "pageSize");
        //RequestCheckUtil::checkMinValue($this->pageSize, 10, "pageSize");
        //RequestCheckUtil::checkNotNull($this->status, "status");
    }
}
