<?php
/**
 * TOP API: taobao.logistics.address.modify request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_LogisticsAddressModify extends TopLinker_Request_Abstract
{
    /**
     * 详细街道地址，不需要重复填写省/市/区
     **/
    public $addr;

    /**
     * 默认退货地址。<br>
    <font color='red'>选择此项(true)，将当前地址设为默认退货地址，撤消原默认退货地址</font>
     **/
    public $cancelDef;

    /**
     * 所在市
     **/
    public $city;

    /**
     * 地址库ID
     **/
    public $contactId;

    /**
     * 联系人姓名
    <font color='red'>长度不可超过20个字节</font>
     **/
    public $contactName;

    /**
     * 区、县
    <br><font color='red'>如果所在地区是海外的可以为空，否则为必参</font>
     **/
    public $country;

    /**
     * 默认取货地址。<br>
    <font color='red'>选择此项(true)，将当前地址设为默认取货地址，撤消原默认取货地址</font>
     **/
    public $getDef;

    /**
     * 备注,<br><font color='red'>备注不能超过256字节</font>
     **/
    public $memo;

    /**
     * 手机号码，手机与电话必需有一个 <br><font color='red'>手机号码不能超过20位</font>
     **/
    public $mobilePhone;

    /**
     * 电话号码,手机与电话必需有一个
     **/
    public $phone;

    /**
     * 所在省
     **/
    public $province;

    /**
     * 公司名称,
    <br><font color='red'>公司名称长能不能超过20字节</font>
     **/
    public $sellerCompany;

    /**
     * 地区邮政编码
    <br><font color='red'>如果所在地区是海外的可以为空，否则为必参</font>
     **/
    public $zipCode;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->addr, "addr");
        //RequestCheckUtil::checkNotNull($this->city, "city");
        //RequestCheckUtil::checkNotNull($this->contactId, "contactId");
        //RequestCheckUtil::checkNotNull($this->contactName, "contactName");
        //RequestCheckUtil::checkNotNull($this->province, "province");
    }
}
