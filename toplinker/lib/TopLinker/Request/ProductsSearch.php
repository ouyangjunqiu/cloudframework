<?php
/**
 * TOP API: taobao.products.search request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_ProductsSearch extends TopLinker_Request_Abstract
{
    /**
     * 商品类目ID.调用taobao.itemcats.get获取.
     **/
    public $cid;

    /**
     * 需返回的字段列表.可选值:Product数据结构中的以下字段:product_id,name,pic_url,cid,props,price,tsc;多个字段之间用","分隔.新增字段status(product的当前状态)
     **/
    public $fields;

    /**
     * 页码.传入值为1代表第一页,传入值为2代表第二页,依此类推.默认返回的数据是从第一页开始.
     **/
    public $pageNo;

    /**
     * 每页条数.每页返回最多返回100条,默认值为40.
     **/
    public $pageSize;

    /**
     * 属性,属性值的组合.格式:pid:vid;pid:vid;调用taobao.itemprops.get获取类目属性pid
    ,再用taobao.itempropvalues.get取得vid.
     **/
    public $props;

    /**
     * 搜索的关键词是用来搜索产品的title以及关键属性值的名称.如:"优衣库 1234",这种用来表示查询优衣库这个品牌下的货号为1234的产品;　注:q,cid和props至少传入一个
     **/
    public $q;

    /**
     * 想要获取的产品的状态列表，支持多个状态并列获取，多个状态之间用","分隔，最多同时指定5种状态。例如，只获取小二确认的spu传入"3",只要商家确认的传入"0"，既要小二确认又要商家确认的传入"0,3"。目前只支持者两种类型的状态搜索，输入其他状态无效。
     **/
    public $status;

    /**
     * 传入值为：3表示3C表示3C垂直市场产品，4表示鞋城垂直市场产品，8表示网游垂直市场产品。一次只能指定一种垂直市场类型
     **/
    public $verticalMarket;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->fields, "fields");
        //RequestCheckUtil::checkMaxLength($this->status, 20, "status");
        //RequestCheckUtil::checkMinValue($this->verticalMarket, 0, "verticalMarket");
    }
}
