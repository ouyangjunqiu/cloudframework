<?php
/**
 * Created by PhpStorm.
 * User: jolinp
 * Date: 2015/3/11
 * Time: 15:18
 */

class TopLinker_Request_ZuanshiAdvertiserAccountRptsGet extends TopLinker_Request_Abstract
{
    public $start_time;

    public $end_time;

    public $rpt_type;

    public function rules()
    {
        return array();
    }
} 