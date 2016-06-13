<?php
/**
 * TOP API: taobao.poster.posters.search request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_PosterPostersSearch extends TopLinker_Request_Abstract
{
    /**
     * 频道id列表
     **/
    public $channelIds;

    /**
     * 结束时间
     **/
    public $endDate;

    /**
     * 关键词出现在标题，短标题，标签中
     **/
    public $keyWord;

    /**
     * 当前页
     **/
    public $pageNo;

    /**
     * 每页显示画报数 小于10或者大于20，默认设置为10
     **/
    public $pageSize;

    /**
     * 开始时间
     **/
    public $startDate;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkMaxListSize($this->channelIds, 20, "channelIds");
        //RequestCheckUtil::checkMaxLength($this->channelIds, 100, "channelIds");
        //RequestCheckUtil::checkNotNull($this->pageNo, "pageNo");
        //RequestCheckUtil::checkNotNull($this->pageSize, "pageSize");
    }
}
