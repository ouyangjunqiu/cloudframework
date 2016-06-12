<?php
/**
 * TOP API: taobao.simba.insight.catsrelatedword.get request
 *
 * @author auto create
 * @since 1.0, 2013-06-04 16:35:33
 */
class TopLinker_Request_SimbaInsightCatsrelatedwordGet extends TopLinker_Request_Abstract
{
    /**
     * 主人昵称
     **/
    public $nick;

    /**
     * 最大返回数量(1-10)
     **/
    public $resultNum;

    /**
     * 查询词数组，最大长度200
     **/
    public $words;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->resultNum, "resultNum");
        //RequestCheckUtil::checkMaxValue($this->resultNum, 10, "resultNum");
        //RequestCheckUtil::checkMinValue($this->resultNum, 1, "resultNum");
        //RequestCheckUtil::checkNotNull($this->words, "words");
        //RequestCheckUtil::checkMaxListSize($this->words, 200, "words");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
