<?php

class TopLinker_Request_SimbaRptAdgroupkeywordbaseGet extends TopLinker_Request_Abstract
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
    }
}
