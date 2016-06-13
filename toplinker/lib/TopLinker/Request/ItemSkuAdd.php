<?php
/**
 * TOP API: taobao.item.sku.add request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_ItemSkuAdd extends TopLinker_Request_Abstract
{
    /**
     * sku所属商品的价格。当用户新增sku，使商品价格不属于sku价格之间的时候，用于修改商品的价格，使sku能够添加成功
     **/
    public $itemPrice;

    /**
     * Sku文字的版本。可选值:zh_HK(繁体),zh_CN(简体);默认值:zh_CN
     **/
    public $lang;

    /**
     * Sku所属商品数字id，可通过 taobao.item.get 获取。必选
     **/
    public $numIid;

    /**
     * Sku的商家外部id
     **/
    public $outerId;

    /**
     * Sku的销售价格。商品的价格要在商品所有的sku的价格之间。精确到2位小数;单位:元。如:200.07，表示:200元7分
     **/
    public $price;

    /**
     * Sku属性串。格式:pid:vid;pid:vid,如:1627207:3232483;1630696:3284570,表示:机身颜色:军绿色;手机套餐:一电一充
     **/
    public $properties;

    /**
     * Sku的库存数量。sku的总数量应该小于等于商品总数量(Item的NUM)。取值范围:大于零的整数
     **/
    public $quantity;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->numIid, "numIid");
        //RequestCheckUtil::checkMinValue($this->numIid, 0, "numIid");
        //RequestCheckUtil::checkNotNull($this->price, "price");
        //RequestCheckUtil::checkNotNull($this->properties, "properties");
        //RequestCheckUtil::checkNotNull($this->quantity, "quantity");
        //RequestCheckUtil::checkMinValue($this->quantity, 0, "quantity");
    }
}
