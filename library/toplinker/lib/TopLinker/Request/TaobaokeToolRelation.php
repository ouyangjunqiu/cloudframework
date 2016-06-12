<?php
/**
 * TOP API: taobao.taobaoke.tool.relation request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_TaobaokeToolRelation extends TopLinker_Request_Abstract
{
    /**
     * 用户的pubid 用来判断这个pubid是否是appkey关联的开发者的注册用户
     **/
    public $pubid;

    public function setPubid($pubid)
    {
        $this->pubid = $pubid;
        $this->apiParas["pubid"] = $pubid;
    }

    public function getPubid()
    {
        return $this->pubid;
    }

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->pubid, "pubid");
    }
}
