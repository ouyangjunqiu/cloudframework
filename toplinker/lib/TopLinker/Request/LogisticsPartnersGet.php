<?php
/**
 * TOP API: taobao.logistics.partners.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_LogisticsPartnersGet extends TopLinker_Request_Abstract
{
    /**
     * 货物价格.只有当选择货到付款此参数才会有效
     **/
    public $goodsValue;

    /**
     * 服务类型，根据此参数可查出提供相应服务类型的物流公司信息(物流公司状态正常)，可选值：cod(货到付款)、online(在线下单)、 offline(自己联系)、limit(限时物流)。然后再根据source_id,target_id,goods_value这三个条件来过滤物流公司. 目前输入自己联系服务类型将会返回空，因为自己联系并没有具体的服务信息，所以不会有记录。
     **/
    public $serviceType;

    /**
     * 物流公司揽货地地区码.参考:http://www.stats.gov.cn/tjbz/xzqhdm/t20100623_402652267.htm  或者调用 taobao.areas.get 获取
     **/
    public $sourceId;

    /**
     * 物流公司派送地地区码.参考:http://www.stats.gov.cn/tjbz/xzqhdm/t20100623_402652267.htm  或者调用 taobao.areas.get 获取
     **/
    public $targetId;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->serviceType, "serviceType");
    }
}
