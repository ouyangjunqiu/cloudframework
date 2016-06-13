<?php
/**
 * TOP API: taobao.crm.rules.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_CrmRulesGet extends TopLinker_Request_Abstract
{
    /**
     * 当前显示第几页，如果current_page超过页码范围或者小于页码范围，将直接返回空白页
     **/
    public $currentPage;

    /**
     * 一页返回的记录的个数
     **/
    public $pageSize;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->currentPage, "currentPage");
        //RequestCheckUtil::checkMinValue($this->currentPage, 1, "currentPage");
        //RequestCheckUtil::checkMaxValue($this->pageSize, 100, "pageSize");
        //RequestCheckUtil::checkMinValue($this->pageSize, 1, "pageSize");
    }
}
