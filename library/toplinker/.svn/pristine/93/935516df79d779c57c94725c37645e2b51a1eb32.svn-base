<?php
/**
 * TOP API: taobao.item.add request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_ItemAdd extends TopLinker_Request_Abstract
{
    /**
     * 售后说明模板id
     **/
    public $afterSaleId;

    /**
     * 商品上传后的状态。可选值:onsale(出售中),instock(仓库中);默认值:onsale
     **/
    public $approveStatus;

    /**
     * 商品的积分返点比例。如:5,表示:返点比例0.5%. 注意：返点比例必须是>0的整数，而且最大是90,即为9%.B商家在发布非虚拟商品时，返点必须是 5的倍数，即0.5%的倍数。其它是1的倍数，即0.1%的倍数。无名良品商家发布商品时，复用该字段记录积分宝返点比例，返点必须是对应类目的返点步长的整数倍，默认是5，即0.5%。注意此时该字段值依旧必须是>0的整数，最高值不超过500，即50%
     **/
    public $auctionPoint;

    /**
     * 代充商品类型。在代充商品的类目下，不传表示不标记商品类型（交易搜索中就不能通过标记搜到相关的交易了）。可选类型：
    no_mark(不做类型标记)
    time_card(点卡软件代充)
    fee_card(话费软件代充)
     **/
    public $autoFill;

    /**
     * 叶子类目id
     **/
    public $cid;

    /**
     * 此为货到付款运费模板的ID，对应的JAVA类型是long,如果COD卖家应用了货到付款运费模板，此值要进行设置。
     **/
    public $codPostageId;

    /**
     * 宝贝描述。字数要大于5个字符，小于25000个字符，受违禁词控制
     **/
    public $desc;

    /**
     * ems费用。取值范围:0.01-999.00;精确到2位小数;单位:元。如:25.07，表示:25元7分
     **/
    public $emsFee;

    /**
     * 快递费用。取值范围:0.01-999.00;精确到2位小数;单位:元。如:15.07，表示:15元7分
     **/
    public $expressFee;

    /**
     * 运费承担方式。可选值:seller（卖家承担）,buyer(买家承担);默认值:seller。卖家承担不用设置邮费和postage_id.买家承担的时候，必填邮费和postage_id
    如果用户设置了运费模板会优先使用运费模板，否则要同步设置邮费（post_fee,express_fee,ems_fee）
     **/
    public $freightPayer;

    /**
     * 支持会员打折。可选值:true,false;默认值:false(不打折)
     **/
    public $hasDiscount;

    /**
     * 是否有发票。可选值:true,false (商城卖家此字段必须为true);默认值:false(无发票)
     **/
    public $hasInvoice;

    /**
     * 橱窗推荐。可选值:true,false;默认值:false(不推荐)
     **/
    public $hasShowcase;

    /**
     * 是否有保修。可选值:true,false;默认值:false(不保修)
     **/
    public $hasWarranty;

    /**
     * 商品主图片。类型:JPG,GIF;最大长度:500K
     **/
    public $image;

    /**
     * 加价幅度。如果为0，代表系统代理幅度
     **/
    public $increment;

    /**
     * 用户自行输入的类目属性ID串。结构："pid1,pid2,pid3"，如："20000"（表示品牌） 注：通常一个类目下用户可输入的关键属性不超过1个。
     **/
    public $inputPids;

    /**
     * 用户自行输入的子属性名和属性值，结构:"父属性值;一级子属性名;一级子属性值;二级子属性名;自定义输入值,....",如：“耐克;耐克系列;科比系列;科比系列;2K5,Nike乔丹鞋;乔丹系列;乔丹鞋系列;乔丹鞋系列;json5”，多个自定义属性用','分割，input_str需要与input_pids一一对应，注：通常一个类目下用户可输入的关键属性不超过1个。所有属性别名加起来不能超过3999字节
     **/
    public $inputStr;

    /**
     * 是否是3D
     **/
    public $is3D;

    /**
     * 是否在外店显示
     **/
    public $isEx;

    /**
     * 实物闪电发货
     **/
    public $isLightningConsignment;

    /**
     * 是否在淘宝上显示
     **/
    public $isTaobao;

    /**
     * 商品文字的字符集。繁体传入"zh_HK"，简体传入"zh_CN"，不传默认为简体
     **/
    public $lang;

    /**
     * 定时上架时间。(时间格式：yyyy-MM-dd HH:mm:ss)
     **/
    public $listTime;

    /**
     * 所在地城市。如杭州 。可以通过http://dl.open.taobao.com/sdk/商品城市列表.rar查询
     **/
    public $locationCity;

    /**
     * 所在地省份。如浙江，具体可以下载http://dl.open.taobao.com/sdk/商品城市列表.rar  取到
     **/
    public $locationState;

    /**
     * 商品数量，取值范围:0-999999的整数。且需要等于Sku所有数量的和
     **/
    public $num;

    /**
     * 商家编码，该字段的最大长度是512个字节
     **/
    public $outerId;

    /**
     * 商品主图需要关联的图片空间的相对url。这个url所对应的图片必须要属于当前用户。pic_path和image只需要传入一个,如果两个都传，默认选择pic_path
     **/
    public $picPath;

    /**
     * 平邮费用。取值范围:0.01-999.00;精确到2位小数;单位:元。如:5.07，表示:5元7分. 注:post_fee,express_fee,ems_fee需要一起填写
     **/
    public $postFee;

    /**
     * 宝贝所属的运费模板ID。取值范围：整数且必须是该卖家的运费模板的ID（可通过taobao.postages.get获得当前会话用户的所有邮费模板）
     **/
    public $postageId;

    /**
     * 商品价格。取值范围:0-100000000;精确到2位小数;单位:元。如:200.07，表示:200元7分。需要在正确的价格区间内。
     **/
    public $price;

    /**
     * 商品所属的产品ID(B商家发布商品需要用)
     **/
    public $productId;

    /**
     * 属性值别名。如pid:vid:别名;pid1:vid1:别名1 ，其中：pid是属性id vid是属性值id。总长度不超过511字节
     **/
    public $propertyAlias;

    /**
     * 商品属性列表。格式:pid:vid;pid:vid。属性的pid调用taobao.itemprops.get取得，属性值的vid用taobao.itempropvalues.get取得vid。 如果该类目下面没有属性，可以不用填写。如果有属性，必选属性必填，其他非必选属性可以选择不填写.属性不能超过35对。所有属性加起来包括分割符不能超过549字节，单个属性没有限制。 如果有属性是可输入的话，则用字段input_str填入属性的值
     **/
    public $props;

    /**
     * 是否承诺退换货服务!虚拟商品无须设置此项!
     **/
    public $sellPromise;

    /**
     * 商品所属的店铺类目列表。按逗号分隔。结构:",cid1,cid2,...,"，如果店铺类目存在二级类目，必须传入子类目cids。
     **/
    public $sellerCids;

    /**
     * Sku的外部id串，结构如：1234,1342,…
    sku_properties, sku_quantities, sku_prices, sku_outer_ids在输入数据时要一一对应，如果没有sku_outer_ids也要写上这个参数，入参是","(这个是两个sku的示列，逗号数应该是sku个数减1)；该参数最大长度是512个字节
     **/
    public $skuOuterIds;

    /**
     * Sku的价格串，结构如：10.00,5.00,… 精确到2位小数;单位:元。如:200.07，表示:200元7分
     **/
    public $skuPrices;

    /**
     * 更新的Sku的属性串，调用taobao.itemprops.get获取类目属性，如果属性是销售属性，再用taobao.itempropvalues.get取得vid。格式:pid:vid;pid:vid。该字段内的销售属性也需要在props字段填写。sku的销售属性需要一同选取，如:颜色，尺寸。如果新增商品包含了sku，则此字段一定要传入。这个字段的长度要控制在512个字节以内
     **/
    public $skuProperties;

    /**
     * Sku的数量串，结构如：num1,num2,num3 如：2,3
     **/
    public $skuQuantities;

    /**
     * 新旧程度。可选值：new(新)，second(二手)，unused(闲置)。B商家不能发布二手商品。
    如果是二手商品，特定类目下属性里面必填新旧成色属性
     **/
    public $stuffStatus;

    /**
     * 宝贝标题。不能超过60字符，受违禁词控制
     **/
    public $title;

    /**
     * 发布类型。可选值:fixed(一口价),auction(拍卖)。B商家不能发布拍卖商品，而且拍卖商品是没有SKU的
     **/
    public $type;

    /**
     * 有效期。可选值:7,14;单位:天;默认值:14
     **/
    public $validThru;

    /**
     * 商品的重量(商超卖家专用字段)
     **/
    public $weight;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->cid, "cid");
        //RequestCheckUtil::checkMinValue($this->cid, 0, "cid");
        //RequestCheckUtil::checkNotNull($this->desc, "desc");
        //RequestCheckUtil::checkMaxLength($this->desc, 200000, "desc");
        //RequestCheckUtil::checkNotNull($this->locationCity, "locationCity");
        //RequestCheckUtil::checkNotNull($this->locationState, "locationState");
        //RequestCheckUtil::checkNotNull($this->num, "num");
        //RequestCheckUtil::checkMaxValue($this->num, 999999, "num");
        //RequestCheckUtil::checkMinValue($this->num, 0, "num");
        //RequestCheckUtil::checkNotNull($this->price, "price");
        //RequestCheckUtil::checkMaxLength($this->propertyAlias, 511, "propertyAlias");
        //RequestCheckUtil::checkMaxListSize($this->sellerCids, 10, "sellerCids");
        //RequestCheckUtil::checkNotNull($this->stuffStatus, "stuffStatus");
        //RequestCheckUtil::checkNotNull($this->title, "title");
        //RequestCheckUtil::checkMaxLength($this->title, 60, "title");
        //RequestCheckUtil::checkNotNull($this->type, "type");
    }
}
