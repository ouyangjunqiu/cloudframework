<?php
/**
 * TOP API: taobao.increment.customers.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_IncrementCustomersGet extends TopLinker_Request_Abstract
{
    /**
     * 查询用户的昵称。当为空时通过分页方式查询appkey开通的所有用户,最多填入20个昵称。
     **/
    public $nicks;

    /**
     * 分页查询时，查询的页码。此参数只有nicks为空时起作用。
     **/
    public $pageNo;

    /**
     * 分布查询时，页的大小。此参数只有当nicks为空时起作用。
     **/
    public $pageSize;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkMaxListSize($this->nicks, 20, "nicks");
        //RequestCheckUtil::checkMinValue($this->pageNo, 0, "pageNo");
        //RequestCheckUtil::checkMaxValue($this->pageSize, 200, "pageSize");
        //RequestCheckUtil::checkMinValue($this->pageSize, 0, "pageSize");
    }
}
