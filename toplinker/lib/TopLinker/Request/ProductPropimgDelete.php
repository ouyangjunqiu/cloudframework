<?php
/**
 * TOP API: taobao.product.propimg.delete request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_ProductPropimgDelete extends TopLinker_Request_Abstract
{
    /**
     * 属性图片ID
     **/
    public $id;

    /**
     * 产品ID.Product的id.
     **/
    public $productId;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->id, "id");
        //RequestCheckUtil::checkNotNull($this->productId, "productId");
    }
}
