<?php
/**
 * TOP API: taobao.product.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_ProductGet extends TopLinker_Request_Abstract
{
    /**
     * 商品类目id.调用taobao.itemcats.get获取;必须是叶子类目id,如果没有传product_id,那么cid和props必须要传.
     **/
    public $cid;

    /**
     * 需返回的字段列表.可选值:Product数据结构中的所有字段;多个字段之间用","分隔.
     **/
    public $fields;

    /**
     * Product的id.两种方式来查看一个产品:1.传入product_id来查询 2.传入cid和props来查询
     **/
    public $productId;

    /**
     * 比如:诺基亚N73这个产品的关键属性列表就是:品牌:诺基亚;型号:N73,对应的PV值就是10005:10027;10006:29729.
     **/
    public $props;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->fields, "fields");
    }
}
