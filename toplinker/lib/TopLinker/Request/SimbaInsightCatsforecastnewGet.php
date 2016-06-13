<?php
/**
 * TOP API: taobao.simba.insight.catsforecastnew.get request
 *
 * @author auto create
 * @since 1.0, 2013-06-04 16:35:33
 */
class TopLinker_Request_SimbaInsightCatsforecastnewGet extends TopLinker_Request_Abstract
{
    /**
     * 主人昵称
     **/
    public $nick;

    /**
     * 查询词数组，最大长度200
     **/
    public $bidword_list;

    public $cid ;//api并不用需要此参数,给Handler使用

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->words, "words");
        //RequestCheckUtil::checkMaxListSize($this->words, 200, "words");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
