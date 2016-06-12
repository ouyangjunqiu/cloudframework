<?php
/**
 * TOP API: taobao.skus.custom.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_SkusCustomGet extends TopLinker_Request_Abstract
{
    /**
     * 需返回的字段列表。可选值：Sku结构体中的所有字段；字段之间用“,”隔开
     **/
    public $fields;

    /**
     * Sku的外部商家ID
     **/
    public $outerId;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->fields, "fields");
        //RequestCheckUtil::checkNotNull($this->outerId, "outerId");
    }
}
