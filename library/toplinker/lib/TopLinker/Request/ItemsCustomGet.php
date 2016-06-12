<?php
/**
 * TOP API: taobao.items.custom.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_ItemsCustomGet extends TopLinker_Request_Abstract
{
    /**
     * 需返回的字段列表。可选值：Item商品结构体中的所有字段；多个字段之间用“,”分隔。如果想返回整个子对象，那字段为item_img，如果是想返回子对象里面的字段，那字段为item_img.url。新增返回字段：one_station标记商品是否淘1站商品
     **/
    public $fields;

    /**
     * 商品的外部商品ID
     **/
    public $outerId;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->fields, "fields");
        //RequestCheckUtil::checkNotNull($this->outerId, "outerId");
    }
}
