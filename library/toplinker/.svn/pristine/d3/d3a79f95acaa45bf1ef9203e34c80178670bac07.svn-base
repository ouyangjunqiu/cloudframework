<?php
/**
 * TOP API: taobao.wlb.replenish.statistics request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_WlbReplenishStatistics extends TopLinker_Request_Abstract
{
    /**
     * 商品编码
     **/
    public $itemCode;

    /**
     * 商品名称
     **/
    public $name;

    /**
     * 分页参数，默认第一页
     **/
    public $pageNo;

    /**
     * 分页每页页数，默认20，最大50
     **/
    public $pageSize;

    /**
     * 仓库编码
     **/
    public $storeCode;

    public function setItemCode($itemCode)
    {
        $this->itemCode = $itemCode;
        $this->apiParas["item_code"] = $itemCode;
    }

    public function getItemCode()
    {
        return $this->itemCode;
    }

    public function setName($name)
    {
        $this->name = $name;
        $this->apiParas["name"] = $name;
    }

    public function getName()
    {
        return $this->name;
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

    public function setStoreCode($storeCode)
    {
        $this->storeCode = $storeCode;
        $this->apiParas["store_code"] = $storeCode;
    }

    public function getStoreCode()
    {
        return $this->storeCode;
    }

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkMaxValue($this->pageSize, 50, "pageSize");
    }
}
