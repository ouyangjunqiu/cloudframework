<?php
/**
 * TOP API: taobao.wlb.orderitem.page.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_WlbOrderitemPageGet extends TopLinker_Request_Abstract
{
    /**
     * 物流宝订单编码
     **/
    public $orderCode;

    /**
     * 分页查询参数，指定查询页数，默认为1
     **/
    public $pageNo;

    /**
     * 分页查询参数，每页查询数量，默认20，最大值50
     **/
    public $pageSize;

    public function setOrderCode($orderCode)
    {
        $this->orderCode = $orderCode;
        $this->apiParas["order_code"] = $orderCode;
    }

    public function getOrderCode()
    {
        return $this->orderCode;
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

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->orderCode, "orderCode");
        //RequestCheckUtil::checkMaxValue($this->pageSize, 50, "pageSize");
    }
}
