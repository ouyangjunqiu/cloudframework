<?php
/**
 * TOP API: taobao.item.joint.img request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_ItemJointImg extends TopLinker_Request_Abstract
{
    /**
     * 商品图片id(如果是更新图片，则需要传该参数)
     **/
    public $id;

    /**
     * 上传的图片是否关联为商品主图
     **/
    public $isMajor;

    /**
     * 商品数字ID，必选
     **/
    public $numIid;

    /**
     * 图片URL,图片空间图片的相对地址
     **/
    public $picPath;

    /**
     * 图片序号
     **/
    public $position;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->numIid, "numIid");
        //RequestCheckUtil::checkMinValue($this->numIid, 0, "numIid");
        //RequestCheckUtil::checkNotNull($this->picPath, "picPath");
    }
}
