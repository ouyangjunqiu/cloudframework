<?php

class TopLinker_Request_SimbaKeywordsAdd extends TopLinker_Request_Abstract
{
    public $nick;
    public $adgroup_id;
    public $keyword_prices;

    public function rules()
    {
        return array();
    }
}
