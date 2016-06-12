<?php
/**
 * TOP API: taobao.fenxiao.products.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_FenxiaoProductsGet extends TopLinker_Request_Abstract
{
    /**
     * 结束修改时间
     **/
    public $endModified;

    /**
     * 指定查询额外的信息，可选值：skus（sku数据）、images（多图），多个可选值用逗号分割。
     **/
    public $fields;

    /**
     * 查询产品列表时，查询入参“是否需要授权”
    yes:需要授权
    no:不需要授权
     **/
    public $isAuthz;

    /**
     * 商家编码
     **/
    public $outerId;

    /**
     * 页码（大于0的整数，默认1）
     **/
    public $pageNo;

    /**
     * 每页记录数（默认20，最大50）
     **/
    public $pageSize;

    /**
     * 产品ID列表（最大限制30），用逗号分割，例如：“1001,1002,1003,1004,1005”
     **/
    public $pids;

    /**
     * 产品线ID
     **/
    public $productcatId;

    /**
     * sku商家编码
     **/
    public $skuNumber;

    /**
     * 开始修改时间
     **/
    public $startModified;

    /**
     * 产品状态，可选值：up（上架）、down（下架），不传默认查询所有
     **/
    public $status;

    public function rules()
    {
        return array();
    }
}
