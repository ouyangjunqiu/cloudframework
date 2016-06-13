<?php
/**
 * TOP API: taobao.wlb.item.update request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_WlbItemUpdate extends TopLinker_Request_Abstract
{
    /**
     * 商品颜色
     **/
    public $color;

    /**
     * 需要删除的商品属性key列表
     **/
    public $deletePropertyKeyList;

    /**
     * 商品货类
     **/
    public $goodsCat;

    /**
     * 商品高度，单位厘米
     **/
    public $height;

    /**
     * 要修改的商品id
     **/
    public $id;

    /**
     * 是否危险品
     **/
    public $isDangerous;

    /**
     * 是否易碎品
     **/
    public $isFriable;

    /**
     * 商品长度，单位厘米
     **/
    public $length;

    /**
     * 要修改的商品名称
     **/
    public $name;

    /**
     * 商品包装材料类型
     **/
    public $packageMaterial;

    /**
     * 商品计价货类
     **/
    public $pricingCat;

    /**
     * 要修改的商品备注
     **/
    public $remark;

    /**
     * 要修改的商品标题
     **/
    public $title;

    /**
     * 需要修改的商品属性值的列表，如果属性不存在，则新增属性
     **/
    public $updatePropertyKeyList;

    /**
     * 需要修改的属性值的列表
     **/
    public $updatePropertyValueList;

    /**
     * 商品体积，单位立方厘米
     **/
    public $volume;

    /**
     * 商品重量，单位G
     **/
    public $weight;

    /**
     * 商品宽度，单位厘米
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

    public function setDeletePropertyKeyList($deletePropertyKeyList)
    {
        $this->deletePropertyKeyList = $deletePropertyKeyList;
        $this->apiParas["delete_property_key_list"] = $deletePropertyKeyList;
    }

    public function getDeletePropertyKeyList()
    {
        return $this->deletePropertyKeyList;
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

    public function setId($id)
    {
        $this->id = $id;
        $this->apiParas["id"] = $id;
    }

    public function getId()
    {
        return $this->id;
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

    public function setPricingCat($pricingCat)
    {
        $this->pricingCat = $pricingCat;
        $this->apiParas["pricing_cat"] = $pricingCat;
    }

    public function getPricingCat()
    {
        return $this->pricingCat;
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

    public function setTitle($title)
    {
        $this->title = $title;
        $this->apiParas["title"] = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setUpdatePropertyKeyList($updatePropertyKeyList)
    {
        $this->updatePropertyKeyList = $updatePropertyKeyList;
        $this->apiParas["update_property_key_list"] = $updatePropertyKeyList;
    }

    public function getUpdatePropertyKeyList()
    {
        return $this->updatePropertyKeyList;
    }

    public function setUpdatePropertyValueList($updatePropertyValueList)
    {
        $this->updatePropertyValueList = $updatePropertyValueList;
        $this->apiParas["update_property_value_list"] = $updatePropertyValueList;
    }

    public function getUpdatePropertyValueList()
    {
        return $this->updatePropertyValueList;
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
        //RequestCheckUtil::checkNotNull($this->id, "id");
    }
}
