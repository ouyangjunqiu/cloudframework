<?php
/**
 * TOP API: taobao.taohua.audioreader.recommend.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_TaohuaAudioreaderRecommendGet extends TopLinker_Request_Abstract
{
    /**
     * 推荐专辑的类型，有两个可选项，recent:最近更新，hot:热门
     **/
    public $itemType;

    /**
     * 当前页码
     **/
    public $pageNo;

    /**
     * 每页个数
     **/
    public $pageSize;

    public function setItemType($itemType)
    {
        $this->itemType = $itemType;
        $this->apiParas["item_type"] = $itemType;
    }

    public function getItemType()
    {
        return $this->itemType;
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
        //RequestCheckUtil::checkNotNull($this->itemType, "itemType");
        //RequestCheckUtil::checkMaxValue($this->pageNo, 100, "pageNo");
        //RequestCheckUtil::checkMinValue($this->pageNo, 1, "pageNo");
        //RequestCheckUtil::checkMaxValue($this->pageSize, 100, "pageSize");
        //RequestCheckUtil::checkMinValue($this->pageSize, 1, "pageSize");
    }
}
