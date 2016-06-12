<?php
/**
 * 推广组下的创意报表基础数据查询
 *
 * nick String N 主人昵称
 * campaign_id number Y 查询推广计划id
 * adgroup_Id number Y 推广组ID
 * start_time date Y 开始时间
 * end_time date Y 结束时间（过去90天）
 * source String Y 数据来源（站内：1，站外：2 ，汇总：SUMMARY）SUMMARY必须单选，其他值可多选例如1,2
 * subway_token String Y 权限校验参数
 * page_no number N 页码  1
 * page_size number N 每页大小 500
 * Search_type String Y 报表类型（搜索：SEARCH,类目出价：CAT, 定向投放：NOSEARCH汇总：SUMMARY）SUMMARY必须单选，其他值可多选例如：SEARCH,CAT
 * @author oShine
 *
 */
class TopLinker_Request_SimbaRptAdgroupcreativebaseGet extends TopLinker_Request_Abstract
{
    public $nick;

    public $campaign_id;

    public $adgroup_id;

    public $start_time;

    public $end_time;

    public $source;

    public $subway_token;

    public $page_no;

    public $page_size;

    public $search_type;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->subway_token, "subway_token");
        //RequestCheckUtil::checkNotNull($this->nick, "nick");
    }
}
