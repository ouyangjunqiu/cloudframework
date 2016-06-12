<?php
/**
 * TOP API: taobao.promotion.coupondetail.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_PromotionCoupondetailGet extends TopLinker_Request_Abstract
{
    /**
     * 买家昵称
     **/
    public $buyerNick;

    /**
     * 优惠券的id
     **/
    public $couponId;

    /**
     * 查询的页号，结果集是分页返回的，每页20条
     **/
    public $pageNo;

    /**
     * 每页行数
     **/
    public $pageSize;

    /**
     * 优惠券使用情况unused：代表未使用using：代表使用中used：代表已使用。必须是unused，using，used
     **/
    public $state;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->couponId, "couponId");
        //RequestCheckUtil::checkMaxValue($this->pageSize, 20, "pageSize");
    }
}
