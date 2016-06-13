<?php
/**
 * TOP API: taobao.refund.message.add request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_RefundMessageAdd extends TopLinker_Request_Abstract
{
    /**
     * 留言内容。最大长度: 400个字节
     **/
    public $content;

    /**
     * 图片（凭证）。类型: JPG,GIF,PNG;最大为: 500K
     **/
    public $image;

    /**
     * 退款编号。
     **/
    public $refundId;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->content, "content");
        //RequestCheckUtil::checkNotNull($this->refundId, "refundId");
    }
}
