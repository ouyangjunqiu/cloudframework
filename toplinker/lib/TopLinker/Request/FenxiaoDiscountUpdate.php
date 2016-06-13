<?php
/**
 * TOP API: taobao.fenxiao.discount.update request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_FenxiaoDiscountUpdate extends TopLinker_Request_Abstract
{
    /**
     * 详情ID，例如：”0,1002,1003”
     **/
    public $detailIds;

    /**
     * ADD(新增)、UPDATE（更新）、DEL（删除，对应的target_type等信息填NULL），例如：”UPDATE,DEL,DEL”
     **/
    public $detailStatuss;

    /**
     * 折扣ID
     **/
    public $discountId;

    /**
     * 折扣名称，长度不能超过25字节
     **/
    public $discountName;

    /**
     * 状态DEL（删除）UPDATE(更新)
     **/
    public $discountStatus;

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
    }
}
