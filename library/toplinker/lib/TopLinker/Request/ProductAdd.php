<?php
/**
 * TOP API: taobao.product.add request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_ProductAdd extends TopLinker_Request_Abstract
{
    /**
     * 非关键属性结构:pid:vid;pid:vid.非关键属性不包含关键属性、销售属性、用户自定义属性、商品属性;调用taobao.itemprops.get获取pid,调用taobao.itempropvalues.get获取vid.<br><font color=red>注:支持最大长度为512字节</font>
     **/
    public $binds;

    /**
     * 商品类目ID.调用taobao.itemcats.get获取;注意:必须是叶子类目 id.
     **/
    public $cid;

    /**
     * 用户自定义属性,结构：pid1:value1;pid2:value2，如果有型号，系列,货号等用: 隔开 例如：“20000:优衣库:型号:001:632501:1234”，表示“品牌:优衣库:型号:001:货号:1234”
     **/
    public $customerProps;

    /**
     * 产品描述.最大25000个字节
     **/
    public $desc;

    /**
     * 产品主图片.最大1M,目前仅支持GIF,JPG.
     **/
    public $image;

    /**
     * 是不是主图
     **/
    public $major;

    /**
     * 上市时间。目前只支持鞋城类目传入此参数
     **/
    public $marketTime;

    /**
     * 产品名称,最大60个字节.
     **/
    public $name;

    /**
     * 外部产品ID
     **/
    public $outerId;

    /**
     * 产品市场价.精确到2位小数;单位为元.如：200.07
     **/
    public $price;

    /**
     * 销售属性值别名。格式为pid1:vid1:alias1;pid1:vid2:alia2。只有少数销售属性值支持传入别名，比如颜色和尺寸
     **/
    public $propertyAlias;

    /**
     * 关键属性 结构:pid:vid;pid:vid.调用taobao.itemprops.get获取pid,调用taobao.itempropvalues.get获取vid;如果碰到用户自定义属性,请用customer_props.
     **/
    public $props;

    /**
     * 销售属性结构:pid:vid;pid:vid.调用taobao.itemprops.get获取is_sale_prop＝true的pid,调用taobao.itempropvalues.get获取vid.
     **/
    public $saleProps;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkMaxLength($this->binds, 512, "binds");
        //RequestCheckUtil::checkNotNull($this->cid, "cid");
        //RequestCheckUtil::checkNotNull($this->image, "image");
        //RequestCheckUtil::checkNotNull($this->name, "name");
        //RequestCheckUtil::checkNotNull($this->price, "price");
    }
}
