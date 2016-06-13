<?php
/**
 * TOP API: taobao.taohua.audioreader.mytracks.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_TaohuaAudioreaderMytracksGet extends TopLinker_Request_Abstract
{
    /**
     * 当前页码
     **/
    public $pageNo;

    /**
     * 每页个数
     **/
    public $pageSize;

    /**
     * 购买专辑的序列ID
     **/
    public $serialId;

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

    public function setSerialId($serialId)
    {
        $this->serialId = $serialId;
        $this->apiParas["serial_id"] = $serialId;
    }

    public function getSerialId()
    {
        return $this->serialId;
    }

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkMaxValue($this->pageNo, 100, "pageNo");
        //RequestCheckUtil::checkMinValue($this->pageNo, 1, "pageNo");
        //RequestCheckUtil::checkMaxValue($this->pageSize, 100, "pageSize");
        //RequestCheckUtil::checkMinValue($this->pageSize, 1, "pageSize");
        //RequestCheckUtil::checkNotNull($this->serialId, "serialId");
    }
}
