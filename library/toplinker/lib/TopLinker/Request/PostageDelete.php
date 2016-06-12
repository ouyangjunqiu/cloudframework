<?php
/**
 * TOP API: taobao.postage.delete request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_PostageDelete extends TopLinker_Request_Abstract
{
    /**
     * 邮费模板id
     **/
    public $postageId;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->postageId, "postageId");
    }
}
