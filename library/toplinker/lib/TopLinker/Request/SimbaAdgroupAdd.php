<?php

class TopLinker_Request_SimbaAdgroupAdd extends TopLinker_Request_Abstract
{
    public $nick;

    public $campaign_id;

    public $item_id;

    public $default_price;

    public $title;

    public $img_url;


    public function rules()
    {
        return array();
    }
}
