<?php
/**
 * TOP API: taobao.hotel.update request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_HotelUpdate extends TopLinker_Request_Abstract
{
    /**
     * 酒店地址。长度不能超过120
     **/
    public $address;

    /**
     * 城市编码。参见：http://kezhan.trip.taobao.com/area.html，domestic为false时默认为0
     **/
    public $city;

    /**
     * domestic为true时，固定China；
    domestic为false时，必须传定义的酒店。参见：http://kezhan.trip.taobao.com/countrys.html
     **/
    public $country;

    /**
     * 装修时间。长度不能超过4。
     **/
    public $decorateTime;

    /**
     * 酒店介绍。不超过25000个汉字
     **/
    public $desc;

    /**
     * 区域（县级市）编码。参见：http://kezhan.trip.taobao.com/area.html
     **/
    public $district;

    /**
     * 是否国内酒店。可选值：true，false
     **/
    public $domestic;

    /**
     * 酒店id。必须为数字。
     **/
    public $hid;

    /**
     * 酒店级别。可选值：A,B,C,D,E,F。代表客栈公寓、经济连锁、二星级/以下、三星级/舒适、四星级/高档、五星级/豪华
     **/
    public $level;

    /**
     * 酒店名称。不能超过60字节
     **/
    public $name;

    /**
     * 开业时间。长度不能超过4。
     **/
    public $openingTime;

    /**
     * 酒店定位。可选值：T,B。代表旅游度假、商务出行
     **/
    public $orientation;

    /**
     * 酒店图片。类型:JPG,GIF;最大长度:500K。支持的文件类型：gif,jpg,jpeg,png。
    图片没有传，则代表不更新图片，使用原来的图片
     **/
    public $pic;

    /**
     * 省份编码。参见：http://kezhan.trip.taobao.com/area.html，domestic为false时默认为0
     **/
    public $province;

    /**
     * 房间数。长度不能超过4。
     **/
    public $rooms;

    /**
     * 交通距离与设施服务。JSON格式。cityCenterDistance、railwayDistance、airportDistance分别代表距离市中心、距离火车站、距离机场公里数，为不超过3位正整数，默认-1代表无数据。
    其他key值true代表有此服务，false代表没有。
    parking：停车场，airportShuttle：机场接送，rentCar：租车，meetingRoom：会议室，businessCenter：商务中心，swimmingPool：游泳池，fitnessClub：健身中心，laundry：洗衣服务，morningCall：叫早服务，bankCard：接受银行卡，creditCard：接受信用卡，chineseRestaurant：中餐厅，westernRestaurant：西餐厅，cafe：咖啡厅，bar：酒吧，ktv：KTV。
    如：
    {"airportShuttle":true,"parking":false,"fitnessClub":false,"chineseRestaurant":false,"rentCar":false,"laundry":false,"bankCard":false,"cityCenterDistance":-1,"creditCard":false,"westernRestaurant":false,"ktv":false,"railwayDistance":-1,"swimmingPool":false,"cafe":false,"businessCenter":false,"morningCall":false,"bar":false,"meetingRoom":false,"airportDistance":-1}
     **/
    public $service;

    /**
     * 楼层数。长度不能超过4。
     **/
    public $storeys;

    /**
     * 酒店电话。格式：国家代码（最长6位）#区号（最长4位）#电话（最长20位）。国家代码提示：中国大陆0086、香港00852、澳门00853、台湾00886
     **/
    public $tel;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkMaxLength($this->address, 120, "address");
        //RequestCheckUtil::checkMaxValue($this->city, 999999, "city");
        //RequestCheckUtil::checkMinValue($this->city, 0, "city");
        //RequestCheckUtil::checkMaxLength($this->decorateTime, 4, "decorateTime");
        //RequestCheckUtil::checkMaxLength($this->desc, 50000, "desc");
        //RequestCheckUtil::checkMaxValue($this->district, 999999, "district");
        //RequestCheckUtil::checkMinValue($this->district, 0, "district");
        //RequestCheckUtil::checkNotNull($this->hid, "hid");
        //RequestCheckUtil::checkMaxLength($this->level, 1, "level");
        //RequestCheckUtil::checkMaxLength($this->name, 60, "name");
        //RequestCheckUtil::checkMaxLength($this->openingTime, 4, "openingTime");
        //RequestCheckUtil::checkMaxLength($this->orientation, 1, "orientation");
        //RequestCheckUtil::checkMaxValue($this->province, 999999, "province");
        //RequestCheckUtil::checkMinValue($this->province, 0, "province");
        //RequestCheckUtil::checkMaxValue($this->rooms, 9999, "rooms");
        //RequestCheckUtil::checkMinValue($this->rooms, 0, "rooms");
        //RequestCheckUtil::checkMaxValue($this->storeys, 9999, "storeys");
        //RequestCheckUtil::checkMinValue($this->storeys, 0, "storeys");
        //RequestCheckUtil::checkMaxLength($this->tel, 32, "tel");
    }
}
