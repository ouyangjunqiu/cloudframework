<?php
/**
 * TOP API: taobao.hotel.room.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_HotelRoomGet extends TopLinker_Request_Abstract
{
    /**
     * 酒店房间商品gid。必须为数字。
     **/
    public $gid;

    /**
     * 是否需要返回该商品的酒店信息。可选值：true，false。
     **/
    public $needHotel;

    /**
     * 是否需要返回该商品的宝贝描述。可选值：true，false。
     **/
    public $needRoomDesc;

    /**
     * 是否需要返回该商品的房态列表。可选值：true，false。
     **/
    public $needRoomQuotas;

    /**
     * 是否需要返回该商品的房型信息。可选值：true，false。
     **/
    public $needRoomType;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->gid, "gid");
    }
}
