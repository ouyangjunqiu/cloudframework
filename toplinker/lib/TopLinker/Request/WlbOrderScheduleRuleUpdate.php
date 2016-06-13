<?php
/**
 * TOP API: taobao.wlb.order.schedule.rule.update request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_WlbOrderScheduleRuleUpdate extends TopLinker_Request_Abstract
{
    /**
     * 备用发货仓库id
     **/
    public $backupStoreId;

    /**
     * 默认发货仓库id
     **/
    public $defaultStoreId;

    /**
     * 订单调度规则的额外规则设置： REMARK_STOP--有订单留言不自动下发 COD_STOP--货到付款订单不自动下发 CHECK_WAREHOUSE_DELIVER--检查仓库的配送范围
     **/
    public $option;

    /**
     * 国家地区标准编码列表
     **/
    public $provAreaIds;

    /**
     * 要修改的订单调度规则明细id
     **/
    public $scheduleRuleId;

    public function setBackupStoreId($backupStoreId)
    {
        $this->backupStoreId = $backupStoreId;
        $this->apiParas["backup_store_id"] = $backupStoreId;
    }

    public function getBackupStoreId()
    {
        return $this->backupStoreId;
    }

    public function setDefaultStoreId($defaultStoreId)
    {
        $this->defaultStoreId = $defaultStoreId;
        $this->apiParas["default_store_id"] = $defaultStoreId;
    }

    public function getDefaultStoreId()
    {
        return $this->defaultStoreId;
    }

    public function setOption($option)
    {
        $this->option = $option;
        $this->apiParas["option"] = $option;
    }

    public function getOption()
    {
        return $this->option;
    }

    public function setProvAreaIds($provAreaIds)
    {
        $this->provAreaIds = $provAreaIds;
        $this->apiParas["prov_area_ids"] = $provAreaIds;
    }

    public function getProvAreaIds()
    {
        return $this->provAreaIds;
    }

    public function setScheduleRuleId($scheduleRuleId)
    {
        $this->scheduleRuleId = $scheduleRuleId;
        $this->apiParas["schedule_rule_id"] = $scheduleRuleId;
    }

    public function getScheduleRuleId()
    {
        return $this->scheduleRuleId;
    }

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->scheduleRuleId, "scheduleRuleId");
    }
}
