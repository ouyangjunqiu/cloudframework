<?php
/**
 * TOP API: taobao.fenxiao.cooperation.update request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_FenxiaoCooperationUpdate extends TopLinker_Request_Abstract
{
    /**
     * 分销商ID
     **/
    public $distributorId;

    /**
     * 等级ID(0代表取消)
     **/
    public $gradeId;

    /**
     * 分销方式(新增)： AGENT(代销)、DEALER(经销)(默认为代销)
     **/
    public $tradeType;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->distributorId, "distributorId");
        //RequestCheckUtil::checkNotNull($this->gradeId, "gradeId");
    }
}
