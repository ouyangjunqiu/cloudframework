<?php
/**
 * TOP API: taobao.item.sku.delete request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_ItemSkuDelete extends TopLinker_Request_Abstract
{
    /**
     * sku所属商品的数量,大于0的整数。当用户删除sku，使商品数量不等于sku数量之和时候，用于修改商品的数量，使sku能够删除成功。特别是删除最后一个sku的时候，一定要设置商品数量到正常的值，否则删除失败
     **/
    public $itemNum;

    /**
     * sku所属商品的价格。当用户删除sku，使商品价格不属于sku价格之间的时候，用于修改商品的价格，使sku能够删除成功
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
     * Sku属性串。格式:pid:vid;pid:vid,如: 1627207:3232483;1630696:3284570,表示机身颜色:军绿色;手机套餐:一电一充
     **/
    public $properties;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->numIid, "numIid");
        //RequestCheckUtil::checkNotNull($this->properties, "properties");
    }
}
