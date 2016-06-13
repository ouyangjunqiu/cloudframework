<?php
/**
 * TOP API: taobao.taohua.audioreader.album.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_TaohuaAudioreaderAlbumGet extends TopLinker_Request_Abstract
{
    /**
     * 有声读物商品ID
     **/
    public $itemId;

    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
        $this->apiParas["item_id"] = $itemId;
    }

    public function getItemId()
    {
        return $this->itemId;
    }

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->itemId, "itemId");
        //RequestCheckUtil::checkMinValue($this->itemId, 1, "itemId");
    }
}
