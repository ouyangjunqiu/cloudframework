<?php
/**
 * TOP API: taobao.taohua.previewurl.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_TaohuaPreviewurlGet extends TopLinker_Request_Abstract
{
    /**
     * 用来区分要预览的文档类型,目前支持两种
    pre_epub 预览epub文档
    pre_pdf  预览pdf文档
     **/
    public $fileType;

    /**
     * 商品ID
     **/
    public $itemId;

    /**
     * 文件位置
     **/
    public $position;

    public function setFileType($fileType)
    {
        $this->fileType = $fileType;
        $this->apiParas["file_type"] = $fileType;
    }

    public function getFileType()
    {
        return $this->fileType;
    }

    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
        $this->apiParas["item_id"] = $itemId;
    }

    public function getItemId()
    {
        return $this->itemId;
    }

    public function setPosition($position)
    {
        $this->position = $position;
        $this->apiParas["position"] = $position;
    }

    public function getPosition()
    {
        return $this->position;
    }

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->fileType, "fileType");
        //RequestCheckUtil::checkNotNull($this->itemId, "itemId");
        //RequestCheckUtil::checkNotNull($this->position, "position");
    }
}
