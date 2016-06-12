<?php
/**
 * TOP API: taobao.simba.insight.catstopword.get request
 *
 * @author auto create
 * @since 1.0, 2013-06-04 16:35:33
 */
class TopLinker_Request_SimbaInsightCatstopwordGet extends TopLinker_Request_Abstract
{
    /**
     * 类目id数组，最大长度200
     **/
    public $category_ids;

    /**
     * 主人昵称
     **/
    public $nick;

    /**
     * 最大返回数量(1-100)
     **/
    public $result_num;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->categoryIds, "categoryIds");
        //RequestCheckUtil::checkMaxListSize($this->categoryIds, 200, "categoryIds");
        //RequestCheckUtil::checkNotNull($this->resultNum, "resultNum");
        //RequestCheckUtil::checkMaxValue($this->resultNum, 100, "resultNum");
        //RequestCheckUtil::checkMinValue($this->resultNum, 1, "resultNum");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
