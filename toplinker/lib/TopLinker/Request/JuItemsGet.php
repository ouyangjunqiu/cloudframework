<?php
/**
 * TOP API: taobao.ju.items.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_JuItemsGet extends TopLinker_Request_Abstract
{
    /**
     * 代表需要返回的商品对象字段。可选值：ItemData商品结构体中所有字段均可返回；多个字段用","分隔。如果fields为空，或者不传该参数，就默认获得所有的字段
     **/
    public $fields;

    /**
     * 商品ID列表。id列表超过6条也只返回前6条的商品
     **/
    public $ids;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->ids, "ids");
    }
}
