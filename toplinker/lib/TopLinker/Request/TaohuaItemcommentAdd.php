<?php
/**
 * TOP API: taobao.taohua.itemcomment.add request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_TaohuaItemcommentAdd extends TopLinker_Request_Abstract
{
    /**
     * 对商品的评论内容
     **/
    public $comment;

    /**
     * 商品ID
     **/
    public $itemId;

    public function setComment($comment)
    {
        $this->comment = $comment;
        $this->apiParas["comment"] = $comment;
    }

    public function getComment()
    {
        return $this->comment;
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

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->comment, "comment");
        //RequestCheckUtil::checkMaxLength($this->comment, 4000, "comment");
        //RequestCheckUtil::checkNotNull($this->itemId, "itemId");
    }
}
