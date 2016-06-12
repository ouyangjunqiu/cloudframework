<?php
/**
 * TOP API: taobao.item.sku.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_ItemSkuGet extends TopLinker_Request_Abstract
{
    /**
     * 需返回的字段列表。可选值：Sku结构体中的所有字段；字段之间用“,”分隔。
     **/
    public $fields;

    /**
     * 卖家nick(num_iid和nick必传一个)
     **/
    public $nick;

    /**
     * 商品的数字IID（num_iid和nick必传一个，推荐用num_iid）
     **/
    public $numIid;

    /**
     * Sku的id。可以通过taobao.item.get得到
     **/
    public $skuId;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->fields, "fields");
        //RequestCheckUtil::checkMinValue($this->numIid, 0, "numIid");
        //RequestCheckUtil::checkNotNull($this->skuId, "skuId");
    }
}
