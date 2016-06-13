<?php
/**
 * TOP API: taobao.wlb.order.page.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_WlbOrderPageGet extends TopLinker_Request_Abstract
{
    /**
     * 查询截止时间
     **/
    public $endTime;

    /**
     * 物流订单编号
     **/
    public $orderCode;

    /**
     * 订单状态
     **/
    public $orderStatus;

    /**
     * 订单子类型：
    （1）OTHER： 其他
    （2）TAOBAO_TRADE： 淘宝交易
    （3）OTHER_TRADE：其他交易
    （4）ALLCOATE： 调拨
    （5）CHECK:  盘点单
    （6）PURCHASE: 采购单
     **/
    public $orderSubType;

    /**
     * 订单类型:
    （1）NORMAL_OUT ：正常出库
    （2）NORMAL_IN：正常入库
    （3）RETURN_IN：退货入库
    （4）EXCHANGE_OUT：换货出库
     **/
    public $orderType;

    /**
     * 分页的第几页
     **/
    public $pageNo;

    /**
     * 每页多少条
     **/
    public $pageSize;

    /**
     * 查询开始时间
     **/
    public $startTime;

    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
        $this->apiParas["end_time"] = $endTime;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }

    public function setOrderCode($orderCode)
    {
        $this->orderCode = $orderCode;
        $this->apiParas["order_code"] = $orderCode;
    }

    public function getOrderCode()
    {
        return $this->orderCode;
    }

    public function setOrderStatus($orderStatus)
    {
        $this->orderStatus = $orderStatus;
        $this->apiParas["order_status"] = $orderStatus;
    }

    public function getOrderStatus()
    {
        return $this->orderStatus;
    }

    public function setOrderSubType($orderSubType)
    {
        $this->orderSubType = $orderSubType;
        $this->apiParas["order_sub_type"] = $orderSubType;
    }

    public function getOrderSubType()
    {
        return $this->orderSubType;
    }

    public function setOrderType($orderType)
    {
        $this->orderType = $orderType;
        $this->apiParas["order_type"] = $orderType;
    }

    public function getOrderType()
    {
        return $this->orderType;
    }

    public function setPageNo($pageNo)
    {
        $this->pageNo = $pageNo;
        $this->apiParas["page_no"] = $pageNo;
    }

    public function getPageNo()
    {
        return $this->pageNo;
    }

    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
        $this->apiParas["page_size"] = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }

    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
        $this->apiParas["start_time"] = $startTime;
    }

    public function getStartTime()
    {
        return $this->startTime;
    }

    public function rules()
    {
        return array();
    }
}
