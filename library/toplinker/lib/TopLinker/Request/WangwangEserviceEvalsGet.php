<?php
/**
 * TOP API: taobao.wangwang.eservice.evals.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_WangwangEserviceEvalsGet extends TopLinker_Request_Abstract
{
    /**
     * 结束时间
     **/
    public $endDate;

    /**
     * 想要查询的账号列表
     **/
    public $serviceStaffId;

    /**
     * 开始时间
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
        //RequestCheckUtil::checkMaxListSize($this->serviceStaffId, 30, "serviceStaffId");
        //RequestCheckUtil::checkNotNull($this->startDate, "startDate");
    }
}
