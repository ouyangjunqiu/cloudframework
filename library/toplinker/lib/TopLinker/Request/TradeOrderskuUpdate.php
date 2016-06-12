<?php
/**
 * TOP API: taobao.trade.ordersku.update request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_TradeOrderskuUpdate extends TopLinker_Request_Abstract
{
    /**
     * 子订单编号（对于单笔订单的交易可以传交易编号）。
     **/
    public $oid;

    /**
     * 销售属性编号，可以通过taobao.item.skus.get获取订单对应的商品的所有销售属性。
     **/
    public $skuId;

    /**
     * 销售属性组合串，格式：p1:v1;p2:v2，如：1627207:28329;20509:28314。可以通过taobao.item.skus.get获取订单对应的商品的所有销售属性。
     **/
    public $skuProps;

    public function setOid($oid)
    {
        $this->oid = $oid;
        $this->apiParas["oid"] = $oid;
    }

    public function getOid()
    {
        return $this->oid;
    }

    public function setSkuId($skuId)
    {
        $this->skuId = $skuId;
        $this->apiParas["sku_id"] = $skuId;
    }

    public function getSkuId()
    {
        return $this->skuId;
    }

    public function setSkuProps($skuProps)
    {
        $this->skuProps = $skuProps;
        $this->apiParas["sku_props"] = $skuProps;
    }

    public function getSkuProps()
    {
        return $this->skuProps;
    }

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->oid, "oid");
    }
}
