<?php
/**
 * TOP API: taobao.item.img.upload request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_ItemImgUpload extends TopLinker_Request_Abstract
{
    /**
     * 商品图片id(如果是更新图片，则需要传该参数)
     **/
    public $id;

    /**
     * 商品图片内容类型:JPG,GIF;最大长度:500K 。支持的文件类型：gif,jpg,jpeg,png
     **/
    public $image;

    /**
     * 是否将该图片设为主图,可选值:true,false;默认值:false(非主图)
     **/
    public $isMajor;

    /**
     * 商品数字ID，该参数必须
     **/
    public $numIid;

    /**
     * 图片序号
     **/
    public $position;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->numIid, "numIid");
        //RequestCheckUtil::checkMinValue($this->numIid, 0, "numIid");
    }
}
