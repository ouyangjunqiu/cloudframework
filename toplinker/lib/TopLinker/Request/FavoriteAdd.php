<?php
/**
 * TOP API: taobao.favorite.add request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_FavoriteAdd extends TopLinker_Request_Abstract
{
    /**
     * ITEM表示宝贝，SHOP表示店铺，只能传入这两者之一
     **/
    public $collectType;

    /**
     * 如果收藏的是商品，就传num_iid，如果是店铺，就传入sid
     **/
    public $itemNumid;

    /**
     * 该收藏是否公开
     **/
    public $shared;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->collectType, "collectType");
        //RequestCheckUtil::checkNotNull($this->itemNumid, "itemNumid");
        //RequestCheckUtil::checkMinValue($this->itemNumid, 1, "itemNumid");
    }
}
