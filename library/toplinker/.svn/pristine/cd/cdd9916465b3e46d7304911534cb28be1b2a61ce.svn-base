<?php

/**
 * TOP API: taobao.picture.category.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_PictureCategoryGet extends TopLinker_Request_Abstract
{
    /**
     * 取二级分类时设置为对应父分类id
     * 取一级分类时父分类id设为0
     * 取全部分类的时候不设或设为-1
     **/
    public $parentId;

    /**
     * 图片分类ID
     **/
    public $pictureCategoryId;

    /**
     * 图片分类名，不支持模糊查询
     **/
    public $pictureCategoryName;
    public $picture_category_name;

    /**
     * 分类类型,fixed代表店铺装修分类类别，auction代表宝贝分类类别，user-define代表用户自定义分类类别
     **/
    public $type;

    public function rules()
    {
        return array();
    }
}
