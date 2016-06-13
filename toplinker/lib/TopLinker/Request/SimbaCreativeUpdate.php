<?php
/**
 *
 * 修改创意
 * @author oShine
 *
 */
class TopLinker_Request_SimbaCreativeUpdateRequest extends TopLinker_Request_Abstract
{
    public $nick;

    public $adgroup_id;

    public $creative_id;

    public $title;

    public $img_url;

    public function rules()
    {
        return array();
    }
}
