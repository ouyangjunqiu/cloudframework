<?php
/**
 * TOP API: taobao.crm.groups.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_CrmGroupsGet extends TopLinker_Request_Abstract
{
    /**
     * 显示第几页的分组，如果输入的页码大于总共的页码数，例如总共10页，但是current_page的值为11，则返回空白页，最小页码为1
     **/
    public $currentPage;

    /**
     * 每页显示的记录数，其最大值不能超过100条，最小值为1，默认20条
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
