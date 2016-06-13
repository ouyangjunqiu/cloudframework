<?php
/**
 * TOP API: taobao.sellercats.list.add request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_SellercatsListAdd extends TopLinker_Request_Abstract
{
    /**
     * 卖家自定义类目名称。不超过20个字符
     **/
    public $name;

    /**
     * 父类目编号，如果类目为店铺下的一级类目：值等于0，如果类目为子类目，调用获取taobao.sellercats.list.get父类目编号
     **/
    public $parentCid;

    /**
     * 链接图片URL地址。(绝对地址，格式：http://host/image_path)
     **/
    public $pictUrl;

    /**
     * 该类目在页面上的排序位置,取值范围:大于零的整数
     **/
    public $sortOrder;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->name, "name");
    }
}
