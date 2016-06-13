<?php
/**
 * TOP API: taobao.postage.add request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_PostageAdd extends TopLinker_Request_Abstract
{
    /**
     * 默认EMS加价费用.精确到1位小数;单位:元。如:1.5
     **/
    public $emsIncrease;

    /**
     * 默认EMS费用. 精确到1位小数;单位:元。如:200.5
     **/
    public $emsPrice;

    /**
     * 默认快递加价费用.精确到1位小数;单位:元。如:1.5
    <br>
    <font color='red'>货到付款用户，为必选项</font>
     **/
    public $expressIncrease;

    /**
     * 默认快递费用. 精确到1位小数;单位:元。如:200.5
    <br>
    <font color='red'>货到付款用户，为必选项</font>
     **/
    public $expressPrice;

    /**
     * 邮费模板备注,不能超过200个字节
     **/
    public $memo;

    /**
     * 邮费模板名称,不能超过50个字节
     **/
    public $name;

    /**
     * 默认平邮加价费用. 精确到1位小数;单位:元。如:1.5
     **/
    public $postIncrease;

    /**
     * 默认平邮费用. 注意:至少选择一组默认的邮费组,例如:post_price,post_increase . 精确到1位小数;单位:元。如:200.5
     **/
    public $postPrice;

    /**
     * 邮费子项涉及的地区.结构: value1;value2;value3 如:110000;310000;320000,330000 就代表邮费子项涉及(北京;上海;江苏,浙江)四个地区. 可以用taobao.areas.get接口获取.或者参考：http://www.stats.gov.cn/tjbz/xzqhdm/t20080215_402462675.htm
     **/
    public $postageModeDests;

    /**
     * 运费方式加件费用.结构: value1;value2;value3 如: 1.5;2;4 .精确到1位小数;单位:元。如:1.5
     **/
    public $postageModeIncreases;

    /**
     * 运费方式单价. 结构: value1;value2;value3 如: 11.2;14;6 .精确到1位小数;单位:元。如:200.5
     **/
    public $postageModePrices;

    /**
     * 运费方式:平邮 (post),快递公司(express),EMS (ems) 结构:value1;value2;value3 如: post;express;ems 注意:在添加多个PostageMode时,字符串中使用 ";" 分号区分.postage_mode.type,postage_mode.dest,postage_mode.price,postage_mode.increase, 数量必须一致.
     **/
    public $postageModeTypes;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->name, "name");
    }
}
