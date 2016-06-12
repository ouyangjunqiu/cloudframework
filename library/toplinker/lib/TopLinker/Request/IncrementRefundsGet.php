<?php
/**
 * TOP API: taobao.increment.refunds.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_IncrementRefundsGet extends TopLinker_Request_Abstract
{
    /**
     * 消息所对应的操作时间的最大值。和start_modified搭配使用能过滤消通知消息的时间段。不传时：如果设置了start_modified，默认为与start_modified同一天的23:59:59；否则默认为调用接口当天的23:59:59。（格式：yyyy-MM-dd HH:mm:ss）<br>
    <font color="red">注意：start_modified和end_modified的日期必须在必须在同一天内，比如：start_modified设置2000-01-01 00:00:00，则end_modified必须设置为2000-01-01这个日期</font>
     **/
    public $endModified;

    /**
     * 消息所属于的用户的昵称。设置此参数，返回的消息会根据传入nick的进行过滤。自用型appKey的昵称默认为自己的绑定昵称，此参数无效。
     **/
    public $nick;

    /**
     * 页码。取值范围:大于零的整数; 默认值:1,即返回第一页数据。
     **/
    public $pageNo;

    /**
     * 每页条数。取值范围:大于零的整数;最大值:200;默认值:40。
     **/
    public $pageSize;

    /**
     * 消息所对应的操作时间的最小值。和end_modified搭配使用能过滤消通知消息的时间段。不传时：如果设置了end_modified，默认为与 end_modified同一天的00:00:00，否则默认为调用接口当天的00:00:00。（格式：yyyy-MM-dd HH:mm:ss）<br>
    <font color="red">注意：start_modified和end_modified的日期必须在必须在同一天内，比如：start_modified设置2000-01-01 00:00:00，则end_modified必须设置为2000-01-01这个日期</font>
     **/
    public $startModified;

    /**
     * 退款操作状态，默认查询所有状态的数据，除了默认值外每次只能查询一种状态。具体字段说明请见 退款消息状态
     **/
    public $status;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkMinValue($this->pageNo, 1, "pageNo");
        //RequestCheckUtil::checkMaxValue($this->pageSize, 200, "pageSize");
        //RequestCheckUtil::checkMinValue($this->pageSize, 1, "pageSize");
    }
}
