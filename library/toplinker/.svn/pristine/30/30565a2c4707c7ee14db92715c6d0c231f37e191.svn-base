<?php
/**
 * TOP API: taobao.itemprops.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_ItempropsGet extends TopLinker_Request_Abstract
{
    /**
     * 类目子属性路径,由该子属性上层的类目属性和类目属性值组成,格式pid:vid;pid:vid.取类目子属性需要传child_path,cid
     **/
    public $childPath;

    /**
     * 叶子类目ID，如果只传cid，则只返回一级属性,通过taobao.itemcats.get获得叶子类目ID
     **/
    public $cid;

    /**
     * 需要返回的字段列表，见：ItemProp，默认返回：pid, name, must, multi, prop_values
     **/
    public $fields;

    /**
     * 是否颜色属性。可选值:true(是),false(否) (删除的属性不会匹配和返回这个条件)
     **/
    public $isColorProp;

    /**
     * 是否枚举属性。可选值:true(是),false(否) (删除的属性不会匹配和返回这个条件)。如果返回true，属性值是下拉框选择输入，如果返回false，属性值是用户自行手工输入。
     **/
    public $isEnumProp;

    /**
     * 在is_enum_prop是true的前提下，是否是卖家可以自行输入的属性（注：如果is_enum_prop返回false，该参数统一返回false）。可选值:true(是),false(否) (删除的属性不会匹配和返回这个条件)
     **/
    public $isInputProp;

    /**
     * 是否商品属性，这个属性只能放于发布商品时使用。可选值:true(是),false(否)
     **/
    public $isItemProp;

    /**
     * 是否关键属性。可选值:true(是),false(否)
     **/
    public $isKeyProp;

    /**
     * 是否销售属性。可选值:true(是),false(否)
     **/
    public $isSaleProp;

    /**
     * 父属性ID
     **/
    public $parentPid;

    /**
     * 属性id (取类目属性时，传pid，不用同时传PID和parent_pid)
     **/
    public $pid;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->cid, "cid");
    }
}
