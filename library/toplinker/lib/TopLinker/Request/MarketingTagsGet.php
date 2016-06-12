<?php
/**
 * TOP API: taobao.marketing.tags.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_MarketingTagsGet extends TopLinker_Request_Abstract
{
    /**
     * 需要的返回字段，可选值为UserTag中所有字段
     **/
    public $fields;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->fields, "fields");
    }
}
