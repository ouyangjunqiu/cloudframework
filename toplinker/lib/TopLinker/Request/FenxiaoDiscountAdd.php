<?php
/**
 * TOP API: taobao.fenxiao.discount.add request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_FenxiaoDiscountAdd extends TopLinker_Request_Abstract
{
    /**
     * 折扣名称,长度不能超过25字节
     **/
    public $discountName;

    /**
     * PERCENT（按折扣优惠）、PRICE（按减价优惠），例如"PERCENT,PRICE,PERCENT"
     **/
    public $discountTypes;

    /**
     * 优惠比率或者优惠价格，例如：”8000,-2300,7000”,大小为-100000000到100000000之间（单位：分）
     **/
    public $discountValues;

    /**
     * 会员等级的id或者分销商id，例如：”1001,2001,1002”
     **/
    public $targetIds;

    /**
     * GRADE（按会员等级优惠）、DISTRIBUTOR（按分销商优惠），例如"GRADE,DISTRIBUTOR"
     **/
    public $targetTypes;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->discountName, "discountName");
        //RequestCheckUtil::checkNotNull($this->discountTypes, "discountTypes");
        //RequestCheckUtil::checkNotNull($this->discountValues, "discountValues");
        //RequestCheckUtil::checkNotNull($this->targetIds, "targetIds");
        //RequestCheckUtil::checkNotNull($this->targetTypes, "targetTypes");
    }
}
