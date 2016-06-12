<?php
/**
 * TOP API: taobao.hotel.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_HotelGet extends TopLinker_Request_Abstract
{
    /**
     * 要查询的酒店id。必须为数字
     **/
    public $hid;

    /**
     * 是否需要返回该酒店的房型列表。可选值：true，false。
     **/
    public $needRoomType;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->hid, "hid");
    }
}
