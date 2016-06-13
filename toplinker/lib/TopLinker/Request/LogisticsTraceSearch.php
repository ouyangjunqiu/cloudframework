<?php
/**
 * TOP API: taobao.logistics.trace.search request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_LogisticsTraceSearch extends TopLinker_Request_Abstract
{
    /**
     * 卖家昵称
     **/
    public $sellerNick;

    /**
     * 淘宝交易号，请勿传非淘宝交易号，
     **/
    public $tid;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->sellerNick, "sellerNick");
        //RequestCheckUtil::checkNotNull($this->tid, "tid");
    }
}
