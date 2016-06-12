<?php
/**
 * TOP API: taobao.favorite.search request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_FavoriteSearch extends TopLinker_Request_Abstract
{
    /**
     * ITEM表示宝贝，SHOP表示商铺，collect_type只能为这两者之一
     **/
    public $collectType;

    /**
     * 页码。取值范围:大于零的整数; 默认值:1。一页20条记录。
     **/
    public $pageNo;

    /**
     * 用户昵称
     **/
    public $userNick;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->collectType, "collectType");
        //RequestCheckUtil::checkMaxLength($this->collectType, 4, "collectType");
        //RequestCheckUtil::checkNotNull($this->pageNo, "pageNo");
        //RequestCheckUtil::checkMaxValue($this->pageNo, 100, "pageNo");
        //RequestCheckUtil::checkMinValue($this->pageNo, 1, "pageNo");
        //RequestCheckUtil::checkNotNull($this->userNick, "userNick");
        //RequestCheckUtil::checkMaxLength($this->userNick, 32, "userNick");
    }
}
