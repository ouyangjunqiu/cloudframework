<?php
/**
 * TOP API: taobao.crm.members.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_CrmMembersGet extends TopLinker_Request_Abstract
{
    /**
     * 买家的昵称
     **/
    public $buyerNick;

    /**
     * 显示第几页的会员，如果输入的页码大于总共的页码数，例如总共10页，但是current_page的值为11，则返回空白页，最小页数为1
     **/
    public $currentPage;

    /**
     * 会员等级，1：普通客户，2：高级会员，3：高级会员， 4：至尊vip
     **/
    public $grade;

    /**
     * 最迟上次交易时间
     **/
    public $maxLastTradeTime;

    /**
     * 最大交易额，单位为元
     **/
    public $maxTradeAmount;

    /**
     * 最大交易量
     **/
    public $maxTradeCount;

    /**
     * 最早上次交易时间
     **/
    public $minLastTradeTime;

    /**
     * 最小交易额,单位为元
     **/
    public $minTradeAmount;

    /**
     * 最小交易量
     **/
    public $minTradeCount;

    /**
     * 表示每页显示的会员数量,page_size的最大值不能超过100条,最小值不能低于1，
     **/
    public $pageSize;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkMaxLength($this->buyerNick, 32, "buyerNick");
        //RequestCheckUtil::checkNotNull($this->currentPage, "currentPage");
        //RequestCheckUtil::checkMinValue($this->currentPage, 1, "currentPage");
        //RequestCheckUtil::checkMaxValue($this->grade, 4, "grade");
        //RequestCheckUtil::checkMinValue($this->grade, 1, "grade");
        //RequestCheckUtil::checkMinValue($this->maxTradeCount, 0, "maxTradeCount");
        //RequestCheckUtil::checkMinValue($this->minTradeCount, 0, "minTradeCount");
        //RequestCheckUtil::checkMaxValue($this->pageSize, 100, "pageSize");
        //RequestCheckUtil::checkMinValue($this->pageSize, 1, "pageSize");
    }
}
