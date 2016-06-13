<?php
/**
 * TOP API: taobao.trade.snapshot.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_TradeSnapshotGet extends TopLinker_Request_Abstract
{
    /**
     * 需要返回的字段列表。现只支持："snapshot"字段
     **/
    public $fields;

    /**
     * 交易编号
     **/
    public $tid;

    public function setFields($fields)
    {
        $this->fields = $fields;
        $this->apiParas["fields"] = $fields;
    }

    public function getFields()
    {
        return $this->fields;
    }

    public function setTid($tid)
    {
        $this->tid = $tid;
        $this->apiParas["tid"] = $tid;
    }

    public function getTid()
    {
        return $this->tid;
    }

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->fields, "fields");
        //RequestCheckUtil::checkNotNull($this->tid, "tid");
    }
}
