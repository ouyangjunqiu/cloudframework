<?php
/**
 * TOP API: taobao.product.update request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_ProductUpdate extends TopLinker_Request_Abstract
{
    /**
     * 非关键属性.调用taobao.itemprops.get获取pid,调用taobao.itempropvalues.get获取vid;格式:pid:vid;pid:vid
     **/
    public $binds;

    /**
     * 产品描述.最大25000个字节
     **/
    public $desc;

    /**
     * 产品主图.最大500K,目前仅支持GIF,JPG
     **/
    public $image;

    /**
     * 是否是主图
     **/
    public $major;

    /**
     * 产品名称.最大60个字节
     **/
    public $name;

    /**
     * 自定义非关键属性
     **/
    public $nativeUnkeyprops;

    /**
     * 外部产品ID
     **/
    public $outerId;

    /**
     * 产品市场价.精确到2位小数;单位为元.如:200.07
     **/
    public $price;

    /**
     * 产品ID
     **/
    public $productId;

    /**
     * 销售属性.调用taobao.itemprops.get获取pid,调用taobao.itempropvalues.get获取vid;格式:pid:vid;pid:vid
     **/
    public $saleProps;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->productId, "productId");
    }
}
