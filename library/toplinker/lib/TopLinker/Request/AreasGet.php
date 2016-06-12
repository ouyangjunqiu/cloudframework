<?php
/**
 * TOP API: taobao.areas.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_AreasGet extends TopLinker_Request_Abstract
{
    /**
     * 需返回的字段列表.可选值:Area 结构中的所有字段;多个字段之间用","分隔.如:id,type,name,parent_id,zip.
     **/
    public $fields;

    protected function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->fields, "fields");
    }
}
