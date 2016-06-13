<?php
/**
 * TOP API: taobao.item.update.delisting request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_ItemUpdateDelisting extends TopLinker_Request_Abstract
{
    /**
     * 商品数字ID，该参数必须
     **/
    public $numIid;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->numIid, "numIid");
        //RequestCheckUtil::checkMinValue($this->numIid, 0, "numIid");
    }
}
