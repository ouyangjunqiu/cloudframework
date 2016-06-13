<?php
/**
 * TOP API: taobao.wlb.item.authorization.delete request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_WlbItemAuthorizationDelete extends TopLinker_Request_Abstract
{
    /**
     * 授权关系ID
     **/
    public $authorizeId;

    public function setAuthorizeId($authorizeId)
    {
        $this->authorizeId = $authorizeId;
        $this->apiParas["authorize_id"] = $authorizeId;
    }

    public function getAuthorizeId()
    {
        return $this->authorizeId;
    }

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->authorizeId, "authorizeId");
    }
}
