<?php
/**
 * TOP API: taobao.product.img.delete request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_ProductImgDelete extends TopLinker_Request_Abstract
{
    /**
     * 非主图ID
     **/
    public $id;

    /**
     * 产品ID.Product的id,通过taobao.product.add接口新增产品的时候会返回id.
     **/
    public $productId;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->id, "id");
        //RequestCheckUtil::checkNotNull($this->productId, "productId");
    }
}
