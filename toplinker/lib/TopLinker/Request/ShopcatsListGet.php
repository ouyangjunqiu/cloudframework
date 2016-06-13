<?php
/**
 * TOP API: taobao.shopcats.list.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_ShopcatsListGet extends TopLinker_Request_Abstract
{
    /**
     * 需要返回的字段列表，见ShopCat，默认返回：cid,parent_cid,name,is_parent
     **/
    public $fields;

    public function rules()
    {
        return array();
    }
}
