<?php
/**
 * TOP API: taobao.hotels.search request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_HotelsSearch extends TopLinker_Request_Abstract
{
    /**
     * 城市编码。参见：http://kezhan.trip.taobao.com/area.html。
    domestic为true时，province,city,district不能同时为空或为0
     **/
    public $city;

    /**
     * domestic为true时，固定China；
    domestic为false时，必须传定义的海外国家编码值，是必填项。参见：http://kezhan.trip.taobao.com/countrys.html
     **/
    public $country;

    /**
     * 区域（县级市）编码。参见：http://kezhan.trip.taobao.com/area.html。
    domestic为true时，province,city,district不能同时为空或为0
     **/
    public $district;

    /**
     * 是否国内酒店。可选值：true，false
     **/
    public $domestic;

    /**
     * 酒店名称。不能超过60字节
     **/
    public $name;

    /**
     * 分页页码。取值范围，大于零的整数，默认值1，即返回第一页的数据。页面大小为20
     **/
    public $pageNo;

    /**
     * 省份编码。参见：http://kezhan.trip.taobao.com/area.html。
    domestic为true时，province,city,district不能同时为空或为0
     **/
    public $province;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->domestic, "domestic");
        //RequestCheckUtil::checkMaxLength($this->name, 60, "name");
    }
}
