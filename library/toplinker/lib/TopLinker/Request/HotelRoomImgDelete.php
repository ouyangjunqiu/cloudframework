<?php
/**
 * TOP API: taobao.hotel.room.img.delete request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_HotelRoomImgDelete extends TopLinker_Request_Abstract
{
    /**
     * 酒店房间商品gid。必须为数字。
     **/
    public $gid;

    /**
     * 图片序号，可选值：1，2，3，4，5。
    如果原图片个数小于等于1，则报错，不能删除图片。
    如果原图片个数小于待删除的图片序号，则报错，图片序号错误。
     **/
    public $position;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->gid, "gid");
        //RequestCheckUtil::checkNotNull($this->position, "position");
    }
}
