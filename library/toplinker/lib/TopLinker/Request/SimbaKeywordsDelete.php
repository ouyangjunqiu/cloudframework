<?php

class TopLinker_Request_SimbaKeywordsDelete extends TopLinker_Request_Abstract
{
    public $nick;

    public $campaign_id;

    public $keyword_ids;

    public function rules()
    {
        return array();
    }
}
