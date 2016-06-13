<?php
/**
 * TOP API: taobao.product.img.upload request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_ProductImgUpload extends TopLinker_Request_Abstract
{
    /**
     * 产品图片ID.修改图片时需要传入
     **/
    public $id;

    /**
     * 图片内容.图片最大为500K,只支持JPG,GIF格式.
     **/
    public $image;

    /**
     * 是否将该图片设为主图.可选值:true,false;默认值:false.
     **/
    public $isMajor;

    /**
     * 图片序号
     **/
    public $position;

    /**
     * 产品ID.Product的id
     **/
    public $productId;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->image, "image");
        //RequestCheckUtil::checkNotNull($this->productId, "productId");
    }
}
