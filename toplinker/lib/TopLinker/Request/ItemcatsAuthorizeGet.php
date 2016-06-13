<?php
/**
 * TOP API: taobao.itemcats.authorize.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_ItemcatsAuthorizeGet extends TopLinker_Request_Abstract
{
    /**
     * 需要返回的字段。目前支持有：
    brand.vid, brand.name,
    item_cat.cid, item_cat.name, item_cat.status,item_cat.sort_order,item_cat.parent_cid,item_cat.is_parent
     **/
    public $fields;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->fields, "fields");
    }
}
