<?php
/**
 * TOP API: taobao.crm.members.increment.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_CrmMembersIncrementGet extends TopLinker_Request_Abstract
{
    /**
     * 显示第几页的会员，如果输入的页码大于总共的页码数，例如总共10页，但是current_page的值为11，则返回空白页，最小页数为1
     **/
    public $currentPage;

    /**
     * 最迟修改日期，如果不填写此字段，默认为当前时间
     **/
    public $endModify;

    /**
     * 会员等级，1：普通客户，2：高级会员，3：高级会员 ，4：至尊vip
     **/
    public $grade;

    /**
     * 每页显示的会员数，page_size的值不能超过100，最小值要大于1
     **/
    public $pageSize;

    /**
     * 最早修改日期
     **/
    public $startModify;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->currentPage, "currentPage");
        //RequestCheckUtil::checkMinValue($this->currentPage, 1, "currentPage");
        //RequestCheckUtil::checkMaxValue($this->grade, 4, "grade");
        //RequestCheckUtil::checkMinValue($this->grade, 1, "grade");
        //RequestCheckUtil::checkMaxValue($this->pageSize, 100, "pageSize");
        //RequestCheckUtil::checkMinValue($this->pageSize, 1, "pageSize");
    }
}
