<?php
/**
 * TOP API: taobao.huabao.poster.goodsinfo.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_HuabaoPosterGoodsinfoGet extends TopLinker_Request_Abstract
{
    /**
     * 画报的ID
     **/
    public $posterId;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->posterId, "posterId");
    }
}
