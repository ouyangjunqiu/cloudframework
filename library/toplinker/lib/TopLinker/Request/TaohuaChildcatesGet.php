<?php
/**
 * TOP API: taobao.taohua.childcates.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_TaohuaChildcatesGet extends TopLinker_Request_Abstract
{
    /**
     * 通过类目ID获取它的子类目列表
     **/
    public $cateId;

    public function setCateId($cateId)
    {
        $this->cateId = $cateId;
        $this->apiParas["cate_id"] = $cateId;
    }

    public function getCateId()
    {
        return $this->cateId;
    }

    public function rules()
    {
        return array();
    }
}
