<?php
/**
 * TOP API: taobao.simba.insight.wordscats.get request
 *
 * @author auto create
 * @since 1.0, 2013-06-04 16:35:33
 */
class TopLinker_Request_SimbaInsightWordscatsGet extends TopLinker_Request_Abstract
{
    /**
     * 结果过滤。PV：返回展现量；CLICK：返回点击量；AVGCPC：返回平均出价；COMPETITION ：返回竞争宝贝数;CTR 点击率。filter可由,组合
     **/
    public $filter;

    /**
     * 主人昵称
     **/
    public $nick;

    /**
     * 查询词和类目数组，最大长度200，每一个数组元素都是词+类目，以”^^”分割如下：
    词^^类目
     **/
    public $word_categories;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->filter, "filter");
        //RequestCheckUtil::checkNotNull($this->wordCategories, "wordCategories");
        //RequestCheckUtil::checkMaxListSize($this->wordCategories, 200, "wordCategories");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
