<?php
/**
 * TOP API: taobao.wlb.tmsorder.query request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_WlbTmsorderQuery extends TopLinker_Request_Abstract
{
    /**
     * 物流订单编号
     **/
    public $orderCode;

    /**
     * 当前页
     **/
    public $pageNo;

    /**
     * 分页记录个数，如果用户输入的记录数大于50，则一页显示50条记录
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
        //RequestCheckUtil::checkMaxLength($this->orderCode, 64, "orderCode");
    }
}
