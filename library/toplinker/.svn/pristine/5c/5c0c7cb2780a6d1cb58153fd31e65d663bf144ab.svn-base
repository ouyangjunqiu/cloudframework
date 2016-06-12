<?php
/**
 * TOP API: taobao.traderates.search request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_TraderatesSearch extends TopLinker_Request_Abstract
{
    /**
     * 商品的数字id
     **/
    public $numIid;

    /**
     * 当前页
     **/
    public $pageNo;

    /**
     * 每页显示的条数，允许值：5、10、20、40
     **/
    public $pageSize;

    /**
     * 商品所属的卖家nick
     **/
    public $sellerNick;

    public function setNumIid($numIid)
    {
        $this->numIid = $numIid;
        $this->apiParas["num_iid"] = $numIid;
    }

    public function getNumIid()
    {
        return $this->numIid;
    }

    public function setPageNo($pageNo)
    {
        $this->pageNo = $pageNo;
        $this->apiParas["page_no"] = $pageNo;
    }

    public function getPageNo()
    {
        return $this->pageNo;
    }

    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
        $this->apiParas["page_size"] = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }

    public function setSellerNick($sellerNick)
    {
        $this->sellerNick = $sellerNick;
        $this->apiParas["seller_nick"] = $sellerNick;
    }

    public function getSellerNick()
    {
        return $this->sellerNick;
    }

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->numIid, "numIid");
        //RequestCheckUtil::checkMinValue($this->pageNo, 1, "pageNo");
        //RequestCheckUtil::checkMaxValue($this->pageSize, 40, "pageSize");
        //RequestCheckUtil::checkMinValue($this->pageSize, 1, "pageSize");
        //RequestCheckUtil::checkNotNull($this->sellerNick, "sellerNick");
        //RequestCheckUtil::checkMaxLength($this->sellerNick, 32, "sellerNick");
    }
}
