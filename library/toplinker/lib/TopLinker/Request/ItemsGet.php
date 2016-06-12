<?php
/**
 * TOP API: taobao.items.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_ItemsGet extends TopLinker_Request_Abstract
{
    /**
     * 商品所属类目Id,ItemCat中的cid字段。可以通过taobao.itemcats.get取到
     **/
    public $cid;

    /**
     * 商品最高价格。单位:元。正整数，取值范围:0-100000000
     **/
    public $endPrice;

    /**
     * 商品所属卖家的最大信用等级数，1表示1心，2表示2心……，设置此条件表示搜索结果里的商品，所属的卖家信用必须小于等于设置的end_score
     **/
    public $endScore;

    /**
     * 商品最近成交量最大值，设置此条件表示搜索结果里的商品，最近成交量必须小于等于设置的end_volume
     **/
    public $endVolume;

    /**
     * 需返回的商品结构字段列表。可选值为Item中的以下字段：num_iid,title,nick,pic_url,cid,price,type,delist_time,post_fee;多个字段用“,”分隔。如：num_iid,title。新增字段score(卖家信用等级数),volume(最近成交量),location（卖家地址，可以分别获取location.city,location.state）,num_iid商品数字id。此接口返回的post_fee是快递费用，volume对应搜索商品列表页的最近成交量
     **/
    public $fields;

    /**
     * 是否正品保障商品(既是如实描述，又是7天无理由退换货的商品，设置了这个属性时：is_prepay和promoted_service不能再行设置)，设置为true表示该商品是正品保障的商品，设置为false或不设置表示不判断这个属性
     **/
    public $genuineSecurity;

    /**
     * 是否是3D淘宝的商品,置为false或为空表示不对是否3D商品进行判断
     **/
    public $is3D;

    /**
     * 是否支持货到付款，设置为true表示支持货到付款，设置为false或不设置表示不判断这个属性
     **/
    public $isCod;

    /**
     * 是否商城的商品，设置为true表示该商品是属于淘宝商城的商品，设置为false或不设置表示不判断这个属性
     **/
    public $isMall;

    /**
     * 是否如实描述(即:先行赔付)商品，设置为true表示该商品是如实描述的商品，设置为false或不设置表示不判断这个属性
     **/
    public $isPrepay;

    /**
     * 所在市。如：杭州。具体可以根据taobao.areas.get取到
     **/
    public $locationCity;

    /**
     * 所在省。如：浙江。具体可以根据taobao.areas.get 取到
     **/
    public $locationState;

    /**
     * 卖家昵称列表。多个之间以“,”分隔;最多支持5个卖家昵称。如：nick1,nick2,nick3
     **/
    public $nicks;

    /**
     * 是否淘1站代购商品，设置为true表示淘1站商品，设置为false或不设置表示不判断这个属性
     **/
    public $oneStation;

    /**
     * 排序方式。格式为column:asc/desc,column可选值为: price（价格）, delist_time（下架时间）, seller_credit（卖家信用）,popularity(人气)。如按价格升序排列表示为：price:asc。新增排序字段：volume（最近成交量）
     **/
    public $orderBy;

    /**
     * 页码。取值范围:大于零的整数。默认值为1,即默认返回第一页数据。用此接口获取数据时，当翻页获取的条数（page_no*page_size）超过10240,为了保护后台搜索引擎，接口将报错。所以请大家尽可能的细化自己的搜索条件，例如根据修改时间分段获取商品
     **/
    public $pageNo;

    /**
     * 每页条数。取值范围:大于零的整数;最大值:200;默认值:40
     **/
    public $pageSize;

    /**
     * 免运费（不设置包含所有邮费状态，设置为true结果只有卖家包邮的商品）。不能单独使用，要和其他条件一起用才行
     **/
    public $postFree;

    /**
     * 可以根据产品Id搜索属于这个spu的商品。这个字段可以通过查询 taobao.products.get 取到
     **/
    public $productId;

    /**
     * 是否提供保障服务的商品。可选入参有：2、4。设置为2表示该商品是“假一赔三”的商品，设置为4表示该商品是“7天无理由退换货”的商品
     **/
    public $promotedService;

    /**
     * 商品属性。可以搜到拥有和输入的属性一样的商品列表。字段格式为：pid1:vid1;pid2:vid2.属性的pid调用taobao.itemprops.get取得，属性值的vid用taobao.itempropvalues.get取得vid。
     **/
    public $props;

    /**
     * 搜索字段。 用来搜索商品的title以及商品所对应的产品的title
     **/
    public $q;

    /**
     * 商品最低价格。单位:元。正整数，取值范围:0-100000000。
     **/
    public $startPrice;

    /**
     * 商品所属卖家的最小信用等级数，1表示1心，2表示2心……，设置此条件表示搜索结果里的商品，所属的卖家信用必须大于等于设置的start_score。
     **/
    public $startScore;

    /**
     * 商品最近成交量最小值，设置此条件表示搜索结果里的商品，最近成交量必须大于等于设置的start_volume。
     **/
    public $startVolume;

    /**
     * 商品的新旧状态。可选入参有：new、second、unused 。设置为new表示该商品是全新的商品，设置为second表示该商品是二手的商品，设置为unused表示该商品是闲置的商品
     **/
    public $stuffStatus;

    /**
     * 旺旺在线状态（不设置结果包含所有状态，设置为true结果只有旺旺在线卖家的商品）。不能单独使用，要和其他条件一起用才行
     **/
    public $wwStatus;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkMinValue($this->cid, 0, "cid");
        //RequestCheckUtil::checkMinValue($this->endPrice, 0, "endPrice");
        //RequestCheckUtil::checkMinValue($this->endScore, 0, "endScore");
        //RequestCheckUtil::checkMinValue($this->endVolume, 0, "endVolume");
        //RequestCheckUtil::checkNotNull($this->fields, "fields");
        //RequestCheckUtil::checkMinValue($this->productId, 0, "productId");
        //RequestCheckUtil::checkMinValue($this->startPrice, 0, "startPrice");
        //RequestCheckUtil::checkMinValue($this->startScore, 0, "startScore");
        //RequestCheckUtil::checkMinValue($this->startVolume, 0, "startVolume");
    }
}
