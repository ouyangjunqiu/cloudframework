<?php
/**
 * TOP API: taobao.items.onsale.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_ItemsOnsaleGet extends TopLinker_Request_Abstract
{
    /**
     * 商品类目ID。ItemCat中的cid字段。可以通过taobao.itemcats.get取到
     **/
    public $cid;

    /**
     * 结束的修改时间
     **/
    public $modified;

    /**
     * 需返回的字段列表。可选值：Item商品结构体中的以下字段：
    approve_status,num_iid,title,nick,type,cid,pic_url,num,props,valid_thru,list_time,price,has_discount,has_invoice,has_warranty,has_showcase,modified,delist_time,postage_id,seller_cids,outer_id；字段之间用“,”分隔。
    不支持其他字段，如果需要获取其他字段数据，调用taobao.item.get。
     **/
    public $fields;

    /**
     * 是否参与会员折扣。可选值：true，false。默认不过滤该条件
     **/
    public $hasDiscount;

    /**
     * 是否橱窗推荐。 可选值：true，false。默认不过滤该条件
     **/
    public $hasShowcase;

    /**
     * 商品是否在外部网店显示
     **/
    public $isEx;

    /**
     * 商品是否在淘宝显示
     **/
    public $isTaobao;

    /**
     * 排序方式。格式为column:asc/desc ，column可选值:list_time(上架时间),delist_time(下架时间),num(商品数量)，modified(最近修改时间);默认上架时间降序(即最新上架排在前面)。如按照上架时间降序排序方式为list_time:desc
     **/
    public $orderBy;

    /**
     * 页码。取值范围:大于零的整数。默认值为1,即默认返回第一页数据。用此接口获取数据时，当翻页获取的条数（page_no*page_size）超过10万,为了保护后台搜索引擎，接口将报错。所以请大家尽可能的细化自己的搜索条件，例如根据修改时间分段获取商品
     **/
    public $page_no;

    /**
     * 每页条数。取值范围:大于零的整数;最大值：200；默认值：40。用此接口获取数据时，当翻页获取的条数（page_no*page_size）超过10万,为了保护后台搜索引擎，接口将报错。所以请大家尽可能的细化自己的搜索条件，例如根据修改时间分段获取商品
     **/
    public $page_size;

    /**
     * 搜索字段。搜索商品的title。
     **/
    public $q;

    /**
     * 卖家店铺内自定义类目ID。多个之间用“,”分隔。可以根据taobao.sellercats.list.get获得.(<font color="red">注：目前最多支持32个ID号传入</font>)
     **/
    public $sellerCids;

    /**
     * 起始的修改时间
     **/
    public $startModified;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkMinValue($this->cid, 0, "cid");
        //RequestCheckUtil::checkNotNull($this->fields, "fields");
        //RequestCheckUtil::checkMaxListSize($this->sellerCids, 32, "sellerCids");
    }
}
