<?php
/**
 * TOP API: taobao.simba.rpt.targetingtagbase.get request
 *
 * @author auto create
 * @since 1.0, 2012-12-08 12:40:34
 */
class TopLinker_Request_SimbaRptTargetingtagbaseGet extends TopLinker_Request_Abstract
{
    /**
     * 推广组id
     **/
    public $adgroup_id;

    /**
     * 推广计划id
     **/
    public $campaign_id;

    /**
     * 结束时间,格式为：yyyy-mm-dd
     **/
    public $end_time;

    /**
     * 昵称
     **/
    public $nick;

    /**
     * 页码
     **/
    public $page_no;

    /**
     * 每页大小
     **/
    public $page_size;

    /**
     * 开始时间,格式为：yyyy-mm-dd
     **/
    public $start_time;

//    /**
//     * 权限校验参数
//     **/
//    public $subway_token;

    public function rules()
    {
        return array();
    }
}
