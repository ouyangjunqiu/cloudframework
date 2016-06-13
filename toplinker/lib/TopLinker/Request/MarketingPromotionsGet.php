<?php
/**
 * TOP API: taobao.marketing.promotions.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_MarketingPromotionsGet extends TopLinker_Request_Abstract
{
    /**
     * 需返回的优惠策略结构字段列表。可选值为Promotion中所有字段，如：promotion_id, promotion_title, item_id, status, tag_id等等
     **/
    public $fields;

    /**
     * 商品数字ID。根据该ID查询商品下通过第三方工具设置的所有优惠策略
     **/
    public $numIid;

    /**
     * 优惠策略状态。可选值：ACTIVE(有效)，UNACTIVE(无效)，若不传或者传入其他值，则默认查询全部
     **/
    public $status;

    /**
     * 标签ID
     **/
    public $tagId;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->fields, "fields");
        //RequestCheckUtil::checkNotNull($this->numIid, "numIid");
    }
}
