<?php
/**
 * TOP API: taobao.ju.groupids.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_JuGroupidsGet extends TopLinker_Request_Abstract
{
    /**
     * 分页获取团信息页序号，代表第几页
     **/
    public $pageNo;

    /**
     * 每次获取团id列表的数量
     **/
    public $pageSize;

    /**
     * IPHONE,WAP,ANDROID,SINA,163 各种终端类型
     **/
    public $terminalType;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->pageNo, "pageNo");
        //RequestCheckUtil::checkMinValue($this->pageNo, 0, "pageNo");
        //RequestCheckUtil::checkNotNull($this->pageSize, "pageSize");
        //RequestCheckUtil::checkMaxValue($this->pageSize, 100, "pageSize");
        //RequestCheckUtil::checkMinValue($this->pageSize, 1, "pageSize");
        //RequestCheckUtil::checkNotNull($this->terminalType, "terminalType");
    }
}
