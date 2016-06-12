<?php
/**
 * TOP API: taobao.hotel.rooms.search request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_HotelRoomsSearch extends TopLinker_Request_Abstract
{
    /**
     * 酒店房间商品gid列表，多个gid用英文逗号隔开，一次不超过20个。gids，hids，rids三项必须传一项，同时传递的情况下，作为查询条件的优先级由高到低依次为gids，hids，rids。
     **/
    public $gids;

    /**
     * 酒店hid列表，多个hid用英文逗号隔开，一次不超过5个。gids，hids，rids三项必须传一项，同时传递的情况下，作为查询条件的优先级由高到低依次为gids，hids，rids。
     **/
    public $hids;

    /**
     * 是否需要返回该商品的酒店信息。可选值：true，false。
     **/
    public $needHotel;

    /**
     * 是否需要返回该商品的宝贝描述。可选值：true，false。
     **/
    public $needRoomDesc;

    /**
     * 是否需要返回该商品的房态列表。可选值：true，false。
     **/
    public $needRoomQuotas;

    /**
     * 是否需要返回该商品的房型信息。可选值：true，false。
     **/
    public $needRoomType;

    /**
     * 分页页码。取值范围，大于零的整数，默认值1，即返回第一页的数据。页面大小为20
     **/
    public $pageNo;

    /**
     * 房型rid列表，多个rid用英文逗号隔开，一次不超过20个。gids，hids，rids三项必须传一项，同时传递的情况下，作为查询条件的优先级由高到低依次为gids，hids，rids。
     **/
    public $rids;

    public function rules()
    {
        return array();
    }
}
