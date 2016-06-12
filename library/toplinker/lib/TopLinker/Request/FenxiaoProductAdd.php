<?php
/**
 * TOP API: taobao.fenxiao.product.add request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_FenxiaoProductAdd extends TopLinker_Request_Abstract
{
    /**
     * 警戒库存必须是0到29999。
     **/
    public $alarmNumber;

    /**
     * 所属类目id，参考Taobao.itemcats.get，不支持成人等类目，输入成人类目id保存提示类目属性错误。
     **/
    public $categoryId;

    /**
     * 所在地：市，例：“杭州”
     **/
    public $city;

    /**
     * 采购价格，单位：元。例：“10.56”。必须在0.01元到10000000元之间。
     **/
    public $costPrice;

    /**
     * 产品描述，长度为5到25000字符。
     **/
    public $desc;

    /**
     * 折扣ID
     **/
    public $discountId;

    /**
     * 是否有保修，可选值：false（否）、true（是），默认false。
     **/
    public $haveGuarantee;

    /**
     * 是否有发票，可选值：false（否）、true（是），默认false。
     **/
    public $haveInvoice;

    /**
     * 添加产品时，添加入参isAuthz:yes|no
    yes:需要授权
    no:不需要授权
    默认是需要授权
     **/
    public $isAuthz;

    /**
     * 产品名称，长度不超过60个字节。
     **/
    public $name;

    /**
     * 商家编码，长度不能超过60个字节。
     **/
    public $outerId;

    /**
     * ems费用，单位：元。例：“10.56”。 大小为0.00元到999999元之间。
     **/
    public $postageEms;

    /**
     * 快递费用，单位：元。例：“10.56”。 大小为0.01元到999999元之间。
     **/
    public $postageFast;

    /**
     * 运费模板ID，参考taobao.postages.get。
     **/
    public $postageId;

    /**
     * 平邮费用，单位：元。例：“10.56”。 大小为0.01元到999999元之间。
     **/
    public $postageOrdinary;

    /**
     * 运费类型，可选值：seller（供应商承担运费）、buyer（分销商承担运费）,默认seller。
     **/
    public $postageType;

    /**
     * 产品线ID
     **/
    public $productcatId;

    /**
     * 所在地：省，例：“浙江”
     **/
    public $prov;

    /**
     * 产品库存必须是1到999999。
     **/
    public $quantity;

    /**
     * 最高零售价，单位：元。例：“10.56”。必须在0.01元到10000000元之间，最高零售价必须大于最低零售价。
     **/
    public $retailPriceHigh;

    /**
     * 最低零售价，单位：元。例：“10.56”。必须在0.01元到10000000元之间。
     **/
    public $retailPriceLow;

    /**
     * 标准价格，单位：元。例：“10.56”。必须在0.01元到10000000元之间。
     **/
    public $standardPrice;

    /**
     * 分销方式：AGENT（只做代销，默认值）、DEALER（只做经销）、ALL（代销和经销都做）
     **/
    public $tradeType;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->alarmNumber, "alarmNumber");
        //RequestCheckUtil::checkNotNull($this->categoryId, "categoryId");
        //RequestCheckUtil::checkNotNull($this->city, "city");
        //RequestCheckUtil::checkNotNull($this->costPrice, "costPrice");
        //RequestCheckUtil::checkNotNull($this->desc, "desc");
        //RequestCheckUtil::checkNotNull($this->haveGuarantee, "haveGuarantee");
        //RequestCheckUtil::checkNotNull($this->haveInvoice, "haveInvoice");
        //RequestCheckUtil::checkNotNull($this->name, "name");
        //RequestCheckUtil::checkNotNull($this->postageType, "postageType");
        //RequestCheckUtil::checkNotNull($this->productcatId, "productcatId");
        //RequestCheckUtil::checkNotNull($this->prov, "prov");
        //RequestCheckUtil::checkNotNull($this->quantity, "quantity");
        //RequestCheckUtil::checkNotNull($this->retailPriceHigh, "retailPriceHigh");
        //RequestCheckUtil::checkNotNull($this->retailPriceLow, "retailPriceLow");
        //RequestCheckUtil::checkNotNull($this->standardPrice, "standardPrice");
    }
}
