<?php
/**
 * TOP API: taobao.hotel.room.add request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_HotelRoomAdd extends TopLinker_Request_Abstract
{
    /**
     * 面积。可选值：A,B,C,D。分别代表：
    A：15平米以下，B：16－30平米，C：31－50平米，D：50平米以上
     **/
    public $area;

    /**
     * 宽带服务。A,B,C,D。分别代表：
    A：无宽带，B：免费宽带，C：收费宽带，D：部分收费宽带
     **/
    public $bbn;

    /**
     * 床型。可选值：A,B,C,D,E,F,G,H,I。分别代表：A：单人床，B：大床，C：双床，D：双床/大床，E：子母床，F：上下床，G：圆形床，H：多床，I：其他床型
     **/
    public $bedType;

    /**
     * 早餐。A,B,C,D,E。分别代表：
    A：无早，B：单早，C：双早，D：三早，E：多早
     **/
    public $breakfast;

    /**
     * 订金。0～99999900的正整数。在payment_type为订金时必须输入，存储的单位是分。不能带角分。
     **/
    public $deposit;

    /**
     * 商品描述。不能超过25000个汉字（50000个字符）。
     **/
    public $desc;

    /**
     * 手续费。0～99999900的正整数。在payment_type为手续费或手续费/间夜时必须输入，存储的单位是分。不能带角分。
     **/
    public $fee;

    /**
     * 购买须知。不能超过4000个汉字（8000个字符）。
     **/
    public $guide;

    /**
     * 酒店id。必须为数字。
     **/
    public $hid;

    /**
     * 支付类型。可选值：A,B,C,D。分别代表：
    A：全额支付，B：手续费，C：订金，D：手续费/间夜
     **/
    public $paymentType;

    /**
     * 酒店商品图片。类型:JPG,GIF;最大长度:500K。支持的文件类型：gif,jpg,jpeg,png。发布的时候只能发布一张图片。如需再发图片，需要调用商品图片上传接口，1个商品最多5张图片。
     **/
    public $pic;

    /**
     * 房型id。必须为数字。
     **/
    public $rid;

    /**
     * 房态信息。可以传今天开始90天内的房态信息。日期必须连续。JSON格式传递。
    date：代表房态日期，格式为YYYY-MM-DD，
    price：代表当天房价，0～99999900，存储的单位是分，不能带角分
    num：代表当天可售间数，0～999。
    如：
    [{"date":2011-01-28,"price":10000, "num":10},{"date":2011-01-29,"price":12000,"num":10}]
     **/
    public $roomQuotas;

    /**
     * 设施服务。JSON格式。
    value值true有此服务，false没有。
    bar：吧台，catv：有线电视，ddd：国内长途电话，idd：国际长途电话，toilet：独立卫生间，pubtoliet：公共卫生间。
    如：
    {"bar":false,"catv":false,"ddd":false,"idd":false,"pubtoilet":false,"toilet":false}
     **/
    public $service;

    /**
     * 床宽。可选值：A,B,C,D,E,F,G,H。分别代表：A：1米及以下，B：1.1米，C：1.2米，D：1.35米，E：1.5米，F：1.8米，G：2米，H：2.2米及以上
     **/
    public $size;

    /**
     * 楼层。长度不超过8
     **/
    public $storey;

    /**
     * 酒店商品名称。不能超过60字节
     **/
    public $title;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkMaxLength($this->area, 1, "area");
        //RequestCheckUtil::checkMaxLength($this->bbn, 1, "bbn");
        //RequestCheckUtil::checkNotNull($this->bedType, "bedType");
        //RequestCheckUtil::checkMaxLength($this->bedType, 1, "bedType");
        //RequestCheckUtil::checkNotNull($this->breakfast, "breakfast");
        //RequestCheckUtil::checkMaxLength($this->breakfast, 1, "breakfast");
        //RequestCheckUtil::checkMaxValue($this->deposit, 99999900, "deposit");
        //RequestCheckUtil::checkMinValue($this->deposit, 0, "deposit");
        //RequestCheckUtil::checkNotNull($this->desc, "desc");
        //RequestCheckUtil::checkMaxLength($this->desc, 50000, "desc");
        //RequestCheckUtil::checkMaxValue($this->fee, 99999900, "fee");
        //RequestCheckUtil::checkMinValue($this->fee, 0, "fee");
        //RequestCheckUtil::checkNotNull($this->guide, "guide");
        //RequestCheckUtil::checkMaxLength($this->guide, 8000, "guide");
        //RequestCheckUtil::checkNotNull($this->hid, "hid");
        //RequestCheckUtil::checkNotNull($this->paymentType, "paymentType");
        //RequestCheckUtil::checkMaxLength($this->paymentType, 1, "paymentType");
        //RequestCheckUtil::checkNotNull($this->pic, "pic");
        //RequestCheckUtil::checkNotNull($this->rid, "rid");
        //RequestCheckUtil::checkNotNull($this->roomQuotas, "roomQuotas");
        //RequestCheckUtil::checkMaxLength($this->size, 1, "size");
        //RequestCheckUtil::checkMaxLength($this->storey, 8, "storey");
        //RequestCheckUtil::checkNotNull($this->title, "title");
        //RequestCheckUtil::checkMaxLength($this->title, 60, "title");
    }
}
