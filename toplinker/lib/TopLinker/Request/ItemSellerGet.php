<?php
/**
 * TOP API: taobao.item.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_ItemSellerGet extends TopLinker_Request_Abstract
{
    /**
     * 需要返回的商品对象字段。可选值：Item商品结构体中所有字段均可返回；多个字段用“,”分隔。如果想返回整个子对象，那字段为item_img，如果是想返回子对象里面的字段，那字段为item_img.url。新增返回字段：second_kill（是否秒杀商品）、auto_fill（代充商品类型）,props_name（商品属性名称）
     **/
    public $fields;

    /**
     * 商品数字ID
     **/
    public $num_iid;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->fields, "fields");
        //RequestCheckUtil::checkNotNull($this->numIid, "numIid");
        //RequestCheckUtil::checkMinValue($this->numIid, 1, "numIid");
    }
}
