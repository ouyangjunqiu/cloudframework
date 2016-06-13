<?php
/**
 * TOP API: taobao.wangwang.eservice.loginlogs.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_WangwangEserviceLoginlogsGet extends TopLinker_Request_Abstract
{
    /**
     * 查询登录日志的结束时间，必须按示例的格式，否则会返回错误
     **/
    public $endDate;

    /**
     * 需要查询登录日志的账号列表
     **/
    public $serviceStaffId;

    /**
     * 查询登录日志的开始日期，必须按示例的格式，否则会返回错误
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
