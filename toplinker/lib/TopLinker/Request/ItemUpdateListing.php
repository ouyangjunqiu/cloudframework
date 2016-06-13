<?php
/**
 * TOP API: taobao.item.update.listing request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_ItemUpdateListing extends TopLinker_Request_Abstract
{
    /**
     * 需要上架的商品的数量。取值范围:大于零的整数。如果商品有sku，则上架数量默认为所有sku数量总和，不可修改。否则商品数量根据设置数量调整为num
     **/
    public $num;

    /**
     * 商品数字ID，该参数必须
     **/
    public $numIid;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->num, "num");
        //RequestCheckUtil::checkMinValue($this->num, 0, "num");
        //RequestCheckUtil::checkNotNull($this->numIid, "numIid");
        //RequestCheckUtil::checkMinValue($this->numIid, 0, "numIid");
    }
}
