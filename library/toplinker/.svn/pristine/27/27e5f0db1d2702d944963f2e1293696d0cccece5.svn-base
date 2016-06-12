<?php
/**
 * TOP API: taobao.picture.upload request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_PictureUpload extends TopLinker_Request_Abstract
{
    /**
     * 包括后缀名的图片标题,不能为空，如Bule.jpg,有些卖家希望图片上传后取图片文件的默认名
     **/
    public $image_input_title;

    /**
     * 图片二进制文件流,不能为空,允许png、jpg、gif图片格式
     **/
    public $img;

    /**
     * 图片标题,如果为空,传的图片标题就取去掉后缀名的image_input_title,超过50字符长度会截取50字符,重名会在标题末尾加"(1)";标题末尾已经有"(数字)"了，则数字加1
     **/
    public $title;

    /**
     * 图片分类ID，设置具体某个分类ID或设置0上传到默认分类，只能传入一个分类
     **/
    public $picture_category_id;

    public $client_type;
    
    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->imageInputTitle, "imageInputTitle");
        //RequestCheckUtil::checkNotNull($this->img, "img");
        //RequestCheckUtil::checkNotNull($this->pictureCategoryId, "pictureCategoryId");
    }
}
