<?php
/**
 * TOP API: taobao.picture.delete request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_PictureDelete extends TopLinker_Request_Abstract
{
    /**
     * 图片ID字符串,可以一个也可以一组,用英文逗号间隔,如450,120,155
     **/
    public $pictureIds;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->pictureIds, "pictureIds");
    }
}
