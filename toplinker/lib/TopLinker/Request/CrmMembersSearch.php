<?php
/**
 * TOP API: taobao.crm.members.search request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_CrmMembersSearch extends TopLinker_Request_Abstract
{
    /**
     * 买家昵称
     **/
    public $buyerNick;

    /**
     * 城市
     **/
    public $city;

    /**
     * 显示第几页的会员，如果输入的页码大于总共的页码数，例如总共10页，但是current_page的值为11，则返回空白页，最小页数为1
     **/
    public $currentPage;

    /**
     * 会员等级，1：普通客户，2：高级会员，3：高级会员, 4：至尊vip
    注：grade=0通过relation_source=2查询
     **/
    public $grade;

    /**
     * 分组id
     **/
    public $groupId;

    /**
     * 最大平均客单价，单位为元
     **/
    public $maxAvgPrice;

    /**
     * 最大交易关闭笔数
     **/
    public $maxCloseTradeNum;

    /**
     * 最大交易宝贝件数
     **/
    public $maxItemNum;

    /**
     * 最迟上次交易时间
     **/
    public $maxLastTradeTime;

    /**
     * 最大交易额，单位为元
     **/
    public $maxTradeAmount;

    /**
     * 最大交易量
     **/
    public $maxTradeCount;

    /**
     * 最少平均客单价，单位为元
     **/
    public $minAvgPrice;

    /**
     * 最小交易关闭的笔数
     **/
    public $minCloseTradeNum;

    /**
     * 最小交易宝贝件数
     **/
    public $minItemNum;

    /**
     * 最早上次交易时间
     **/
    public $minLastTradeTime;

    /**
     * 最小交易额，单位为元
     **/
    public $minTradeAmount;

    /**
     * 最小交易量
     **/
    public $minTradeCount;

    /**
     * 指定按哪个字段排序，目前可排序的字段为：relation，trade_count，trade_amount，avg_price，lastest_time
     **/
    public $order;

    /**
     * 每页显示的会员数量，page_size的最大值不能超过100，最小值不能小于1
     **/
    public $pageSize;

    /**
     * 北京=1,天津=2,河北省=3,山西省=4,内蒙古自治区=5,辽宁省=6,吉林省=7,黑龙江省=8,上海=9,江苏省=10,浙江省=11,安徽省=12,福建省=13,江西省=14,山东省=15,河南省=16,湖北省=17,湖南省=18, 广东省=19,广西壮族自治区=20,海南省=21,重庆=22,四川省=23,贵州省=24,云南省=25,西藏自治区26,陕西省=27,甘肃省=28,青海省=29,宁夏回族自治区=30,新疆维吾尔自治区=31,台湾省=32,香港特别行政区=33,澳门特别行政区=34,海外=35
     **/
    public $province;

    /**
     * 关系来源，1交易成功，2未成交(grade=0)
     **/
    public $relationSource;

    /**
     * 用于描述是按升序还是降序排列结果
     **/
    public $sort;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkMaxLength($this->buyerNick, 32, "buyerNick");
        //RequestCheckUtil::checkNotNull($this->currentPage, "currentPage");
        //RequestCheckUtil::checkMinValue($this->currentPage, 1, "currentPage");
        //RequestCheckUtil::checkMaxValue($this->grade, 4, "grade");
        //RequestCheckUtil::checkMinValue($this->grade, 1, "grade");
        //RequestCheckUtil::checkMinValue($this->maxCloseTradeNum, 0, "maxCloseTradeNum");
        //RequestCheckUtil::checkMinValue($this->maxItemNum, 0, "maxItemNum");
        //RequestCheckUtil::checkMinValue($this->maxTradeCount, 0, "maxTradeCount");
        //RequestCheckUtil::checkMinValue($this->minCloseTradeNum, 0, "minCloseTradeNum");
        //RequestCheckUtil::checkMinValue($this->minItemNum, 0, "minItemNum");
        //RequestCheckUtil::checkMinValue($this->minTradeCount, 0, "minTradeCount");
        //RequestCheckUtil::checkMaxValue($this->pageSize, 100, "pageSize");
        //RequestCheckUtil::checkMinValue($this->pageSize, 1, "pageSize");
        //RequestCheckUtil::checkMaxValue($this->province, 35, "province");
        //RequestCheckUtil::checkMinValue($this->province, 1, "province");
        //RequestCheckUtil::checkMaxValue($this->relationSource, 2, "relationSource");
        //RequestCheckUtil::checkMinValue($this->relationSource, 1, "relationSource");
    }
}
