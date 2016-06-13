<?php

/**
 * Created by PhpStorm.
 * User: jolinp
 * Date: 2015/3/11
 * Time: 10:24
 */
class TopLinker_Request_ZuanshiAdvertiserCampaignRptsDownload extends TopLinker_Request_Abstract
{
    public $start_time;

    public $end_time;

    public $rpt_type;

    public function rules()
    {
        return array();
    }
} 