<?php
/**
 * TOP API: taobao.increment.customer.stop request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_IncrementCustomerStop extends TopLinker_Request_Abstract
{
    /**
     * 应用要关闭增量消息服务的用户昵称
     **/
    public $nick;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->nick, "nick");
    }
}
