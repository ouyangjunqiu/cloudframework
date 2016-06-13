<?php
/**
 * TOP API: taobao.items.list.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_ItemsListGet extends TopLinker_Request_Abstract
{
    /**
     * 需要返回的商品对象字段。可选值：Item商品结构体中所有字段均可返回(注：目前不能返回props_name)；多个字段用“,”分隔。如果想返回整个子对象，那字段为itemimg，如果是想返回子对象里面的字段，那字段为itemimg.url。
     **/
    public $fields;

    /**
     * 商品数字id列表，多个num_iid用逗号隔开，一次不超过20个。
     **/
    public $num_iids;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->fields, "fields");
        //RequestCheckUtil::checkNotNull($this->numIids, "numIids");
    }
}
