<?php
/**
 * TOP API: taobao.huabao.posters.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_HuabaoPostersGet extends TopLinker_Request_Abstract
{
    /**
     * 频道的Id值
     **/
    public $channelId;

    /**
     * 当前页，默认为1（当输入为负，零，或者超出页数范围时，取默认值）
     **/
    public $pageNo;

    /**
     * 查询返回的记录数
     **/
    public $pageSize;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->channelId, "channelId");
        //RequestCheckUtil::checkMinValue($this->pageNo, 1, "pageNo");
        //RequestCheckUtil::checkMaxValue($this->pageSize, 100, "pageSize");
        //RequestCheckUtil::checkMinValue($this->pageSize, 10, "pageSize");
    }
}
