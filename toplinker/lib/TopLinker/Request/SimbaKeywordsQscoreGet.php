<?php

class TopLinker_Request_SimbaKeywordsQscoreGet extends TopLinker_Request_Abstract
{
    public $nick;

    public $adgroup_id;

    public function rules()
    {
        return array();
        ////RequestCheckUtil::checkNotNull($value, $fieldName);
    }
}
