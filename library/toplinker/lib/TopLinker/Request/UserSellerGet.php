<?php
/**
 * TOP API: taobao.user.seller.get request
 *
 * @author auto create
 * @since 1.0, 2012-12-23 16:43:51
 */
class TopLinker_Request_UserSellerGet extends TopLinker_Request_Abstract
{
    /**
     * 只返回user_id,nick,sex,seller_credit,type,has_more_pic,item_img_num,item_img_size,prop_img_num,prop_img_size,auto_repost,promoted_type,status,alipay_bind,consumer_protection,avatar,liangpin,sign_food_seller_promise,has_shop,is_lightning_consignment,has_sub_stock,is_golden_seller,vip_info,magazine_subscribe,vertical_market,online_gaming参数
     **/
    public $fields;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->fields, "fields");
    }
}
