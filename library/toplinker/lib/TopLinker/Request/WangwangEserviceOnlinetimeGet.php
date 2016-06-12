<?php
/**
 * TOP API: taobao.wangwang.eservice.onlinetime.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_WangwangEserviceOnlinetimeGet extends TopLinker_Request_Abstract
{
    /**
     * 结束日期
     **/
    public $endDate;

    /**
     * 客服人员id：cntaobao+淘宝nick，例如cntaobaotest
     **/
    public $serviceStaffId;

    /**
     * 开始日期
     **/
    public $startDate;

    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        $this->apiParas["end_date"] = $endDate;
    }

    public function getEndDate()
    {
        return $this->endDate;
    }

    public function setServiceStaffId($serviceStaffId)
    {
        $this->serviceStaffId = $serviceStaffId;
        $this->apiParas["service_staff_id"] = $serviceStaffId;
    }

    public function getServiceStaffId()
    {
        return $this->serviceStaffId;
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
        //RequestCheckUtil::checkNotNull($this->endDate, "endDate");
        //RequestCheckUtil::checkNotNull($this->serviceStaffId, "serviceStaffId");
        //RequestCheckUtil::checkNotNull($this->startDate, "startDate");
    }
}
