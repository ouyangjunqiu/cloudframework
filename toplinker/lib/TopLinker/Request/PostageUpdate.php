<?php
/**
 * TOP API: taobao.postage.update request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_PostageUpdate extends TopLinker_Request_Abstract
{
    /**
     * 默认EMS加价费用.精确到1位小数;单位:元。如:10.5
     **/
    public $emsIncrease;

    /**
     * 默认EMS费用.精确到1位小数;单位:元。如:10.5
     **/
    public $emsPrice;

    /**
     * 默认快递加价费用.精确到1位小数;单位:元。如:10.5
     **/
    public $expressIncrease;

    /**
     * 默认快递费用.精确到1位小数;单位:元。如:10.5
     **/
    public $expressPrice;

    /**
     * 邮费模板备注
     **/
    public $memo;

    /**
     * 邮费模板名称
     **/
    public $name;

    /**
     * 默认平邮加价费用.精确到1位小数;单位:元。如:10.5
     **/
    public $postIncrease;

    /**
     * 默认平邮费用.精确到1位小数;单位:元。如:10.5
     **/
    public $postPrice;

    /**
     * 邮费模板id.注意:给定的postage_id必须是存在的postage的id
     **/
    public $postageId;

    /**
     * 邮费子项涉及的地区，多个地区用逗号连接数量串。可以用taobao.areas.get接口获取。或者参考：http://www.stats.gov.cn/tjbz/xzqhdm/t20080215_402462675.htm  例 (110000;310000;320000,330000)就代表邮费子项涉及(北京;上海;江苏,浙江)四个地区。填写时要注意对照地区代码值，如果填入错误地区代码，将会出现错误信息
     **/
    public $postageModeDests;

    /**
     * 运费子模板id:修改多个子模板时,用 “;”区分.注意1:给定的postage_mode_id必须是当前postage所包含的postage_mode的id.注意2:在修改多个PostageMode时,字符串中使用 " ; " 分号区分,必须注意每个字段的数量一定要相等.注意3:在添加运费模板子模板的时候必须是已经有了默认的运费项后才可以添加对应的邮费模板子模板。如,添加了默认的EMS运费项，才可以添加运EMS费模板子项.
     **/
    public $postageModeIds;

    /**
     * 运费方式加件费用数量串：例 (1.5;2.4;2.0).精确到1位小数;单位:元。如:10.5
     **/
    public $postageModeIncreases;

    /**
     * 子模板操作类型：新增(add),修改(update),删除(delete). 例(add;add;add).注意：对子模板进行操作的时候此参数必填.如果不填那默认为update.新增操作不能传子模板ID
     **/
    public $postageModeOptTypes;

    /**
     * 运费方式单价数量串：例 (11.2;14;1;6).精确到1位小数;单位:元。如:10.5
     **/
    public $postageModePrices;

    /**
     * 运费方式:平邮(post),快递公司(express),EMS(ems)数量串:例(post;express;ems)分号区分
     **/
    public $postageModeTypes;

    /**
     * 删除ems类型的邮费模板，包括所有这个类型的子邮费模板
     **/
    public $removeEms;

    /**
     * 删除快递类型的邮费模板，包括所有这个类型的子邮费模板
     **/
    public $removeExpress;

    /**
     * 删除平邮类型的邮费模板，包括所有这个类型的子邮费模板
     **/
    public $removePost;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->postageId, "postageId");
    }
}
