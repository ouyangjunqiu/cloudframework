<?php
/**
 * TOP API: taobao.item.quantity.update request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_ItemQuantityUpdate extends TopLinker_Request_Abstract
{
    /**
     * 商品数字ID，必填参数
     **/
    public $numIid;

    /**
     * SKU的商家编码，可选参数。如果不填则默认修改宝贝的库存，如果填了则按照商家编码搜索出对应的SKU并修改库存。当sku_id和本字段都填写时以sku_id为准搜索对应SKU
     **/
    public $outerId;

    /**
     * 库存修改值，必选。当全量更新库存时，quantity必须为大于等于0的正整数；当增量更新库存时，quantity为整数，可小于等于0。若增量更新时传入的库存为负数且绝对值大于当前实际库存，则库存改为0。比如当前实际库存为1，传入增量更新quantity=-5，库存改为0
     **/
    public $quantity;

    /**
     * 要操作的SKU的数字ID，可选。如果不填默认修改宝贝的库存，如果填上则修改该SKU的库存
     **/
    public $skuId;

    /**
     * 库存更新方式，可选。1为全量更新，2为增量更新。如果不填，默认为全量更新
     **/
    public $type;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->numIid, "numIid");
        //RequestCheckUtil::checkNotNull($this->quantity, "quantity");
    }
}
