<?php
/**
 * TOP API: taobao.trade.memo.add request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_TradeMemoAdd extends TopLinker_Request_Abstract
{
    /**
     * 交易备注旗帜，可选值为：0(灰色), 1(红色), 2(黄色), 3(绿色), 4(蓝色), 5(粉红色)，默认值为0
     **/
    public $flag;

    /**
     * 交易备注。最大长度: 1000个字节
     **/
    public $memo;

    /**
     * 交易编号
     **/
    public $tid;

    public function setFlag($flag)
    {
        $this->flag = $flag;
        $this->apiParas["flag"] = $flag;
    }

    public function getFlag()
    {
        return $this->flag;
    }

    public function setMemo($memo)
    {
        $this->memo = $memo;
        $this->apiParas["memo"] = $memo;
    }

    public function getMemo()
    {
        return $this->memo;
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
        //RequestCheckUtil::checkMaxValue($this->flag, 5, "flag");
        //RequestCheckUtil::checkMinValue($this->flag, 0, "flag");
        //RequestCheckUtil::checkNotNull($this->memo, "memo");
        //RequestCheckUtil::checkNotNull($this->tid, "tid");
    }
}
