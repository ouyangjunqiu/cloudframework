<?php
/**
 * TOP API: taobao.item.skus.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_ItemSkusGet extends TopLinker_Request_Abstract
{
    /**
     * 需返回的字段列表。可选值：Sku结构体中的所有字段；字段之间用“,”分隔。
     **/
    public $fields;

    /**
     * sku所属商品数字id，必选。num_iid个数不能超过40个
     **/
    public $numIids;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->fields, "fields");
        //RequestCheckUtil::checkNotNull($this->numIids, "numIids");
    }
}
