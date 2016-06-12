<?php
/**
 * TOP API: taobao.wlb.item.add request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_WlbItemAdd extends TopLinker_Request_Abstract
{
    /**
     * 商品颜色
     **/
    public $color;

    /**
     * 货类
     **/
    public $goodsCat;

    /**
     * 商品高度，单位毫米
     **/
    public $height;

    /**
     * 是否危险品
     **/
    public $isDangerous;

    /**
     * 是否易碎品
     **/
    public $isFriable;

    /**
     * 是否sku
     **/
    public $isSku;

    /**
     * 商品编码
     **/
    public $itemCode;

    /**
     * 商品长度，单位毫米
     **/
    public $length;

    /**
     * 商品名称
     **/
    public $name;

    /**
     * 商品包装材料类型
     **/
    public $packageMaterial;

    /**
     * 商品价格，单位：分
     **/
    public $price;

    /**
     * 计价货类
     **/
    public $pricingCat;

    /**
     * 属性名列表,目前支持的属性：
    毛重:GWeight
    净重:Nweight
    皮重: Tweight
    自定义属性：
    paramkey1
    paramkey2
    paramkey3
    paramkey4
     **/
    public $proNameList;

    /**
     * 属性值列表：
    10,8
     **/
    public $proValueList;

    /**
     * 商品备注
     **/
    public $remark;

    /**
     * 是否支持批次
     **/
    public $supportBatch;

    /**
     * 商品标题
     **/
    public $title;

    /**
     * NORMAL--普通商品
    COMBINE--组合商品
    DISTRIBUTION--分销
     **/
    public $type;

    /**
     * 商品体积，单位立方厘米
     **/
    public $volume;

    /**
     * 商品重量，单位G
     **/
    public $weight;

    /**
     * 商品宽度，单位毫米
     **/
    public $width;

    public function setColor($color)
    {
        $this->color = $color;
        $this->apiParas["color"] = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setGoodsCat($goodsCat)
    {
        $this->goodsCat = $goodsCat;
        $this->apiParas["goods_cat"] = $goodsCat;
    }

    public function getGoodsCat()
    {
        return $this->goodsCat;
    }

    public function setHeight($height)
    {
        $this->height = $height;
        $this->apiParas["height"] = $height;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setIsDangerous($isDangerous)
    {
        $this->isDangerous = $isDangerous;
        $this->apiParas["is_dangerous"] = $isDangerous;
    }

    public function getIsDangerous()
    {
        return $this->isDangerous;
    }

    public function setIsFriable($isFriable)
    {
        $this->isFriable = $isFriable;
        $this->apiParas["is_friable"] = $isFriable;
    }

    public function getIsFriable()
    {
        return $this->isFriable;
    }

    public function setIsSku($isSku)
    {
        $this->isSku = $isSku;
        $this->apiParas["is_sku"] = $isSku;
    }

    public function getIsSku()
    {
        return $this->isSku;
    }

    public function setItemCode($itemCode)
    {
        $this->itemCode = $itemCode;
        $this->apiParas["item_code"] = $itemCode;
    }

    public function getItemCode()
    {
        return $this->itemCode;
    }

    public function setLength($length)
    {
        $this->length = $length;
        $this->apiParas["length"] = $length;
    }

    public function getLength()
    {
        return $this->length;
    }

    public function setName($name)
    {
        $this->name = $name;
        $this->apiParas["name"] = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setPackageMaterial($packageMaterial)
    {
        $this->packageMaterial = $packageMaterial;
        $this->apiParas["package_material"] = $packageMaterial;
    }

    public function getPackageMaterial()
    {
        return $this->packageMaterial;
    }

    public function setPrice($price)
    {
        $this->price = $price;
        $this->apiParas["price"] = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPricingCat($pricingCat)
    {
        $this->pricingCat = $pricingCat;
        $this->apiParas["pricing_cat"] = $pricingCat;
    }

    public function getPricingCat()
    {
        return $this->pricingCat;
    }

    public function setProNameList($proNameList)
    {
        $this->proNameList = $proNameList;
        $this->apiParas["pro_name_list"] = $proNameList;
    }

    public function getProNameList()
    {
        return $this->proNameList;
    }

    public function setProValueList($proValueList)
    {
        $this->proValueList = $proValueList;
        $this->apiParas["pro_value_list"] = $proValueList;
    }

    public function getProValueList()
    {
        return $this->proValueList;
    }

    public function setRemark($remark)
    {
        $this->remark = $remark;
        $this->apiParas["remark"] = $remark;
    }

    public function getRemark()
    {
        return $this->remark;
    }

    public function setSupportBatch($supportBatch)
    {
        $this->supportBatch = $supportBatch;
        $this->apiParas["support_batch"] = $supportBatch;
    }

    public function getSupportBatch()
    {
        return $this->supportBatch;
    }

    public function setTitle($title)
    {
        $this->title = $title;
        $this->apiParas["title"] = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setType($type)
    {
        $this->type = $type;
        $this->apiParas["type"] = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setVolume($volume)
    {
        $this->volume = $volume;
        $this->apiParas["volume"] = $volume;
    }

    public function getVolume()
    {
        return $this->volume;
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
        $this->apiParas["weight"] = $weight;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function setWidth($width)
    {
        $this->width = $width;
        $this->apiParas["width"] = $width;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->isSku, "isSku");
        //RequestCheckUtil::checkNotNull($this->itemCode, "itemCode");
        //RequestCheckUtil::checkNotNull($this->name, "name");
    }
}
