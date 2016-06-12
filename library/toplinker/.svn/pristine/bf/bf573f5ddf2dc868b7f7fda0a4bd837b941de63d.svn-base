<?php
/**
 * TOP API: taobao.itempropvalues.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_ItempropvaluesGet extends TopLinker_Request_Abstract
{
    /**
     * 叶子类目ID ,通过taobao.itemcats.get获得叶子类目ID
     **/
    public $cid;

    /**
     * 需要返回的字段。目前支持有：cid,pid,prop_name,vid,name,name_alias,status,sort_order
     **/
    public $fields;

    /**
     * 属性和属性值 id串，格式例如(pid1;pid2)或(pid1:vid1;pid2:vid2)或(pid1;pid2:vid2)
     **/
    public $pvs;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->cid, "cid");
        //RequestCheckUtil::checkNotNull($this->fields, "fields");
    }
}
