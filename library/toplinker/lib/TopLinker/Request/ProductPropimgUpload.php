<?php
/**
 * TOP API: taobao.product.propimg.upload request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_ProductPropimgUpload extends TopLinker_Request_Abstract
{
    /**
     * 产品属性图片ID
     **/
    public $id;

    /**
     * 图片内容.图片最大为2M,只支持JPG,GIF.
     **/
    public $image;

    /**
     * 图片序号
     **/
    public $position;

    /**
     * 产品ID.Product的id
     **/
    public $productId;

    /**
     * 属性串.目前仅支持颜色属性.调用taobao.itemprops.get获取类目属性,取得颜色属性pid,再用taobao.itempropvalues.get取得vid;格式:pid:vid,只能传入一个颜色pid:vid串;
     **/
    public $props;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->image, "image");
        //RequestCheckUtil::checkNotNull($this->productId, "productId");
        //RequestCheckUtil::checkNotNull($this->props, "props");
    }
}
