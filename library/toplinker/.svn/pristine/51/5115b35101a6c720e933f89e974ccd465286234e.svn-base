<?php
/**
 * TOP API: taobao.simba.rpt.adgroupbase.get request
 *
 * @author auto create
 * @since 1.0, 2013-03-06 16:37:15
 */
class TopLinker_Request_SimbaRptAdgroupbaseGet extends TopLinker_Request_Abstract
{
    /**
     * 推广组id
     **/
    public $adgroup_id;

    /**
     * 推广计划id
     **/
    public $campaign_id;

    /**
     * 结束时间，格式yyyy-mm-dd
     **/
    public $end_time;

    /**
     * 昵称
     **/
    public $nick;

    /**
     * 页码
     **/
    public $page_no;

    /**
     * 每页大小
     **/
    public $page_size;

    /**
     * 报表类型（搜索：SEARCH,类目出价：CAT,
    定向投放：NOSEARCH）可以一次取多个例如：SEARCH,CAT
     **/
    public $search_type;

    /**
     * 数据来源（站内：1，站外：2）可多选以逗号分隔，默认值为：1,2
     **/
    public $source;

    /**
     * 开始时间，格式yyyy-mm-dd
     **/
    public $start_time;

    /**
     * 权限校验参数
     **/
    public $subway_token;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->adgroupId, "adgroupId");
        //RequestCheckUtil::checkNotNull($this->campaignId, "campaignId");
        //RequestCheckUtil::checkNotNull($this->endTime, "endTime");
        //RequestCheckUtil::checkMinValue($this->pageNo, 1, "pageNo");
        //RequestCheckUtil::checkMinValue($this->pageSize, 1, "pageSize");
        //RequestCheckUtil::checkNotNull($this->searchType, "searchType");
        //RequestCheckUtil::checkNotNull($this->source, "source");
        //RequestCheckUtil::checkNotNull($this->startTime, "startTime");
        //RequestCheckUtil::checkNotNull($this->subwayToken, "subwayToken");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
