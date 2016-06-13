<?php
/**
 * TOP API: taobao.fenxiao.product.update request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_FenxiaoProductUpdate extends TopLinker_Request_Abstract
{
    /**
     * 警戒库存必须是0到29999。
     **/
    public $alarmNumber;

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
     * 产品是否需要授权isAuthz:yes|no
    yes:需要授权
    no:不需要授权
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
     * 产品ID
     **/
    public $pid;

    /**
     * ems费用，单位：元。例：“10.56”。大小为0.01元到999999元之间。更新时必须指定运费类型为buyer，否则不更新。
     **/
    public $postageEms;

    /**
     * 快递费用，单位：元。例：“10.56”。大小为0.01元到999999元之间。更新时必须指定运费类型为buyer，否则不更新。
     **/
    public $postageFast;

    /**
     * 运费模板ID，参考taobao.postages.get。更新时必须指定运费类型为 buyer，否则不更新。
     **/
    public $postageId;

    /**
     * 平邮费用，单位：元。例：“10.56”。大小为0.01元到999999元之间。更新时必须指定运费类型为buyer，否则不更新。
     **/
    public $postageOrdinary;

    /**
     * 运费类型，可选值：seller（供应商承担运费）、buyer（分销商承担运费），默认seller。
     **/
    public $postageType;

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
     * sku采购价格，单位元，例："10.50,11.00,20.50"，字段必须和上面的sku_ids或sku_properties保持一致。
     **/
    public $skuCostPrices;

    /**
     * sku id列表，例：1001,1002,1003。如果传入sku_properties将忽略此参数。
     **/
    public $skuIds;

    /**
     * sku商家编码 ，单位元，例："S1000,S1002,S1003"，字段必须和上面的id或sku_properties保持一致，如果没有可以写成",,"
     **/
    public $skuOuterIds;

    /**
     * sku属性。格式:pid:vid;pid:vid,表示一组属性如:1627207:3232483;1630696:3284570,表示一组:机身颜色:军绿色;手机套餐:一电一充。多组之间用逗号“,”区分。(属性的pid调用taobao.itemprops.get取得，属性值的vid用taobao.itempropvalues.get取得vid)
    通过此字段可新增和更新sku。若传入此值将忽略sku_ids字段。sku其他字段与此值保持一致。
     **/
    public $skuProperties;

    /**
     * 根据sku属性删除sku信息。需要按组删除属性。
     **/
    public $skuPropertiesDel;

    /**
     * sku库存，单位元，例："10,20,30"，字段必须和sku_ids或sku_properties保持一致。
     **/
    public $skuQuantitys;

    /**
     * sku市场价，单位元，例："10.50,11.00,20.50"，字段必须和上面的sku_ids或sku_properties保持一致。
     **/
    public $skuStandardPrices;

    /**
     * 标准价格，单位：元。例：“10.56”。必须在0.01元到10000000元之间。
     **/
    public $standardPrice;

    /**
     * 发布状态，可选值：up（上架）、down（下架）、delete（删除），输入非法字符则忽略。
     **/
    public $status;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->pid, "pid");
    }
}
