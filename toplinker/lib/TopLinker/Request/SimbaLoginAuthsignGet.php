<?php

class TopLinker_Request_SimbaLoginAuthsignGet extends TopLinker_Request_Abstract
{
    /**
     * 主人昵称
     **/
    public $nick;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->nick, "nick");
    }
}
