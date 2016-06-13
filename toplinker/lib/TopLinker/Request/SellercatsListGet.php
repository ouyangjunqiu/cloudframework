<?php
/**
 * TOP API: taobao.sellercats.list.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_SellercatsListGet extends TopLinker_Request_Abstract
{
    /**
     * fields参数
     **/
    public $fields;

    /**
     * 卖家昵称
     **/
    public $nick;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->nick, "nick");
    }
}
