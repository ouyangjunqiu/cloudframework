<?php
/**
 * TOP API: taobao.shop.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_ShopGet extends TopLinker_Request_Abstract
{
    /**
     * 需返回的字段列表。可选值：Shop 结构中的所有字段；多个字段之间用逗号(,)分隔
     **/
    public $fields;

    /**
     * 卖家昵称
     **/
    public $nick;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->fields, "fields");
        //RequestCheckUtil::checkNotNull($this->nick, "nick");
    }
}
