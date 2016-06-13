<?php
/**
 * TOP API: taobao.hotel.type.add request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_HotelTypeAdd extends TopLinker_Request_Abstract
{
    /**
     * 酒店id。必须为数字
     **/
    public $hid;

    /**
     * 房型名称。长度不能超过30
     **/
    public $name;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->hid, "hid");
        //RequestCheckUtil::checkMinValue($this->hid, 0, "hid");
        //RequestCheckUtil::checkNotNull($this->name, "name");
        //RequestCheckUtil::checkMaxLength($this->name, 30, "name");
    }
}
