<?php
/**
 * TOP API: taobao.simba.insight.wordsanalysis.get request
 *
 * @author auto create
 * @since 1.0, 2013-06-04 16:35:33
 */
class TopLinker_Request_SimbaInsightWordsanalysisGet extends TopLinker_Request_Abstract
{
    /**
     * 主人昵称
     **/
    public $nick;

    /**
     * 结果过滤。
    AREA：  返回地域占比；
    SOURCE：返回来源占比；
    HPRICE：返回竞价分布。
    stu只能是AREA、SOURCE或HPRICE中的一个
     **/
    public $stu;

    /**
     * 查询词组，最大长度200
     **/
    public $words;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->stu, "stu");
        //RequestCheckUtil::checkNotNull($this->words, "words");
        //RequestCheckUtil::checkMaxListSize($this->words, 200, "words");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
