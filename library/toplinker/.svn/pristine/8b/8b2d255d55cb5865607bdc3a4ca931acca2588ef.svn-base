<?php
/**
 * TOP API: taobao.itemcats.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_ItemcatsGet extends TopLinker_Request_Abstract
{
    /**
     * 商品所属类目ID列表，用半角逗号(,)分隔 例如:(18957,19562,) (cids、parent_cid至少传一个)
     **/
    public $cids;

    /**
     * 需要返回的字段列表，见ItemCat，默认返回：cid,parent_cid,name,is_parent
     **/
    public $fields;

    /**
     * 父商品类目 id，0表示根节点, 传输该参数返回所有子类目。 (cids、parent_cid至少传一个)
     **/
    public $parent_cid;

    public function rules()
    {
        return array();
        ////RequestCheckUtil::checkMaxListSize($this->cids,1000,"cids");
    }
}
