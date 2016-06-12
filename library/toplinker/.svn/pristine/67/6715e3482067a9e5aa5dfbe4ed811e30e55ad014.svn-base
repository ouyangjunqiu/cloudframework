<?php
/**
 * TOP API: taobao.ju.group.assign request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_JuGroupAssign extends TopLinker_Request_Abstract
{
    /**
     * 代表需要返回的商品对象字段。可选值：ItemData商品结构体中所有字段均可返回；多个字段用“,”分隔。如果fields为空，或者不传该参数，就默认获得所有的字段
     **/
    public $fields;

    /**
     * IPHONE,WAP,ANDROID,SINA,163 各种终端类型
     **/
    public $terminalType;

    /**
     * 终端的唯一标识，web可以用cookie，手机使用手机号码等，确保唯一性即可，用于分配商品组
     **/
    public $uuid;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->terminalType, "terminalType");
        //RequestCheckUtil::checkNotNull($this->uuid, "uuid");
    }
}
