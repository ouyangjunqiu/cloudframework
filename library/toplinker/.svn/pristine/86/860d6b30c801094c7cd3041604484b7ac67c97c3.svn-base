<?php
/**
 * TOP API: taobao.item.propimg.upload request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_ItemPropimgUpload extends TopLinker_Request_Abstract
{
    /**
     * 属性图片ID。如果是新增不需要填写
     **/
    public $id;

    /**
     * 属性图片内容。类型:JPG,GIF;最大长度:500K;图片大小不超过:1M
     **/
    public $image;

    /**
     * 商品数字ID，必选
     **/
    public $numIid;

    /**
     * 图片位置
     **/
    public $position;

    /**
     * 属性列表。调用taobao.itemprops.get获取类目属性，属性必须是颜色属性，再用taobao.itempropvalues.get取得vid。格式:pid:vid。
     **/
    public $properties;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->numIid, "numIid");
        //RequestCheckUtil::checkMinValue($this->numIid, 0, "numIid");
        //RequestCheckUtil::checkNotNull($this->properties, "properties");
    }
}
