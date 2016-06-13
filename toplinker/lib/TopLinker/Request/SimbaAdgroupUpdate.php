<?php

class TopLinker_Request_SimbaAdgroupUpdate extends TopLinker_Request_Abstract
{
    public $nick;

    public $adgroup_id;

    public $default_price;

    public $nonsearch_max_price;

    public $use_nonsearch_default_price;

    public $online_status;

    public function rules()
    {
        return array();
    }
}
