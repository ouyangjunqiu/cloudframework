<?php
/**
 * TOP API: taobao.taohua.audioreader.tracks.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_TaohuaAudioreaderTracksGet extends TopLinker_Request_Abstract
{
    /**
     * 有声读物专辑ID
     **/
    public $itemId;

    /**
     * 当前页码
     **/
    public $pageNo;

    /**
     * 每页个数
     **/
    public $pageSize;

    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
        $this->apiParas["item_id"] = $itemId;
    }

    public function getItemId()
    {
        return $this->itemId;
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
        //RequestCheckUtil::checkNotNull($this->itemId, "itemId");
        //RequestCheckUtil::checkMinValue($this->itemId, 1, "itemId");
        //RequestCheckUtil::checkMaxValue($this->pageNo, 100, "pageNo");
        //RequestCheckUtil::checkMinValue($this->pageNo, 1, "pageNo");
        //RequestCheckUtil::checkMaxValue($this->pageSize, 100, "pageSize");
        //RequestCheckUtil::checkMinValue($this->pageSize, 1, "pageSize");
    }
}
