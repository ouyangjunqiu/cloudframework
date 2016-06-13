<?php
/**
 * TOP API: taobao.fenxiao.discounts.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_FenxiaoDiscountsGet extends TopLinker_Request_Abstract
{
    /**
     * 折扣ID
     **/
    public $discountId;

    /**
     * 指定查询额外的信息，可选值：DETAIL（查询折扣详情），多个可选值用逗号分割。（只允许指定折扣ID情况下使用）
     **/
    public $extFields;

    public function rules()
    {
        return array();
    }
}
