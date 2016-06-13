<?php
/**
 * TOP API: taobao.crm.rule.add request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_CrmRuleAdd extends TopLinker_Request_Abstract
{
    /**
     * 会员等级，可选值为：1,2,3,4
     **/
    public $grade;

    /**
     * 规则应用分组集合，若分组上有任务，则该分组不能挂到该规则下
     **/
    public $groupIds;

    /**
     * 最大平均客单价，单位为元
     **/
    public $maxAvgPrice;

    /**
     * 最大交易关闭数
     **/
    public $maxCloseTradeNum;

    /**
     * 最大宝贝件数
     **/
    public $maxItemNum;

    /**
     * 最迟交易时间
     **/
    public $maxLastTradeTime;

    /**
     * 最大交易金额，单位为元
     **/
    public $maxTradeAmount;

    /**
     * 最大交易数
     **/
    public $maxTradeCount;

    /**
     * 最小平均客单价，单位元
     **/
    public $minAvgPrice;

    /**
     * 最少交易关闭数
     **/
    public $minCloseTradeNum;

    /**
     * 最少宝贝件数
     **/
    public $minItemNum;

    /**
     * 最早交易日期
    必须为早于今天的某个时间，例如今天是2011-11-11，那么必须填写2011-11-10或者早于此日期的时间
     **/
    public $minLastTradeTime;

    /**
     * 最小交易金额,单位元。
     **/
    public $minTradeAmount;

    /**
     * 最小交易次数
     **/
    public $minTradeCount;

    /**
     * 北京=1,天津=2,河北省=3,山西省=4,内蒙古自治区=5,辽宁省=6,吉林省=7,黑龙江省=8,上海=9,江苏省=10,浙江省=11,安徽省=12,福建省=13,江西省=14,山东省=15,河南省=16,湖北省=17,湖南省=18, 广东省=19,广西壮族自治区=20,海南省=21,重庆=22,四川省=23,贵州省=24,云南省=25,西藏自治区26,陕西省=27,甘肃省=28,青海省=29,宁夏回族自治区=30,新疆维吾尔自治区=31,台湾省=32,香港特别行政区=33,澳门特别行政区=34,海外=35
     **/
    public $province;

    /**
     * 客户关系来源,可选值为:1,2
     **/
    public $relationSource;

    /**
     * 规则名称
     **/
    public $ruleName;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkMaxValue($this->grade, 4, "grade");
        //RequestCheckUtil::checkMinValue($this->grade, 1, "grade");
        //RequestCheckUtil::checkMaxListSize($this->groupIds, 10, "groupIds");
        //RequestCheckUtil::checkMaxLength($this->maxAvgPrice, 7, "maxAvgPrice");
        //RequestCheckUtil::checkMinValue($this->maxCloseTradeNum, 0, "maxCloseTradeNum");
        //RequestCheckUtil::checkMinValue($this->maxItemNum, 0, "maxItemNum");
        //RequestCheckUtil::checkMaxLength($this->maxTradeAmount, 7, "maxTradeAmount");
        //RequestCheckUtil::checkMinValue($this->maxTradeCount, 0, "maxTradeCount");
        //RequestCheckUtil::checkMaxLength($this->minAvgPrice, 7, "minAvgPrice");
        //RequestCheckUtil::checkMinValue($this->minCloseTradeNum, 0, "minCloseTradeNum");
        //RequestCheckUtil::checkMinValue($this->minItemNum, 0, "minItemNum");
        //RequestCheckUtil::checkMaxLength($this->minTradeAmount, 7, "minTradeAmount");
        //RequestCheckUtil::checkMinValue($this->minTradeCount, 0, "minTradeCount");
        //RequestCheckUtil::checkMaxValue($this->province, 35, "province");
        //RequestCheckUtil::checkMinValue($this->province, 1, "province");
        //RequestCheckUtil::checkMaxValue($this->relationSource, 2, "relationSource");
        //RequestCheckUtil::checkMinValue($this->relationSource, 1, "relationSource");
        //RequestCheckUtil::checkNotNull($this->ruleName, "ruleName");
        //RequestCheckUtil::checkMaxLength($this->ruleName, 15, "ruleName");
    }
}
