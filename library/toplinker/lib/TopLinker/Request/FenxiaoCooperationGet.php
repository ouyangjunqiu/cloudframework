<?php
/**
 * TOP API: taobao.fenxiao.cooperation.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_FenxiaoCooperationGet extends TopLinker_Request_Abstract
{
    /**
     * 合作结束时间yyyy-MM-dd
     **/
    public $endDate;

    /**
     * 页码（大于0的整数，默认1）
     **/
    public $pageNo;

    /**
     * 每页记录数（默认20，最大50）
     **/
    public $pageSize;

    /**
     * 合作开始时间yyyy-MM-dd
     **/
    public $startDate;

    /**
     * 合作状态： NORMAL(合作中)、 ENDING(终止中) 、END (终止)
     **/
    public $status;

    /**
     * 分销方式：AGENT(代销) 、DEALER（经销）
     **/
    public $tradeType;

    public function rules()
    {
        return array();
    }
}
