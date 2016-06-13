<?php
/**
 * TOP API: taobao.taohua.audioreader.search request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_TaohuaAudioreaderSearch extends TopLinker_Request_Abstract
{
    /**
     * 类目id
     **/
    public $cid;

    /**
     * 是否免费，如果为true则表示只搜索免费的商品
     **/
    public $free;

    /**
     * 查询关键字,超过60个字符则自动截断为60个字符. 允许为空
     **/
    public $keyword;

    /**
     * 当前页码
     **/
    public $pageNo;

    /**
     * 每页个数
     **/
    public $pageSize;

    /**
     * 排序值: 1. 评分排序：ratescoredesc, 2. 价格升序：priceasc, 3. 价格降序：pricedesc, 4. 最新发布：shelvesdate, 5. 最多浏览：viewcount, 6. 销量升序：saleasc, 7. 销量降序：saledesc, 8. 最受欢迎：favoritedesc, 9. 默认排序：default
     **/
    public $sort;

    public function setCid($cid)
    {
        $this->cid = $cid;
        $this->apiParas["cid"] = $cid;
    }

    public function getCid()
    {
        return $this->cid;
    }

    public function setFree($free)
    {
        $this->free = $free;
        $this->apiParas["free"] = $free;
    }

    public function getFree()
    {
        return $this->free;
    }

    public function setKeyword($keyword)
    {
        $this->keyword = $keyword;
        $this->apiParas["keyword"] = $keyword;
    }

    public function getKeyword()
    {
        return $this->keyword;
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

    public function setSort($sort)
    {
        $this->sort = $sort;
        $this->apiParas["sort"] = $sort;
    }

    public function getSort()
    {
        return $this->sort;
    }

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkMaxValue($this->pageNo, 100, "pageNo");
        //RequestCheckUtil::checkMinValue($this->pageNo, 1, "pageNo");
        //RequestCheckUtil::checkMaxValue($this->pageSize, 100, "pageSize");
        //RequestCheckUtil::checkMinValue($this->pageSize, 1, "pageSize");
    }
}
