<?php
/**
 * TOP API: taobao.simba.insight.cats.get request
 *
 * @author auto create
 * @since 1.0, 2013-06-04 16:35:33
 */
class TopLinker_Request_SimbaInsightCatsGet extends TopLinker_Request_Abstract
{
    /**
     * 查询类目id数组，最大长度200
     **/
    public $categoryIds;

    /**
     * 主人昵称
     **/
    public $nick;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->categoryIds, "categoryIds");
        //RequestCheckUtil::checkMaxListSize($this->categoryIds, 200, "categoryIds");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
