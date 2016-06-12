<?php
/**
 * TOP API: taobao.taobaoke.listurl.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_TaobaokeListurlGet extends TopLinker_Request_Abstract
{
    /**
     * 推广者的淘宝会员昵称.注：这里指的是淘宝的登录会员名
     **/
    public $nick;

    /**
     * 自定义输入串.格式:英文和数字组成;长度不能大于12个字符,区分不同的推广渠道,如:bbs,表示bbs为推广渠道;blog,表示blog为推广渠道.
     **/
    public $outerCode;

    /**
     * 淘客用户的pid,用于生成点击串.nick和pid都传入的话,以pid为准
     **/
    public $pid;

    /**
     * 关键词
     **/
    public $q;

    public function setNick($nick)
    {
        $this->nick = $nick;
        $this->apiParas["nick"] = $nick;
    }

    public function getNick()
    {
        return $this->nick;
    }

    public function setOuterCode($outerCode)
    {
        $this->outerCode = $outerCode;
        $this->apiParas["outer_code"] = $outerCode;
    }

    public function getOuterCode()
    {
        return $this->outerCode;
    }

    public function setPid($pid)
    {
        $this->pid = $pid;
        $this->apiParas["pid"] = $pid;
    }

    public function getPid()
    {
        return $this->pid;
    }

    public function setQ($q)
    {
        $this->q = $q;
        $this->apiParas["q"] = $q;
    }

    public function getQ()
    {
        return $this->q;
    }

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->q, "q");
    }
}
