<?php
/**
 * TOP API: taobao.hotel.room.img.upload request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_HotelRoomImgUpload extends TopLinker_Request_Abstract
{
    /**
     * 酒店房间商品gid。必须为数字。
     **/
    public $gid;

    /**
     * 酒店商品图片。类型:JPG,GIF;最大长度:500K。支持的文件类型：gif,jpg,jpeg,png。
    如果原图片少于5张，若没传序号或序号大于原图片个数，则在原图片最后添加，否则按序号插入到原图片中去，自动后移。
    如果原图片大于5张，若没传序号，则替换最后一张图片，否则在序号位置插入，图片向后移，最后一张被删除。
     **/
    public $pic;

    /**
     * 图片序号，可选值：1，2，3，4，5
     **/
    public $position;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->gid, "gid");
        //RequestCheckUtil::checkNotNull($this->pic, "pic");
    }
}
