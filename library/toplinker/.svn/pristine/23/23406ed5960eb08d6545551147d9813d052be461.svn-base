<?php

/**
 * TOP API: taobao.picture.category.add request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_PictureCategoryAdd extends TopLinker_Request_Abstract
{
    /**
     * 图片分类的父分类,一级分类的parent_id为0,二级分类的则为其父分类的picture_category_id
     **/
    public $parentId;
    public $parent_id;

    /**
     * 图片分类名称，最大长度20字符，中英文都算一字符，不能为空
     **/
    public $pictureCategoryName;
    public $picture_category_name;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->pictureCategoryName, "pictureCategoryName");
    }
}
