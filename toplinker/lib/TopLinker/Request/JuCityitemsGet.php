<?php
/**
 * TOP API: taobao.ju.cityitems.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_JuCityitemsGet extends TopLinker_Request_Abstract
{
    /**
     * 需要获取生活服务商品的城市名称（中文）
     **/
    public $city;

    /**
     * 代表需要返回的商品对象字段。可选值：ItemData商品结构体中所有字段均可返回；多个字段用","分隔。如果fields为空，或者不传该参数，就默认获得所有的字段
     **/
    public $fields;

    /**
     * 分页获取商品信息页序号，代表第几页
     **/
    public $pageNo;

    /**
     * 每次获取商品列表的数量
     **/
    public $pageSize;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->city, "city");
        //RequestCheckUtil::checkNotNull($this->pageNo, "pageNo");
        //RequestCheckUtil::checkMinValue($this->pageNo, 0, "pageNo");
        //RequestCheckUtil::checkNotNull($this->pageSize, "pageSize");
        //RequestCheckUtil::checkMaxValue($this->pageSize, 100, "pageSize");
        //RequestCheckUtil::checkMinValue($this->pageSize, 1, "pageSize");
    }
}
