<?php
/**
 * TOP API: taobao.simba.insight.catsanalysis.get request
 *
 * @author auto create
 * @since 1.0, 2013-06-04 16:35:33
 */
class TopLinker_Request_SimbaInsightCatsanalysisGet extends TopLinker_Request_Abstract
{
    /**
     * 查询类目id数组，最大长度200
     **/
    public $categoryIds;

    /**
     * 主人昵称
     **/
    public $nick;

    /**
     * 结果过滤。
    AREA：返回地域占比；
    SOURCE：返回来源占比；
    HPRICE：返回竞价分布。
    stu只能是AREA、SOURCE或HPRICE中的一个
     **/
    public $stu;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->categoryIds, "categoryIds");
        //RequestCheckUtil::checkMaxListSize($this->categoryIds, 200, "categoryIds");
        //RequestCheckUtil::checkNotNull($this->stu, "stu");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
