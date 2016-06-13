<?php
/**
 * TOP API: taobao.simba.insight.catsbase.get request
 *
 * @author auto create
 * @since 1.0, 2013-06-04 16:35:33
 */
class TopLinker_Request_SimbaInsightCatsbaseGet extends TopLinker_Request_Abstract
{
    /**
     * 查询类目id数组，最大长度200
     **/
    public $category_ids;

    /**
     * 结果过滤。PV：返回展现量；CLICK：返回点击量；AVGCPC：返回平均出价；COMPETITION ：返回竞争宝贝数;CTR 点击率。filter可由,组合
     **/
    public $filter;

    /**
     * 主人昵称
     **/
    public $nick;

    /**
     * 时间格式(DAY: 最近一天； WEEK：最近一周。MONTH：最近一个月。3MONTH：最近三个月)
     **/
    public $time;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->categoryIds, "categoryIds");
        //RequestCheckUtil::checkMaxListSize($this->categoryIds, 200, "categoryIds");
        //RequestCheckUtil::checkNotNull($this->filter, "filter");
        //RequestCheckUtil::checkNotNull($this->time, "time");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
