<?php
/**
 * TOP API: taobao.products.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_ProductsGet extends TopLinker_Request_Abstract
{
    /**
     * 需返回的字段列表.可选值:Product数据结构中的所有字段;多个字段之间用","分隔
     **/
    public $fields;

    /**
     * 用户昵称
     **/
    public $nick;

    /**
     * 页码.传入值为1代表第一页,传入值为2代表第二页,依此类推.默认返回的数据是从第一页开始.
     **/
    public $pageNo;

    /**
     * 每页条数.每页返回最多返回100条,默认值为40
     **/
    public $pageSize;

    /**
     * 属性串pid:vid
     **/
    public $props;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->fields, "fields");
        //RequestCheckUtil::checkNotNull($this->nick, "nick");
    }
}
