<?php
/**
 * TOP API: taobao.ju.group.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_JuGroupGet extends TopLinker_Request_Abstract
{
    /**
     * 代表需要返回的商品对象字段。可选值：ItemData商品结构体中所有字段均可返回；多个字段用“,”分隔。如果fields为空，或者不传该参数，就默认获得所有的字段
     **/
    public $fields;

    /**
     * 聚划算组的编号
     **/
    public $groupId;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->groupId, "groupId");
        //RequestCheckUtil::checkMinValue($this->groupId, 1, "groupId");
    }
}
