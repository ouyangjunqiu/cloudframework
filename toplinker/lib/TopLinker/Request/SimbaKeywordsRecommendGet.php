<?php

class TopLinker_Request_SimbaKeywordsRecommendGet extends TopLinker_Request_Abstract
{
    public $nick;

    public $adgroup_id;

    public $search;

    public $pertinence;

    public $page_size;

    public $page_no;

    public $order_by;

    public function rules()
    {
        return array();
    }
}
