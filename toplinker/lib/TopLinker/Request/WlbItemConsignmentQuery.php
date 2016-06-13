<?php
/**
 * TOP API: taobao.wlb.item.consignment.query request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_WlbItemConsignmentQuery extends TopLinker_Request_Abstract
{
    /**
     * 授权结束时间
     **/
    public $authorizeEndTime;

    /**
     * 授权开始时间
     **/
    public $authorizeStartTime;

    /**
     * 货主的用户昵称，未设置则查询全部
     **/
    public $ownerUserNick;

    /**
     * 当前页
     **/
    public $pageNo;

    /**
     * 分页记录个数，如果用户输入的记录数大于50，则一页显示50条记录
     **/
    public $pageSize;

    public function setAuthorizeEndTime($authorizeEndTime)
    {
        $this->authorizeEndTime = $authorizeEndTime;
        $this->apiParas["authorize_end_time"] = $authorizeEndTime;
    }

    public function getAuthorizeEndTime()
    {
        return $this->authorizeEndTime;
    }

    public function setAuthorizeStartTime($authorizeStartTime)
    {
        $this->authorizeStartTime = $authorizeStartTime;
        $this->apiParas["authorize_start_time"] = $authorizeStartTime;
    }

    public function getAuthorizeStartTime()
    {
        return $this->authorizeStartTime;
    }

    public function setOwnerUserNick($ownerUserNick)
    {
        $this->ownerUserNick = $ownerUserNick;
        $this->apiParas["owner_user_nick"] = $ownerUserNick;
    }

    public function getOwnerUserNick()
    {
        return $this->ownerUserNick;
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
        //RequestCheckUtil::checkNotNull($this->pageNo, "pageNo");
        //RequestCheckUtil::checkNotNull($this->pageSize, "pageSize");
    }
}
