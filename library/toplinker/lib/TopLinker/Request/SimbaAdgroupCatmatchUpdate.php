<?php

class TopLinker_Request_SimbaAdgroupCatmatchUpdate extends TopLinker_Request_Abstract
{
    public $nick;

    public $adgroup_id;

    public $catmatch_id;

    public $max_price;

    public $use_default_price;

    public $online_status;

    public function rules()
    {
        return array();
    }
}
