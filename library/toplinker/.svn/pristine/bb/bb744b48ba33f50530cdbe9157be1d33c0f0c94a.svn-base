<?php
/**
 * TOP API: taobao.simba.insight.wordsdata.get request
 *
 * @author auto create
 * @since 1.0, 2013-06-04 16:35:33
 */
class TopLinker_Request_SimbaInsightWordsdataGet extends TopLinker_Request_Abstract
{


    /**
     * 查询词组，最大长度10
     **/
    public $bidword_list;

    public $start_date;

    public $end_date;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->filter, "filter");
        //RequestCheckUtil::checkNotNull($this->time, "time");
        //RequestCheckUtil::checkNotNull($this->words, "words");
        //RequestCheckUtil::checkMaxListSize($this->words, 170, "words");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
