<?php
/**
 * TOP API: taobao.hotel.type.name.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_HotelTypeNameGet extends TopLinker_Request_Abstract
{
    /**
     * 要查询的酒店id。必须为数字
     **/
    public $hid;

    /**
     * 房型全部名称/别名。不能超过60字节
     **/
    public $name;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->hid, "hid");
        //RequestCheckUtil::checkNotNull($this->name, "name");
        //RequestCheckUtil::checkMaxLength($this->name, 60, "name");
    }
}
