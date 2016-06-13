<?php
/**
 * TOP API: taobao.ju.citygroup.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_JuCitygroupGet extends TopLinker_Request_Abstract
{
    /**
     * 需要获取生活服务商品的城市名称（中文）
     **/
    public $city;

    /**
     * 代表需要返回的商品对象字段。可选值：ItemData商品结构体中所有字段均可返回；多个字段用“,”分隔。如果fields为空，或者不传该参数，就默认获得所有的字段
     **/
    public $fields;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->city, "city");
    }
}
