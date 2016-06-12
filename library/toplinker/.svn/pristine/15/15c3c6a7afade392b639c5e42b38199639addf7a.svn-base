<?php
/**
 * TOP API: taobao.wangwang.eservice.chatpeers.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_WangwangEserviceChatpeersGet extends TopLinker_Request_Abstract
{
    /**
     * 字符集
     **/
    public $charset;

    /**
     * 聊天用户ID：cntaobao+淘宝nick，例如cntaobaotest
     **/
    public $chatId;

    /**
     * 查询结束日期。如2010-03-24，与起始日期跨度不能超过7天
     **/
    public $endDate;

    /**
     * 查询起始日期。如2010-02-01，与当前日期间隔小于1个月。
     **/
    public $startDate;

    public function setCharset($charset)
    {
        $this->charset = $charset;
        $this->apiParas["charset"] = $charset;
    }

    public function getCharset()
    {
        return $this->charset;
    }

    public function setChatId($chatId)
    {
        $this->chatId = $chatId;
        $this->apiParas["chat_id"] = $chatId;
    }

    public function getChatId()
    {
        return $this->chatId;
    }

    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        $this->apiParas["end_date"] = $endDate;
    }

    public function getEndDate()
    {
        return $this->endDate;
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

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->chatId, "chatId");
        //RequestCheckUtil::checkNotNull($this->endDate, "endDate");
        //RequestCheckUtil::checkNotNull($this->startDate, "startDate");
    }
}
