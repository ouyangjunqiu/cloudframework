<?php
/**
 * TOP API: taobao.wangwang.eservice.chatlog.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_WangwangEserviceChatlogGet extends TopLinker_Request_Abstract
{
    /**
     * 聊天消息终止时间，如2010-03-24
     **/
    public $endDate;

    /**
     * 聊天消息被查询用户ID：cntaobao+淘宝nick，例如cntaobaotest
     **/
    public $fromId;

    /**
     * 聊天消息起始时间，如2010-02-01
     **/
    public $startDate;

    /**
     * 聊天消息相关方ID：cntaobao+淘宝nick，例如cntaobaotest
     **/
    public $toId;

    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        $this->apiParas["end_date"] = $endDate;
    }

    public function getEndDate()
    {
        return $this->endDate;
    }

    public function setFromId($fromId)
    {
        $this->fromId = $fromId;
        $this->apiParas["from_id"] = $fromId;
    }

    public function getFromId()
    {
        return $this->fromId;
    }

    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        $this->apiParas["start_date"] = $startDate;
    }

    public function getStartDate()
    {
        return $this->startDate;
    }

    public function setToId($toId)
    {
        $this->toId = $toId;
        $this->apiParas["to_id"] = $toId;
    }

    public function getToId()
    {
        return $this->toId;
    }

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->endDate, "endDate");
        //RequestCheckUtil::checkNotNull($this->fromId, "fromId");
        //RequestCheckUtil::checkNotNull($this->startDate, "startDate");
        //RequestCheckUtil::checkNotNull($this->toId, "toId");
    }
}
