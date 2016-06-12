<?php
/**
 * TOP API: taobao.wlb.orderschedulerule.query request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_WlbOrderscheduleruleQuery extends TopLinker_Request_Abstract
{
    /**
     * 当前页
     **/
    public $pageNo;

    /**
     * 分页记录个数，如果用户输入的记录数大于50，则一页显示50条记录
     **/
    public $pageSize;

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
    }
}
